<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<nav class="blue">
    <div class="nav-wrapper container">
        <div class="brand-logo">PIS</div>
        <ul class="right">
            <li><a href="index.php"><i class="material-icons left">add</i>New</a></li>
            <li><a href="users.php"><i class="material-icons left">visibility</i>View</a></li>
        </ul>
    </div>
</nav>
<div class="row container">
    <p>&nbsp;</p>
    <h5 class="light">Personal Information Sytem</h5>
    <hr>
</div>
<div class="row container">
    <p>&nbsp;</p>
    <form action="data-base/create.php" method="POST" class="col s12">
        <fieldset class="register-form-grouper">
            
            <h5 class="light center">Add New Information</h5>

            <?php
            if(isset($_SESSION['msg'])):
                echo $_SESSION['msg'];
                session_unset();
            endif;
            ?>

            <!--Name-->
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="Name" id="Name" maxlength="255" required autofocus>
                <label for="Name">Title</label>
            </div>

            <!--Email-->
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" name="Email" id="Email" maxlength="255">
                <label for="Email">Email ID</label>
            </div>

            <div class="input-field col s12">
                <i class="material-icons prefix">business</i>
                <input type="text" name="business" id="business" maxlength="255">
                <label for="business">Address</label>
            </div>
            <!--Phone-->
            <div class="input-field col s12">
                <i class="material-icons prefix">phone</i>
                <input type="tel" name="Phone" id="Phone" maxlength="255">
                <label for="Phone">Phone Number</label>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">directions_car</i>
                <input type="tel" name="Vehicle" id="Vehicle" maxlength="255">
                <label for="Vehicle">Vehicle Registration</label>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">credit_card</i>
                <input type="tel" name="License" id="License" maxlength="255">
                <label for="License">License Number</label>
            </div>

            <div class="input-field col s12">
                <i class="material-icons prefix">chrome_reader_mode</i>
                <input type="tel" name="Aadhar" id="Aadhar" maxlength="255">
                <label for="Aadhar">Aadhar Number</label>
            </div>

            <div class="input-field col s12">
                <i class="material-icons prefix">fact_check</i>
                <input type="tel" name="Election" id="Election" maxlength="255">
                <label for="Election">Election ID</label>
            </div>
            <!--Buttons-->
            <div class="input-field col s12">
                <input type="submit" value="Save" class="btn flx blue">
                <input type="reset" value="Clear" class="btn flx grey">
            </div>

        </fieldset>
    </form>
</div>
    <script type="text/javascript" src="materialize/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>

