<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>
<body>
    <?php include("dbcon.php"); 
    include("nav.php"); 
    $sql = "SELECT * FROM paid WHERE type = 'E'";
    $result1 = mysqli_query($con,$sql);
    ?>
    <div class="container justify-content-center">
        <h1>ค่าไฟ</h1>
    <?php include("expends-form.php"); ?>

    <table class="table">
        <thead>
            <td>วันที่จ่าย</td>
            <td>ราคา</td>
        </thead>
        <tbody>
            <?php foreach($result1 as $row){ ?>
                <tr>
                    <td><?php echo $row["date"]; ?></td>
                    <td><?php echo $row["price"]; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>