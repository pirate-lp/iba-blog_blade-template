@extends('iba-blog::blog.base')

@push('title') {{ $post->title->value  }} | Blog @endpush

@section('main')

@include('iba-blog::modules.blog.post-l')

@endsection