@extends('iba-blog::blog.index')

@push('bundle-intro')
<header class="article">
	<h2><a href="" rel="people">{{ $person->detail->name }}</a></h2>
		<h3 class="sc">is mentioned in the posts ...</h3>
		<p style="text-align: left;">Lost Ideas Lab's Blog is aimed at being a medium to enhance interactions with people outside of Lost Ideas Lab and often we don't have personal contact with people we mention on our blog, so here is the tool, to find out what we said about you ...</p>
		<p style="text-align: right;"><a class="inlink" href="/blog/">All Posts</a>
</header>
@endpush