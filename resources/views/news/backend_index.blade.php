@extends('layouts.backend')

@section('title', 'News')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">News</h1>
    </div>

    <h2><u>News List</u></h2>

    <a type="button" class="btn btn-success" href="{{ route('add_news') }}">Add</a>
    <hr>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Slug</th>
            <th scope="col">Judul</th>
            <th scope="col">Isi</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($news as $key => $new)
        <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $new->slug }}</td>
            <td>{{ $new->title }}</td>
            <td>{{ $new->content }}</td>
            <td>
                <a type="button" class="btn btn-warning" href="#">Edit</a>
                <a type="button" class="btn btn-danger" href="#">Delete</a>
            </td>
        </tr>
        @endforeach
        <tbody>
    </table>

</main>
@endsection