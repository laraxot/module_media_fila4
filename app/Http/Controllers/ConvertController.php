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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function __invoke(string|int $_id): View
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 89eb716 (.)
    public function __invoke(string|int $_id): View
=======
    public function __invoke(string|int $id): View
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
    public function __invoke(string|int $_id): View
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
    public function __invoke(string|int $_id): View
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
    public function __invoke(string|int $_id): View
>>>>>>> f1c6d6e (.)
=======
    public function __invoke(string|int $_id): View
=======
    public function __invoke(string|int $id): View
>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======
    public function __invoke(string|int $_id): View
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======
    public function __invoke(string|int $_id): View
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
    public function __invoke(string|int $_id): View
>>>>>>> 146bbc3 (.)
=======
    public function __invoke(string|int $_id): View
=======
    public function __invoke(string|int $id): View
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======
    public function __invoke(string|int $_id): View
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
    {
        /**
         * @phpstan-var view-string
         */
        $view = 'media::convert';
        $view_params = [];

        return view($view, $view_params);
    }
}
