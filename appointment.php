<?php
if($_POST["name"]=="username" && $_POST["email"]=="123@gmail.com"){
  echo '<script language="javascript">';
  echo 'alert("Appointment Booked Successfully...")';  
  echo '</script>';
}
else{
  echo '<script language="javascript">';
  echo 'alert("Doctors are not available at this slot...")';  
  echo '</script>';
}
?>
