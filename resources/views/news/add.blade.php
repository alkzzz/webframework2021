@extends('layouts.backend')

@section('title', 'Add News')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Add News</h1>
    </div>

    <h2>Add News Form</h2>
    <hr>

    <form method="POST" action={{ route('store_news') }}>
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" rows="10" name="content"></textarea>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
