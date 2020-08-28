<!DOCTYPE html>
<?php
$con = new mysqli("localhost","root","","ecomm");

?>



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript">
$(document).ready(function(){
 //$("form").submit(function(e){

     $("#btn1").click(function(e){
     e.preventDefault();
    // alert('here');
        $(".apnew").append('<input type="text" placeholder="Enter youy Name" name="e1[]"/><br>');

    });
    //}
});
</script>

</head>

<body>
<h2><b>Register Form<b></h2>
<form method="post" enctype="multipart/form-data">
<table>
<tr><td>Name:</td><td><input type="text" placeholder="Enter youy Name" name="e1[]"/>
<div class="apnew"></div><button id="btn1">Add</button></td></tr>
<tr><td>Image:</td><td><input type="file"  name="e5[]" multiple="" accept="image/jpeg,image/gif,image/png,image/jpg"/></td></tr>

<tr><td>Address:</td><td><textarea  cols="20" rows="4" name="e2"></textarea></td></tr>
<tr><td>Contact:</td><td><div id="textnew"><input  type="number"  maxlength="10" name="e3"/></div></td></tr>
<tr><td>Gender:</td><td><input type="radio"  name="r1" value="Male" checked="checked"/>Male<input type="radio"  name="r1" value="feale"/>Female</td></tr>
<tr><td><input  id="submit" type="submit" name="t1" value="save" /></td></tr>
</table>
<?php
//echo '<pre>';print_r($_FILES);exit();
if(isset($_POST['t1']))
{
$values = implode(", ", $_POST['e1']);
$imgarryimp=array();
foreach($_FILES["e5"]["tmp_name"] as $key=>$val){


move_uploaded_file($_FILES["e5"]["tmp_name"][$key],"images/".$_FILES["e5"]["name"][$key]);

                     $fname = $_FILES['e5']['name'][$key];
                     $imgarryimp[]=$fname;
                     //echo $fname;

                     if(strlen($fname)>0)
                      {
                         $img = $fname;
                      }
                      $d="insert into users(name,address,contact,gender,image)values('$values','$_POST[e2]','$_POST[e3]','$_POST[r1]','$img')";

       if($con->query($d)==TRUE)
         {
         echo "Your Data Save Successfully!!!";
         }
}
exit;





                      // echo $values;exit;
                      //foreach($_POST['e1'] as $row) 
    //{ 

    $d="insert into users(name,address,contact,gender,image)values('$values','$_POST[e2]','$_POST[e3]','$_POST[r1]','$img')";

       if($con->query($d)==TRUE)
         {
         echo "Yoy Data Save Successfully!!!";
         }
    //}
    //exit;


}
?>

</form>

<table>
<?php 
$t="select * from users";
$y=$con->query($t);
foreach ($y as $q);
{
?>
<tr>
<td>Name:<?php echo $q['name'];?></td>
<td>Address:<?php echo $q['address'];?></td>
<td>Contact:<?php echo $q['contact'];?></td>
<td>Gender:<?php echo $q['gender'];?></td>
</tr>
<?php }?>
</table>

</body>
</html>