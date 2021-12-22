@extends('admin.master')

@section('content')
<div>
    <a href="{{route('add.list')}}" class="btn btn-info">Add Studen</a>
</div>
<div style="height: 100px"></div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Subject</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

@foreach ($student as $item)
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->subject}}</td>
        <td>
            <a class="btn btn-success" href="{{route('student.edit',$item->id)}}" role="button">Edit</a>
            <a class="btn btn-danger" href="{{route('student.delete',$item->id)}}" role="button">Delete</a>
        </td>
    </tr>
@endforeach
    </tbody>
  </table>


@endsection
