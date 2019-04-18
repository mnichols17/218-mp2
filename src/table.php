<?php
    function autoloader($class) {
        include $class . '.php';
    }
    spl_autoload_register('autoloader');
    $file = new File();
    $title = "Table";
    include("header.php");
    date_default_timezone_set('EST');
    $date = date('l jS \of F Y h:i:s A');
?>
        <div class="row">
            <table class="table table-striped table-bordered">
                <?php
                    $data = ($file::readCSVtoArray("../data/data.csv"));
                    echo(CreateTable::create_HTML_Table($data[0], $data[1]));
                ?>
            </table>
        </div>

        <div class="row">
            <div class="col-sm">
                <h3><?php echo $date; ?></h3>
            </div>
            <div class="col-sm">
                <form action="import.php" method="post" enctype="multipart/form-data">
                    <p>Import the csv data into a SQL database</p>
                    <div>
                        <input type="submit" name="import" id="import">
                    </div>
                </form>
            </div>
        </div>
        <br>