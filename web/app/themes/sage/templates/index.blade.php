<!-- START: index.blade.php -->
@extends('layouts.base')

@section('content')
	@include('partials.page-header')
	@include('partials.content')
	{!! get_the_posts_navigation() !!}
@endsection
<!-- END: index.blade.php -->