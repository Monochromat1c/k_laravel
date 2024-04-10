<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Gender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     // Populate gender option
    public function genderOption()
    {
        $genders = Gender::orderBy('gender')->get();
        return $genders; // return the genders
    }

    // Open user form
    public function addNewUser()
    {
        $genders = $this->genderOption(); // call the genderOption method
        return view('user.addNewUser', compact('genders')); // pass genders to the view

    }

    // Handle form submission to add a new user
    public function insertUser(Request $request)
    {
        // Validation rules for user input
        $rules = [
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'suffix_name' => 'nullable|string|max:255',
            'birthday' => 'required|date',
            'gender_id' => 'required|exists:genders,gender_id',
            'address' => 'required|string|max:255',
            'contact_number' => 'required|string|max:11|unique:users,contact_number',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:6|confirmed',
        ];

        // Validate the request data
        $validatedData = $request->validate($rules);

        // Create the new user
        $user = new \App\Models\User();
        $user->fill($validatedData);
        $user->password = bcrypt($request->input('password')); // Hash the password

        // Save the user
        $user->save();

        // Flash a success message to the session
        session()->flash('message', 'Successfully Added.');

        // Redirect back to the user form
        return redirect()->route('user.addNewUser');
    }

    // View user table
    public function user()
    {
        $users = User::orderBy('last_name')->paginate(10);
        return view('user.user', compact('users'));
    }

    // View specific user
    public function show($id)
    {
        $genders = $this->genderOption();
        $user = User::find($id);
        return view('user.show', compact('user'), compact('genders'));
    }

    // Edit specific user
    public function edit($id)
    {
        $genders = $this->genderOption();
        $user = User::find($id);
        return view('user.edit', compact('user'), compact('genders'));
    }

    // Update edited user
    public function update(Request $request, User $user)
    {
        // Validation rules for user input
        $rules = [
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'suffix_name' => 'nullable|string|max:255',
            'birthday' => 'required|date',
            'gender_id' => 'required|exists:genders,gender_id',
            'address' => 'required|string|max:255',
            'contact_number' => 'required|string|max:11|unique:users,contact_number,' . $user->user_id . ',user_id',
            'email' => 'required|email|unique:users,email,' . $user->user_id . ',user_id',
            'username' => 'required|string|max:255|unique:users,username,' . $user->user_id . ',user_id',
        ];

        // If password is being updated and not empty, add password validation rules
        if ($request->filled('password')) {
            $rules['password'] = 'required|string|min:6|confirmed';
        }

        // Validate the request data
        $validatedData = $request->validate($rules);

        // If password is being updated, hash it
        if ($request->filled('password')) {
            $validatedData['password'] = bcrypt($request->password);
        }

        // Update the user with validated data
        $user->update(array_filter($validatedData));

        // Flash a success message to the session
        session()->flash('message', 'Successfully Updated.');

        // Redirect back to the user form
        return redirect()->route('user.user');
    }

    // Delete confirmation
    public function delete($id)
    {
        $genders = $this->genderOption();
        $user = User::find($id);
        return view('user.delete', compact('user'), compact('genders'));
    }

    // Delete user
    public function destroy(Request $request, User $user)
    {
        $user->delete($request);
        session()->flash('message', 'Successfully Deleted.');
        return redirect()->route('user.user');
    }

    // Login Page
    public function loginPage(){
        return view('loginPage');
    }

    // Log in process
    public function processLogin(Request $request) {
        $validated = $request->validate([
            'username' => ['required', 'max:12'],
            'password' => ['required', 'max:15'] 
        ]);

        $user = User::where('username', $validated['username'])->first();

        if($user && auth()->attempt($validated)) {
            auth()->login($user);
            $request->session()->regenerate();
            return redirect('/genders');
        } else {
            return back()->with('message_success', 'Username or password is incorrect.');
        }
    }

}