<!DOCTYPE html>
<html>
    <head>
        <?php include("include/head.php"); ?>
        <title>Groups</title>
    </head>
    <body>
        <div class="wrapper">
            <?php include("include/header.php"); ?>
            <div class="main-content">
                <div class="page-title">
                    <h2>Groups</h2>
                </div>
                <div class="table_scroll">
                    <table id="datatable" class="display compact hover">
                        <thead>
                            <tr>
                                <th>Organisation</th>
                                <th>Group Name</th>
                                <th>Group Short Name</th>
                                <th>Run Exertime Every</th>
                                <th>Exertime Completion</th>
                                <th>Default Postpone Int</th>
                                <th>Walking Ex</th>
                                <th>Walking Ex Delay</th>
                                <th>Emergency Exit</th>
                                <th>Commands</th>
                            </tr>
                        </thead>
                        <?php
                            for ($i=0; $i < 3; $i++) {
                                echo "<tr>
                                        <td>Org Name</td>
                                        <td>Group</td>
                                        <td>short name</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>None</td>
                                        <td>0</td>
                                        <td>True</td>
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
                                <th>Organisation</th>
                                <th>Group Name</th>
                                <th>Group Short Name</th>
                                <th>Run Exertime Every</th>
                                <th>Exertime Completion</th>
                                <th>Default Postpone Int</th>
                                <th>Walking Ex</th>
                                <th>Walking Ex Delay</th>
                                <th>Emergency Exit</th>
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
