@foreach ( $keywords as $keyword )
	<a href="/blog/?tag=<?php echo urlencode( $keyword->word ); ?>">#{{ $keyword->word }}</a>, 
@endforeach