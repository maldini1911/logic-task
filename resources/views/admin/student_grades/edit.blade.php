@extends('admin.app_admin')
@section('content')
<div class="row text-right">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
            <a href="{{route('student-grades.index', $student_id)}}" class="btn btn-dark">All Grades & Seating Numbers</a>
            </div>

            <div class="card-body">
                <h1 class="card-title text-white text-center btn btn-dark" style="width:100%;font-size:20px">Edit Grades & Seating Numbers</h1>
                <hr>
                <form action="{{route('student-grades.update', ['student_grade' => $row->id, 'student_id' => $student_id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PUT')}}
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="input-6">Grades</label>
                            <input type="number" class="form-control input-shadow form-control-rounded" name="grade" value="{{ $row->grade }}">
                            @error('grade')
                                <span class="text-danger">{{$message}} </span>
                            @enderror
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="input-6">Seating Numbers</label>
                            <input type="number" class="form-control input-shadow form-control-rounded" name="seating_number" value="{{ $row->seating_number }}">
                            @error('seating_number')
                                <span class="text-danger">{{$message}} </span>
                            @enderror
                        </div>
                    
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-dark btn-round shadow-dark px-5"><i class="icon-lock"></i> save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- End Row-->
@endsection