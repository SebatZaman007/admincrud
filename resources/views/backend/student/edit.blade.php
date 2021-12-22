@extends('admin.master')

@section('content')

<form action="{{route('student.update')}}" method="POST">
    @csrf

    <div class="mb-3">
        <input type="hidden" name="id" value="{{$edit->id}}">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" name="name" value="{{$edit->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Subject</label>
      <input type="text" name="subject" value="{{$edit->subject}}" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
