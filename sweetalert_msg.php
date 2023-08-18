<?php
    // 
    if (isset($_SESSION['status'])) 
    {
    ?>
    <script>
        swal({
        title: "<?php echo $_SESSION['status']?>",
        text: "<?php echo $_SESSION['status_text']?>",
        icon: "<?php echo $_SESSION['status_code'];?>",
        });
    </script>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
    <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey!</strong><?= $_SESSION['status']; ?>
            <strong>Hey!</strong><?= $_SESSION['message']; ?>
        </div> -->
    </body>
    </html>
    <?php
    unset($_SESSION['status']);
    }
?>