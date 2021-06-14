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
    Change Student Details
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
      <form method="post" action="{{ route('students.update', $student->student_id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="student_name">Student Name</label>
              <input type="text" class="form-control" name="student_name" value="{{ $student->student_name }}"/>
          </div>
          <div class="form-group">
              <label for="date_of_birth">Date of Birth</label>
              <input type="date" class="form-control" name="date_of_birth" value="{{ $student->date_of_birth }}"/>
          </div>
          <div class="form-group">
              <label for="home_address">Home Address</label>
              <input type="tel" class="form-control" name="home_address" value="{{ $student->home_address }}"/>
          </div>
          <div class="form-group">
              <label for="medical_notes">Medical Notes</label>
              <input type="text" class="form-control" name="medical_notes" value="{{ $student->medical_notes }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update Student</button>
      </form>
  </div>
</div>
@endsection