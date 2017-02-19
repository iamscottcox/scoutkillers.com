{{--
  Template Name: Custom Template
--}}

<!-- START: template-custom.blade.php -->
@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
<!-- END: template-custom.blade.php -->