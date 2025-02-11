<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login HRD | <?php echo e(config('app.name')); ?> </title>
    <link rel="icon" href="<?php echo e(asset('img/favicon.png')); ?>" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #1e90ff, #87ceeb);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            margin: 0;
        }

        .login-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.25);
            width: 100%;
            max-width: 400px;
            animation: fadeIn 0.8s ease-in-out;
        }

        .login-container img {
            display: block;
            margin: 0 auto 20px;
            width: 90px;
            height: 90px;
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.1));
        }

        .login-container h1 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #1e90ff;
            text-align: center;
            margin-bottom: 1rem;
        }

        .login-container .form-control {
            border: 1px solid #87ceeb;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .login-container .form-control:focus {
            box-shadow: 0 0 8px rgba(30, 144, 255, 0.8);
            border-color: #1e90ff;
        }

        .btn-login {
            background: linear-gradient(to right, #1e90ff, #104e8b);
            color: #ffffff;
            border-radius: 10px;
            font-weight: bold;
            padding: 10px 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-login:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(30, 144, 255, 0.4);
        }

        .forgot-password {
            text-align: center;
            margin-top: 15px;
        }

        .forgot-password a {
            color: #1e90ff;
            text-decoration: none;
            font-weight: bold;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #6c757d;
        }

        .footer a {
            color: #1e90ff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <img src="<?php echo e(asset('img/favicon.png')); ?>" alt="Logo">
        <h1>Login HRD</h1>
        <form method="POST" action="<?php echo e(route('hrd.login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" :value="old('email')" required autofocus>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger mt-1"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger mt-1"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-login">Login</button>
            </div>
            <div class="forgot-password">
                <?php if(Route::has('password.request')): ?>
                <a href="<?php echo e(route('password.request')); ?>">Forgot Password?</a>
                <?php endif; ?>
            </div>
        </form>
        <div class="footer">
            <p>Don't have an account? <a href="/register">Sign Up</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html><?php /**PATH F:\Absensi App\AbsensiApp\resources\views/hrd/auth/login.blade.php ENDPATH**/ ?>