<?php

include "php/connect.php";


?>
<!DOCTYPE html>
<html>

<head>
    <title>TEST</title>

    <link rel="stylesheet" href="css/site_register.css">
</head>

<body>

    <header>
        <nav>

        </nav>
    </header>

    <section>
        <center>
            <div>
                <form action="php/register.php" method="POST">
                    <input type="text" name="username" id="username" placeholder="Username"> <br>
                    <input type="email" name="email" id="email" placeholder="E-mail"> <br>
                    <input type="email" name="repemail" id="repemail" placeholder="Repeat E-Mail"> <br>
                    <input type="password" name="password" id="password" placeholder="Password"> <br>
                    <input type="password" name="reppassword" id="reppassword" placeholder="Repeat Password"> <br>
                    <input type="submit" name="register-btn" placeholder="Register">
                </form>
            </div>
        </center>
    </section>

    <footer>

    </footer>

</body>

</html>