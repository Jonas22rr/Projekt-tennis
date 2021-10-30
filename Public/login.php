<html>
<header>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="loginstyle.css">
    <script src="login.js"></script>
    <title>Login</title>
    <style>
    body {
        background-color: #34495e;
        margin: auto;
    }



    .box {
        background-color: black;
        width: 600px;
        height: 600px;
        margin-top: 200px;
        border-radius: 10px;
        box-shadow: 10px 5px 5px grey;
    }

    .lable {
        color: white;
        font-size: 22px;
        font-weight: 500;
        font-family: Verdana;
        padding: 10px 0px;
        float: left;
    }

    .input {
        width: 300px;
        height: 40px;
        font-size: 16px;
        font-weight: 500;
        font-family: Verdana;
    }

    .btn {
        margin: 20px;
    }

    #btn {
        width: 120px;
        height: 40px;
        font-size: 14px;
        font-family: Verdana;
        font-weight: 500;
        border-radius: 7px;
        text-decoration: none;
        border-color: white;
    }

    #btn:hover {
        background-color: lightgreen;
    }

    h1 {
        color: lightblue;
        font-family: Verdana;
        font-size: 35px;
        font-weight: 600;
    }

    .main {
        width: 300;
    }
    </style>
</header>

<body>
    <div class="container" align="center">
        <div class="box">
            <form action="process.php" method="POST" class="form-horizontal">

                <br>
                <?php
                session_start();
                if ('1' == $_GET['error']) {
                ?>
                <div><?php echo 'Bitte füllen Sie die leeren Felder aus'; ?></div>
                <?php
                } elseif ('2' == $_GET['error']) {
                ?>
                <div><?php echo 'Die Kombination aus Benutzername und Passwort ist falsch.'; ?></div>
                <?php
                } else {
                }
                ?>
                <h1>Benutzer Login</h1>
                <div class="main">
                    <div class="form-group">
                        <div class="lable">
                            <label>Benutzername</label>
                        </div>
                        <div class="col-md-9">
                            <input autocomplete="off" type="text" name="username" class="form-control input" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="lable">
                            <label>Passwort</label>
                        </div>
                        <div class="col-md-9">
                            <input autocomplete="off" type="password" name="password" class="form-control input" />
                        </div>
                    </div>
                    <div class="btn">
                        <button id="btn" type="submit" name="Login" class=" btn-success">Einloggen</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>