@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Detail PIC
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th>Nama Lengkap</th>
                                <td>{{$data->name}}</td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td>{{$data->username}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                                <th>Role</th>
                                <td>{{$data->role}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
