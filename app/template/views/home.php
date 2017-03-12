<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->config->item('language') ?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta charset="<?php echo $this->config->item('charset') ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="robots" content="noindex, nofollow"/>

    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css') ?>"/>
    <link rel="shortcut icon" href="<?php echo asset('imgs/codeigniter-logo.ico') ?>"/>

    <?php echo ie_support_field() ?>

    <title>Logged In</title>
</head>
<body>
    <?php require_once ('layouts/includes/navbar.php'); ?>

    <main class="container">
        <div class="jumbotron">
            <div class="container">
                <h1>Logged In!</h1>
                <p>You are logged in with CodeIgniter secure authentication system. For more information on how to use it, go to <a href="#">documentation</a>.</p>
                <p><a class="btn btn-primary btn-lg" href="https://github.com/lleocastro/xcodeigniter" role="button" rel="nofollow">View on Github</a></p>
            </div>
        </div>
    </main>

    <script src="<?php echo asset('js/jquery-3.1.1.min.js') ?>"></script>
    <script src="<?php echo asset('js/bootstrap.min.js') ?>"></script>
</body>
</html>