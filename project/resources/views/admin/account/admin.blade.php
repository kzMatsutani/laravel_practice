@extends('layouts.admin_layouts')
@section('content')
<div class="admin-account-container">
    <div class="card card-container">
        <p><a href="{{ url('admin/register') }}">アカウント作成</a></p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">アカウント名</th>
                    <th scope="col">メールアドレス</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $admins)
                    <tr>
                        <th scope="row">{{ $admins->id }}</th>
                        <td>{{ $admins->name }}</td>
                        <td>{{ $admins->email }}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div><!-- /card-container -->
</div><!-- /container -->
@endsection
