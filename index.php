<!DOCTYPE html>
<html lang="en">

<?php
require_once('includes/connect.php');

$query = 'SELECT employees.id AS employee, fname, lname, thumb FROM employees';

$results = mysqli_query($connect, $query);
print_r($results);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/grid.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <title>Simpsons Page</title>
</head>
<body>
    <main>
        <section class="full-width-grid-con banner">
            <h1 class="hidden">Welcome to the Simpsons Employee Page</h1>
            <img class="col-span-full" src="images/banner.jpg" alt="Simpsons Banner">
        </section>

        <section class="full-width-grid-con employee-section">
            <div class="grid-con">
                <h2 class="col-span-full">Meet the Simpsons Employee Team</h2>

                <?php 
                    while($row = mysqli_fetch_array($results)) {
                        echo '<div class="col-span-full employee-cards">
                            <div class="card"><a href="details.php?id='.$row['employee'].'"><img src="images/'.$row['thumb'].'" alt="Employee image"></a><h3>'.$row['fname'].' '.$row['lname'].'</h3></div></div>';
                    }
                ?>
            </div>
        </section>
    </main>
</body>
</html>