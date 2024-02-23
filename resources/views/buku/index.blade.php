@extends('layouts.main')

@section('dashboard')
<div class="col" style="height: 97px; margin-top: 20px">
  <h1>Data Buku</h1>
  <a href="{{ route('create.index') }}" class="btn btn-primary">Tambah Data</a>
  @if (Session::has('success'))
    <h5>{{ Session::get('success') }}</h5>
  @elseif (Session::has('failed'))
    <h5>{{ Session::get('failed') }}</h5>
  @endif
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-md">
        <thead>
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Foto</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($books as $book)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $book->judul }}</td>
            <td>{{ $book->penulis }}</td>
            <td>{{ $book->tahun_terbit }}</td>
            <td><img src="{{asset('storage/cover/'. $book->image)}}" width="100"></td>
            <td>
              <a href="/edit-buku/{{ $book->id }}" class="btn btn-primary btn-sm">Edit</a>
              <a href="/hapus-buku/{{ $book->id }}" class="btn btn-danger btn-sm">Hapus</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
