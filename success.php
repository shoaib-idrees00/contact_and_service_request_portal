<?php

$name = $_GET["name"] ?? "Customer";

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Request Submitted</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<header class="header">

    <div class="container">

                <h1 class="logo"><a class="logo-a" href="index.php">C & S Request Portal</a></h1>

    </div>

</header>


<main>

<section class="intro">

    <div class="container">

        <h2>
            Thank you, <?php echo htmlspecialchars($name); ?>!
        </h2>

        <p>
            Your service request has been received.
            Our team will contact you shortly.
        </p>

        <br>

        <a href="index.php" class="btn">
            Back to Home
        </a>

    </div>

</section>

</main>


<footer class="footer">

    <p>© 2026 C & S request Portal. All rights reserved.</p>

</footer>

</body>

</html>