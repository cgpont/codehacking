@extends('layouts.admin')

@section('content')

  <h1>Media</h1>
  <table class="table">
    <thead>
      <th>Id</th>
      <th>Name</th>
      <th>Created</th>
    </thead>
    <tbody>
      @if ($photos)
        @foreach ($photos as $photo)
          <tr>
            <td>{{$photo->id}}</td>
            <td><img src="{{$photo->file ? $photo->file : 'http://placehold.it/400x400'}}" height="50"></td>
            <td>{{$photo->created_at ? $photo->created_at->diffForHumans() : 'No Date'}}</td>
            <td>
              {!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediasController@destroy', $photo->id]]) !!}
                <div class="form-group">
                  {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                </div>
              {!! Form::close() !!}
            </td>
          </tr>
        @endforeach
      @endif
    </tbody>

@endsection
