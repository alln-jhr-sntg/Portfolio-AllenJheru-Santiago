<?php 
    if (file_exists('includes/config.php')) {
        include_once 'includes/config.php';
    } else {
        echo "<p>Error: 'includes/config.php' not found.</p>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio - <?php echo htmlspecialchars($name); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" media="all">
</head>
<body>
    <?php 
    if (file_exists('includes/header.php')) {
        include_once 'includes/header.php'; 
    } else {
        echo "<p>Error: 'includes/header.php' not found.</p>";
    }
    ?>
    <?php 
    if (file_exists('includes/nav.php')) {
        include_once 'includes/nav.php'; 
    } else {
        echo "<p>Error: 'includes/nav.php' not found.</p>";
    }
    ?>
    <?php 
    if (file_exists('includes/main.php')) {
        include_once 'includes/main.php'; 
    } else {
        echo "<p>Error: 'includes/main.php' not found.</p>";
    }
    ?>
    <?php 
    if (file_exists('includes/footer.php')) {
        include_once 'includes/footer.php'; 
    } else {
        echo "<p>Error: 'includes/footer.php' not found.</p>";
    }
    ?>

    <script src="js/script.js" defer></script>
</body>
</html>
