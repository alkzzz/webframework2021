@extends('layouts.frontend')

@section('judul', 'Daftar Berita')

@section('content')
<div class="container">
<ol>
@foreach ($news as $new)
    <li>{{ $new->title }}</li>
    <li>{{ $new->content }}</li>
    <li>{{ $new->created_at }}</li>
    <li>{{ $new->updated_at }}</li>
@endforeach
</ol>
</div>
@endsection
