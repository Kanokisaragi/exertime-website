<!DOCTYPE html>
<html>
    <head>
        <?php
            $title = "Organisations";
            include("include/head.php");
        ?>
    </head>
    <body>
        <div class="wrapper">
            <?php include("include/header.php"); ?>
            <div class="main-content">
                <div class="page-title">
                    <h2>Organisations</h2>
                </div>
                <button class='btn-add' type='button' name='btn-add'>
                    <a class='btn-icon btn-icon-add'>New Organisation</a>
                </button>
                <div class="table_wrapper">
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
        <div id="modal" class="modal-bg">
            <div class="modal-content">
                <button id="btn-close" class="close" type="button" name="">X</button>
                <h2>Edit</h2>
                <form method="post">
                        <table class="form">
                            <tr>
                                <td>Short Name</td>
                                <td>
                                    <input type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>
                                    <input type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>Countdown Duration</td>
                                <td>
                                    <input type="number" step="0.01" name="" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>Walking Ex Delay</td>
                                <td>
                                    <input type="number" step="0.01" name="" value="">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="Submit" value="Update"/>
                                </td>
                            </tr>
                        </table>
                </form>
            </div>
        </div>
    </body>
</html>
