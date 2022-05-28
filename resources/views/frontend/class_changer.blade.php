<div class="liveChatContainer online">
	<div class="col-md-12" id="change">
		<button onclick="demo()"><i class="fa fa-smile-o"></i>Chat</button>
		<p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem ullam magni voluptates excepturi dignissimos eligendi asperiores, inventore doloremque quae! Similique accusamus sint enim iusto voluptates ipsam officia consectetur voluptatem placeat?</p>
	</div>
  <div class="col-md-6" id="change1">
    <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem ullam magni voluptates excepturi dignissimos eligendi asperiores, inventore doloremque quae! Similique accusamus sint enim iusto voluptates ipsam officia consectetur voluptatem placeat?</p>
  </div>
</div>
<script>

		function demo(){
			$(document).ready(function(){
        document.getElementById("change").setAttribute("class","col-md-6");
				document.getElementById("change1").setAttribute("class","col-md-12");
			});
		}



// function demo() {
//    var element = document.getElementById("change");
//    element.classList.toggle("col-md-6");
// }
</script>  


<!-- <button onclick="myFunction()">Try it</button>

<div id="myDIV" class="change col-md-6">
This is a DIV element.sasdf asdf asdfasd fasd fasdf asdf asdf asdf asdf asdf asdf asdf as dfas df asdf asd fasd fas dfa sdf asd fas dfasdfasdf 
</div>

<script>
function myFunction() {
  // var element = document.getElementById("myDIV");
  var element = document.getElementsByClassName("change");

  if (element.classList) { 
    element.classList.toggle("col-md-12");
  } else {
    var classes = element.className.split(" ");
    var i = classes.indexOf("col-md-12");

    if (i >= 0) 
      classes.splice(i, 1);
    else 
      classes.push("col-md-12");
      element.className = classes.join(" "); 
  }
}
</script> -->