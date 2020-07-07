<?php

declare(strict_types=1);

use Illuminate\Foundation\Application;

return [
    /*
    * The repository you want to access.
    */
    'repository' => env('DOCLIFY_REPOSITORY'),

    /*
    * An API key for the above specified repository.
    */
    'token' => env('DOCLIFY_TOKEN'),
];
