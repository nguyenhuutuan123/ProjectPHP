
<?php 
error_reporting(1);
include("connection_db.php");
//$namePr = $fileUpload   = $categoryPr   = $quantityPr = $pricePr = $descriptPr = "";

if (isset($_FILES['fileUpload'])) {
    if ($_FILES['fileUpload']['error'] > 0)
        echo "Upload lỗi rồi!";
    else {
        move_uploaded_file($_FILES['fileUpload']['tmp_name'], 'uploads/' . $_FILES['fileUpload']['name']);

    }
}


$sql = "INSERT INTO products (prod_name, code, img, category_id, quantity, new_price, status_id, description) VALUES (?, ?, ? , ? ,? , ?, ?, ?)";

if($stmt = $mysqli->prepare($sql)){

    $stmt->bind_param("sssiiiis", $namePr, $codePr ,$fileUpload, $categoryPr, $quantityPr, $pricePr,$statusPr, $descriptPr);
    
    
    $namePr = $_POST['txtName'];
    $codePr = $_POST['code'];
    $fileUpload = $_FILES['fileUpload']['name'];
    $categoryPr = $_POST['category'];
    $quantityPr = $_POST['txtNumber'];
    $pricePr = $_POST['txtPrice'];
    $statusPr = $_POST['txtStatus'];
    $descriptPr = $_POST['txtDescript'];
    $stmt->execute();
    
    
    
    $aa=  "Records inserted successfully.";
} else{
    echo "ERROR: Could not prepare query: $sql. " . $mysqli->error;
}

$stmt->close();
$mysqli->close(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>
    <center>
        <h3 value="<?php echo $aa; ?>"></h3>
        <a href="select.php"><button type="button" name=" " class="btn btn-primary">Xem</button></a>
    </center>
</body>
</html>






