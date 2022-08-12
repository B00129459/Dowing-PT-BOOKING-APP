<?php include "templates/header.php"; ?>
<body>
<nav>
    <ul>
        <li><a href="index.php"><strong>Home</strong></a></li>
        <li><a href="about.php"><strong>About</strong></a></li>
        <li><a href="login.php"><strong>Trainers</strong></a></li>
    </ul>
</nav>

<h2>Get to know us</h2>

<style>
    *{
        box-sizing: border-box;
    }

    /* Create two equal columns that floats next to each other */
    .column {
        float: left;
        width: 50%;
        padding: 10px;
        height: 300px;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    p{
        color: whitesmoke;
    }

    table{ border: 1px solid black;
    }

</style>
<div>

</div>
<p>
    .
</p>
<div class="row">
    <div class="column" style="background-color:black;">
        <h2>Why Dowling PT?</h2>
        <p>As it helps personal trainers to serve more clients and save time in the process.</p>
        <p> Featuring an exercise library with more than 1,000 videos, website integration, and custom branding, it has everything you need for your PT business.</p>
        <p>You can also integrate it with several other leading apps, from Paypal and MyZone to FitBit and MyFitnessPal.</p>
    </div>

    <div class="column" style="background-color:black;">
        <h2>Trainers</h2>
        <p>Easy to add clients and their sessions</p>
        <p>Group clients based on location of gyms</p>
        <p>Update any clients and edit appointments</p>
        <p>Be able to remove clients and their appoitnments</p>
    </div>

</div>

<link rel="stylesheet" href="../public/css/stylesheet.css" />

</body>

<?php include "templates/footer.php"; ?>


