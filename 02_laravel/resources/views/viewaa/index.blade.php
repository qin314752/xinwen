﻿<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>基于jQuery功能强大的图片查看器插件|DEMO_爱编程w2bc.com</title>
	<link rel="stylesheet" type="text/css" href="/viewaa/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="/viewaa/css/default.css">
	<link rel="stylesheet" href="/viewaa/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/viewaa/dist/viewer.css">
	<link rel="stylesheet" href="/viewaa/css/main.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="htmleaf-container">
        <script src="/viewaa/assets/js/_gg_980_90.js" type="text/javascript"></script>
		<div class="container">
		   <!--  <div class="row">
		      <div class="col-sm-12 col-md-3">
		        <h3 class="page-header">Options</h3>
		        <div class="docs-toggles">
		          <div class="btn-group btn-group-justified" data-toggle="buttons" role="group">
		            <label class="btn btn-primary active">
		              <input type="radio" name="inline" data-value="false" autocomplete="off" checked> Modal mode
		            </label>
		            <label class="btn btn-primary">
		              <input type="radio" name="inline" data-value="true" autocomplete="off"> Inline mode
		            </label>
		          </div>
		          <button class="btn btn-primary btn-block hidden-md hidden-lg" id="toggle-options" data-target="#options" data-toggle="collapse" aria-expanded="true">Toggle options</button>
		          <div class="docs-collapse collapse" id="options" aria-labelledby="toggle-options">
		            <ul class="list-group">
		              <li class="list-group-item">
		                <label class="checkbox-inline">
		                  <input type="checkbox" name="button" checked> button
		                </label>
		              </li>
		              <li class="list-group-item">
		                <label class="checkbox-inline">
		                  <input type="checkbox" name="navbar" checked> navbar
		                </label>
		              </li>
		              <li class="list-group-item">
		                <label class="checkbox-inline">
		                  <input type="checkbox" name="title" checked> title
		                </label>
		              </li>
		              <li class="list-group-item">
		                <label class="checkbox-inline">
		                  <input type="checkbox" name="toolbar" checked> toolbar
		                </label>
		              </li>
		              <li class="list-group-item">
		                <label class="checkbox-inline">
		                  <input type="checkbox" name="tooltop" checked> tooltop
		                </label>
		              </li>
		              <li class="list-group-item">
		                <label class="checkbox-inline">
		                  <input type="checkbox" name="movable" checked> movable
		                </label>
		              </li>
		              <li class="list-group-item">
		                <label class="checkbox-inline">
		                  <input type="checkbox" name="zoomable" checked> zoomable
		                </label>
		              </li>
		              <li class="list-group-item">
		                <label class="checkbox-inline">
		                  <input type="checkbox" name="rotatable" checked> rotatable
		                </label>
		              </li>
		              <li class="list-group-item">
		                <label class="checkbox-inline">
		                  <input type="checkbox" name="scalable" checked> scalable
		                </label>
		              </li>
		              <li class="list-group-item">
		                <label class="checkbox-inline">
		                  <input type="checkbox" name="transition" checked> transition
		                </label>
		              </li>
		              <li class="list-group-item">
		                <label class="checkbox-inline">
		                  <input type="checkbox" name="fullscreen" checked> fullscreen
		                </label>
		              </li>
		              <li class="list-group-item">
		                <label class="checkbox-inline">
		                  <input type="checkbox" name="keyboard" checked> keyboard
		                </label>
		              </li>
		            </ul>
		          </div>
		        </div>
		      </div> -->
		      <div class="col-sm-8 col-md-6">
		        <!-- <h3 class="page-header">Demo</h3> -->
		        <div class="docs-galley">
		          <ul class="docs-pictures clearfix">
		            <li><img data-original="/viewaa/assets/img/emma-watson-1.jpg" src="/viewaa/assets/img/thumbnails/emma-watson-1.jpg"></li>
		            <li><img data-original="/viewaa/assets/img/emma-watson-2.jpg" src="/viewaa/assets/img/thumbnails/emma-watson-2.jpg"></li>
		         <!--    <li><img data-original="/viewaa/assets/img/emma-watson-3.jpg" src="/viewaa/assets/img/thumbnails/emma-watson-3.jpg"></li>
		            <li><img data-original="/viewaa/assets/img/emma-watson-4.jpg" src="/viewaa/assets/img/thumbnails/emma-watson-4.jpg"></li>
		            <li><img data-original="/viewaa/assets/img/emma-watson-5.jpg" src="/viewaa/assets/img/thumbnails/emma-watson-5.jpg"></li>
		            <li><img data-original="/viewaa/assets/img/emma-watson-6.jpg" src="/viewaa/assets/img/thumbnails/emma-watson-6.jpg"></li>
		            <li><img data-original="/viewaa/assets/img/emma-watson-7.jpg" src="/viewaa/assets/img/thumbnails/emma-watson-7.jpg"></li>
		            <li><img data-original="/viewaa/assets/img/emma-watson-8.jpg" src="/viewaa/assets/img/thumbnails/emma-watson-8.jpg"></li>
		            <li><img data-original="/viewaa/assets/img/emma-watson-9.jpg" src="/viewaa/assets/img/thumbnails/emma-watson-9.jpg"></li> -->
		          </ul>
		        </div>
		      </div>
		<!--       <div class="col-sm-4 col-md-3">
		        <h3 class="page-header">Methods</h3>
		        <div class="docs-buttons" role="group">
		          <div class="input-group">
		            <input type="text" class="form-control" id="viewIndex" name="index" value="4" placeholder="index">
		            <span class="input-group-btn">
		              <button type="button" class="btn btn-primary" data-enable="inline" data-method="view" data-target="#viewIndex" title="View one of the images with image's index">View</button>
		            </span>
		          </div>
		          <div class="input-group">
		            <input type="text" class="form-control" id="zoomRatio" name="ratio" value="0.5" placeholder="ratio">
		            <span class="input-group-btn">
		              <button type="button" class="btn btn-primary" data-enable="inline" data-method="zoom" data-target="#zoomRatio" title="Zoom the image">Zoom</button>
		            </span>
		          </div>
		          <div class="input-group">
		            <input type="text" class="form-control" id="zoomToRatio" name="ratio" value="1" placeholder="ratio">
		            <span class="input-group-btn">
		              <button type="button" class="btn btn-primary" data-enable="inline" data-method="zoomTo" data-target="#zoomToRatio" title="Zoom the image to a special ratio">Zoom To</button>
		            </span>
		          </div>
		          <div class="input-group">
		            <input type="text" class="form-control" id="rotateDegrees" name="degrees" value="90" placeholder="degrees">
		            <span class="input-group-btn">
		              <button type="button" class="btn btn-primary" data-enable="inline" data-method="rotate" data-target="#rotateDegrees" title="Rotate the image">Rotate</button>
		            </span>
		          </div>
		          <div class="input-group">
		            <input type="text" class="form-control" id="rotateToDegrees" name="degrees" value="360" placeholder="degrees">
		            <span class="input-group-btn">
		              <button type="button" class="btn btn-primary" data-enable="inline" data-method="rotateTo" data-target="#rotateToDegrees" title="Rotate the image to a special angle">Rotate To</button>
		            </span>
		          </div>
		          <div class="btn-group btn-group-justified" role="group">
		            <div class="btn-group" role="group">
		              <button type="button" class="btn btn-primary" data-arguments="[0.5]" data-enable="inline" data-method="zoom" title="Zoom in">Zoom In</button>
		            </div>
		            <div class="btn-group" role="group">
		              <button type="button" class="btn btn-primary" data-arguments="[-0.5]" data-enable="inline" data-method="zoom" title="Zoom out">Zoom out</button>
		            </div>
		          </div>
		          <div class="btn-group btn-group-justified" role="group">
		            <div class="btn-group" role="group">
		              <button type="button" class="btn btn-primary" data-arguments="[-90]" data-enable="inline" data-method="rotate" title="Rotate left">Rotate Left</button>
		            </div>
		            <div class="btn-group" role="group">
		              <button type="button" class="btn btn-primary" data-arguments="[90]" data-enable="inline" data-method="rotate" title="Rotate right">Rotate Right</button>
		            </div>
		          </div>
		          <div class="btn-group btn-group-justified" role="group">
		            <div class="btn-group" role="group">
		              <button type="button" class="btn btn-primary" data-arguments="[-1]" data-enable="inline" data-method="scaleX" title="Flip horizontal">Flip horizontal</button>
		            </div>
		            <div class="btn-group" role="group">
		              <button type="button" class="btn btn-primary" data-arguments="[-1]" data-enable="inline" data-method="scaleY" title="Flip vertical">Flip vertical</button>
		            </div>
		          </div>
		          <div class="btn-group btn-group-justified" role="group">
		            <div class="btn-group" role="group">
		              <button type="button" class="btn btn-primary" data-arguments="[-10,0]" data-enable="inline" data-method="move" title="Move left">Left</button>
		            </div>
		            <div class="btn-group" role="group">
		              <button type="button" class="btn btn-primary" data-arguments="[10,0]" data-enable="inline" data-method="move" title="Move right">Right</button>
		            </div>
		            <div class="btn-group" role="group">
		              <button type="button" class="btn btn-primary" data-arguments="[0,-10]" data-enable="inline" data-method="move" title="Move up">Up</button>
		            </div>
		            <div class="btn-group" role="group">
		              <button type="button" class="btn btn-primary" data-arguments="[0,10]" data-enable="inline" data-method="move" title="Move down">Down</button>
		            </div>
		          </div>
		          <div class="btn-group btn-group-justified" role="group">
		            <div class="btn-group" role="group">
		              <button type="button" class="btn btn-primary" data-enable="inline" data-method="prev" title="View previous image">Prev</button>
		            </div>
		            <div class="btn-group" role="group">
		              <button type="button" class="btn btn-primary" data-enable="inline" data-method="next" title="View next image">Next</button>
		            </div>
		            <div class="btn-group" role="group">
		              <button type="button" class="btn btn-primary" data-enable="inline" data-method="play" title="Play the images">Play</button>
		            </div>
		            <div class="btn-group" role="group">
		              <button type="button" class="btn btn-primary" data-enable="inline" data-method="stop" title="Stop the playing">Stop</button>
		            </div>
		          </div>
		          <div class="btn-group btn-group-justified" role="group">
		            <div class="btn-group" role="group">
		              <button type="button" class="btn btn-primary" data-enable="modal" data-method="show" title="Show the viewer">Show</button>
		            </div>
		            <div class="btn-group" role="group">
		              <button type="button" class="btn btn-primary" data-method="hide" title="Hide the viewer" disabled>Hide</button>
		            </div>
		            <div class="btn-group" role="group">
		              <button type="button" class="btn btn-primary" data-enable="inline" data-method="full" title="Enter modal mode">Full</button>
		            </div>
		            <div class="btn-group" role="group">
		              <button type="button" class="btn btn-primary" data-method="exit" title="Exit modal mode" disabled>Exit</button>
		            </div>
		          </div>
		          <button type="button" class="btn btn-block btn-primary" data-enable="inline" data-method="reset">Reset</button>
		          <button type="button" class="btn btn-block btn-primary" data-enable="inline" data-method="tooltip">Tooltip</button>
		          <button type="button" class="btn btn-block btn-danger" data-enable="modal inline" data-method="destroy">Destroy</button>
		        </div>
		      </div> -->
		    </div>
		  </div>
	</div>
	
	<!-- Scripts -->
	  <script src="/viewaa/assets/js/jquery.min.js"></script>
	  <script src="/viewaa/assets/js/bootstrap.min.js"></script>
	  <script src="/viewaa/dist/viewer.js"></script>
	  <script src="/viewaa/assets/js/main.js"></script>
</body>
</html>