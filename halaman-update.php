<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update</title>
    <link rel="stylesheet" href="stylesheet.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
</head>

<!-- GET DATA -->
<?php
$id = $_GET["ID"];
include "config.php";
$sql = mysqli_query($con, "SELECT * FROM `tabeltodo` WHERE `Id` = '$id'");
$data = mysqli_fetch_array($sql);
?>

<body class="body">
    <!-- <form action="update.php" method="post">
        <div class="container">
            <div class="row justify-content-center bg-white m-auto shadow mt-3 py-3 col-md-6">
                <h2 class="text-center text-warning font-monospace">TODO LIST</h2>
                <div class="col-8">
                    <input type="text" value="" name="list" class="form-control shadow">
                </div>
                <div class="col-2">
                    <button class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i></button>
                    <input type="hidden" name="id" value="">
                </div>
            </div>
        </div>
    </form> -->

    <div class="change">
        <form action="update.php" method="post">
            <div class="container">
                <div class="row justify-content-center m-auto shadow mt-3 py-3 col-md-6">
                    <h2 class="text-center text-warning font-monospace">Edit / Change Todo</h2>
                    <div class="col-8">
                        <input type="text" value="<?php echo $data["List"] ?>" name="list" class="form-control shadow bg-dark text-light">
                    </div>
                    <div class="col-2">
                        <button class="tombol"><i class="fa-regular fa-pen-to-square"></i></button>
                        <input type="hidden" name="id" value="<?php echo $data["Id"] ?>">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <form action="insert.php" method="post">
        <div class="container">
            <div class="row justify-content-center m-auto shadow mt-3 py-3 col-md-30">
                <h2 class="text-center text-warning font-monospace">TODO LIST</h2>
                <div class="col-8">
                    <input type="text" name="list" class="form-control shadow bg-dark text-light">
                </div>
                <div class="col-2">
                    <button class="tombol"><i class="fa-solid fa-plus"></i></button>
                </div>
            </div>
        </div>
    </form>

    <!-- GET DATA FROM LOCALHOST -->
    <?php
    include "config.php";
    $sql = mysqli_query($con, "SELECT * FROM `tabeltodo`");

    $i = 1;
    ?>
    <!-- TAMPILKAN DATA -->
    <div class="wrapper">
        <?php
        while ($row = mysqli_fetch_array($sql)) {
        ?>

            <div class="box">
                <div class="number"><?php echo $i++ ?></div>
                <div class="bulat"></div>
                <div class="bulatBesar"></div>
                <div class="list"><?php echo $row["List"] ?></div>
                <div class="bottom">
                    <div class="update"><a href="halaman-update.php? ID=<?php echo $row['Id'] ?>" class="btn btn-outline-warning"><i class="fa-regular fa-pen-to-square">Edit</i></a></div>
                    <div class="delete"><a href="delete.php? ID=<?php echo $row['Id'] ?>" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can i">Delete</i></a></div>
                </div>
            </div>

        <?php
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>