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
<!--Register form-->
<div class="row container">
    <p>&nbsp;</p>
    <h5 class="light">Information Edit</h5>
    <hr>
</div>

<?php
include_once 'data-base/connection.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$_SESSION['id'] = $id;
$querySelect = $link->query("SELECT * FROM TB_USERS WHERE ID = '$id'");

while($registers = $querySelect->fetch_assoc()):
    $name  = $registers['Name'];
    $email = $registers['Email'];
    $address=$registers['Address'];
    $phone = $registers['Phone'];
    $vehicle=$registers['Vehicle'];
    $license=$registers['License'];
    $aadhar=$registers['Aadhar'];
    $election=$registers['Election'];

endwhile;

?>

<!--Register form-->
<div class="row container">
    <p>&nbsp;</p>
    <form action="data-base/update.php" method="POST" class="col s12">
        <fieldset class="register-form-grouper">
            <h5 class="light center">Update Information</h5>
            <!--Name-->

   <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="Name" id="Name" value="<?php echo $name ?>" maxlength="255" required autofocus>
                <label for="Name">Title</label>
            </div>

            <!--Email-->
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" name="Email" value="<?php echo $email ?>" id="Email" maxlength="255">
                <label for="Email">Email ID</label>
            </div>

            <div class="input-field col s12">
                <i class="material-icons prefix">business</i>
                <input type="text" name="business"  value="<?php echo $address ?>" id="business" maxlength="255">
                <label for="business">Address</label>
            </div>
            <!--Phone-->
            <div class="input-field col s12">
                <i class="material-icons prefix">phone</i>
                <input type="tel" name="Phone" id="Phone" value="<?php echo $phone ?>" maxlength="255">
                <label for="Phone">Phone Number</label>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">directions_car</i>
                <input type="tel" name="Vehicle"  value="<?php echo $vehicle ?>" id="Vehicle" maxlength="255">
                <label for="Vehicle">Vehicle Registration</label>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">credit_card</i>
                <input type="tel" name="License"  value="<?php echo $license ?>" id="License" maxlength="255">
                <label for="License">License Number</label>
            </div>

            <div class="input-field col s12">
                <i class="material-icons prefix">chrome_reader_mode</i>
                <input type="tel" name="Aadhar"  value="<?php echo $aadhar ?>" id="Aadhar" maxlength="255">
                <label for="Aadhar">Aadhar Number</label>
            </div>

            <div class="input-field col s12">
                <i class="material-icons prefix">fact_check</i>
                <input type="tel" name="Election"  value="<?php echo $election ?>" id="Election" maxlength="255">
                <label for="Election">Election ID</label>
            </div>


            <!--Buttons-->
            <div class="input-field col s12">
                <input type="submit" value="Update" class="btn flx blue">
                <a href="users.php" class="btn flx grey">Cancel</a>
            </div>

        </fieldset>
    </form>
</div>

    <script type="text/javascript" src="materialize/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>
