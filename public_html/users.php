<!DOCTYPE html>
<html>
    <head>
        <?php include("include/head.php"); ?>
        <title>Users</title>
    </head>
    <body>
        <?php include("include/header.php"); ?>

        <div class="table_scroll">
            <table>
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
                <tr>
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
                        <button type="button" name="btn-edit">
                            <img src="./resources/img/icons/edit.svg" alt="edit" width="10px" height="10px">
                            Edit
                        </button>
                        <button type="button" name="btn-del">
                            <img src="./resources/img/icons/delete.svg" alt="edit" width="10px" height="10px">
                            Delete
                        </button>
                    </td>
                </tr>
            </table>
        </div>

        <?php include("include/footer.php"); ?>
    </body>
</html>
