@extends('layouts.admin_layouts')
@section('content')
<div class="admin-account-container">
    <div class="card card-container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $admin)
                    <tr>
                        <th scope="row">{{ $admin->id }}</th>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div><!-- /card-container -->
</div><!-- /container -->
@endsection
