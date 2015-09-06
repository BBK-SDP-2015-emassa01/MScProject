@extends('master')

@section('head')
<script type="text/javascript">
function change1()
{ document.getElementById("button1").value="Male";}

function change2()
{ document.getElementById("button2").value="Famous";}

function change3()
{ document.getElementById("button3").value="Female";}

function change4()
{ document.getElementById("button4").value="TV";}

function change5()
{ document.getElementById("button5").value="LinkedIn";}

function change6()
{ document.getElementById("button6").value="Musician";}

function change7()
{ document.getElementById("button7").value="Facebook";}

function change8()
{ document.getElementById("button8").value="Comedian";}

function change9()
{ document.getElementById("button9").value="x";}

function change10()
{ document.getElementById("button10").value="x";}

function change11()
{ document.getElementById("button11").value="x";}

function change12()
{ document.getElementById("button12").value="x";}
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
<img data-toggle="modal" data-target="#social1" class = "img-responsive surprise" id = "fourthSmall">
</div>
<div class = "row">
<div class = "col-md-12">
<hr>
</div>
</div>
<form action="queryString.asp" method="get" target="_blank" class = "title-lesssuper text-thin text-center ">

<div class = "row">
<div class = "col-md-3 vSmallText">
<button type="button" value="" id="button1" class = "title-logo smallText btn btn-info " onClick= "change1()">Male</button>
</div>

<div class = "col-md-6 smallText">
<b>Who</b> are you searching for on the web?
</div>

<div class = "col-md-3"><button type="button" value="" id="button2" class = "title-logo smallText btn btn-info" onClick= "change2()">Famous</button>
</div>

</div>
<div class = "row">
<div class = "col-md-3">
<button type="button" value="" id="button3" class = "title-logo smallText btn btn-info" onClick= "change3()">Female</button>
</div>

<div class = "col-md-6 smallText">
<input type="text" name="go" class = "title-logo" style = "height: 32px; width: 500px;"><br>
<br>
</div>

<div class = "col-md-3"></div>
<button type="button" value="" id="button4" class = "title-logo smallText btn btn-info" onClick= "change4()">TV</button>
</div>



<div class = "row">
<div class = "col-md-3">
<button type="button" value="" id="button5" class = "title-logo smallText btn btn-info" onClick= "change5()">LinkedIn</button>
</div>

<div class = "col-md-6 smallText">
What information do you want back from your search?
</div>

<div class = "col-md-3">
<button type="button" value="" id="button6" class = "title-logo smallText btn btn-info" onClick= "change6()">Musician</button>

</div>

</div>

<div class = "row">
<div class = "col-md-3">
<button type="button" value="" id="button7" class = "title-logo smallText btn btn-info" onClick= "change7()">Facebook</button>

</div>

<div class = "col-md-6 smallText">
<input type="text" name="go2" class = "title-logo" style = "height: 32px; width: 500px;"><br>
<br>
</div>

<div class = "col-md-3"></div>
<button type="button" value="" id="button8" class = "title-logo smallText btn btn-info" onClick= "change8()">Comedian</button>
</div>

<div class = "row">
<div class = "col-md-3 vSmallText">
<!--<button type="button" value="" id="button9" class = "title-logo smallText btn btn-info" onClick= "change9()">x</button>-->
<p>What is the person's hair colour?</p>
<select name = "button9">
    <option value=""></option>
    <option value="black">Black</option>
    <option value="Brown">Brown</option>
    <option value="Blonde">Blonde</option>
    <option value="Grey">Grey</option>
</select>
</div>

<div class = "col-md-6 smallText text-center">
Enter specific information about the person to <b>complete</b> your query.
</div>

<div class = "col-md-3 vSmallText">
<!--<button type="button" value="" id="button10" class = "title-logo smallText btn btn-info" onClick= "change10()">x</button>-->
<p>What is the person's age category?</p>
<select name = "button10">
    <option value=""></option>
    <option value="Infant">Infant</option>
    <option value="Young">Young</option>
    <option value="Middle aged">Middle aged</option>
    <option value="Old">Old</option>
    </select>
</div>

</div>

<div class = "row">
<div class = "col-md-3 vSmallText">
<!--<button type="button" value="" id="button11" class = "title-logo smallText btn btn-info" onClick= "change11()">x</button>-->
<p>What is the person's style?</p>
<select name = "button11">
    <option value=""></option>
    <option value="Flamboyant">Flamboyant</option>
    <option value="Chic">Chic</option>
    <option value="Eclectic ">Eclectic</option>
    <option value="Modest">Modest</option>
    </select>
    </div>

<div class = "col-md-6 smallText">
<input type="text" name="go3" class = "title-logo" style = "height: 32px; width: 500px;"><br>
<br>
</div>

<div class = "col-md-3 vSmallText">
<!--<button type="button" value="" id="button12" class = "title-logo smallText btn btn-info" onClick= "change12()">x</button>-->
<p>Describe the personality of the person</p>
<select name = "button12">
    <option value=""></option>
    <option value="Adventurous">Adventurous</option>
    <option value="Athletic">Athletic</option>
    <option value="Caring">Caring</option>
    <option value="Funny">Funny</option>
    <option value="Moody">Moody</option>
    <option value="Serious">Serious</option>
    <option value="Sexy">Sexy</option>
    <option value="Sporty">Sporty</option>
    <option value="Witty">Witty</option>
    </select>
    </div>
</div>

<div class = "row">
<div class = "col-md-12 text-center">

<!-- <input type="button" value="Search in Google" class = "title-logo smallText" onClick= "location.href='http://www.google.com' +'#q=' + go.value + '+' + go2.value + '+' + go3.value + '+' + button1.value + '+' + button2.value + '+' + button3.value + '+' + button4.value + '+' + button5.value + '+' + button6.value + '+' + button7.value + '+' + button8.value + '+' + button9.value + '+' + button10.value + '+' + button11.value + '+' + button12.value"> -->
<input type="button" value="Jellibean Search" class = "title-logo smallText" onClick = "location.href='/results'+ '?query='+ go.value + '+' + go2.value + '+' + go3.value + '+' + button1.value + '+' + button2.value + '+' + button3.value + '+' + button4.value + '+' + button5.value + '+' + button6.value + '+' + button7.value + '+' + button8.value + '+' + button9.value + '+' + button10.value + '+' + button11.value + '+' + button12.value">
</div>
</div>

</form>

</div>

<!-- Modal -->
<div class="modal fade text-center" id="social1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="myModalLabel">SOCIAL</h4>
</div>
<div class="modal-body">
<img class="img-responsive surprise text-center" id = "fourthSmall">
<br>The Red circle means that you are searching for a person or something social on the web. <br>
You can press the buttons at the side of the page to add those words to your query.
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
@stop