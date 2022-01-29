@extends('admin.app_admin')
@section('content')
<div class="row text-right">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title text-white text-center btn btn-dark"><i class="fas fa-edit"></i> Edit Admin</h1>
            </div>

            <div class="card-body">
                <a href="{{route('admins.index')}}" class="btn btn-dark">All Admins</a>
                <hr>
                <form action="{{route('admins.update', $row->id)}}" method="POST" class="text-left">
                    @csrf
                    {{method_field('PUT')}}
                    @include('admin.admins.form')
                </form>
            </div>
        </div>
    </div>
</div><!-- End Row-->
@endsection