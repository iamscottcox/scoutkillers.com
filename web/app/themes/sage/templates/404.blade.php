<!-- START: 404.blade.php -->
@extends('layouts.base')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  {!! get_the_posts_navigation() !!}
@endsection
<!-- END: 404.blade.php -->