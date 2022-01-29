@extends('admin.app_admin')
@section('content')
<div class="row text-right">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
            <a href="{{route('students.index')}}" class="btn btn-dark">All Students</a>
            </div>

            <div class="card-body">
                <h1 class="card-title text-white text-center btn btn-dark" style="width:100%;font-size:20px">Edit Studnet</h1>
                <hr>
                <form action="{{route('students.update', $row->id)}}" method="POST">
                    @csrf
                    {{method_field('PUT')}}
                    @include('admin.students.form')
                </form>
            </div>
        </div>
    </div>
</div><!-- End Row-->
@endsection