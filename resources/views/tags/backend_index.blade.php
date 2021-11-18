@extends('layouts.backend')

@section('title', 'Tags')

@section('extra_css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Tags</h1>
    </div>
    <div>
        <h1>Many to Many dari sisi News</h1>
        <p>Berita dengan id 1 punya tag sebagai berikut</p>
        <ul>
        @foreach ($new->tags as $new)
            <li>{{ $new->pivot->tag_id }}</li>
        @endforeach
        </ul>

        <h1>Many to Many dari sisi Tags</h1>
        <p>Tag dengan id 1 punya berita sebagai berikut</p>
        <ul>
        @foreach ($tag->news as $tag)
            <li>{{ $tag->pivot->new_id }}</li>
        @endforeach
        </ul>
    </div>
</main>
@endsection

@section('extra_js')
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready( function () {
        $('#tabelKategori').DataTable();
    } );
</script>
@endsection
