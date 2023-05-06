@extends('category::layouts.master')

@section('content')
<div class="container mt-3">
    <h2>Categoery</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Body</th>
        </tr>
      </thead>
      <tbody>
        @foreach ( $categories as $category )
        <tr>
          <td>{{$loop -> iteration}}</td>
          <td>{{$category->title}}</td>
          <td>{{$category->body}}</td>
        </tr>

        @endforeach

      </tbody>
    </table>
  </div>
@endsection
