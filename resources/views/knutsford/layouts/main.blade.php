@extends('knutsford.layouts.default')

@section('main-content')

	@include('knutsford.partials._navbar')

	@yield('content')

	@include('knutsford.partials._footer')

@stop