<?php
// Save this file with a .php extension, e.g., greeting.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Greeting Page</title>
    <link rel="stylesheet" href="style.css">
  </head>
<body>
    <div class="greeting-container">
        <?php
            // Get the current hour in 24-hour format
            $hour = date("H");

            // Determine the appropriate greeting
            if ($hour < 12) {
                $greeting = "Good Morning!";
                $description = "Start your day with a positive mindset.";
            } elseif ($hour < 18) {
                $greeting = "Good Afternoon!";
                $description = "Hope your day is going well.";
            } else {
                $greeting = "Good Evening!";
                $description = "Relax and unwind after a long day.";
            }
        ?>

        <!-- Display the Greeting -->
        <h1 class="greeting"><?php echo $greeting; ?></h1>
        <p class="description"><?php echo $description; ?></p>
        <a href="features.html">
            <button class="button">Learn More</button>
        </a>
    </div>
</body>
</html>
