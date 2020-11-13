@extends('layouts.admin_layouts')
@section('content')
<div class="container">
<div class="register-container">
    <div class="card card-container">
        <p id="profile-name" class="profile-name-card">管理アカウント作成</p>
        <form class="form-signin" method="POST" action="{{ route('admin.register') }}">
            @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">お名前
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </label>
            <input type="text" name="name" id="inputEmail" class="form-control" value="{{ old('name') }}" autofocus>
            <label for="formGroupExampleInput">メールアドレス
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <input type="email" name="email" id="inputEmail" class="form-control" value="{{ old('email') }}">
            <label for="formGroupExampleInput">パスワード
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <input type="password" name="password" id="inputPassword" class="form-control" value="{{ old('password') }}">
            <label for="formGroupExampleInput">パスワード確認
                @error('password_confirmation')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <input type="password" name="password_confirmation" id="inputPassword" class="form-control">
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">登録</button>
        </div>
        </form><!-- /form -->
    </div><!-- /card-container -->
</div><!-- /container -->
</div><!-- /container -->

@endsection
