<div class="row">
    <div class="form-group col-lg-6">
        <label for="input-6">File Grades & Seating Numbers</label>
        <input type="file" class="form-control input-shadow form-control-rounded" name="student_sheet">
        @error('student_sheet')
            <span class="text-danger">{{$message}} </span>
        @enderror
    </div>

    <div class="form-group col-12">
        <button type="submit" class="btn btn-dark btn-round shadow-dark px-5"><i class="icon-lock"></i> save</button>
    </div>
</div>