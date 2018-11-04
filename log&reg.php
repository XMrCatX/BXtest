<!DOCTYPE html>

<html>
    <head>
        <title>log&amp;reg</title>
        <script type = "text/javascript">
            function showFormLog() {document.getElementById("logForm").style.display = "block";}
            function showFormReg() {document.getElementById("regForm").style.display = "block";}
            function deleteFormLog() {document.getElementById("logForm").style.display = "none";}
            function deleteFormReg() {document.getElementById("regForm").style.display = "none";}
        </script>
        <link rel="stylesheet" type="text/css" href="css/logPageStyle.css"/>.
    </head>
    <body>
        <div class="main-container">
            <img src="pics/logo_bx.png" width="400px" height="410px" alt="BX-logo"/>
            <button name="Log" onclick="deleteFormReg(),showFormLog()">Login</button>
            <button name="Reg" onclick="deleteFormLog(),showFormReg()">Register</button>
            <form name="logForm" id="logForm" action="php/login.db.php" method="post" style="display:none">
                <input name="email" type="email" placeholder="E-mail"/>
                <input name="pwd" type="password" placeholder="Password"/>
                <button name="sublogin" type="submit">Login</button>
            </form>
            <form name="regForm" id="regForm" action="php/register.db.php" method="post" style="display:none">
                <input name="email" type="email" placeholder="E-mail"/>
                <input name="pwd" type="password" placeholder="Password"/>
                <input name="ckpwd" type="password" placeholder="Confirm Password"/>
                <button name="subRegister" type="submit">Register</button>
            </form>
        </div>
        <footer>
        <div class="footer-box">
            <lu>
                <li><a href="http://www.bxbrussels.com/nl/copyright/">© Copyright BX Brussels</a></li>
                <li><a href="http://www.bxbrussels.com/fr/privacy-policy-fr/">Privacybeleid</a></li>
                <li><a href="http://www.bxbrussels.com/fr/about-fr/">About</a></li>
            </lu>
        </div>
    </footer>
    </body>
</html>
