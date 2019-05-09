<!DOCTYPE html>
<html>
    <head>
        <?php include("include/head.php"); ?>
        <title>Groups</title>
    </head>
    <body>
        <?php include("include/header.php"); ?>

        <div class="table_scroll">
            <table>
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
                <tr>
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
