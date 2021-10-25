<!-- contact -->



<h1 class="title" id="contact">CONTACT</h1>
<div class="contatct_container">
    <form class="form_container">
        <input id="name" class="input" name="name" type="text" placeholder="Naam" size="30"><br>
        <input id="email" class="input" name="email" type="text" placeholder="E-mail adres" size="30"><br>
        <input id="subject" class="input" name="subject" type="text" placeholder="Subject" size="30"><br>
        <textarea name="message" id="message" class="input" cols="30" rows="8"></textarea><br>
        <input id="btn" class="submite" type="submit" value="Send" name="submit">
    </form>
    <div class="map">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="450" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=Pretoriusstraat%2092&t=&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                </iframe>
            </div>
        </div>
    </div>



</div>
<div class="php_notif" style="margin: 0 auto; text-align:center">
    <?php

    if (isset($_GET['submit'])) {


        $sender = "";
        $body = "";
        $subject = "";
        if (isset($_GET['email'])) {
            $sender = $_GET['email'];
        }
        if (isset($_GET['message'])) {
            $sender = $_GET['message'];
        }
        if (isset($_GET['subject'])) {
            $subject = $_GET['subject'];
        }

        $to_email = "ennaji.zakaria01@gmail.com";
        $headers = "From: $sender ";
        $result = mail($to_email, $subject, $body, $headers);

        if (!$result) {
            echo "<p style=color:red>Email successfully sent to:  $to_email...</p>";
        } else {
            echo "<p style=color:red>Email sending failed...</p>";
        }
    }



    ?>
</div>