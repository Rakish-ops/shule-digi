@extends('youtlay')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Add Student
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form name="students" method="post" action="{{ route('students.store') }}">
          <div class="form-group">
              @csrf
              <label for="student_name">Student Name</label>
              <input type="text" class="form-control" name="student_name"/>
          </div>
          <div class="form-group">
              <label for="date_of_birth">Date of Birth</label>
              <input type="date" class="form-control" name="date_of_birth"/>
          </div>
          <div class="form-group">
              <label for="home_address">Home Address</label>
              <input type="text" class="form-control" name="home_address"/>
          </div>
          <div class="form-group">
              <label for="medical_notes">Medical Notes</label>
              <input type="text" class="form-control" name="medical_notes"/>
          </div>
          <button type="submit" class="btn btn-block btn-success">Create Student</button>
      </form>
  </div>
</div>
@endsection