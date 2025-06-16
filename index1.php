<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alumconnect</title>
    <link rel="stylesheet" href="sam5.css"> <!-- Update the path if needed -->
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Alum</h2>
                <h2>Connect</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="connections.php">CONNECTIONS</a></li>
                    <li><a href="#">VISION</a></li>
                    <li><a href="connect.html">CONTACT</a></li>
                </ul>
            </div>
        </div>

        <div class="content">
            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']): ?>
                <!-- User is logged in -->
                <h1>Welcome back, <?php echo htmlspecialchars($_SESSION['user_email']); ?>!</h1>
                <p>Thank you for being a part of Alumconnect. Explore the connections page.</p>
                <button class="cn"><a href="connections.php">Go to Connections</a></button>
            <?php else: ?>
                <!-- User is not logged in -->
                <h1>Make a Connection<br><span>Bridge the gap! Freshers</span> <br>-Alumni</h1>
                <p class="par">Freshers, elevate your university journey! Connect with seniors and alumni to gain<br> guidance, share experiences, and build lasting relationships that inspire success!<br>Get the invaluable mentorship, advice, and friendships that will shape<br> your university experience and future career!</p>
                
                <button class="cn"><a href="signup.php">SIGN UP</a></button>
                
                <div class="form">
                    <h2>Login Here</h2>
                    <form id="loginForm">
                        <input type="email" name="email" placeholder="Enter Email Here" required>
                        <input type="password" name="password" placeholder="Enter Password Here" required>
                        <button class="btnn" type="submit">Login</button>
                    </form>
                    
                    <p class="link">Don't have an account?<br>
                        <a href="signup.php">Sign up here</a></p>
                    <p class="liw">Log in with</p>

                    <div class="icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script>
    // Add the JavaScript code for handling the login form submission
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const email = event.target.email.value;
        const password = event.target.password.value;

        // Perform login request
        fetch('login.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                email: email,
                password: password
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // User successfully logged in, reload the page
                window.location.reload();
            } else {
                // User authentication failed
                alert("Login failed. Please check your credentials or sign up.");
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
</script>
</body>

</html>
