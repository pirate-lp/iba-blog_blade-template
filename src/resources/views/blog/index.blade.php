@extends('iba-blog::blog.base')

@push('title') Blog @endpush

@section('main')

@stack('bundle-intro')

<div class=" shadow" style="margin: 2rem; background-color: white; color: black; border-radius: 8px; text-align: left; text-shadow: none;">
@foreach ( $posts as $post )
	@include('iba-blog::modules.blog.post-m')
@endforeach
</article>

@endsection