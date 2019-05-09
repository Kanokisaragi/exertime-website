<!DOCTYPE html>
<html>
    <head>
        <?php
            $title = "Homepage";
            include("include/head.php");
        ?>
        <title>Home</title>
    </head>
    <body>
        <?php include("include/header.php"); ?>

        <div class="wrapper">
            <h2>Exertime Administration Portal</h2>
            <h3>From this portal you can configure various functions of the Exertime clients such as:</h3>
            <ul>
                <li>Create new or edit existing organisations</li>
                <li>Create new or edit existing departments</li>
                <li>Edit calorie goals and Exertime runtime variables per department</li>
                <li>View user activity</li>
                <li>Update Exertime user weights</li>
                <li>Manage which exercises department have access too or disable exercises for all departments.</li>
                <li>Adjust coefficients per exercises</li>
                <li>Run Exertime reports</li>
            </ul>
        </div>
        <?php include("include/footer.php"); ?>
    </body>
</html>
