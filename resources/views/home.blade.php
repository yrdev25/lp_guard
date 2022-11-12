@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                </div>
                @php
                    if(str_contains(auth()->guard('companyone')->getName(), 'web')){
                    dd('web');
                 }
                @endphp
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged as '.Auth::user()->name) }}
                    @role('Super Admin','web')
                    <a href="{{ route('superadmin.index') }}" class="btn btn-primary">Role & Permission</a>
                    @endrole

                    @role('admin','companyone')
                    <a href="{{ route('companyone.index') }}" class="btn btn-primary">Company</a>
                    @endrole

                    @if(Auth::guard('web')->check())
                     Helloy {{Auth::guard('web')->user()->name}}
                    @elseif(Auth::guard('companyone')->check())
                      Hellodf {{Auth::guard('companyone')->user()->name}}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
