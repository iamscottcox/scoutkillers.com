<!-- START: page-header.blade.php -->
<section class="page-header">
	@if (has_post_thumbnail())
		@if(is_front_page())
			@include('components.front-page-page-header-featured-image')
		@else
			@include('components.page-header-featured-image')
		@endif
	@else
		@include ('components.page-header-no-image')
	@endif
</section>
<!-- END: page-header.blade.php -->