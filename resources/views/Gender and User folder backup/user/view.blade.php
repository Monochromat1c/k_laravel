@extends('layout.main')
@section('content')

<style>
  /* Table Header Background */
  .table thead th {
    background-color: #ff9900;
    color: #000000;
  }

  /* Table Striped Rows */
  .table-striped tbody tr:nth-of-type(odd) {
    background-color: #ffd700; /* Light yellow */
  }

  /* View Button */
  .btn-view {
    background-color: #ffcc00; /* Dark yellow */
    border-color: #ffcc00; /* Dark yellow */
    color: #000000; /* Black */
  }

  /* Edit Button */
  .btn-edit {
    background-color: #ff6666; /* Red */
    border-color: #ff6666; /* Red */
    color: #ffffff; /* White */
  }

  /* Delete Button */
  .btn-delete {
    background-color: #cc0000; /* Dark red */
    border-color: #cc0000; /* Dark red */
    color: #ffffff; /* White */
  }

  
</style>

<div class="container mt-4">
  <h2>User Management</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Middle Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ( $users as $user )
    <tr>
      <td>{{$user->first_name}}</td>
      <td>{{$user->last_name}}</td>
      <td>{{$user->middle_name}}</td>
      <td>{{$user->age}}</td>
      <td>{{$user->address}}</td>
      <td>
        <!-- View Button -->
        <button type="button" class="btn btn-primary btn-sm">View</button>
        <!-- Edit Button -->
        <button type="button" class="btn btn-secondary btn-sm">Edit</button>
        <!-- Delete Button -->
        <button type="button" class="btn btn-danger btn-sm">Delete</button>
      </td>
    </tr>
    @endforeach

    </tbody>
  </table>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>

@endsection
