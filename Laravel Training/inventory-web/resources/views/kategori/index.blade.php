@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row justify-between">
                        <div class="col-md-6">
                            <p>Halaman Kategori</p>
                        </div>
                        <div class="col-md-6 text-end">
                            <a href="/kategori/create" class="btn btn-success">tambah data</a>
                        </div>
                    </div>
                </div>

                <!-- 
                    card-body area yang berwarna putih
                    table responsive, membuat halaman table menjadi presisi/responsive
                    class table untuk styling bentuk table (ex. table-hover, table dark)
                 -->
                <div class="card-body"> 
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <th>Nama Kategori</th>
                                <th>Pilihan</th>
                            </thead>
                            <tbody>
                                @foreach($kategori as $row)
                                <tr>
                                    <td>{{$row->nama_kategori}}</td>
                                    <td>
                                        <form action="{{route('kategori.destroy',$row->id)}}" method="post">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <a href="{{route('kategori.edit',$row->id)}}" class="btn btn-warning">edit</a>
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ga tuch?')">hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
