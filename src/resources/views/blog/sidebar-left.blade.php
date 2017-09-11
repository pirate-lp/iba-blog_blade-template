<div id="dashboard-left-content" class="mobile-no">
	<section itemprop="about"  class="dashboard-gray">
	<!--     <header><h4>Introduction</h4></header> -->
	    <p>It is just to have an answer to that question “what are you doing?” ...</p>
	    <p style="text-align: right;"><a href="/blog/introduction/">Full Introduction</a></p>
	</section>
	<section class="dashboard-gray">
		<header><h4>Tags</h4></header>
		<div>
			<p>
			@include('iba-blog::modules.blog.tags')
			</p>
		</div>
	</section>
	<section class="dashboard-gray">
		<header>
	        <h4><a onclick="jQuery('#sidebar-follow').toggle();">Follow me</a></h4>
	    </header>
	    <div id="sidebar-follow">
			<p>Thanks for your interest in what I'm doing ...</p>
	    	{!! __('template.blogFeed') !!}
	    	{!! __('template.socialMedia') !!}
	    </div>
	</section>
	<section class="dashboard-gray">
	    <header>
	        <h4><a onclick="jQuery('#sidebar-contact').toggle();">Contact</a></h4>
	    </header>
	    <div id="sidebar-contact">
	        <p>Thanks for passing by.</p>
	        <p>The best way to contact us at the moment would be to drop us a mail at <a href="mailto:info@lostideaslab.com">info@lostideaslab.com</a>.</p>
	        <p><small>For other information please visit <a href="/contact/">Lost Ideas Lab's contact section</a>.</small></p>
	    </div>
	</section>
</div>