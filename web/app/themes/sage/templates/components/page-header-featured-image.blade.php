<!-- START: page-header-featured-image.blade.php -->
<div class="page-header-featured-image">
	@php(the_post_thumbnail())
	<h1 class="display-2 featured-image-title">{{ get_the_title() }}</h1>
</div>
<!-- END: page-header-featured-image.blade.php -->