<?php
// اكتب لعبة Guess the Number يختار الكمبيوتر رقمًا عشوائيًا من 1 الى 10 ويطلب من اللاعب تخمين هذا الرقم. في كل مرة يخمن فيها اللاعب ، يجب أن يعطي الكمبيوتر للاعب تلميحًا عما إذا كان الرقم مرتفعًا أو منخفضًا. يجب أن يتتبع الكمبيوتر أيضًا عدد التخمينات. بمجرد أن يخمن اللاعب الرقم الصحيح ، يجب أن يقدم الكمبيوتر عدد التخمينات.

// Let's play Guess the Number.
// I have my number. What's your guess? 1
// low. Guess again: 5
// high.Guess again: 2 
// You got it in 3 guesses!

// echo "Let's play Guess the Number.";
// $Cnum=rand(1,10);echo "The computer number".$Cnum;
// $Unum=readline("I have my number. What's your guess?");
// if($Cnum==$Unum){
//     echo "You got it in guesses! ";
// }elseif($Unum>$Cnum){
//     echo "High Guess again:";
// }elseif($Unum<$Cnum){
//         echo "Low Guess again:";
// }
$i=1;
echo "Let's play Guess the Number.\n";
$Cnum=rand(1,10);echo "The computer number".$Cnum;
$Unum=readline("I have my number. What's your guess?");
while ($Cnum!=$Unum){
$i++;

 if($Unum>$Cnum){
  $Unum=readline("High Guess again:");
}
 elseif($Unum<$Cnum){
  $Unum=readline("Low Guess again:");
}
}
echo "You got it in ". $i ." guesses! ";

?>