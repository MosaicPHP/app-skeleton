<?php

/**
 * Init application
 */
$app = new Fresco\Application(
    realpath(__DIR__ . '/../')
);

/**
 * Define components
 */
$app->definitions([
    Fresco\Definitions\DiactorosPsr7Definition::class
]);

return $app;
