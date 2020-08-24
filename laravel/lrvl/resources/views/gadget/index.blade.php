@extends('layout.app')

@section('title','Gadget Pages')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
        <h1>Data Gadget</h1>

        <table class="table">
            <thead class="thead-light ">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Merk</th>
                <th scope="col">Jenis</th>
                <th scope="col">Harga</th>
                <th scope="col">Gambar</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>


            @foreach ($gadget as $l)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$l->nama}}</td>
                <td>{{$l->jenis}}</td>
                <td>{{$l->harga}}</td>
                <td>{{$l->gambar}}</td>                
                <td><span class="badge badge-success">Edit</span>
                    <span class="badge badge-danger">Hapus</span></td>                
              </tr>
              @endforeach
            
            
            </tbody>
          </table>


        </div>
    </div>
</div>

@endsection