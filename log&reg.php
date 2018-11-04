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
        <div>
            <button name="Log" onclick="deleteFormReg(),showFormLog()">Login</button>
            <button name="Reg" onclick="deleteFormLog(),showFormReg()">Register</button>
            <form name="logForm" id="logForm" action="login.dbd.php" style="display:none">
                E-mail:<input name="email" type="email"/>
                Password:<input name="pwd" type="password"/>
                <button name="sublogin" type="submit">Login</button>
            </form>
            <form name="regForm" id="regForm" action="register.dbd.php" style="display:none">
                E-mail:<input name="email" type="email"/>
                Password:<input name="pwd" type="password"/>
                Conferm password:<input name="ckpwd" type="password"/>
                <button name="subRegister" type="submit">Register</button>
            </form>
        </div>
    </body>
</html>