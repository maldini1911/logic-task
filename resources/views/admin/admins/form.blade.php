<div class="row">
    <div class="form-group col-lg-6">
        <label for="input-6">Name</label>
        <input type="text" class="form-control input-shadow form-control-rounded" name="name" @isset($row) value="{{ $row->name }}" @endisset>
        @error('name')
            <span class="text-danger">{{$message}} </span>
        @enderror
    </div>

    <div class="form-group col-lg-6">
        <label for="input-7">Username</label>
        <input type="text" class="form-control input-shadow form-control-rounded" name="username" @isset($row) value="{{ $row->username }}" @endisset>
        @error('username')
            <span class="text-danger">{{$message}} </span>
        @enderror
    </div>

    <div class="form-group col-lg-6">
        <label for="input-7">Email</label>
        <input type="email" class="form-control input-shadow form-control-rounded" name="email" @isset($row) value="{{ $row->email }}" @endisset>
        @error('email')
            <span class="text-danger">{{$message}} </span>
        @enderror
    </div>

    <div class="form-group col-lg-6">
        <label for="input-8">Mobile</label>
        <input type="text" class="form-control input-shadow form-control-rounded" name="mobile" @isset($row) value="{{ $row->mobile }}" @endisset>
        @error('mobile')
            <span class="text-danger">{{$message}} </span>
        @enderror
    </div>
    <div class="form-group col-lg-6">
        <label for="input-9">Password</label>
        <input type="password" class="form-control input-shadow form-control-rounded" name="password">
        @error('password')
            <span class="text-danger">{{$message}} </span>
        @enderror
    </div>

    <div class="form-group col-12">
        <button type="submit" class="btn btn-dark btn-round shadow-dark px-5"><i class="icon-lock"></i> save</button>
    </div>
</div>