
<?php
$header_title = 'Index';
include './includes/header.php';
include '../../php_mvc/App.php';

?>
<a href="http://localhost/home.php" />
<?php
echo 'KKKKK';
?>
<?php
include './includes/footer.php';
?>

<div class="container">
    <div class="row">
        <div class="col-12 text-right mb-2">
            <a class="btn btn-primary" href="http://localhost/form.php">Add new</a>
        </div>  
        <div class="col-12">
            <table class="table table-hover table-active table-responsive table-borderless table-info">
                <tr>
                <thead>
                <th>
                    Name
                </th>
                <th>
                    Phone
                </th>
                <th>
                    Number
                </th>
                </thead>
                </tr>
            </table>
        </div>
    </div>
</div>

