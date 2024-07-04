<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/admindashboard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="header">
        <h1>Admin <br><span>Dashboard</span></h1>
        <div>
            <form action="index.php" method="post">
                <button class="admin_btn">Logout</button>
            </form>
        </div>
    </div>

    <div class="container">

        <div class="container1">
            <form action="1st-year-enrollment.php" method="post">
                <button class="btn1">1st Year Enrollment Form</button>
            </form>
            <form action="2nd-year-enrollment.php" method="post">
                <button class="btn1">2nd Year Enrollment Form</button>
            </form>
            <form action="3rd-year-enrollment.php" method="post">
                <button class="btn1">3rd Year Enrollment Form</button>
            </form>
            <form action="4th-year-enrollment.php" method="post">
                <button class="btn1">4th Year Enrollment Form</button>
            </form>
        </div>

        <div class="container2">

            <form action="transferee-enrollment.php" method="post">
                <button class="btn2">Transferee Enrollment Form</button>
            </form>
            <form action="recordpage.php" method="post">
                <button class="btn2">Student Records</button>
            </form>
        </div>
    </div>


</body>



</html>