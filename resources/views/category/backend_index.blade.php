@extends('layouts.backend')

@section('title', 'Categories')

@section('extra_css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Categories</h1>
    </div>

    <h2><u>Categories List</u></h2>

    <a type="button" class="btn btn-success" href="#">Add</a>
    <hr>
    <table class="table" id="tabelKategori">
        <thead>
        <tr>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($daftar_kategori as $kategori)
                <tr>
                    <td>{{ $kategori->name }}</td>
                    <td>
                        <a type="button" class="btn btn-warning mb-1" href="#">Edit</a>
                        <form action="#" method="post">
                            @method('DELETE')
                            @csrf
                            <input type="submit" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        <tbody>
    </table>
    <hr>

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
