@extends('layouts.backend')

@section('title', 'Edit News')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Edit News</h1>
    </div>

    <h2>Edit News Form</h2>
    <hr>
    <form method="POST" action={{ route('update_news', $new->id) }}>
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $new->title }}">
        </div>
        <div class="mb-3 form-group">
            <label for="kategori">Pilih kategori</label>
            <select class="form-control" id="kategori" name="category_id">
                @foreach ($daftar_kategori as $kategori)
                    <option value="{{ $kategori->id }}"
                    @if ($kategori->id == $new->category_id)
                        selected
                    @endif>
                    {{ $kategori->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" rows="10" name="content">{{ $new->content }}</textarea>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
