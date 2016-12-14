<?
session_start();
//$user_login1  = $_SESSION['username'];
?>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bot";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        
    } else
    {
        //echo "working";
    }
?>

<?php
if (isset($_POST["submit1"])){
    
        $email=$_POST["email"];
        $fn=$_POST["fn"];
        $ln=$_POST["ln"];
        $username=$ln.$fn;

        
         $_SESSION["username"]=$username;
         $_SESSION["email"]=$email;
         echo $_SESSION["email"];
         
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
   
    <title>VVU FAQ BOT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">

    <script>
// $(document).ready(function(){
//     $("#submit").click(function(){        

//    var myTextFieldValue = $("#input").val();
//    console.log(myTextFieldValue);
//    alert('The value is: '+ myTextFieldValue); 

//     });
// });



</script>

<script>
$(document).ready(function(){
    //$("#scroll").animate({ scrollTop: $('#scroll').height()}, 1000);
    $('#scroll').scrollTop ($('#scroll').height());
});



</script>


<script type="text/javascript">
function jstophp(){
    var javavar=document.getElementById("input").value; 
    document.getElementById("server").innerHTML="<?php 
$phpvar='"+javavar+"'; 
echo $phpvar;?>";}

</script>

	<link href="bootstrap.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
    	body{
    //margin-top:20px;
    background:#ebeef0;
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
.nano {
    position: relative;
    width: 100%;
    height: 100%;
    //overflow-x: visible;
    overflow-y: auto;
}
.nano>.nano-content {
    position: absolute;
    overflow: scroll;
    overflow-x: hidden;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}
.pad-all {
    padding: 15px;
}
.mar-btm {
    margin-bottom: 15px;
}
.media-block .media-left {
    display: block;
    float: left;
}
.img-sm {
    width: 46px;
    height: 46px;
}
.media-block .media-body {
    display: block;
    overflow: hidden;
    width: auto;
}
.pad-hor {
    padding-left: 15px;
    padding-right: 15px;
}
.speech {
    position: relative;
    background: #b7dcfe;
    color: #317787;
    display: inline-block;
    border-radius: 0;
    padding: 12px 20px;
    width: 250px;
}
.speech:before {
    content: "";
    display: block;
    position: absolute;
    width: 0;
    height: 0;
    left: 0;
    top: 0;
    border-top: 7px solid transparent;
    border-bottom: 7px solid transparent;
    border-right: 7px solid #b7dcfe;
    margin: 15px 0 0 -6px;
}
.speech-right>.speech:before {
    left: auto;
    right: 0;
    border-top: 7px solid transparent;
    border-bottom: 7px solid transparent;
    border-left: 7px solid #ffdc91;
    border-right: 0;
    margin: 15px -6px 0 0;
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
.media-block .media-right {
    float: right;
}
.speech-right {
    text-align: right;
}
.pad-hor {
    padding-left: 15px;
    padding-right: 15px;
}
.speech-right>.speech {
    background: #ffda87;
    color: #a07617;
    text-align: right;
}
.speech-right>.speech .media-heading {
    color: #a07617;
}
.btn-primary, .btn-primary:focus, .btn-hover-primary:hover, .btn-hover-primary:active, .btn-hover-primary.active, .btn.btn-active-primary:active, .btn.btn-active-primary.active, .dropdown.open>.btn.btn-active-primary, .btn-group.open .dropdown-toggle.btn.btn-active-primary {
    background-color: #579ddb;
    border-color: #5fa2dd;
    color: #fff !important;
}
.btn {
    cursor: pointer;
    /* background-color: transparent; */
    color: inherit;
    padding: 6px 12px;
    border-radius: 0;
    border: 1px solid 0;
    font-size: 11px;
    line-height: 1.42857;
    vertical-align: middle;
    -webkit-transition: all .25s;
    transition: all .25s;
}
.form-control {
    font-size: 11px;
    height: 100%;
    border-radius: 0;
    box-shadow: none;
    border: 1px solid #e9e9e9;
    transition-duration: .5s;
}
.nano>.nano-pane {
    background-color: rgba(0,0,0,0.1);
    position: absolute;
    width: 5px;
    right: 0;
    top: 0;
    bottom: 0;
    opacity: 0;
    -webkit-transition: all .7s;
    transition: all .7s;
}
    </style>
</head>
<body>
<div id="php">
<script type="text/javascript">
    var auto_refresh = setInterval(
           function ()
           {
           $('#demo-chat-body').load('');
           }, 5000);
    </script>

<script>
      function auto_load(){
        $.ajax({
          url: "api.php",
          cache: false,
          success: function(data){
             $("#php").html(data);
          } 
        });
      }
 
      $(document).ready(function(){
 
        auto_load(); //Call auto_load() function when DOM is Ready
 
      });
 
      //Refresh auto_load() function after 10000 milliseconds
      setInterval(auto_load,5000);
   </script>


</div>
<link href="font-awesome.min.css" rel="stylesheet">
<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> -->
<nav class="<!--navbar navbar-inverse navbar-fixed-top-->">
  <div class="container-fluid">
    <div class="navbar-header">
    <div class="row">
        <div class=""></div>

    </div>
      <a class="navbar-brand" href="#">Telegram Bot</a>
        
    </div>
    <div class="btn-group pull-right" style="margin-top: 10px;">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"><?php  echo @$_SESSION["email"];   ?></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><button  style="width:100%;" type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal"><h5>Login</h5></button></li>
                    <li class="divider"></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
  </div>
</nav> 

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Provide your credentials</h4>
        </div>
        <div class="modal-body" class="col-sm-8-offset">
          <p><form role="form" action="" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Full Name</label>

      <div class="row">
      <div class="col-sm-6">
           <input type="text" class="form-control" id="fn" name="fn" placeholder="First Name" required>
      </div>
      <div class="col-sm-6">
           <input type="text" class="form-control" id="ln" name="ln" placeholder="Last Name" required>
      </div>
     </div>

    </div>
    
    <button type="submit" class="btn btn-default"name="submit1">Submit</button>
  </form></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  

         

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
    						
    					</ul>
    				</div>
    			</div>
    			<h3 class="panel-title">Chat</h3>
    		</div>
    
    		<!--Widget body-->
    		<div id="demo-chat-body" class="collapse in">
    			<div class="nano has-scrollbar" style="height:380px" id="scroll">
    				<div class="nano-content pad-all" tabindex="0" style="<!-- right: -17px -->;">
    					<ul id="ul" class="list-unstyled media-block">
    						<?php 
                            //echo @$message;

                            $query_text="SELECT * FROM `bot_text`";


                            $result_text = mysqli_query($conn, $query_text); 
                            if ($result_text) {
                               //echo"cool ";
                            } else {
                                echo " not cool ";
                            }
                            $usercount=mysqli_num_rows($result_text);
                            //echo $usercount;
                            //$row=mysqli_fetch_assoc ($result_text);
                            //$msg=$row["msg"];
                            while($row=mysqli_fetch_assoc ($result_text))
                            {

                               if ($row["source"]=="user") {
                                    echo '<li class="mar-btm">
                                                        <div class="media-right">
                                                            <img src="avatar1.png" class="img-circle img-sm" alt="Profile Picture">
                                                        </div>
                                                        <div class="media-body pad-hor speech-right">
                                                            <div class="speech">
                                                                <a href="#" class="media-heading">User</a>
                                                                <p>'.$row["msg"].' </p>
                                                                <p class="speech-time">
                                                                <i class="fa fa-clock-o fa-fw"></i>'.$row["time"].'
                                                                </p>
                                                            </div>
                                                        </div>
                                    </li>';
                               } else {

                                    echo '<li class="mar-btm">
                                                        <div class="media-left">
                                                            <img src="bot.jpg" class="img-circle img-sm" alt="Profile Picture" >
                                                        </div>
                                                        <div class="media-body pad-hor speech-left" >
                                                            <div class="speech">
                                                                <a href="#" class="media-heading">Bot</a>
                                                                <p>'.$row["msg"].' </p>
                                                                <p class="speech-time">
                                                                <i class="fa fa-clock-o fa-fw"></i>'.$row["time"].'
                                                                </p>
                                                            </div>
                                                        </div>
                                    </li>';
                               }
                               
                              
                            }

                            ?>
                            <?php 

// for ($x = 0; $x < $length; $x++) {
//     $text0=$updateArray["result"][$x]["message"]["text"];
//     $t=date("h:i:sa");
//     //$chat_date=date("Y-m-d",$t);
//     echo '<li class="mar-btm">
//                                 <div class="media-right">
//                                     <img src="http://bootdey.com/img/Content/avatar/avatar1.png" class="img-circle img-sm" alt="Profile Picture">
//                                 </div>
//                                 <div class="media-body pad-hor speech-right">
//                                     <div class="speech">
//                                         <a href="#" class="media-heading">User</a>
//                                         <p>'.$text0.' </p>
//                                         <p class="speech-time">
//                                         <i class="fa fa-clock-o fa-fw"></i>'.$t.'
//                                         </p>
//                                     </div>
//                                 </div>
//                             </li>';
// } 
?>

 <?php 

// for ($y = 0; $y < @$length1; $y++) {
//     //$text0=$updateArray["result"][$x]["message"]["text"];
//     $my_array0=$my_array[$y];
//     $t=date("h:i:sa");
//     //$chat_date=date("Y-m-d",$t);
//     echo '<li class="mar-btm">
//                                 <div class="media-left">
//                                     <img src="bot.jpg" class="img-circle img-sm" alt="Profile Picture">
//                                 </div>
//                                 <div class="media-body pad-hor speech-left">
//                                     <div class="speech">
//                                         <a href="#" class="media-heading">Bot</a>
//                                         <p>'.$my_array0.' </p>
//                                         <p class="speech-time">
//                                         <i class="fa fa-clock-o fa-fw"></i>'.$t.'
//                                         </p>
//                                     </div>
//                                 </div>
//                             </li>';
//} 
?>

    						<!-- <li class="mar-btm">
    							<div class="media-left">
    								<img src="http://bootdey.com/img/Content/avatar/avatar2.png" class="img-circle img-sm" alt="Profile Picture">
    							</div>
    							<div class="media-body pad-hor speech-left">
    								<div class="speech">
    									<a href="#" class="media-heading">server</a>
    									<p id="server">
    										<?php echo $phpvar;?>


    									</p>
    									<p class="speech-time">
    										<i class="fa fa-clock-o fa-fw"></i> 09:23AM
    									</p>
    								</div>
    							</div>
    						</li>
    						 -->
    						
    						
    						
    						
    						
    					</ul>
    				</div>
    			<div class="nano-pane"><div class="nano-slider" style="height: 141px; transform: translate(0px, 0px);"></div></div></div>
                
    			<!--Widget footer-->
    			<div class="panel-footer">
    				<div class="row">
    					<div class="col-xs-9">
    					<form id="form"  name="form" method="post">
    						<input name="input" id="input" type="text" placeholder="Enter your text" class="form-control chat-input" style="height: auto;" required>
    					
                        </div>
                        
    					<div class="col-xs-3">
    						<button class="btn btn-primary btn-block" type="submit" name="submit" id="submit" >Send</button>
    					</div>
    					</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript">

    $("#form").submit(function(){  
        var myTextFieldValue = $("#input").val();
        $.ajax({
            url: 'process.php',
            data:{myTextFieldValue:myTextFieldValue},
            success:function(data){
                if(data=="true"){
                    alert('success');
                }else{
                    alert('fail'+ data);
                    //alert(data);
                }
            }
        });
        //$('#input').noText();
        return false;
    });    





// $(document).ready(function() {	
	

	

// 	// submit form using $.ajax() method
	
// 	$('#form').submit(function(e){
		
// 		e.preventDefault(); // Prevent Default Submission
		
// 		$.ajax({
// 			url: 'process.php',
// 			type: 'POST',
// 			data: $(this).serialize() // it will serialize the form data
// 		})
		
// 		.fail(function(){
// 			alert('Ajax Submit Failed ...');	
// 		});
// 	});
// 	});
</script>
<?php
echo"";


?>
</body>
</html>