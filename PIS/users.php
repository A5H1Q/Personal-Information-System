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
    <h5 class="light">View All</h5>
    <hr>
    <table class="striped">
        <thead>
            <tr>
                <th class="blue-text">Title</th>
                <th class="blue-text">Email</th>
                <th class="blue-text">Address</th>
                <th class="blue-text">Phone No.</th>
                <th class="blue-text">Vehicle No.</th>
                <th class="blue-text">License No.</th>
                <th class="blue-text">Aadhar No.</th>
                <th class="blue-text">Election No.</th>
                <th class="blue-text">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php 
include_once 'data-base/connection.php';
$querySelect = $link->query("SELECT * FROM TB_USERS ORDER BY Name");

while ($registers = $querySelect->fetch_assoc()){
    $id    = $registers['ID'];
    echo "<tr>";
    echo "<td>".$registers['Name']."</td>";
    echo "<td>".$registers['Email']."</td>";
    echo "<td>".$registers['Address']."</td>";
    echo "<td>".$registers['Phone']."</td>";
    echo "<td>".$registers['Vehicle']."</td>";
    echo "<td>".$registers['License']."</td>";
    echo "<td>".$registers['Aadhar']."</td>";
    echo "<td>".$registers['Election']."</td>";
    echo "<td><a href='edit.php?id=$id'><i class='material-icons blue-text'>edit</i></a></td>";
    echo "<td><a href='data-base/delete.php?id=$id'><i class='material-icons red-text'>delete</i></a></td>";
    echo "</tr>";
}
?>
        </tbody>
    </table>
</div>
    <script type="text/javascript" src="materialize/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>
