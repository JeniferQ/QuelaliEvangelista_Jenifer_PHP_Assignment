<html lang="en">
    
<?php
require_once('includes/connect.php');

$query = 'SELECT employees.id AS employee, fname, lname, thumb FROM employees';

$results = mysqli_query($connect, $query);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/grid.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DynaPuff:wght@400..700&display=swap" rel="stylesheet">

    <title>Simpsons Page</title>
</head>

<body>
    <main>
        <section class="full-width-grid-con banner">
            <div class="grid-con">
                <img class="col-start-1 col-end-3 m-col-start-1 m-col-start-6" src="images/homer_face.jpg" alt="Simpsons image">
                <h1 class="col-start-3 col-end-5 m-col-start-6 m-col-end-12 l-col-end-11">Welcome to the Simpsons Page</h1>
            </div>
        </section>

        <section class="full-width-grid-con employee-section">
            <div class="grid-con">
                <h2 class="col-span-full">Learn who is behind each Simpson</h2>

                <div class="col-span-full employee-cards">
                <?php 
                    while($row = mysqli_fetch_array($results)) {
                    echo '<div class="card">
                                <a href="details.php?id=';
                                echo $row['employee'];
                                echo '"><img src="images/';
                                echo $row['thumb'];
                                echo '" alt="Employee image"></a>
                                <h3 class="box">';
                                echo $row['fname'].' '.$row['lname'];
                                echo '</h3>
                            </div>';
                    }
                ?>
                </div>

            </div>
        </section>
    </main>
</body>
</html>
