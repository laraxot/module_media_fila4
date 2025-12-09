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
>>>>>>> 3f50d25 (.)
=======
>>>>>>> 9ffe7a9 (.)
=======
>>>>>>> 22abc4a (.)
=======
>>>>>>> 2883a97 (.)
=======
>>>>>>> 446a02b (.)
=======
>>>>>>> 09fde8f (.)
=======
>>>>>>> d2f9543 (.)
<?php

declare(strict_types=1);

use Illuminate\Support\Str;

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Modulo Media',
    'siteDescription' => 'Modulo Media',
    'lang' => 'it',
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
>>>>>>> 0caa3cf (.)
=======
>>>>>>> c9ef35c (.)
=======
>>>>>>> 9ffe7a9 (.)
=======
>>>>>>> 22abc4a (.)
=======
>>>>>>> 446a02b (.)
=======
>>>>>>> 09fde8f (.)

    'collections' => [
        'posts' => [
            'path' => fn ($page): string => $page->lang.'/posts/'.Str::slug($page->getFilename()),
        ],
        'docs' => [
            'path' => fn ($page): string => $page->lang.'/docs/'.Str::slug($page->getFilename()),
        ],
    ],

    // Algolia DocSearch credentials
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),

    // navigation menu
    'navigation' => require_once (__DIR__.'/navigation.php'),

    // helpers
    'isActive' => fn ($page, $path) => Str::endsWith(trimPath($page->getPath()), trimPath($path)),
    'isItemActive' => fn ($page, $item) => Str::endsWith(trimPath($page->getPath()), trimPath($item->getPath())),
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(fn ($child): bool => trimPath($page->getPath()) === trimPath($child));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3f50d25 (.)
=======
>>>>>>> 2883a97 (.)
=======
>>>>>>> d2f9543 (.)
    'collections' => [
        'posts' => [
            'path' => fn($page): string => $page->lang . '/posts/' . Str::slug($page->getFilename()),
        ],
        'docs' => [
            'path' => fn($page): string => $page->lang . '/docs/' . Str::slug($page->getFilename()),
        ],
    ],
    // Algolia DocSearch credentials
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),
    // navigation menu
    'navigation' => require_once __DIR__ . '/navigation.php',
    // helpers
    'isActive' => fn($page, $path) => Str::endsWith(trimPath($page->getPath()), trimPath($path)),
    'isItemActive' => fn($page, $item) => Str::endsWith(trimPath($page->getPath()), trimPath($item->getPath())),
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(fn($child): bool => trimPath($page->getPath()) === trimPath($child));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7df6a71 (.)
=======
>>>>>>> 0caa3cf (.)
=======
>>>>>>> c9ef35c (.)
=======
>>>>>>> 3f50d25 (.)
=======
>>>>>>> 9ffe7a9 (.)
=======
>>>>>>> 22abc4a (.)
=======
>>>>>>> 2883a97 (.)
=======
>>>>>>> 446a02b (.)
=======
>>>>>>> 09fde8f (.)
=======
>>>>>>> d2f9543 (.)
        }
    },
    'url' => function ($page, $path) {
        if (Str::startsWith($path, 'http')) {
            return $path;
        }

        // return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
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
>>>>>>> 0caa3cf (.)
=======
>>>>>>> c9ef35c (.)
=======
>>>>>>> 9ffe7a9 (.)
=======
>>>>>>> 22abc4a (.)
=======
>>>>>>> 446a02b (.)
=======
>>>>>>> 09fde8f (.)
        return url('/'.$page->lang.'/'.trimPath($path));
    },

    'children' => fn ($page, $docs): array =>
        // return $docs->where('parent_id', $page->);
        [],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3f50d25 (.)
=======
>>>>>>> 2883a97 (.)
=======
>>>>>>> d2f9543 (.)
        return url('/' . $page->lang . '/' . trimPath($path));
    },
    'children' => fn($_page, $_docs): array => (
        // return $docs->where('parent_id', $page->);
        []
    ),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7df6a71 (.)
=======
>>>>>>> 0caa3cf (.)
=======
>>>>>>> c9ef35c (.)
];
=======
>>>>>>> 8cdc78f (.)
=======
];
>>>>>>> 3f50d25 (.)
=======
>>>>>>> 960f18d (.)
=======
];
>>>>>>> 9ffe7a9 (.)
=======
];
>>>>>>> 22abc4a (.)
=======
>>>>>>> 76d3921 (.)
=======
];
>>>>>>> 2883a97 (.)
=======
>>>>>>> 5e10cb4 (.)
=======
];
>>>>>>> 446a02b (.)
=======
];
>>>>>>> 09fde8f (.)
=======
>>>>>>> 60ceacf (.)
=======
];
>>>>>>> d2f9543 (.)
=======
>>>>>>> ffc92bd (.)
