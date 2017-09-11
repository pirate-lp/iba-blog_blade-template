<a href="/blog/{{ $post->id }}/">
<span class="sc">{{ $post->timestamp->publish->diffForHumans() }}</span><span class="mc"><b> | </b></span><span>{{ $post->title->value }}</span>
</a>