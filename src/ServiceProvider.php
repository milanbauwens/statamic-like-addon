<?php

namespace Milanbauwens\Like;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $routes = [
        'actions' => __DIR__ . '/../routes/actions.php',
    ];

    protected $scripts = [
        __DIR__ . '/../resources/assets/js/app.js',
    ];

    protected $stylesheets = [
        __DIR__ . '/../resources/assets/css/style.css',
    ];

    protected $publishables = [
        __DIR__ . '/../resources/assets/icons' => 'icons',
    ];

    protected $tags = [
        Tags\Like::class,
    ];

    public function bootAddon()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'like');
    }
}
