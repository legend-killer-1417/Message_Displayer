<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Message Website</title>
</head>
<body>
    <header>
        <h1>Welcome to Legend-Killer-1417's Code</h1>
    </header>
    <div class="container" onmouseover="changeBodyBackground(true)" onmouseout="changeBodyBackground(false)">
        <?php
            $message = file_get_contents('message.txt');
            echo "<p>$message</p>";
        ?>
    </div>
    <button onclick="window.location.href='admin-login.php'">Admin Login</button>

    <script>
        function changeBodyBackground(isHovered) {
            document.body.style.background = isHovered ? "linear-gradient(to right, #3498db, #2c3e50)" : "linear-gradient(to left, #3498db, #2c3e50)";
        }
    </script>
</body>
</html>
