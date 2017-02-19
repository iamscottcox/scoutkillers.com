<!-- START: single.blade.php -->
@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials/content)
  @endwhile
@endsection
<!-- END: single.blade.php -->