<?php   
session_start();  
include ("connection_db.php"); 
if(isset($_POST["add_to_cart"]))  
{  
  if(isset($_SESSION["shopping_cart"]))  
  {  
   $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
   if(!in_array($_GET["id"], $item_array_id))  
   {  
    $count = count($_SESSION["shopping_cart"]);  
    $item_array = array(  
     'item_id'=>$_GET["id"],  
     'item_name'=>$_POST["hidden_name"],  
     'item_price'=>$_POST["hidden_price"],  
     'item_quantity'=>$_POST["quantity"]  
   );  
    $_SESSION["shopping_cart"][$count] = $item_array;
    echo "Added to your cart";
    echo "<button type='button' class='btn btn-default'><a href = 'viewcart.php'>viewcart</a></button>";  
  }  
  else  
  {  
    echo '<script>alert("Item Already Added")</script>';  
    echo '<script>window.location="shopping.php"</script>';  
  }  
}  
else  
{  
 $item_array = array(  
  'item_id'=>$_GET["id"],  
  'item_name'=>$_POST["prod_name"],  
  'item_price'=>$_POST["new_price"],  
  'item_quantity'=>$_POST["quantity"]  
);  
 $_SESSION["shopping_cart"][0] = $item_array;  
}  
}  
?>
<!DOCTYPE html>  
<html>  
<head>   
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>  
<body>  
 <br />  
 <div class="container" style="width:700px;">   
  <?php  
  $query = "SELECT * FROM products ORDER BY id ASC";  
  $result = mysqli_query($mysqli, $query);  
  if(mysqli_num_rows($result) > 0)  
  {  
   while($row = mysqli_fetch_array($result))  
   {  
    ?>  
    <div class="col-md-4">  
     <form method="post" action="shopping.php?action=add&id=<?php echo $row["id"]; ?>">  
      <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
       <img src="<?php echo $row["img"]; ?>" class="img-responsive" /><br />  
       <h4 class="text-info"><?php echo $row["prod_name"]; ?></h4>  
       <h4 class="text-danger">$ <?php echo $row["new_price"]; ?></h4>  
       

       <input type="hidden" name="prod_name" value="<?php echo $row["prod_name"]; ?>" />  
       <input type="hidden" name="new_price" value="<?php echo $row["new_price"]; ?>" />  
       <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
     </div>  
   </form>  
 </div>  
 <?php  
}  
}  
