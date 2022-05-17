@extends('layouts.core')
 </style>
 @section('contents') 
 
 <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2 class="text-right">-------------HALAMAN ATUR USER UNTUK ADMIN----------</h2>
        </div><br><br><br>
        <div class="float-right my-2"> <a class="btn btn-success" href="{{ route('admin.create') }}"> Input user</a> </div><br>
    </div>
</div> @if ($message = Session::get('success')) <div class="alert alert-success">
    <p>{{ $message }}</p>
</div> @endif <table class="table table-bordered">
    <tr>
        <th>name</th>
        <th>telepon</th>
        <th>email</th>
        <th>password</th>
        <th width="280px">Action</th>
    </tr> @foreach ($users as $users) <tr>
        <td>{{ $users->name }}</td>
        <td>{{ $users->telepon }}</td>
        <td>{{ $users->email }}</td>
        <td>{{ $users->password }}</td>
        <td>
            <form action="{{ route('admin.destroy',$users->id) }}" method="POST"> 
            <a class="btn btn-info" href="{{ route('admin.show',$users->id) }}">Show</a> 
            <a class="btn btn-primary" href="{{ route('admin.edit',$users->id) }}">Edit</a> 
            @csrf
                @method('DELETE') 
            <button type="submit" class="btn btn-danger">Delete</button> </form>
        </td>
    </tr> @endforeach
</table><br><br>  @endsection