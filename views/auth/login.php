<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-image {
            background: url('<?= BASE_URL ?>assets/img/login_img2.jpg') no-repeat center center;
            background-size: cover;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Left side with image -->
            <div class="col-md-9 login-image d-none d-md-block"></div>
            <!-- Right side with login form -->
            <div class="col-md-3 login-container">
                <div class="w-100 px-3">
                    <h3 class="text-center mb-4">RHM CMS | MAGA Construction</h3>
                    <?php if (isset($error)): ?>
                        <p class="text-danger text-center"><?php echo htmlspecialchars($error); ?></p>
                    <?php endif; ?>
                    <form method="post" action="index.php?controller=auth&action=login">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" id="username" name="username" class="form-control rounded-0" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control rounded-0" required>
                        </div>
                        <button type="submit" class="btn btn-primary rounded-0 w-100">Login</button>
                    </form>
                    <p class="text-center mt-3"><a href="index.php?controller=auth&action=register">Register</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

