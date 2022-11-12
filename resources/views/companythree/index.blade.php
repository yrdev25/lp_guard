@extends('layouts.app')

@section('content')
    
   @role('admin','companythree')
   <div>
    <p>{{ __('Your role is Admin in C3') }}</p>
   </div>
   @endrole

   @role('hr','companythree')
   <div>
    <p>{{ __('Your role is Hr in C3') }}</p>
   </div>
   @endrole

   @role('employee','companythree')
   <div>
    <p>{{ __('Your role is Employee in C3') }}</p>
   </div>
   @endrole

@endsection