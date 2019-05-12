<!DOCTYPE html>
<html>
    <head>
        <?php include("include/head.php"); ?>
        <title>Users</title>
    </head>
    <body>
        <div class="wrapper">
            <?php include("include/header.php"); ?>
            <div class="main-content">
                <div class="page-title">
                    <h2>Users</h2>
                </div>
                <div class="table_scroll">
                    <table id="datatable" class="display compact hover">
                        <thead>
                            <tr>
                                <th>Group</th>
                                <th>Prefered Name</th>
                                <th>Given Names</th>
                                <th>Surname</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Emergency Exit</th>
                                <th>Status</th>
                                <th>Calory Goal(Override)</th>
                                <th>New User</th>
                                <th>Commands</th>
                            </tr>
                        </thead>
                        <?php
                            for ($i=0; $i < 3; $i++) {
                                echo "<tr>
                                        <td>group</td>
                                        <td>pref name</td>
                                        <td>given name</td>
                                        <td>surname</td>
                                        <td>username</td>
                                        <td>email@email.com</td>
                                        <td>false</td>
                                        <td>active</td>
                                        <td>0</td>
                                        <td>true</td>
                                        <td>
                                            <button class='btn-edit' type='button' name='btn-edit'>
                                                <a class='btn-icon btn-icon-edit'>Edit</a>
                                            </button>
                                            <button class='btn-del' type='button' name='btn-del'>
                                                <a class='btn-icon btn-icon-del'>Delete</a>
                                            </button>
                                        </td>
                                    </tr>";
                            }
                         ?>
                        <tfoot>
                            <tr>
                                <th>Group</th>
                                <th>Prefered Name</th>
                                <th>Given Names</th>
                                <th>Surname</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Emergency Exit</th>
                                <th>Status</th>
                                <th>Calory Goal(Override)</th>
                                <th>New User</th>
                                <th>Commands</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <?php include("include/footer.php"); ?>
        </div>
        <div id="modal" class="modal-bg">
            <div class="modal-content">
                <button id="btn-close" class="close" type="button" name="">X</button>
                <h2>Edit</h2>
            </div>
        </div>
    </body>
</html>
