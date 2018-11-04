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
        <header>
            <h1>BX Brussels</h1>
        </header>
        <div class="main-container">
            <button name="Log" onclick="deleteFormReg(),showFormLog()">Login</button>
            <button name="Reg" onclick="deleteFormLog(),showFormReg()">Register</button>
            <form name="logForm" id="logForm" action="login.dbd.php" style="display:none">
                <input name="email" type="email" placeholder="E-mail"/>
                <input name="pwd" type="password" placeholder="Password"/>
                <button name="sublogin" type="submit">Login</button>
            </form>
            <form name="regForm" id="regForm" action="register.dbd.php" style="display:none">
                <input name="email" type="email" placeholder="E-mail"/>
                <input name="pwd" type="password" placeholder="Password"/>
                <input name="ckpwd" type="password" placeholder="Confirm Password"/>
                <button name="subRegister" type="submit">Register</button>
            </form>
        </div>
    </body>
    <footer>

    </footer>
</html>
