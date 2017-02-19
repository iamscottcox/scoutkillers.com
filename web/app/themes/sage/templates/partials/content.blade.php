<!-- START: content.blade.php -->
@if (!have_posts())
  <div class="alert alert-warning">
    {{ __('Sorry, no results were found.', 'sage') }}
  </div>
  {!! get_search_form(false) !!}
@endif

@while (have_posts()) @php(the_post())
<article @php(post_class())>
  <div class="container">
    <div class="row">
      <div class="col-xs">
        <header>
          <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
          @include('partials/entry-meta')
        </header>
        <div class="entry-summary">
          @php(the_excerpt())
        </div>
      </div>
    </div>
  </div>
</article>
@endwhile
<!-- END: content.blade.php -->