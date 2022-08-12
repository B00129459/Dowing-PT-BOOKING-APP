<?php include "templates/header.php"; ?>

<body>
   <nav>
       <ul>
        <li><a href="index.php"><strong>Home</strong></a></li<li>
           <li><a href="about.php"><strong>About</strong></a></li>
        <li><a href="login.php"><strong>Trainers</strong></a></li>
    </ul>
   </nav>

   <h2>This weeks classes</h2>

   <table style="width:100%">
       <tr>
           <th>Class       </th>
           <th>Time        </th>
           <th>Spaces     </th>
       </tr>
       <tr>
           <td>Pump</td>
           <td>07:00 (20 mins)</td>
           <td>6 left</td>
       </tr>
       <tr>
           <td>Abs Blast</td>
           <td>08:00 (15 mins)</td>
           <td>Full</td>
       </tr>
       <tr>
           <td>Getting Started</td>
           <td>09:00 (30 mins)</td>
           <td>9 left</td>
       </tr><tr>
           <td>Circuit</td>
           <td>011:00 (40 mins)</td>
           <td>3 left</td>
       </tr>
   </table>

   <p>

   </p>

   <style>
       * {
           box-sizing: border-box;
       }

       .row {
           display: flex;
       }


       .column {
           flex: 50%;
           padding: 10px;
           height: 300px;
       }

   </style>


   <body>

   <div class="row">
       <div1 class="column" style="background-color:#aaaaaa;">

       </div1>

       <div class="column" style="background-color:#aaa;">
           <h2>Personal Trainers</h2>
           <table style="width:100%">
               <tr>
                   <th>Name       </th>
                   <th>Specialize       </th>
               </tr>
               <tr>
                   <td>Nicola D</td>
                   <td>Sports Nutrition</td>
               </tr>
               <tr>
                   <td>Joshua Mc E</td>
                   <td>Box Fit</td>
               </tr>
               <tr>
                   <td>Zoe N</td>
                   <td>Exercise Rehabilitation</td>
               </tr>
               <tr>
                   <td>Brendan D</td>
                   <td>Weight Loss</td>
               </tr>
               <tr>
                   <td>Aoife L</td>
                   <td>Zumba</td>
               </tr>
               <tr>
                   <td>Jackie D</td>
                   <td>Boot Camp</td>
               </tr>
           </table>
       </div>
   </div>

<link rel="stylesheet" href="../public/css/stylesheet.css" />

</body>

<?php include "templates/footer.php"; ?>


