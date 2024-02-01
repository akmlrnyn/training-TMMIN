@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Kategori
                </div>
                <div class="card-body">
                    <form action="{{route('kategori.update',$data->id)}}" method="post">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="form-group mt-4">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama_kategori" class="form-control" value="{{$data->nama_kategori}}">
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-success">ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
