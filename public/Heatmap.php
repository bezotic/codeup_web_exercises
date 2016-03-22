<?php


?>
<!DOCTYPE html>



<html lang="en">
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/heatmap.css">
<head>
  <title>HEATMAP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
      <h2>Heat Map</h2>
      <h2 id='power'>Powered By Brains</h2>
      </div>
     </nav>
   
    <nav class='sidebar'>
    <div class='navbar-container'>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1"><div class='glyphicon glyphicon-search'></div></span>
          <input type="text" class="form-control form1" placeholder="Enter City" aria-describedby="basic-addon1">
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1"><i class="fa fa-hashtag"></i></span>
          <input type="text" class="form-control form2" placeholder="Enter Hashtag" aria-describedby="basic-addon1">
        </div>
      </div>
      <div class='form-group'>
          <button type="button" class="btn btn-default">submit</button>
             <label class="checkboxes"><input type="checkbox" value=""> PHP</label>
             <label class="checkboxes"><input type="checkbox" value=""> JavaScript</label>
             <label class="checkboxes"><input type="checkbox" value=""> Ruby</label>
          </div>
      </div>
      <div class='line'>
      </div>
      <div class="form-group">
        <p class= 'reset-text'>If you want to start with a blank map, <br>click on reset map button.</p>
         <button id="reset" type="button" class="btn btn-default">Reset</button>
    </div>
     <div id='reset-line' class='line'>
     </div>
    <div id='leave' class='form-group'>
        <p id='connect'>Looking to connect with like-minded individuals? <br>
        Need to find a programmer near you? Try connect.</p> 
          <a href="#"><button id="connect-btn" type="button" class="btn btn-default">Connect</button></a>
         
    </div>
    </nav>

 



	<script src="/js/practice.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>	
</body>
</html>