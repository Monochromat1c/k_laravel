@extends('layout.main')
@section('content')

<style>
    .form-control{
        background-color: #938c80;
    }
</style>


<div class="container">
    <form action="gender_add" method="POST">
      @csrf

      
      <div class="card mt-3" style="background-color: #ffa31a;">
        <div class="card-body">
          <h5 class="card-title">Add User</h5>
          <div class="row">
            <!-- First Name -->
            <div class="col-md-4">
              <div class="mb-3">
                <label for="gender" class="form-label">Add Gender</label>
                <input type="text" class="form-control" id="gender" name="gender" />
              </div>
            </div>
          <!-- Submit Button -->
          <div class="d-grid gap-2 col-12 col-sm-3 mx-auto">
            <button type="submit" class="btn btn-success" style="background-color: #58544f;">Save</button>
          </div>
        </div>
      </div>
    </form>
  </div>
  

@endsection