<html>

<body>

<?php

 if(($_POST["bgcolor"]=="")&&($_POST["fsize"]=="")&&($_POST["fcolor"]=="")&&($_POST["ftype"]=="")&&($_POST["pmargin"]==""))
	 die(" Please Select required things "); 
 
  if(($_POST["bgcolor"]=="")||($_POST["fsize"]=="")||($_POST["fcolor"]=="")||($_POST["ftype"]=="")||($_POST["pmargin"]==""))
	 die(" you have not selected something from the above  option "); 
 
 
 $back=$_POST["bgcolor"];
 $size=$_POST["fsize"];
 $color=$_POST["fcolor"];
 $type=$_POST["ftype"];
 $margin=$_POST["pmargin"];
 
 ?>
 
 <style>
 #pp{
	
	 margin:<?php echo $margin;?>;
	 color:<?php echo $color; ?>;
font-family:<?php echo $type; ?>;
font-size:<?php echo $size; ?>;
text-align:center;
background-color:<?php echo $back; ?>;
 }
 
 
 </style>
 
 <p id=pp>welcome <br>
 This is the site which consists of all the elements you required that will help you to understand waht is there in this page. So guys just see and enjoy if any errors please inform me in advance.<br>Thank you
</p>
 </body>
 </html>