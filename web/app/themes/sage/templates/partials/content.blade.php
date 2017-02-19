<!-- START: content.blade.php -->
@while (have_posts()) @php(the_post())
<article @php(post_class())>
  <div class="container">
    <div class="row">
      <div class="col-xs">
        <div class="entry-summary">
          @php(the_content())
        </div>
      </div>
    </div>
  </div>
</article>
@endwhile
<!-- END: content.blade.php -->