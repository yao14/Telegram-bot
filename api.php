<?php

include'db_conn.php'; 

include'sendmsg.php'
?>
<?php


?>

<?php 

//$bottoken ="273311630:AAFcQqlmIX8nJvW0cULCyaL-xgJmcFkC8Dw";
//$website = "https://api.telegram.org/bot".$bottoken;



//$text=$updateArray["result"][0]["message"]["text"];
//print_r($text);

//$text1=$updateArray["result"][1]["message"]["text"];
 //print_r($text1);

 require_once'count.php';

 //echo $array_count;
 //echo $length;
 //echo $_SESSION["count"];
 //$newlength=$length;

 //$newlength1 = count($updateArray["result"]);
 //$newlength = count($updateArray["result"]);
 echo $length;




 //echo "<br>".$length;
$text=$updateArray["result"][$length-1]["message"]["text"];
// //$text0=$updateArray["result"][$length]["message"]["text"];
$text=strtolower($text);
 $chat_id=$updateArray["result"][0]["message"]["chat"]["id"];

 //$date=$updateArray["result"][0]["message"]["date"];

 include'array.php'; 

if ($length>$array_count) {
    
            //echo $text;
        //$bottext="no internet";
         if($text == 'hi'){
            //file_get_contents($web."/sendmessage?chat_id=".$chat_id."&text=hello");
           //$bottext="welcome to VVU FAQ BOT . What do you want to know";
            sendmsg($text,"welcome to VVU FAQ BOT . What do you want to know",$conn,$web,$chat_id);
           
        } 
        else if($text == 'ciao'){
            //file_get_contents($web."/sendmessage?chat_id=".$chat_id."&text=bye");
             //$bottext="bye";
            sendmsg($text,"bye",$conn,$web,$chat_id);
        echo "bye";
        }

        else{


        

#-------send user msg to the database------------#
$query_text="INSERT INTO bot_text(msg, source)
    VALUES('$text', 'user')";


    $result_text = mysqli_query($conn, $query_text);
    if ($result_text){
       echo "true";
        //return true;
    }else {
        //echo "false";
        //$error=mysqli_error($conn);
        echo mysqli_error($conn);
    }

$query_question="SELECT * FROM `questions` WHERE  `questions`.`questions` LIKE '%$text%'";


         $result_question = mysqli_query($conn, $query_question); 
         if ($result_question) {
                echo"cool ".'<br>';
              } else {
            echo " not cool ";
                  }

                  $usercount=mysqli_num_rows($result_question);
                  echo $usercount .'<br>';
                  if ($usercount==0) {

                    $bottext="Please reformalute your question or provide a key word";
                  } else {
                    

                         while ( $row=mysqli_fetch_assoc($result_question)) {
                
                         $bottext=$row["answers"];
                         //echo $bottext;

                         file_get_contents($web."/sendmessage?chat_id=".$chat_id."&text=".$bottext);

                         #-------send bot msg to the database------------#
                         $bot_source="bot";
                            $query_bot="INSERT INTO bot_text(msg, source)
                            VALUES('$bottext', '$bot_source')";


                            $result_bot = mysqli_query($conn, $query_bot);
                            if ($result_bot){
                               echo "true";
                                //return true;
                            }else {
                                //echo "false";
                                //$error=mysqli_error($conn);
                                echo mysqli_error($conn);
                            }

                                                                                 } 

                            }




// file_get_contents($web."/sendmessage?chat_id=".$chat_id."&text=".$bottext);
// $bot_source="bot";





}


#-------update array count------------#
$array_count=$array_count+1;
$query_update=" UPDATE  `bot`.`array` SET  `count`='$array_count'  WHERE  `arrayid` ='1'";


    $result_update = mysqli_query($conn, $query_update);
    if ($result_update){
       echo "updated";
        //return true;
    }else {
        //echo "false";
        //$error=mysqli_error($conn);
         echo "not updated";
        echo mysqli_error($conn);
    }





} else {
    # code...
}


// //print_r($chat_id);
// echo "<br>".$chat_id;

// //file_get_contents($website."/sendmessage?chat_id=".$chat_id."&text=test");
// $text = $updateArray["result"][$length-1]["message"]["text"];



//$bottext="bot";
// $query_text ="INSERT INTO bot_text(msg, source)
//     VALUES('$bottext', '$bot_source')";


//     $result_text  = mysqli_query($conn, $query_text );
//     if ($result_text ){
//        echo "true";
//         //return true;
//     }else {
//         //echo "false";
//         //$error=mysqli_error($conn);
//         echo mysqli_error($conn);
//     }



    



// $my_array = array("Dog","Cat","Horse");

// //echo $my_array ;
// array_push($my_array,$bottext);
// print_r($my_array);
// $length1 = count($my_array);


?>