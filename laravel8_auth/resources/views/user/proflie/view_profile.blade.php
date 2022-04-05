@extends('user.user_master')

@section('user')
    <div style="padding: 20px">
        <div class="card" style="width: 18rem;">
            <img src="{{ !empty($user->profile_photo_path)? url('upload/user_images/' . $user->profile_photo_path): url('upload/no_image.jpg/') }}"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $user->name }}</h5>
                <p class="card-text">{{ $user->email }}</p>
                <a href="{{ route('profile.edit') }}" class="btn btn-primary">編輯資料</a>
            </div>
        </div>
    </div>
@endsection
