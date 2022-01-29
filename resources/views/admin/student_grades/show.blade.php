@extends('admin.app_admin')
@section('content')
<div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header text-right">
              <h4 class="title-page alert alert-primary text-center"> <i class="fas fa-info-circle"></i> Students Grades & Seating Numbers</h4>
              <form action="{{route('students.excel')}}" method="POST" class="text-left" enctype="multipart/form-data">
                @csrf
              <div class="row">
                <div class="form-group col-lg-6 text-left">
                    <label for="input-6">File Grades & Seating Numbers</label>
                    <input type="file" class="form-control input-shadow form-control-rounded" name="student_sheet" required>
                    @error('student_sheet')
                        <span class="text-danger">{{$message}} </span>
                    @enderror
                </div>

                <div class="form-group col-lg-6 text-left">
                    <button type="submit" class="btn btn-dark btn-round  px-5" style="transform: translateY(30px)"><i class="icon-lock"></i> save</button>
                </div>
            </div>
            </form>

          </div>
            <div class="card-body">
              <div class="table-responsive text-center">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Student Name</th>
                        <th>Grades</th>
                        <th>Seating Numbers</th>
                        <th>Settings</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($student_grades as $row)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{@$row->student->first_name}} {{@$row->student->second_name}} {{@$row->student->third_name}} {{@$row->student->last_name}}</td>
                        <td>{{$row->grade}}</td>
                        <td>{{$row->seating_number}}</td>
                        <td class="settings">
                          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="true">Settings </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item btn btn-success" href="{{route('student-grades.edit', ['student_grade' => $row->id, 'student_id' => $row->student_id])}}"><i class="fa fa-edit"></i> Edit</a>
                                  <a class="dropdown-item btn btn-danger" data-toggle="modal" href="#myModal-{{$row->id}}"><i class="fa fa-trash"></i> Delete</a>
                                </div>
                                <div class="modal fade" id="myModal-{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                  <div class="modal-content">
                                  <div class="modal-header text-center">
                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete ? </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                  <form role="form" action="{{route('student-grades.destroy', ['student_grade' => $row->id, 'student_id' => $row->student_id])}}" method="POST">
                                  <input name="_method" type="hidden" value="DELETE">
                                  {{ csrf_field() }}
                                  <button type="submit" class="btn btn-danger" name='delete_modal'><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                  </form>
                                  </div>
                                  </div>
                                  </div>
                                </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
@endsection