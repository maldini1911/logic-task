<div class="row">
    <div class="form-group col-lg-6">
        <label for="input-6">First Name</label>
        <input type="text" class="form-control input-shadow form-control-rounded" name="first_name" @isset($row) value="{{ $row->first_name }}" @endisset>
        @error('first_name')
            <span class="text-danger">{{$message}} </span>
        @enderror
    </div>

    <div class="form-group col-lg-6">
        <label for="input-7">Second Name</label>
        <input type="text" class="form-control input-shadow form-control-rounded" name="second_name" @isset($row) value="{{ $row->second_name }}" @endisset>
        @error('second_name')
            <span class="text-danger">{{$message}} </span>
        @enderror
    </div>

    <div class="form-group col-lg-6">
        <label for="input-8">Third Name</label>
        <input type="text" class="form-control input-shadow form-control-rounded" name="third_name" @isset($row) value="{{ $row->third_name }}" @endisset>
        @error('third_name')
            <span class="text-danger">{{$message}} </span>
        @enderror
    </div>
    <div class="form-group col-lg-6">
        <label for="input-9">Last Name</label>
        <input type="text" class="form-control input-shadow form-control-rounded" name="last_name" @isset($row) value="{{ $row->last_name }}" @endisset>
        @error('last_name')
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

    <div class="form-group col-12">
        <button type="submit" class="btn btn-dark btn-round shadow-dark px-5"><i class="icon-lock"></i> save</button>
    </div>
</div>