<!DOCTYPE html>
<html lang="en">

<?php
require_once('includes/connect.php');

$query = 'SELECT * FROM employees, jobs WHERE job_id = jobs.id AND employees.id ='.$_GET['id'];

$results = mysqli_query($connect, $query);

$row = mysqli_fetch_assoc($results);
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
        <h1 class="hidden">Welcome to this employee's information page</h1>

        <section class="full-width-grid-con employee-info">
            <div class="grid-con">
                <h2 class="col-span-full">Employee Information</h2>

                <img class="col-span-full m-col-start-1 m-col-end-5" src="images/<?php echo $row ['image']; ?>" alt="Employee image">

                <div class="col-span-full m-col-start-5 m-col-end-13 employee-text">
                    <h3><?php echo $row ['fname'].' '.$row ['lname'] ?></h3>
                    <p><?php echo $row ['title']; ?></p>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
