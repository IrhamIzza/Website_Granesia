@extends('admin.layout') @section('content') <div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header"> Tambah Mahasiswa </div>
            <div class="card-body"> @if ($errors->any()) <div class="alert alert-danger"> <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul> @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach </ul>
                </div> @endif <form method="post" action="{{ route('admin.store') }}" id="myForm"> @csrf <div class="form-group"> <label for="id">id</label> 
                <input type="text" name="id" class="form-control" id="id" aria-describedby="id"> </div>
                    <div class="form-group"> <label for="id">name</label> <input type="name" name="name" class="form-control" id="name" aria-describedby="name"> </div>
                    <div class="form-group"> <label for="telepon">telepon</label>
                        <input type="telepon" name="telepon" class="form-control" id="telepon" aria-describedby="password">
                    </div>
                    <div class="form-group"> <label for="name">email</label> <input type="email" name="email" class="form-control" id="email" aria-describedby="email"> </div>
                    <div class="form-group"> <label for="password">password</label> <input type="password" name="password" class="form-control" id="password" aria-describedby="password"> </div> 
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div> @endsection