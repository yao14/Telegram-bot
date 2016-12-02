
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
   
    <title>messages chat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <link href="bootstrap.css" rel="stylesheet">
    <link href="font-awesome.min.css" rel="stylesheet">

    <style type="text/css">
    	body{
    
    background:#ebeef0;
}

.media-block .media-left {
    display: block;
    float: left;
}

.speech {
    position: relative;
    background: #b7dcfe;
    color: #317787;
    display: inline-block;
    border-radius: 0;
    padding: 12px 20px;
}

.media-block .media-left {
    display: block;
    float: left;
}
.img-sm {
    width: 46px;
    height: 46px;
}

.pad-hor {
    padding-left: 15px;
    padding-right: 15px;
}
.speech .media-heading {
    font-size: 1.2em;
    color: #317787;
    display: block;
    border-bottom: 1px solid rgba(0,0,0,0.1);
    margin-bottom: 10px;
    padding-bottom: 5px;
    font-weight: 300;
}
.speech-time {
    margin-top: 20px;
    margin-bottom: 0;
    font-size: .8em;
    font-weight: 300;
}
.panel {
    box-shadow: 0 2px 0 rgba(0,0,0,0.075);
    border-radius: 0;
    border: 0;
    margin-bottom: 24px;
}
.panel .panel-heading, .panel>:first-child {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.panel-heading {
    position: relative;
    height: 50px;
    padding: 0;
    border-bottom:1px solid #eee;
}
.panel-control {
    height: 100%;
    position: relative;
    float: right;
    padding: 0 15px;
}
.panel-title {
    font-weight: normal;
    padding: 0 20px 0 20px;
    font-size: 1.416em;
    line-height: 50px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.panel-control>.btn:last-child, .panel-control>.btn-group:last-child>.btn:first-child {
    border-bottom-right-radius: 0;
}
.panel-control .btn, .panel-control .dropdown-toggle.btn {
    border: 0;
}
.mar-btm {
    margin-bottom: 15px;
}
    </style>
</head>
<body>

<nav class="<!--navbar navbar-inverse navbar-fixed-top-->">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Telegram Bot</a>
    </div>
    
  </div>
</nav> 
<div class="container" style="POSITION: relative;top: 50px;">
    <div class="col-md-offset-6 col-lg-offset-1">
        <div class="panel">
        	<!--Heading-->
    		<div class="panel-heading">
    			<div class="panel-control">
    				<div class="btn-group">
    					<button class="btn btn-default" type="button" data-toggle="collapse" data-target="#demo-chat-body"><i class="fa fa-chevron-down"></i></button>
    					<button type="button" class="btn btn-default" data-toggle="dropdown"><i class="fa fa-gear"></i></button>
    					<ul class="dropdown-menu dropdown-menu-right">
    						<li><a href="#">Available</a></li>
    						<li><a href="#">Busy</a></li>
    						<li><a href="#">Away</a></li>
    						<li class="divider"></li>
    						<li><a id="demo-connect-chat" href="#" class="disabled-link" data-target="#demo-chat-body">Connect</a></li>
    						<li><a id="demo-disconnect-chat" href="#" data-target="#demo-chat-body">Disconect</a></li>
    					</ul>
    				</div>
    			</div>
    			<h3 class="panel-title">Chat</h3>
    		</div>
    
    		
    		<div id="demo-chat-body" class="collapse in">
    			<div class="nano has-scrollbar" style="height:380px">
    				<div class="nano-content pad-all" tabindex="0" style="<!-- right: -17px -->;">
                        <ul class="list-unstyled media-block">
                            
                           

                            <li class="mar-btm">
                                <div class="media-left">
                                    <img src="bot.jpg" class="img-circle img-sm" alt="Profile Picture">
                                </div>
                                <div class="media-body pad-hor speech-left">
                                    <div class="speech">
                                        <a href="#" class="media-heading">server</a>
                                        
                                        <p class="speech-time">
                                            <i class="fa fa-clock-o fa-fw"></i> time
                                        </p>
                                    </div>
                                </div>
                            </li>
                            
                            
                            
                            
                            
                            
                        </ul>
                    </div>
    			<div class="nano-pane"><div class="nano-slider" style="height: 141px; transform: translate(0px, 0px);"></div>
                </div>
                </div>
    
    			<!--Widget footer-->
    			<div class="panel-footer">
                <div class="row">
                        <div class="col-xs-9">
                            <input name="input" type="text" placeholder="Enter your text" class="form-control chat-input" style="height: auto;">
                        </div>
                        <div class="col-xs-3">
                            <button class="btn btn-primary btn-block" type="submit" name="submit">Send</button>
                        </div>
                    </div>
    				
    			</div>
    		</div>
    	</div>
    </div>
</div>


<script type="text/javascript">
	
</script>
</body>
</html>