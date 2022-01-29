@extends('admin.app_admin')
@section('content')
<div class="row text-right">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title text-white text-center btn btn-dark"><i class="fas fa-user-plus"></i> Add Student</h1>
            </div>

            <div class="card-body">
                <a href="{{route('students.index')}}" class="btn btn-primary">All Studnets</a>
                <hr>
                <form action="{{route('students.store')}}" method="POST" class="text-left">
                    @csrf
                    @include('admin.students.form')
                </form>
            </div>
        </div>
    </div>
</div><!-- End Row-->
@endsection