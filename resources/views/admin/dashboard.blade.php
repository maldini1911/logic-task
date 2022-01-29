@extends('Admin.app_admin')

@section('content')
 <!--Start Dashboard Content--> 
 <div class="row mt-4">
    <div class="col-12 text-center">
      <img src="{{asset('/')}}/admin/assets/images/logo.png" alt="logo icon" class="" width="20%" style="margin-bottom:20px">
    </div>

    <div class="col-12 col-lg-4 col-xl-4">
      <div class="card gradient-blooker">
        <div class="card-body">
          <div class="media align-items-center">
          <div class="media-body">
            <p class="text-white">Admins </p>
            <h4 class="text-white line-height-5">{{ $adminsCount }}</h4>
          </div>
          <div class="w-circle-icon rounded-circle border border-white">
            <i class="fas fa-users-cog text-white"></i></div>
        </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-lg-4 col-xl-4">
      <div class="card gradient-bloody">
        <div class="card-body">
          <div class="media align-items-center">
          <div class="media-body">
            <h5 class="text-white">Students</h5>
            <h4 class="text-white line-height-5">{{ $studentsCount }}</h4>
          </div>
          <div class="w-circle-icon rounded-circle border border-white">
            <i class="fas fa-users text-white"></i></div>
        </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-lg-4 col-xl-4">
      <div class="card gradient-scooter">
        <div class="card-body">
          <div class="media align-items-center">
          <div class="media-body">
            <p class="text-white">Grades & Seating Numbers</p>
            <h4 class="text-white line-height-5">{{ $gradesCount }}</h4>
          </div>
          <div class="w-circle-icon rounded-circle border border-white">
            <i class="fas fa-marker" text-white"></i></div>
        </div>
        </div>
      </div>
    </div>

      </div><!--End Row-->




    </div>
  </div>
</div><!--End Row-->

      <!--End Dashboard Content-->
@endsection