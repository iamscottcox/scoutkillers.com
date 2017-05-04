<!-- START: page-header-featured-image.blade.php -->
<div class="page-header-featured-image">
	@php(the_post_thumbnail())
	<h1 class="display-3 featured-image-title">{{ get_the_title() }}</h1>
	<img id="petal1" src="<?= get_template_directory_uri(); ?>/dist/images/Petal_1.png" alt="Floating petal" class="floating-petal">
	<img id="petal2" src="<?= get_template_directory_uri(); ?>/dist/images/Petal_2.png" alt="Floating petal" class="floating-petal">
	<img id="petal3" src="<?= get_template_directory_uri(); ?>/dist/images/Petal_3.png" alt="Floating petal" class="floating-petal">
	<img id="petal4" src="<?= get_template_directory_uri(); ?>/dist/images/Petal_4.png" alt="Floating petal" class="floating-petal">
	<img id="petal5" src="<?= get_template_directory_uri(); ?>/dist/images/Petal_5.png" alt="Floating petal" class="floating-petal">
	<img id="petal6" src="<?= get_template_directory_uri(); ?>/dist/images/Petal_6.png" alt="Floating petal" class="floating-petal">
	<img id="petal7" src="<?= get_template_directory_uri(); ?>/dist/images/Petal_7.png" alt="Floating petal" class="floating-petal">
	<img id="petal8" src="<?= get_template_directory_uri(); ?>/dist/images/Petal_8.png" alt="Floating petal" class="floating-petal">
	<img id="petal9" src="<?= get_template_directory_uri(); ?>/dist/images/Petal_9.png" alt="Floating petal" class="floating-petal">
</div>
<!-- END: page-header-featured-image.blade.php -->