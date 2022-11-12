@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($permission) ? __('Update Permission') : __('Add Permission') }}</div>

                <div class="card-body">
                    <form action={{ isset($permission) ? route('superadmin.permissions.update',$permission->id) : route('superadmin.permissions.store') }} method="POST">
                        @csrf
                        @isset($permission)
                        @method('PUT')
                        @endisset
                        <div class="card-text">
                        <label for="name">Define Permission:</label>
                        <input class="form-control" type="text" name="name" value="{{ isset($permission) ? $permission->name : '' }}">
                        </div>
                        <span class="text text-danger">@error('name') {{ $message }} @enderror</span>

                        <div class="card-text">
                            <label for="name">Define Guard:</label>
                            <select class="form-control" name="guard_name">
                                <option value="companyone">Company One</option>
                                <option value="companytwo">Company Two</option>
                                <option value="companythree">Company Three</option>
                            </select> 
                            <span class="text text-danger">@error('guard_name') {{ $message }} @enderror</span>    
                            </div>
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