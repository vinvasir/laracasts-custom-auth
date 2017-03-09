@extends ('layout')

@section ('content')

<h1>Hello, <?= $name ?>, you are <?= $age ?> years old</h1>

<ul>
    @foreach ($tasks as $task)
        <li>{{ $task->body }}</li>
    @endforeach
</ul>

<h1>Oh and here's anddit!</h1>


	<button type= "button" onclick="myFunction()" class="btn btn-primary">Anddit</button>
	<div id="loadiframehere"> 

	</div>


	<!-- The overlay -->
	<div id="myNav" class="overlay">

	  <!-- Button to close the overlay navigation -->
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

	  <!-- Overlay content -->
	  <div class="overlay-content">
	    <iframe id="cam" src="http://localhost:3000/requests/595" width="100%" scrolling="yes" onload="resize_iframe()"></iframe>
	  </div>

	</div>

<!-- Use any element to open/show the overlay navigation menu -->
<span class="btn btn-primary" onclick="openNav()">open</span>

<script type="text/javascript">
var clicked = false;

function myFunction(){
	if(clicked === false) {
		var x = document.createElement("IFRAME");
		x.setAttribute("src","http://localhost:3000");
		x.setAttribute("id", "my-frame");
		x.setAttribute("width","600");
		x.setAttribute("height","400");
		x.setAttribute("allowfullscreen", "");
		x.setAttribute("seamless", "")

		document.getElementById("loadiframehere").appendChild(x);

		clicked = true;		
	} else {
		var x = document.getElementById("my-frame");
		document.getElementById("loadiframehere").removeChild(x);

		clicked = false;
	}
		
}

</script>

<script type="text/javascript">
/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "70%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}	
</script>


<script type="text/javascript">
function resize_iframe()
{
    var height=window.innerWidth;//Firefox
    if (document.body.clientHeight)
    {
        height=document.body.clientHeight;//IE
    }
    //resize the iframe according to the size of the
    //window (all these should be on the same line)
    document.getElementById("cam").style.height=parseInt(height-
    document.getElementById("cam").offsetTop-8)+"px";
}

// this will resize the iframe every
// time you change the size of the window.
window.onresize=resize_iframe;
</script>

@endsection