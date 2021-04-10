<?php
include './includes/header.php';
$header_title = 'Login'
?>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class=" col-md-6 col-12 mt-5">
            <form method="POST" action="./">
                <div class="form-group has-success">
                    <label class="form-control-label" for="inputValid">Username</label>
                    <input type="text" value="correct value" class="form-control is-valid" id="username">
                    <div class="valid-feedback">Success! You've done it.</div>
                </div>
                <div class="form-group has-success">
                    <label class="form-control-label" for="inputValid">Password</label>
                    <input type="password" value="correct value" class="form-control is-valid" id="password">
                    <div class="valid-feedback">Success! You've done it.</div>
                </div>
                <div class="col-md-12 text-center">
                    <button class="btn btn-lg btn-outline-info">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include './includes/footer.php';
?>