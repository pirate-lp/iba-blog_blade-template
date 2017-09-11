@extends('iba-blog::master')

@section('title', "Lost Ideas Lab's Blog")

@push('rssfeed')
	<link rel="alternate" type="application/atom+xml" title="Lost Ideas Lab Blog's Atom feed" href="http://lostideaslab.com/blog/feed/atom" />
	<link rel="alternate" type="application/rss+xml" title="Lost Ideas Lab's Blog's RSS feed" href="http://lostideaslab.com/blog/feed/rss" />
@endpush

@section('cssclass', 'blog')

@section('body')

<header>
    <a class="square-logo" href="/blog/"><h3 style="display: inline-block;" itemprop="name">Lost<br>Ideas<br>Lab's Blog</h3></a>
	<nav class="mobile-yes" style="width: 100%; margin-top: 24px;">
	    <ul>
	        <li><a onclick="$('#dashboard-left-content').toggle();">About</a></li>
	        <li><a onclick="$('#dashboard-right-content').toggle();">More</a></li>
	    </ul>
	</nav>    
</header>


<div class="pure-g">
    <div class="blogbase page pure-u-1 pure-u-sm-23-24 pure-u-md-23-24 pure-u-lg-23-24 pure-u-xl-19-24">
    <div class="pure-g">
    	<section class="b-dashboard-left page pure-u-1 pure-u-sm-1-1 pure-u-md-3-8 pure-u-lg-6-24 pure-u-xl-6-24">
    		{{-- @include('iba-blog::blog.sidebar-left') --}}
    	</section>
    	<main class="pure-u-1 pure-u-sm-1-1 pure-u-md-5-8 pure-u-lg-12-24 pure-u-xl-12-24">
	    	@yield('main')
	    </main>
	    <section class="b-dashboard-right page pure-u-1 pure-u-sm-1-1 pure-u-md-2-7 pure-u-lg-6-24 pure-u-xl-6-24">
		    {{-- @include('iba-blog::blog.sidebar-right') --}}
	    </section>
    </div>
    </div>
</div>

	

@endsection