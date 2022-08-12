<nav>
    <ul>
        <li><a href="index.php"><strong>Home</strong></a></li>
        <li><a href="about.php"><strong>About</strong></a></li>

        <li><a href="create.php"><strong>Add Client</strong></a></li>
        <li><a href="read.php"><strong>Location</strong></a></li>
        <li><a href="update.php"><strong>Add Client</strong></a></li>
        <li><a href="delete.php"><strong>Remove Client</strong></a></li>
    </ul>
</nav>

<?php

require "../config.php";
require "../common.php";

if (isset($_POST['submit'])) {
    if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();

    try  {
        $connection = new PDO($dsn, $username, $password, $options);

        $new_user = array(
            "firstname" => $_POST['firstname'],
            "email"     => $_POST['email'],
        );


        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    }

    catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>
<?php require "templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) : ?>
    <blockquote><?php echo escape($_POST['firstname']); ?> successfully added.</blockquote>
<?php endif; ?>

    <h2>PT LOGIN</h2>

    <form method="post">
        <input name="csrf" type="hidden" value="<?php echo escape($_SESSION['csrf']); ?>">
        <label for="firstname">Login ID</label>
        <input type="text" name="firstname" id="firstname">
        <label for="email">Email Address</label>
        <input type="text" name="email" id="email">
        <input type="submit" name="submit" value="Submit">
    </form>

    <link rel="stylesheet" href="../public/css/stylesheet.css" />

    <a href="login.php">Back </a>

<?php require "templates/footer.php"; ?>