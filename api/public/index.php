<?php

use Illuminate\Foundation\Application;

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = tap($kernel->handle(
    $request = Illuminate\Http\Request::capture()
))->send();

$kernel->terminate($request, $response);
