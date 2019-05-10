<!DOCTYPE html>
<html>
    <head>
        <?php include("include/head.php"); ?>
        <title>Registrations</title>
    </head>
    <body>
        <div class="wrapper">
            <?php include("include/header.php"); ?>
            <div class="main-content">
                <div class="page-title">
                    <h2>Registrations</h2>
                </div>
                <div class="table_scroll">
                    <table id="datatable" class="display compact hover">
                        <thead>
                            <tr>
                                <th>Registration Key</th>
                                <th>Department</th>
                                <th>Remaining</th>
                                <th>Used</th>
                                <th>Total</th>
                                <th>Commands</th>
                            </tr>
                        </thead>
                        <?php
                            for ($i=0; $i < 3; $i++) {
                                echo "<tr>
                                        <td>fjas465sf1ghsf4e9gf</td>
                                        <td>name</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>10</td>
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
                                <th>Registration Key</th>
                                <th>Department</th>
                                <th>Remaining</th>
                                <th>Used</th>
                                <th>Total</th>
                                <th>Commands</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <?php include("include/footer.php"); ?>
        </div>
    </body>
</html>
