<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <main class="main">
        <img src="img/beach.jpg" alt="" class="bg-fit">
        <div class="container">
            <p>Send E-Mail</p>
            <form action="contactform.php" method="post" class="contact-form">
                <input type="text" name="name" placeholder="Full name">
                <input type="text" name="mail" placeholder="Your Email">
                <input type="text" name="subject" placeholder="Subject">
                <textarea name="message" placeholder="Message"></textarea>
                <button type="submit" name="submit">Send Mail</button>
            </form>
        </div>
    </main>
</body>
</html>