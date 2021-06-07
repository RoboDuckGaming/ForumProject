<?php
session_start();
include("header.php");
?>
<html lang="en">
<body>
<section class="contact-form">
    <form id="contact-form" method="post" action="contactAction.php">
        <section>
            <input name="name" type="text" class="form-control" placeholder="Username" required>
            <br>
        </section>
        <section>
            <input name="email" type="email" class="form-control" placeholder="Email" required>
        </section>
        <section>
            <textarea name="message" class="form-control" placeholder="Message" required></textarea><br>
            <input type="submit" class="form-control submit" value="SEND">
        </section>
    </form>
</section>
</body>
</html>