<?php

declare(strict_types=1);

namespace Modules\Media\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class ConvertController extends Controller
{
    /**
     * Show the profile for the given user.
     */
<<<<<<< HEAD
    public function __invoke(string|int $_id): View
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function __invoke(string|int $_id): View
=======
    public function __invoke(string|int $id): View
>>>>>>> a12f125f4a (.)
=======
    public function __invoke(string|int $_id): View
>>>>>>> b93ef594b4 (.)
=======
    public function __invoke(string|int $id): View
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    {
        /**
         * @phpstan-var view-string
         */
        $view = 'media::convert';
        $view_params = [];

        return view($view, $view_params);
    }
}
