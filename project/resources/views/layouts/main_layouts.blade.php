<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Practice Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">laravel Practice</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">トップ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">商品一覧</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">アクセス</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">コンタクト</a>
                </li>
                @if (isset($user))
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/logout') }}">ログアウト</a>
                </li>
                @endif
                
            </ul>
            </span>
            @if (isset($user))
                <span>こんにちは{{ $user->name ?? 'ゲスト' }}さん</span>
            @else
                <a href="{{ route('user.login') }}">ログイン</a>
            @endif
        </div>
    </nav>
    @yield('content')
    <div class="row ft-copyright pt-2 pb-2" style="padding-left: 25px;">
		<div class="col-sm-4 text-pp-crt">copyright 2020 All  Rights Reserved</div>
		<div class="col-sm-4 text-pp-crt-rg">Department of Information Reg No :</div>
		<div class="col-sm-4 developer">
			<a href="" target="_blank" class="text-pp-crt">By : <b>T</b>es<b>T</b>.inc</a>
		</div>
	</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
