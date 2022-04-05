@extends('admin.admin_master')

@section('admin')
    <div style="padding: 20px">
        <div class="card" style="width: 18rem;">
            <img src="{{ !empty($adminData->profile_photo_path)? url('upload/admin_images/' . $adminData->profile_photo_path): url('upload/no_image.jpg/') }}"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $adminData->name }}</h5>
                <p class="card-text">{{ $adminData->email }}</p>
                <a href="{{ route('admim.profile.edit') }}" class="btn btn-primary">編輯資料</a>
            </div>
        </div>
    </div>
@endsection
