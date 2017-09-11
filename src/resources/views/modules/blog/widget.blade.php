<div class="blog-piece shadow">
	<header>
		<p>Latest @php if ( !isset($title) ) { echo "updates"; } else { echo $title; } @endphp</p>
		
		{{--shortlist<small> [
		@foreach ( $categories as $category )
			<a href="/blog/categories/{{ str_slug($category) }}/">{{ title_case($category) }}</a>
			@if (!$loop->last) & @endif
		@endforeach]</small></p>--}}
		
		
	</header>
	@foreach ( $posts as $post )
		@include('iba-blog::modules.blog.post-s')
	@endforeach
	<footer style="text-align: right;">
		<p><small>
			<a href="/blog/">Lost Ideas Lab's Blog</a> | <i class="fa fa-rss" aria-hidden="true"></i> <a href="/blog/feed/atom/" target="_blank">atom</a> <a href="/blog/feed/rss/" target="_blank">rss</a>
		</small></p>
	</footer>
</div>