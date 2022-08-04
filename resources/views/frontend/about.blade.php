@extends('frontend.master_home')
@section('main_content')
@extends('frontend.body.common')

@section('card-title')
About
@endsection
@section('card-subtitle')
me
@endsection
@section('card-text')
Creative developer & designer crafting unique web experiences
@endsection

@section('button-link-1')
{{ route('home') }}
@endsection
@section('button-link-2')
{{ route('contact') }}
@endsection

@section('button-text-1')
<i class="fas fa-home"></i> Back to Home
@endsection
@section('button-text-2')
Hire
@endsection