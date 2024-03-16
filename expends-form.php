<!DOCTYPE html>
<html lang="en">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
<body>

<div class="container-fluid">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <label for="price" class="form-label">ราคา :</label>
                <input type="number" name="price" class="form-control">
            </div>
            <div class="col">
                <label for="date" class="form-label">วันที่จ่าย :</label>
                <input type="date" name="date" class="form-control">
            </div>
            <div class="col">
                <label for="type" class="form-label">ประเภท :</label>
                <select name="type" class="form-select">
                    <option value="E">ค่าไฟ</option>
                    <option value="W">ค่าน้ำ</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="img" class="form-label">รูปภาพ :</label>
                <input type="file" name="img" class="form-control">
            </div>
        </div>
        <input type="submit" class="btn btn-primary mt-1" value="บันทึก" >
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
<?php 

include("dbcon.php");
if(isset($_POST["price"])){
    $price = $_POST["price"];
    $date = $_POST["date"];
    $type = $_POST["type"];

    $sql = "INSERT INTO paid(type, price, date) VALUES('$type','$price','$date')";
    $result = mysqli_query($con,$sql);
}

?>