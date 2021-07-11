<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="cons.scss">
    <script src="https://kit.fontawesome.com/e391ce7786.js" crossorigin="anonymous"></script>
    <script src="app.js" defer></script>
</head>
<nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="#">Your Logo</a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
            <li><a href="indexlog.php">Home</a></li>
            <li><a href="index.php">Products</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li><a href="History.php">About us</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>

        <!-- just to make scrolling effect possible -->
			

<!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>


<!-- Contact -->

<body1>
    <div class="containerasd">
        <h2>Contact Us</h2>
        <p>Feel free to get in touch with me with anything related to Web Development or you can just say hi. I will get
            back to
            you as soon as possible.</p>
        <form action="index.html" method="POST">
            <input type="text" placeholder="Your name" required>
            <input type="email" placeholder="Email address" required>
            <input type="texr" placeholder="Subject" required>
            <textarea name="msg" id="msg" cols="30" rows="3" placeholder="Message"></textarea>
            <input type="submit" id="btn" value="Send">
        </form>
    </div>
    
</body1>
</html>