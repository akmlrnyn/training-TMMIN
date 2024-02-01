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
                    <form action="{{route('user.update',$data->id)}}" method="post">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="form-group mt-4">
                            <label>Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" value="{{$data->name}}">
                        </div>
                        <div class="form-group mt-4">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="{{$data->username}}">
                        </div>
                        <div class="form-group mt-4">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{$data->email}}">
                        </div>
                        <div class="form-group mt-4">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
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
