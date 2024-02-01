@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Create PIC
                </div>
                <div class="card-body">
                    <form action="{{route('kategori.store')}}" method="post">
                        @csrf
                        <div class="form-group mt-4">
                            <label>Nama Kategori</label>
                            <input type="text" name="nama_kategori" class="form-control">
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-success">tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
