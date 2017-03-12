<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->config->item('language') ?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta charset="<?php echo $this->config->item('charset') ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="robots" content="noindex, nofollow"/>

    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css') ?>"/>
    <link rel="shortcut icon" href="<?php echo asset('imgs/codeigniter-logo.ico') ?>"/>

    <style>
        code {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: .9em;
            background-color: #f9f9f9;
            border: 1px solid #D0D0D0;
            color: #002166;
            display: block;
            margin: 14px 0 14px 0;
            padding: 12px 10px 12px 10px;
        }
        p.footer {
            text-align: right;
            font-size: .8em;
            margin: 5px 0 0 0;
        }
    </style>

    <?php echo ie_support_field() ?>

    <title>Welcome</title>
</head>
<body>
    <?php require_once ('layouts/includes/navbar.php'); ?>

    <main class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">This is a Custom Version of CodeIgniter!</h3>
            </div>
            <div class="panel-body">
                <div class="alert alert-info" role="alert">
                    <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
                </div>

                <p>If you would like to edit this page you'll find it located at:</p>
                <code>app/template/views/welcome.php</code>

                <p>The corresponding controller for this page is found at:</p>
                <code>app/controllers/Welcome.php</code>

                <p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="https://codeigniter.com/docs">User Guide</a>.</p>
            </div>
            <div class="panel-footer">
                <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
            </div>
        </div>
    </main>

</body>
    <script src="<?php echo asset('js/jquery-3.1.1.min.js') ?>"></script>
    <script src="<?php echo asset('js/bootstrap.min.js') ?>"></script>
</html>