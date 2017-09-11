<section class="text-gallery">
	<header style="margin-bottom: 60px;">
		{{ $slot }}
	</header>
	<div>
		@foreach ( $items as $item )
			@include('iba-blog::modules.poem.m',['book' => $item])
		@endforeach
	</div>
</section>