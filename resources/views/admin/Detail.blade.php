@extends('admin.layout') @section('content') <div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header"> Detail user </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>id: </b>{{$user->id}}</li>
                    <li class="list-group-item"><b>telepon: </b>{{$user->telepon}}</li>
                    <li class="list-group-item"><b>name: </b>{{$user->name}}</li>
                    <li class="list-group-item"><b>email: </b>{{$user->email}}</li>
                    <li class="list-group-item"><b>password: </b>{{$user->password}}</li>
                </ul>
            </div> <a class="btn btn-success mt-3" href="{{ route('admin.index') }}">Kembali</a>
        </div>
    </div>
</div> @endsection