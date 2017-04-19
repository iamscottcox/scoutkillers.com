<div class="card shadow">
	@if(get_the_post_thumbnail())
		@php(the_post_thumbnail())
	@endif
	<div class="card-block">
		<h4 class="card-title">{{ get_the_title() }}</h4>
		<p class="card-text text-justify">{!! get_the_excerpt() !!}</p>
		<p class="card-link text-right">
			<a href="{{ get_the_permalink() }}" class="btn btn-lg btn-primary shadow text-shadow"><i class="fa fa-arrow-right"></i></a>
		</p>
	</div>
</div>