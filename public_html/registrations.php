<!DOCTYPE html>
<html>
    <head>
        <?php include("include/head.php"); ?>
        <title>Registrations</title>
    </head>
    <body>
        <?php include("include/header.php"); ?>

        <div class="table_scroll">
            <table>
                <tr>
                    <th>Registration Key</th>
                    <th>Department</th>
                    <th>Remaining</th>
                    <th>Used</th>
                    <th>Total</th>
                    <th>Commands</th>
                </tr>
                <tr>
                    <td>fjas465sf1ghsf4e9gf</td>
                    <td>name</td>
                    <td>5</td>
                    <td>5</td>
                    <td>10</td>
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
