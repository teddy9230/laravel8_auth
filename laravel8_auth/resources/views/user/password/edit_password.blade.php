@extends('user.user_master')

@section('user')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div style="padding: 20px">
        <div class="col-md-6">

            <h3>更新密碼</h3>

            <form method="post" action="{{ route('user.password.update') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">目前密碼</label>
                    <input id="current_password" type="password" name="oldpassword" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">新密碼</label>
                    <input id="password" type="password" name="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">新密碼確認</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">更新密碼</button>
            </form>
        </div>
    </div>
@endsection
