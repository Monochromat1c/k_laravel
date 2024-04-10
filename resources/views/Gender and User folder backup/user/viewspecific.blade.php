@extends('layout.main')
@section('content')


<style>
  .form-control{
      background-color: #938c80;
  }
</style>

<div class="container">
  <form action="#" method="post">
    <div class="card mt-3" style="background-color: #ffa31a;">
      <div class="card-body">
        <h5 class="card-title">View User</h5>
        <div class="row">
          <!-- First Name -->
          <div class="col-md-4">
            <div class="mb-3">
              <label for="first_name" class="form-label">First Name</label>
              <input type="text" class="form-control" id="first_name" name="first_name" />
            </div>
          </div>
          <!-- Middle Name -->
          <div class="col-md-4">
            <div class="mb-3">
              <label for="middle_name" class="form-label">Middle Name</label>
              <input type="text" class="form-control" id="middle_name" name="middle_name" />
            </div>
          </div>
          <!-- Last Name -->
          <div class="col-md-4">
            <div class="mb-3">
              <label for="last_name" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="last_name" name="last_name" />
            </div>
          </div>
          <!-- Suffix Name -->
          <div class="col-md-4">
            <div class="mb-3">
              <label for="suffix_name" class="form-label">Suffix Name</label>
              <input type="text" class="form-control" id="suffix_name" name="suffix_name" />
            </div>
          </div>
          <!-- Birth Date Name -->
          <div class="col-md-4">
              <div class="mb-3">
               <label for="birthdate" class="form-label">Birth Date</label>
               <input type="date" class="form-control" id="birthdate" name="birthdate" />
              </div>
          </div>
          <!-- Contact Number -->
          <div class="col-md-4">
              <div class="mb-3">
               <label for="contact" class="form-label">Contact Number</label>
               <input type="text" class="form-control" id="contact" name="contact" />
              </div>
          </div>
          <!-- Address -->
          <div class="col-md-4">
              <div class="mb-3">
               <label for="address" class="form-label">Address</label>
               <input type="text" class="form-control" id="address" name="address" />
              </div>
          </div>
          <!-- Age -->
          <div class="col-md-4">
            <div class="mb-3">
              <label for="age" class="form-label">Age</label>
              <input type="text" class="form-control" id="age" name="age" />
            </div>
          </div>
          <!-- Gender -->
          <div class="col-md-4">
            <div class="mb-3">
              <label for="gender" class="form-label">Gender</label>
              <select class="form-select" id="gender" name="gender">
                <option value="" selected>N/A</option>
                <!-- Show Genders from Genders table in a dropdown Form -->
              </select>
            </div>
          </div>
          <!-- Username -->
          <div class="col-md-4">
              <div class="mb-3">
               <label for="username" class="form-label">Username</label>
               <input type="text" class="form-control" id="username" name="username" />
              </div>
          </div>
          <!-- Email -->
          <div class="col-md-4">
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" name="email" />
            </div>
          </div>
          <!-- Password -->
          <div class="col-md-4">
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" />
            </div>
          </div>
          <!-- Confirm Password -->
          <div class="col-md-4">
            <div class="mb-3">
              <label for="confirm_password" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="confirm_password" name="confirm_password" />
            </div>
          </div>
        </div>
        <!-- Submit Button -->
        <div class="d-grid gap-2 col-12 col-sm-3 mx-auto">
          <button type="submit" class="btn btn-success" style="background-color: #58544f;">Back</button>
        </div>
    </div>
  </form>
</div>

@endsection