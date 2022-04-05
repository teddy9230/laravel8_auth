@extends('admin.admin_master')

@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div style="padding: 20px">
        <div class="col-md-6">
            <form method="post" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">姓名</label>
                    <input type="text" name="name" class="form-control" value="{{ $editData->name }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">信箱</label>
                    <input type="text" name="email" class="form-control" value="{{ $editData->email }}">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">照片</label>
                    <input class="form-control" type="file" id="image" name="profile_photo_path">
                </div>
                <div class="mb-3">
                    <img id="showImage"
                        src="{{ !empty($editData->profile_photo_path)? url('upload/admin_images/' . $editData->profile_photo_path): url('upload/no_image.jpg') }}"
                        alt="" style="width:100px; height:100px; ">
                </div>
                <button type="submit" class="btn btn-primary">確定更新</button>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            })
        })
    </script>
@endsection
