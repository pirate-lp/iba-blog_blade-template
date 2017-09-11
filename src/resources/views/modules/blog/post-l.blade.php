<article itemscope itemtype="http://schema.org/LiveBlogPosting">
	<header>
	@if ( $post->thumbnail )
			<img itemprop="image" src="/blog/{{ $post->id }}/{{ $post->thumbnail->name }}" style="display: block; max-height: 70vh; max-width: 100%; margin-bottom: 1rem;" />
		@endif

		<h2 itemprop="headline"><a href="/blog/{{ $post->id }}/">{{ $post->title->value }}</a></h2>
		<span class="mc">{{ $post->timestamp->publish->diffForHumans() }}</span> | @foreach ( $post->bundle('category') as $category )
			<span style="color: #333"><a href="/blog/categories/{{ $category->slug->value }}/">{{ $category->title->value }}</a></span>
		@endforeach
		{!! $post->content() !!}
	</header>
</article>
<div class="pure-g">
	<div class="pure-u-1-1 pure-u-sm-1-1 pure-u-md-1-2">
		<div class="d-mc article" style="text-align: left; margin: 0.7rem">
			@forelse ( $post->bundle('idea') as $idea )
				<?php $idea = \App\Idea::whereHas('title', function($query) use ($idea) {
					$query->where('value', $idea->title->value);
				})->first(); ?>
				@include('iba-blog::modules.idea.m', ['book' => $idea ])
			@empty
			@endforelse
		</div>
	</div>
</div>