@extends('layouts.app')

@section('content')
    
   @role('admin','companyone')
   <div>
    <p>{{ __('Your role is Admin in C1') }}</p>
   </div>
   @endrole

   @role('hr','companyone')
   <div>
    <p>{{ __('Your role is Hr in C1') }}</p>
   </div>
   @endrole

   @role('employee','companyone')
   <div>
    <p>{{ __('Your role is Employee in C1') }}</p>
   </div>
   @endrole

@endsection