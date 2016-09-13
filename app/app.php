<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/anagram.php";

    $app = new Silex\Application();

    $app->register(new Silex\provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'
  ));

    $app->get("/", function() use ($app) {
      return $app['twig']->render('form.html.twig');
    });

    return $app;
 ?>

beard

abder
