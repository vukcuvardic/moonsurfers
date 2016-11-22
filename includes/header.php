<!doctype html>
<?php
    $ROOT = "";

    function navClass($item) {
        global $menu_item;

        if (isset($menu_item) && $menu_item == $item) {
            echo "active";
        }
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo isset($title) ? $title : "MoonSurfers"; ?></title>
        <meta name="description" content="<?php echo isset($desc)? $desc : "MoonSurfers"; ?>">
        <link rel="stylesheet" href="<?php echo $ROOT; ?>/dist/stylesheets/app.css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
        <link rel="shortcut icon" href="<?php echo $ROOT; ?>/dist/images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php echo $ROOT; ?>/dist/images/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <header class="l_header">
            <a class="l_header__logo" href="<?php echo $ROOT; ?>/">
                <h1 class="l_header__logo-headline">
                    MOON<span class="l_header__logo-yellow">SURFERS</span>
                </h1>
            </a>
            <nav class="l_header__nav">
                <?php include('main-nav.php'); ?>
            </nav>
        </header>
        <hr>
