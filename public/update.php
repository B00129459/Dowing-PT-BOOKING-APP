<?php

require "../config.php";
require "../common.php";

try {
    $connection = new PDO($dsn, $username, $password, $options);

    $sql = "SELECT * FROM users";

    $statement = $connection->prepare($sql);
    $statement->execute();

    $result = $statement->fetchAll();
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>
<?php require "templates/header.php"; ?>

<h2>Update clients appointments</h2>

<table>
    <thead>
    <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email Address</th>
        <th>Age</th>
        <th>Location</th>
        <th>Date</th>
        <th>Edit</th>
    <tr>
        <td>1</td>
        <td>Niamh</td>
        <td>Maher</td>
        <td>niamhm1998@yahoo.com</td>
        <td>21</td>
        <td>Dublin</td>
        <td>X</td>
        <td>X</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Ciara</td>
        <td>McGilloway</td>
        <td>CGilloway2000.com</td>
        <td>25</td>
        <td>Galway</td>
        <td>X</td>
        <td>X</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Reece</td>
        <td>Geoghegan</td>
        <td>rjg25@gmaail.ie</td>
        <td>27</td>
        <td>Kerry</td>
        <td>X</td>
        <td>X</td>

    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>ADD</td>
    </tr>
    </tr>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($result as $row) : ?>
        <tr>
            <td><?php echo escape($row["id"]); ?></td>
            <td><?php echo escape($row["firstname"]); ?></td>
            <td><?php echo escape($row["lastname"]); ?></td>
            <td><?php echo escape($row["email"]); ?></td>
            <td><?php echo escape($row["age"]); ?></td>
            <td><?php echo escape($row["location"]); ?></td>
            <td><?php echo escape($row["date"]); ?> </td>
            <td><a href="update-single.php?id=<?php echo escape($row["id"]); ?>">Edit</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<link rel="stylesheet" href="../public/css/stylesheet.css" />
<a href="login.php">Back </a>

<?php require "templates/footer.php"; ?>
