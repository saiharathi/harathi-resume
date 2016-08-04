<?php
if(isset($_POST['send']))
  {
   $emailbody='First Name:'.$_POST['email']."\n"
   .'Phone:'.$_POST['num']."\n"
   .'Email:'$_POST['password']."\n"
   .'Suggestions:'$_POST['Sug']."\n"
   .'May i contact you:'$_POST['may']"\n"
   mail('bhargavaraja12@gmail.com','Feedback',$emailbody);
  }
?>