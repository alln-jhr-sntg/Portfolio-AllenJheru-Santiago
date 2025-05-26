<?php
$name = "Allen Jheru Santiago";
$age = 21;
$university = "AMA University Quezon City";
$hobbies = ["Reading Novels", "Watching Nature Documentaries", "Gaming"];
$favorites = [
    "Favorite Color" => "Green",
    "Favorite Dessert" => "Pudding",
    "Favorite Pastime" => "Being alone"
];

$intro = "Hello, my name is " . $name . ". I am " . $age . " years old and an aspiring programmer.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Portfolio - <?php echo $name; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/nav.php'; ?>
    <?php include 'includes/main.php'; ?>   
    <?php include 'includes/footer.php'; ?>

    <script src="js/script.js"></script>
</body>
</html>
