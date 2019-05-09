<!DOCTYPE html>
<html>
    <head>
        <?php include("include/head.php"); ?>
        <title>Exercises</title>
    </head>
    <body>
        <?php include("include/header.php"); ?>

        <div class="wrapper">
            <div class="page-title">
                <h2>Exercises</h2>
            </div>
            <div class="table_scroll">
                <table>
                    <?php
                        echo "<tr>
                                <th>Caption</th>
                                <th>Type</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Kilojoules</th>
                                <th>Calc. Type</th>
                                <th>Commands</th>
                            </tr>";
                        for ($i=0; $i < 3; $i++) {
                            echo "<tr>
                                <td>exercise</td>
                                <td>category</td>
                                <td>
                                    <img class'img-exercise' src='https://via.placeholder.com/140x94.png' alt=''>
                                </td>
                                <td>active</td>
                                <td>100</td>
                                <td>min</td>
                                <td>
                                    <button type='button' name='btn-edit'>
                                        <a class='btn-icon btn-edit'>Edit</a>
                                    </button>
                                    <button type='button' name='btn-del'>
                                        <a class='btn-icon btn-del'>Delete</a>
                                    </button>
                                </td>
                            </tr>";
                        }
                     ?>
                </table>
            </div>
        </div>


        <?php include("include/footer.php"); ?>
    </body>
</html>
