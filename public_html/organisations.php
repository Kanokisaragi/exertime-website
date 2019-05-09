<!DOCTYPE html>
<html>
    <head>
        <?php include("include/head.php"); ?>
        <title>Organisations</title>
    </head>
    <body>
        <?php include("include/header.php"); ?>

        <div class="wrapper">
            <div class="table_scroll">
                <table>
                    <tr>
                        <th>Short Name</th>
                        <th>Name</th>
                        <th>Countdown Duration</th>
                        <th>Walking Ex Delay</th>
                        <th>Commands</th>
                    </tr>
                    <tr>
                        <td>shortname</td>
                        <td>name</td>
                        <td>countdown</td>
                        <td>walking</td>
                        <td>
                            <button type="button" name="btn-edit">
                                <a class="btn-icon btn-edit">Edit</a>
                            </button>
                            <button type="button" name="btn-del">
                                <a class="btn-icon btn-del">Delete</a>
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <?php include("include/footer.php"); ?>
    </body>
</html>
