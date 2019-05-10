<!DOCTYPE html>
<html>
    <head>
        <?php include("include/head.php"); ?>
        <title>Organisations</title>
    </head>
    <body>
        <div class="wrapper">
            <?php include("include/header.php"); ?>
            <div class="main-content">
                <div class="page-title">
                    <h2>Organisations</h2>
                </div>
                <div class="table_scroll">
                    <table id="datatable" class="display compact hover">
                        <thead>
                            <tr>
                                <th>Short Name</th>
                                <th>Name</th>
                                <th>Countdown Duration</th>
                                <th>Walking Ex Delay</th>
                                <th>Commands</th>
                            </tr>
                        </thead>
                        <?php
                            for ($i=0; $i < 3; $i++) {
                                echo "<tr>
                                        <td>shortname</td>
                                        <td>name</td>
                                        <td>countdown</td>
                                        <td>walking</td>
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
                                <th>Short Name</th>
                                <th>Name</th>
                                <th>Countdown Duration</th>
                                <th>Walking Ex Delay</th>
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
