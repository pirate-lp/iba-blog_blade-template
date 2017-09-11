<script>
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
</script>

<header>
	<div class="logo">
<!-- 		<span class="sc" style="font-size: 1.3em;"><a href=""></a></span> -->
		<div>
			<a href="/">Lost Ideas Lab</a> <span class="sc" style="cursor:pointer" onclick="openNav()"><i class="fa fa-compass" aria-hidden="true"></i></span>
			{{ $title }}
		</div>
	</div>

</header>

<div id="myNav" class="overlay">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><h1>&times;</h1></a>
	<div class="overlay-content">
		<h2>Navigate <a href="/" class="sc">Lost Ideas lab</a></h2>
		<div class="pure-g">
			<div class="pure-u-1 pure-u-sm-1-1 pure-u-md-1-3">
				<span><small>The Section you are currently visiting</small></span><h3>{{ $title }}</h3>
					<ul>
						{{ $slot }}
					</ul>
	    	</div>
			<div class="pure-u-1 pure-u-sm-1-1 pure-u-md-1-3">
			
				@if(!empty($content))
					{{ $content }} 
				@endif
			</div>
			<div class="pure-u-1 pure-u-sm-1-1 pure-u-md-1-3">
				<h3><a href="/ideas/">Ideas</a> at Lost Ideas Lab</h3>
					<ul>
						@include('iba-blog::modules.idea.list')
						</ul>
					</li>
			</div>
			<div class="pure-u-1-1">
					<h3>General Sections</h3>
					<ul>
					<li><a href="/blog/">Blog</a></li>
					<li><a href="/people/">People</a></li>
					<li><a href="/about/">About</a></li>
					<li><a href="/contact/">Contact</a></li>
					</ul>
			</div>
	    </div>
	</div>
</div>