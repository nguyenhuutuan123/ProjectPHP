<?php   
session_start();  
include ("connection_db.php"); 
if(isset($_POST["add_to_cart"]))  
{  
  if (!isset($_SESSION['username'])) {

        header("location: login.php");
    }
  elseif(isset($_SESSION["shopping_cart"]))  
  {  
   $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
   if(!in_array($_GET["id"], $item_array_id))  
   {  
    $count = count($_SESSION["shopping_cart"]);  
    $item_array = array(  
     'item_id'=>$_GET["id"],  
     'item_name'=>$_POST["prod_name"],  
     'item_price'=>$_POST["new_price"] 
     
   );  
    $_SESSION["shopping_cart"][$count] = $item_array;
  }  
  else  
  {  
    echo '<script>alert("Item Already Added")</script>';  
    echo '<script>window.location="home.php"</script>';  
  }  
}  
else  
{  
 $item_array = array(  
  'item_id'=>$_GET["id"],  
  'item_name'=>$_POST["prod_name"],  
  'item_price'=>$_POST["new_price"]
);  
 $_SESSION["shopping_cart"][0] = $item_array;  
}  
}   
?>