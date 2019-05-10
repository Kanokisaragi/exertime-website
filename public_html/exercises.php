<!DOCTYPE html>
<html>
    <head>
        <?php include("include/head.php"); ?>
        <title>Exercises</title>
    </head>
    <body>
        <div class="wrapper">
            <?php include("include/header.php"); ?>
            <div class="main-content">
                <div class="page-title">
                    <h2>Exercises</h2>
                </div>
                <div class="table_scroll">
                    <table id="datatable" class="display compact hover">
                        <thead>
                            <tr>
                                <th>Caption</th>
                                <th>Type</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Kilojoules</th>
                                <th>Calc. Type</th>
                                <th>Commands</th>
                            </tr>
                        </thead>
                        <?php
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
                         <tfoot>
                            <tr>
                                <th>Caption</th>
                                <th>Type</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Kilojoules</th>
                                <th>Calc. Type</th>
                                <th>Commands</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <?php include("include/footer.php"); ?>
        </div>
        <div class="modal-bg">
            <div class="modal-content">
                <button class="close" type="button" name="">X</button>
                <h2>Edit</h2>
            </div>
        </div>
    </body>
</html>
