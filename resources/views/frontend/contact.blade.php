@extends('frontend.master_home')
@section('main_content')

        @extends('frontend.body.common')

        @section('card-title')
        Contact
        @endsection
        @section('card-subtitle')
        me
        @endsection
        @section('card-text')
        
        Email : {{$abouts->off_email}} <br>
       <p>Phone : +91 9868****11</p>
        @endsection
        
        @section('button-link-1')
        {{ route('home') }}
        @endsection
      
        
        @section('button-text-1')
        <i class="fas fa-home"></i> Back to Home
        @endsection

        @section('button-text-2')
        Hire
        @endsection
      
