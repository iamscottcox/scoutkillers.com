<!-- START: content.blade.php -->
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
<!-- END: content.blade.php -->