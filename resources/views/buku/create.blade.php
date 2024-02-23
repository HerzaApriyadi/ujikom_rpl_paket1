@extends('layouts.main')
@section('dashboard')

<div class="card">
    <form action="/simpan-buku" method="post" enctype="multipart/form-data">
    <div class="card-header">
        @csrf
      <h4>tambah buku</h4>
    </div>
    <div class="card-body">
      <div class="alert alert-info">
      </div>
      <div class="form-group">
        <label>Judul Buku</label>
        <input type="text" class="form-control" name="judul">
      </div>
      
      <div class="form-group">
        <label>Penulis</label>
        <textarea class="form-control" name="penulis"></textarea>
      </div>

      <div class="form-group">
        <label>Tahun Terbit</label>
        <input type="date" class="form-control" name="tahun_terbit">
      </div>
      
      <div class="form-group">
        <label>File</label>
        <input type="file" class="form-control" name="foto">
      </div>

   
    <div class="card-footer text-right">
      <button class="btn btn-primary mr-1" type="submit">Submit</button>
    </div>
</form>
  </div>
@endsection