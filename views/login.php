<?php require './controller/loginController.php' ?>
<div class="container text-center">
    <div class="rox d-flex justify-content-center mx-4">
        <div class="col-md-6 mx">
            <div class="card">
                <form class="form" method="POST" action="">
                    <img class="mb-4" src="views/images/logo.png" alt="" width="72" height="57">
                    <h1 class="h3">Please sign in</h1>
                    <div class="form-floating">
                        <label for="floatingInput">Email address</label>
                        <input type="email" class="form-control col-md-12" name="email" placeholder="name@example.com" required>
                    </div>
                    <div class="form-floating">
                        <label for="floatingPassword">Password</label>
                        <input type="password" class="form-control col-md-12" name="password" placeholder="Password" required>
                    </div>
                    <input type="submit" name="login" class="btn btn-primary m-3" value="login">
                </form>
                <?php if (isset($errorMessage)) : ?>
                    <p><?= $errorMessage ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>