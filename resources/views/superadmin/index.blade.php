@extends('layouts.app')

@section('content')
    <div class="card-body">
      <h4 class="card-title">Role and Permission</h4>
      <div class="card-text">
        <a href="{{ route('superadmin.roles.index') }}" class="btn btn-warning">Role</a>
      </div>
      <div class="card-text">
        <a href="{{ route('superadmin.permissions.index') }}" class="btn btn-success mt-3">Permissions</a>
      </div>
      <div class="card-text">
        <a href="{{ route('user.create') }}" class="btn btn-info mt-3"> Add User for Companies</a>
      </div>
    </div>

    <div class="card-body">
      <table class="table table-striped">
        <tr>
          <td>Name</td>
          <td>Email</td>
          <td>Role</td>
        </tr>
        @isset($users)
          @foreach ($users as $user)
            <tr>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->roles->first()->name }}</td>
            </tr>
          @endforeach
        @endisset
      </table>
    </div>
@endsection