<?php
// Start a session to manage user sessions
session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    // If the user is not logged in, redirect them to the login page (index.php)
    header("Location: index.php");
    exit(); // Exit to stop executing the rest of the script
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Connections</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Styles for the page */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .video-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 130%;
            overflow: hidden;
            z-index: -1;
            object-fit: inherit;
            pointer-events: none;
        }

        video {
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
    <link rel="stylesheet" href="dar.css">
</head>

<body>
    <!-- Video background -->
    <div class="video-container">
        <video autoplay muted loop>
            <source src="" type="video/mp4"> <! add a backgroung image or video-->
            Your browser does not support the video tag.
        </video>
    </div>

    <!-- Gallery section -->
    <div class="gallery">         <! below given are the sample names of the known colleges and institutes-->
        <figure class="card" onclick="redirectToPage('iit_chennai.html')">
            <img src="" alt="IIT Chennai">
        </figure>
        <figure class="card" onclick="redirectToPage('iit_kharagpur.html')">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/1/1c/IIT_Kharagpur_Logo.svg/1200px-IIT_Kharagpur_Logo.svg.png" alt="IIT Kharagpur">
        </figure>
        <figure class="card" onclick="redirectToPage('iiit_hyd.html')">
            <img src="https://img.jagranjosh.com/images/2023/August/2882023/12994350_10153689299723717_23227308946167917_n.jpg" alt="IIIT Hyderabad">
        </figure>
        <figure class="card" onclick="redirectToPage('nit_trichy.html')">
            <img src="https://upload.wikimedia.org/wikipedia/commons/0/0b/NITT_logo.png" alt="NIT Trichy">
        </figure>
        <figure class="card" onclick="redirectToPage('srmu.html')">
            <img src="https://upload.wikimedia.org/wikipedia/en/f/fe/Srmseal.png" alt="SRM">
        </figure>
        <figure class="card" onclick="redirectToPage('VIT.html')">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c5/Vellore_Institute_of_Technology_seal_2017.svg/800px-Vellore_Institute_of_Technology_seal_2017.svg.png" alt="VIT">
        </figure>
        <figure class="card" onclick="redirectToPage('iit_kanpur.html')">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQA2C3QihwRWFefF7coZsk227lo4Flw5piUxEmgfaR4MQ&s" alt="IIT Kanpur">
        </figure>
    </div>

    <!-- JavaScript for page redirection -->
    <script>
        function redirectToPage(pageURL) {
            window.location.href = pageURL;
        }
    </script>
</body>

</html>
