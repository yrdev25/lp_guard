@extends('layouts.app')

@section('content')
    
   @role('admin','companytwo')
   <div>
    <p>{{ __('Your role is Admin in C2') }}</p>
   </div>
   @endrole

   @role('hr','company_wo')
   <div>
    <p>{{ __('Your role is Hr in C2') }}</p>
   </div>
   @endrole

   @role('employee','companytwo')
   <div>
    <p>{{ __('Your role is Employee in C2') }}</p>
   </div>
   @endrole

@endsection