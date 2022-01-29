@extends('admin.app_admin')
@section('content')
<div class="row text-right">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title text-white text-center btn btn-dark"><i class="fas fa-user-plus"></i> Add Grades & Seating Numbers</h1>
            </div>

            <div class="card-body">
                <a href="{{route('student-grades.index', $student_id)}}" class="btn btn-primary">All Grades & Seating Numbers</a>
                <hr>
                <form action="{{route('students.excel')}}" method="POST" class="text-left" enctype="multipart/form-data">
                    @csrf
                    @include('admin.student_grades.form')
                </form>
            </div>
        </div>
    </div>
</div><!-- End Row-->
@endsection