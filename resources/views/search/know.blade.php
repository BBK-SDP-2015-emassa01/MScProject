@extends('master')

@section('head')
<script type="text/javascript">
function change1()
{ document.getElementById("button1").value="Cinema Listings";}

function change2()
{ document.getElementById("button2").value="Music";}

function change3()
{ document.getElementById("button3").value="Leisure Centre";}

function change4()
{ document.getElementById("button4").value="Restaurant";}

function change5()
{ document.getElementById("button5").value="Outdoor";}

function change6()
{ document.getElementById("button6").value="Shopping Centre";}
</script>
@stop

@section('content')
<div class = "container text-center">
<div class = "row">
<div class = "col-md-2"></div>
<div class = "col-md-8 text-center text-uppercase">
<h1 class = "title-super text-uppercase text-thin">Jellibeans</h1>
<h4>Form Your Search Query</h4>
</div>
<div class = "col-md-2 text-center text-uppercase">
<img data-toggle="modal" data-target="#know1" class = "img-responsive surprise" id = "secondSmall">
</div>
<div class = "row">
<div class = "col-md-12">
<hr>
</div>
</div>
<form action="queryString.asp" method="get" target="_blank" class = "title-lesssuper text-thin text-center ">

<div class = "row">
<div class = "col-md-3 vSmallText">
<button type="button" value="" id="button1" class = "title-logo smallText btn btn-info " onClick= "change1()">Cinema</button>
</div>

<div class = "col-md-6 smallText">
What do you want to <b>know</b> from the web?
</div>

<div class = "col-md-3"></div>

</div>
<div class = "row">
<div class = "col-md-3"></div>

<div class = "col-md-6 smallText">
<input type="text" name="go" class = "title-logo" style = "height: 32px; width: 500px;"><br>
<br>
</div>

<div class = "col-md-3"></div>
<button type="button" value="" id="button2" class = "title-logo smallText btn btn-info" onClick= "change2()">Music</button>
</div>
</div>


<div class = "row">
<div class = "col-md-3">
<button type="button" value="" id="button3" class = "title-logo smallText btn btn-info" onClick= "change3()">Leisure</button>
</div>

<div class = "col-md-6 smallText">
What information do you want back from your search?
</div>

<div class = "col-md-3"></div>

</div>

<div class = "row">
<div class = "col-md-3">
</div>

<div class = "col-md-6 smallText">
<input type="text" name="go2" class = "title-logo" style = "height: 32px; width: 500px;"><br>
<br>
</div>

<div class = "col-md-3"></div>
<button type="button" value="" id="button4" class = "title-logo smallText btn btn-info" onClick= "change4()">Restaurants</button>
</div>

<div class = "row">
<div class = "col-md-3">
<button type="button" value="" id="button5" class = "title-logo smallText btn btn-info" onClick= "change5()">Outdoors</button>
</div>

<div class = "col-md-6 smallText text-center">
Enter any other information to <b>complete</b> your query.
</div>

<div class = "col-md-3"></div>

</div>

<div class = "row">
<div class = "col-md-3 text-center">

</div>

<div class = "col-md-6 smallText">
<input type="text" name="go3" class = "title-logo" style = "height: 32px; width: 500px;"><br>
<br>
</div>

<div class = "col-md-3 text-center"></div>
<button type="button" value="" id="button6" class = "title-logo smallText btn btn-info" onClick= "change6()">Shopping Centre</button>
</div>

<div class = "row">
<div class = "col-md-12 text-center">

<!-- <input type="button" value="Search in Google" class = "title-logo smallText" onClick= "location.href='http://www.google.com' +'#q=' + go.value + '+' + go2.value + '+' + go3.value + '+' + button1.value + '+' + button2.value + '+' + button3.value + '+' + button4.value + '+' + button5.value + '+' + button6.value"> -->
<input type="button" value="Jellibean Search" class = "title-logo smallText" onClick = "location.href='/results'+ '?query='+ go.value + '+' + go2.value + '+' + go3.value + '+' + button1.value + '+' + button2.value + '+' + button3.value + '+' + button4.value + '+' + button5.value + '+' + button6.value">
</div>
</div>

</form>

</div>

<!-- Modal -->
<div class="modal fade text-center" id="know1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel">KNOW</h4>
</div>
<div class="modal-body">
<img class="img-responsive surprise text-center" id = "secondSmall">
<br>The Yellow circle means that you want to KNOW something from the web. <br>
You can press the buttons at the side of the page to add those words to your query.
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
@stop