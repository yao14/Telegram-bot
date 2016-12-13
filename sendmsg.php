<?php
function sendmsg($a,$b,$c,$d,$e){

#-------send user msg to the database------------#
$query_text="INSERT INTO bot_text(msg, source)
    VALUES('$a', 'user')";


    $result_text = mysqli_query($c, $query_text);
    if ($result_text){
       echo "true";
        //return true;
    }else {
        //echo "false";
        //$error=mysqli_error($conn);
        echo mysqli_error($c);
    }
    #---sending message with telegram-------#
file_get_contents($d."/sendmessage?chat_id=".$e."&text=".$b);


 #-------send bot msg to the database------------#
                         $bot_source="bot";
                            $query_bot="INSERT INTO bot_text(msg, source)
                            VALUES('$b', '$bot_source')";


                            $result_bot = mysqli_query($c, $query_bot);
                            if ($result_bot){
                               echo "true";
                                //return true;
                            }else {
                                //echo "false";
                                //$error=mysqli_error($conn);
                                echo mysqli_error($c);
                            }


}




?>