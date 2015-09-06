@extends('master')

@section('head')
<script type="text/javascript">
function change1()
{ document.getElementById("button1").value="Shop";}

function change2()
{ document.getElementById("button2").value="Plane tickets";}

function change3()
{ document.getElementById("button3").value="Train";}

function change4()
{ document.getElementById("button4").value="Tickets";}

function change5()
{ document.getElementById("button5").value="Listen";}

function change6()
{ document.getElementById("button6").value="Watch";}
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
<img data-toggle="modal" data-target="#do1" class = "img-responsive surprise" id = "firstSmall">
</div>
<div class = "row">
<div class = "col-md-12">
<hr>
</div>
</div>
<form action="queryString.asp" method="get" target="_blank" class = "title-lesssuper text-thin text-center ">

<div class = "row">
<div class = "col-md-3 vSmallText">
<button type="button" value="" id="button1" class = "title-logo smallText btn btn-info " onClick= "change1()">Shop</button>
</div>

<div class = "col-md-6 smallText">
What do you want to <b>do</b> on the web?
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
<button type="button" value="" id="button2" class = "title-logo smallText btn btn-info" onClick= "change2()">Plane tickets</button>
</div>
</div>


<div class = "row">
<div class = "col-md-3">
<button type="button" value="" id="button3" class = "title-logo smallText btn btn-info" onClick= "change3()">Train tickets</button>
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
<button type="button" value="" id="button4" class = "title-logo smallText btn btn-info" onClick= "change4()">Tickets</button>
</div>

<div class = "row">
<div class = "col-md-3">
<button type="button" value="" id="button5" class = "title-logo smallText btn btn-info" onClick= "change5()">Listen</button>
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
<button type="button" value="" id="button6" class = "title-logo smallText btn btn-info" onClick= "change6()">Watch</button>
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
<div class="modal fade text-center" id="do1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel">DO</h4>
</div>
<div class="modal-body">
<img class="img-responsive surprise text-center" id = "firstSmall">
<br>The Blue circle means that you want to DO something on the web. <br>
You can press the buttons at the side of the page to add those words to your query.
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
@stop