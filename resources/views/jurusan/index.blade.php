@extends('layout.main')

@section('title', 'Daftar Jurusan')

@section('container')
<div class="container">
<div class="row">
<div class="col-10">
    <h1 class="mt-3">Daftar Jurusan </h1>

    <table class="table">
    <thead class="table-dark">
<tr>
    <th scope="col">no</th>
    <th scope="col">Nama_jurusan</th>
    <th scope="col">Prodi</th>
    <th scope="col">Aksi</th>
</tr>
  </thead>
  <tbody>
  
  @foreach ($jurusan ?? '' as $mhs)
  <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $mhs-> nama_jurusan }}</td>
        
        <td>{{ $mhs-> prodi }}</td>
        <td>
            <button type="button" class="btn btn-primary btn-sm btn-success">edit</button>        
            <button type="button" class="btn btn-primary btn-sm btn-danger">delete</button>
        </td>
  </tr>
  @endforeach
  </tbody>
    </table>
</div>
</div>
</div>
@endsection