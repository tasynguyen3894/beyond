<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php $this->url('public/css/styles.css') ?>" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php $this->url('public/lib/font-awesome-4.6.3/css/font-awesome.min.css') ?>">
        <script src="<?php $this->url('public/lib/jquery.min.js') ?>"></script>
    </head>
    <body>
        <header> 
            <div class="container">
                <span id="menu_responsive"><span class="fa fa-navicon"></span> TASYNGUYEN3894</span>
                <ul class="header_menu" id="header_menu">
                    <li><a href="<?php $this->url('') ?>">TASYNGUYEN</a></li>
                    <li><a href="<?php $this->url('project') ?>">PROJECT</a></li>
                    <li><a href="<?php $this->url('page/about') ?>">ABOUT</a></li>
                    <li><a href="<?php $this->url('page/contact') ?>">CONTACT</a></li>
                </ul>
            </div>
            <div class="container header-text">
            </div>
        </header>
        <section>
        <?php $this->loadContent(); ?>
        </section>
        <footer>
            <div class="footer-contact container">
                <a href="https://twitter.com/tasyit" target="_blank" class="bg-twitter"><span class="fa fa-twitter"></span></a>
                <a href="https://github.com/tasynguyen3894" target="_blank" class="bg-github"><span class="fa fa-github"></span></a>
                <a href="https://chickendeveloper.wordpress.com/" target="_blank" class="bg-wp"><span class="fa fa-wordpress"></span></a>
                <a href="https://www.linkedin.com/in/thaisangnguyen3894/" target="_blank" class="bg-fb"><span class="fa fa-linkedin"></span></a>
            </div>
            <div class="footer-link container">

                <div class="list-link-footer">
                    <ul>
                        <li><a href="<?php $this->url('page/about') ?>">About</a></li>
                        <li><a href="<?php $this->url('page/contact') ?>">Contact</a></li>
                        <li><a href="<?php $this->url('project') ?>">Project</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <script src="<?php $this->url('public/js/main.js') ?>"></script>
    </body>
</html>