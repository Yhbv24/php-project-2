<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__."/../views"));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("index.html.twig");
    });

    $app->get("/output", function() use ($app) {
        $my_word = $_GET["input_word"];
        $my_phrase = $_GET["input_phrase"];
        $my_count = new RepeatCounter;
        $my_count = $my_count->CountRepeats($my_word, $my_phrase);

        return $app["twig"]->render("output.html.twig", array("word" => $my_word, "count" => $my_count));
    });

    return $app;
?>
