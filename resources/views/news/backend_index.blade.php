@extends('layouts.backend')

@section('title', 'News')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">News</h1>
    </div>

    <h2>News List</h2>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($news as $key => $new)
        <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $new->title }}</td>
        </tr>
        @endforeach
        <tbody>
    </table>

</main>
@endsection
