<!-- START: page-header-featured-image.blade.php -->
@php($url = get_the_post_thumbnail_url())
<section class="page-header-featured-image"
		 style="background-image: url({{ $url }})"
></section>
<!-- END: page-header-featured-image.blade.php -->