@extends('category::layouts.master')

@section('content')

    <div class="container mt-3">
        <h2>Create Category</h2>
        <div>
            @if ($errors->any())
                <div class="text-white bg-danger p-2 rounded">

                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif
        </div>
        <form action="{{ Route('category.store') }}" method="POST">
            @csrf
            <div class="mb-3 mt-3">
                <label for="title">title:</label>
                <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
            </div>
            <div class="mb-3">
                <label for="body">body:</label>
                <input type="text" class="form-control" id="body" placeholder="Enter body" name="body">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
