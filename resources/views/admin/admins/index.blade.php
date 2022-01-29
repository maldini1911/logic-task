@extends('admin.app_admin')
@section('content')
<div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header text-right">
              <h4 class="title-page alert alert-primary text-center"> <i class="fas fa-users-cog"></i> Admins</h4>
              <a href="{{route('admins.create')}}" class="btn btn-success">Add</a> 
          </div>
            <div class="card-body">
              <div class="table-responsive text-center">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Settings</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->mobile}}</td>
                        <td class="settings">
                          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="true">Settings </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item btn btn-success" href="{{route('admins.edit', $user->id)}}"><i class="fa fa-edit"></i> Edit</a>
                                  <a class="dropdown-item btn btn-danger" data-toggle="modal" href="#myModal-{{$user->id}}"><i class="fa fa-trash"></i> Delete</a>
                                </div>
                                <div class="modal fade" id="myModal-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                  <div class="modal-content">
                                  <div class="modal-header text-center">
                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete ? </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                  <form role="form" action="{{route('admins.destroy', $user->id)}}" method="POST">
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