@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Admin | HR | Employee') }}</div>

                <div class="card-body">
                   <form action={{ route('superadmin.store') }} method="POST">
                      @csrf
                      <div class="card-text">
                      <label for="name">Name</label>
                      <input class="form-control" type="text" name="name">
                      </div>
                      <span class="text text-danger">
                        @error('name')
                        {{ $message }}
                        @enderror
                      </span>

                      <div class="card-text mt-3">
                      <label for="email">Email</label>
                      <input class="form-control" type="text" name="email">
                      </div>
                      <span class="text text-danger">
                        @error('email')
                        {{ $message }}
                        @enderror
                      </span>

                      <div class="card-text mt-3">
                      <label for="password">Password</label>
                      <input class="form-control" type="text" name="password">
                      </div>
                      <span class="text text-danger">
                        @error('password')
                        {{ $message }}
                        @enderror
                      </span>
                      
                      <div class="card-text mt-3">
                        <label for="role">Role</label>
                        <select name="role" class="form-control">
                        <option value="admin">Admin</option>
                        <option value="hr">Hr</option>
                        <option value="employee">employee</option>
                        </select>
                      <span class="text text-danger">
                        @error('role')
                        {{ $message }}
                        @enderror
                      </span>

                      <div class="card-text mt-3">
                        <label for="role">Guard</label>
                        <select name="guard" class="form-control">
                        <option value="companyone">Company One</option>
                        <option value="companytwo">Company Two</option>
                        <option value="companythree">Company Three</option>
                        </select>
                      <span class="text text-danger">
                        @error('guard')
                        {{ $message }}
                        @enderror
                      </span>

                      <div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </div>

                    </form>                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
