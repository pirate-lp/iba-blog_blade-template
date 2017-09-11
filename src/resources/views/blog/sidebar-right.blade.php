<div id="dashboard-right-content" class="mobile-no">
	<section class="dashboard-gray">
		<header><h4>Categories</h4></header>
		<p></p>
		<div style="text-align: left;">
			<ul>
				@foreach ( $categories as $category )
	    			<li><a href="/blog/categories/{{ $category->slug->value }}/" rel="people">{{ $category->title->value }}</a></li>
	    		@endforeach
			</ul>
		</div>
			<p></p>
	</section>
	<section  class="dashboard-gray" style="text-align: left;">
	    <style>
	        ul.related-topics > li {
	            display: inline-block;
	        }
	    </style>
		@include('iba-blog::modules.people.searchForm')
	    
	    
	    <!--<ul class="related-topics" style="font-size: 0.9em;">
	    	<li>
		    	@foreach ( $mentions as $mention )
	    			<a class="inlink-sc" href="/blog/?people=<?php echo urlencode( $mention->detail->identifier ); ?>" rel="people">{{ $mention->detail->identifier }}</a>
	    		@endforeach 
            </li>
        </ul>-->
       
        
	</section>
	<div style="margin-bottom: 24px;">
<!--
	    <nav class="in-section" style="margin: 0px;">
	        <header>all ideas at <a class="mc" href="/">Lost Ideas Lab</a></header>
	        <ul class="y">
			</ul>
		</nav>
-->
		<div class="dashboard dashboard-left article" style="margin: 1rem 0.5rem; text-align: left;">
			<header>
				<h5><a href="http://lostideaslab.com/ideas/">Ideas</a> @ <a href="http://lostideaslab.com/">Lost Ideas Lab</a></h5>
				<h4>Quick Access</h4>
			</header>
			<ul>
				@include('iba-blog::modules.idea.list')
			</ul>
		</div>
	</div>
	<section class="dashboard-gray">
	    <header>
	        <h4><a onclick="jQuery('#sidebar-gratitude').toggle();">Gratitude</a></h4>
	    </header>
	    <div id="sidebar-gratitude">
	        <p>Thanks, everyone who helped us on our way.</p>
	        <p>A. S. and N. thank you very very much.</p>
	        <p>The worshippers’ thanksgiving and Adoration is due only to Allah: The Creator and Nurturer of the worlds [And their inhabitants];</p>
	    </div>
	</section>
</div>
