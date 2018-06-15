<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font awesome MDB-->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <!-- Bootstrap Core -->
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css?ver=1.0">
    <!-- Material Design Bootstrap -->
    <link href="<?php bloginfo('template_url') ?>/css/mdb.min.css?ver=1.0" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css?ver=1.0" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Your custom styles (optional) -->
    <link href="<?php bloginfo('template_url') ?>/css/style.css" rel="stylesheet">
    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <title>
        <?php
            if (is_home()) {
                echo get_bloginfo('name');
            }elseif (is_entrada()) {
                echo the_title();
            }elseif (is_registrarse()) {
                echo the_title();
            }
        ?>
    </title>
    <?php wp_head(); ?>
</head>