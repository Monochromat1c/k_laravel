<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenderController extends Controller
{
    public function dashboard()
    {
        return view('gender.dashboard');
    }

    // Open gender form
    public function adddNewGender()
    {
        return view('gender.addNewGender');
    }

    // Add new gender
    public function creategender(Request $request)
    {
        // Validate the request data
        $validated = Validator::make($request->all(), [
            'gender' => ['required', 'unique:genders,gender'],
        ]);

        if ($validated->fails()) {
            return redirect('/gender/add')
                ->withErrors($validated)
                ->withInput();
        }

        // Create a new Gender instance
        $data = new Gender();
        $data->gender = $request->input('gender');

        // Save the new gender
        $data->save();

        // Flash success message
        session()->flash('message', 'Successfully Added.');

        // Redirect to the addgender route
        return redirect()->route('gender.addNewGender');
    }

    // View gender table
    public function gender()
    {
        $genders = Gender::orderBy('gender')->paginate(10);
        return view('gender.gender', compact('genders'));
    }

    // View specific gender
    public function show($id)
    {
        $gender = Gender::find($id);
        return view('gender.show', compact('gender'));
    }
    // Edit specific gender
    public function edit($id)
    {
        $gender = Gender::find($id);
        return view('gender.edit', compact('gender'));
    }

    // Update edited gender
    public function update(Request $request, Gender $gender)
    {
        $validated = $request->validate([
            'gender' => ['required', 'unique:genders,gender'],
        ]);
        $gender->gender = $request->input('gender');
        $gender->save();
        session()->flash('message', 'Successfully Updated.');

        return redirect('/genders');
    }

    // Delete confirmation
    public function delete($id)
    {
        $gender = Gender::find($id);
        return view('gender.delete', compact('gender'));
    }

    // Delete gender
    public function destroy(Request $request, Gender $gender)
    {
        $gender->delete($request);
        session()->flash('message', 'Successfully Deleted.');
        return redirect()->route('gender.gender');
    }
}
