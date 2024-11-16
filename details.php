<html lang="en">

<?php
require_once('includes/connect.php');

$query = 'SELECT * FROM employees, jobs WHERE job_id = jobs.id AND employees.id ='.$_GET['id'];

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
                <h1 class="col-start-3 col-end-5 m-col-start-6 m-col-end-12 l-col-end-11">Who is behind them?</h1>
            </div>
        </section>

        <section class="full-width-grid-con employee-info">
            <div class="grid-con">
                <img class="col-span-full m-col-start-7 m-col-end-12 person" src="images/<?php echo $row ['image']; ?>" alt="Employee image">
                
                <div class="col-span-full m-col-start-2 m-col-end-7 employee-text">
                    <h2 class="box">Info</h2>
                    <h3><?php echo $row ['fname'].' '.$row ['lname'] ?></h3>
                    <p><?php echo $row ['title']; ?></p>

                    <a class="arrow"  href="index.php"><img src="images/left_arrow.svg">Return</a>
                </div>
            </div>
            </div>
        </section>
    </main>
</body>
</html>
