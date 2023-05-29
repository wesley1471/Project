<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" type="text/css" href= "<?php echo BASE_URL; ?>assets/css/style.css" >
    <link rel="stylesheet" type="text/css" href= "<?php echo BASE_URL; ?>includes/bootstrap/css/bootstrap.min.css" >
</head>
<body>
    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
</body>
<script src="<?php echo BASE_URL; ?>assets/js/app.js"></script>
    <script src="<?php echo BASE_URL; ?>includes/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</html>