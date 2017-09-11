@extends('iba-blog::blog.index')

@push('bundle-intro')
<header class="article">
	<h2><a href="" rel="people">{{ $category->title->value }}</a></h2>
	<p style="text-align: right;"><a class="inlink" href="/blog/">All Posts</a></p>
</header>
@endpush