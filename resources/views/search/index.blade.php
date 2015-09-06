@extends('master')

@section('content')
<div class = "container">
<div class = "row">
<div class = "col-md-12 text-center text-uppercase">
<h1 class = "title-super text-uppercase text-thin">Jellibeans</h1>
<h4>Search</h4>
</div>
</div>
<div class = "row">
	<div class = "col-md-12">
		<hr>
	</div>
		<div class = "row text-center">
			<div class = "col-md-3 text-mystyle">
				<img data-toggle="modal" data-target="#do" class = "img-responsive surprise" id = "first">
				<a href = "/do" class = "text-uppercase"><br>Do</a>
			</div>
			<div class = "col-md-3 text-mystyle">
				<img data-toggle="modal" data-target="#know" class = "img-responsive surprise" id = "second">
				<a href = "/know" class = "text-uppercase"><br>Know</a>
			</div>
			<div class = "col-md-3 text-mystyle">
				<img data-toggle="modal" data-target="#go" class = "img-responsive surprise" id = "third">
				<a href = "/go" class = "text-uppercase"><br>Go</a>
			</div>
            <div class = "col-md-3 text-mystyle">
            <img data-toggle="modal" data-target="#social" class = "img-responsive surprise" id = "fourth">
            <a href = "/social" class = "text-uppercase"><br>Social</a>
			</div>
		</div>
		</div>
</div>
<!-- Modal -->
<div class="modal fade text-center" id="do" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">DO</h4>
      </div>
      <div class="modal-body">
        <img class="img-responsive surprise text-center" id = "first">
        <br>Press the words 'DO' if you'd like to do something on the web like, buy a cinema ticket.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade text-center" id="know" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">KNOW</h4>
      </div>
      <div class="modal-body">
        <img class="img-responsive surprise text-center" id = "second"> 
        <br>Press the words 'KNOW' if you'd like to know something from the web like, what time the cinema closes.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade text-center" id="go" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">GO</h4>
      </div>
      <div class="modal-body ">
        <img class="img-responsive surprise text-center" id = "third">
        <br>Press words 'GO' if you'd like to go somewhere on the web, like your local cinema homepage.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade text-center" id="social" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">SOCIAL</h4>
            </div>
            <div class="modal-body">
                <img class="img-responsive surprise text-center" id = "fourth">
                    <br>Press the words 'SOCIAL' if your search is about a person.
                    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@stop