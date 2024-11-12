<?php
require_once 'database/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="script.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/media/logo/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Луна</title>
</head>
<?php include 'components/header.php' ?>

<body>
    <?php
    if (isset($_GET['page'])) {
        if ($_GET['page'] === 'home') {
            include 'pages/home.php';
        } else if ($_GET['page'] === 'catalog-hair') {
            include 'pages/catalog-hair.php';
        } else if ($_GET['page'] === 'catalog-body') {
            include 'pages/catalog-body.php';
        } else if ($_GET['page'] === 'catalog-face') {
            include 'pages/catalog-face.php';
        } else if ($_GET['page'] === 'product') {
            include 'pages/product.php';
        } else if ($_GET['page'] === 'profile') {
            include 'pages/profile.php';
        } else if ($_GET['page'] === 'procedures') {
            include 'pages/procedures.php';
        } else if ($_GET['page'] === 'questions') {
            include 'pages/questions.php';
        } else if ($_GET['page'] === 'answer') {
            include 'pages/answer.php';
        } else if ($_GET['page'] === 'admin-people') {
            include 'pages/admin-people.php';
        } else if ($_GET['page'] === 'admin-products') {
            include 'pages/admin-products.php';
        } else if ($_GET['page'] === 'admin-answers') {
            include 'pages/admin-answers.php';
        } else if ($_GET['page'] === 'admin-add') {
            include 'pages/admin-add.php';
        } else if ($_GET['page'] === 'search') {
            include 'pages/search.php';
        }
    } else {
        include 'pages/home.php';
    }
    ?>
    <?php include 'components/footer.php' ?>
</body>

</html>