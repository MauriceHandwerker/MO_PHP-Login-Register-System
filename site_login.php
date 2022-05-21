<?php

include "php/connect.php";


?>
<!DOCTYPE html>
<html>

<head>
    <title>TEST</title>

    <link rel="stylesheet" href="css/site_login.css">
</head>

<body>

    <header>
        <nav>

        </nav>
    </header>

    <section>
        <center>

            <?php 
                if(isset($errorMessage)) {
                    echo $errorMessage;
                }
            ?>

            <div>
                <form action="php/login.php" method="POST">
                    <input type="email" name="email" id="email" placeholder="E-mail"> <br>
                    <input type="password" name="password" id="password" placeholder="Password"> <br>
                    <input type="submit" placeholder="Login" name="login-btn">
                </form>
            </div>
        </center>
    </section>

    <footer>

    </footer>

</body>

</html>