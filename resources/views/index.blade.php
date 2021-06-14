@extends('youtlay')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>Student Id</td>
          <td>Student Name</td>
          <td>Date of Birth</td>
          <td>Home Address</td>
          <td>Medical Notes</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($student as $students)
        <tr>
            <td>{{$students->student_id}}</td>
            <td>{{$students->student_name}}</td>
            <td>{{$students->date_of_birth}}</td>
            <td>{{$students->home_address}}</td>
            <td>{{$students->medical_notes}}</td>
            <td class="text-center">
                <a href="{{ route('students.edit', $students->student_id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('students.destroy', $students->student_id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection