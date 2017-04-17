<!-- START: page-header.blade.php -->
<section class="page-header">
	@if (has_post_thumbnail())
		@include('components.page-header-featured-image')
	@else
		@include ('components.page-header-no-image')
	@endif
</section>
<!-- END: page-header.blade.php -->