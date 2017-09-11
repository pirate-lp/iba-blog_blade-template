<a href="/blog/{{ $post->id }}/" class="" style="display: block; padding: 0.5rem 1.5rem; border-bottom: 1px solid #999;">
		<small><span class="mc">{{ $post->timestamp->publish->diffForHumans() }}</span>
</small><small style="float: right;">
		@if ( $post->bundle('category') !== NULL )
			@foreach ( $post->bundle('category') as $category )
				<span style="color: #333">{{ $category->title->value }}</span>
			@endforeach
		@endif
		</small><br />
	<span style="font-size: 1.3em">{{ $post->title->value }}</span><br />
		@if ( $post->thumbnail )
			<img src="/blog/{{ $post->id }}/{{ $post->thumbnail->name }}" style="display: block; max-height: 70vh; max-width: 100%; margin: 0px auto 1rem auto;" />
		@endif
</a>