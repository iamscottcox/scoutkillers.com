<!-- START: page-header.blade.php -->
@if (has_post_thumbnail())
	@include('components.page-header-featured-image')
@else
	@include ('components.page-header-no-image')
@endif
<!-- END: page-header.blade.php -->