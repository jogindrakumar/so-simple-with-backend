 @extends('frontend.master_home')
 @section('main_content')
 @extends('frontend.body.common')

@section('card-title')
Jogindra Kumar
@endsection
@section('card-subtitle')
web Developer
@endsection
@section('card-text')
   {{$abouts->desp_1}}
{{-- Creative developer & designer crafting unique web experiences --}}
@endsection

@section('button-link-1')
{{ route('about') }}
@endsection
@section('button-link-2')
{{ route('contact') }}
@endsection

@section('button-text-1')
 About Me
@endsection
@section('button-text-2')
Hire
@endsection
    