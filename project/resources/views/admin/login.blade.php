@extends('layouts.admin_layouts')
@section('content')
<div class="login-container">
    <div class="card card-container">
        <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin" method="POST" action="{{ route('admin.login') }}">
            @csrf
            <span id="reauth-email" class="reauth-email"></span>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="メールアドレス" value="{{ old('name') }}" required autofocus>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="パスワード" value="{{ old('password') }}"required>
            <div id="remember" class="checkbox">
                <label>
                    <input type="checkbox" name="remember" value="remember" {{ old('remember') ? 'checked' : '' }}> 入力を保存する
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">ログイン</button>
        </form><!-- /form -->
        <a href="#" class="forgot-password">
            パスワードをお忘れですか?
        </a>
    </div><!-- /card-container -->
</div><!-- /container -->
@endsection
