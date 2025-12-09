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
=======
>>>>>>> cb6b71e (.)
=======
>>>>>>> 494c61a (.)
=======
>>>>>>> 17a939c (.)
=======
>>>>>>> f81fb2b (.)
=======
>>>>>>> 77b6d88 (.)
=======
>>>>>>> efdd063 (.)
=======
>>>>>>> 7a2d4da (.)
=======
>>>>>>> cec545b (.)
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
=======
>>>>>>> cb6b71e (.)
=======
>>>>>>> 494c61a (.)
=======
>>>>>>> 17a939c (.)
=======
>>>>>>> 77b6d88 (.)
=======
>>>>>>> efdd063 (.)
=======
>>>>>>> 7a2d4da (.)
=======
>>>>>>> cec545b (.)

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
<<<<<<< HEAD
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
=======
>>>>>>> f81fb2b (.)
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
=======
>>>>>>> cb6b71e (.)
=======
>>>>>>> 494c61a (.)
=======
>>>>>>> 17a939c (.)
=======
>>>>>>> f81fb2b (.)
=======
>>>>>>> 77b6d88 (.)
=======
>>>>>>> efdd063 (.)
=======
>>>>>>> 7a2d4da (.)
=======
>>>>>>> cec545b (.)
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
=======
>>>>>>> cb6b71e (.)
=======
>>>>>>> 494c61a (.)
=======
>>>>>>> 17a939c (.)
=======
>>>>>>> 77b6d88 (.)
=======
>>>>>>> efdd063 (.)
=======
>>>>>>> 7a2d4da (.)
=======
>>>>>>> cec545b (.)
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
<<<<<<< HEAD
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
=======
>>>>>>> f81fb2b (.)
        return url('/' . $page->lang . '/' . trimPath($path));
    },
    'children' => fn($_page, $_docs): array => (
        // return $docs->where('parent_id', $page->);
        []
    ),
<<<<<<< HEAD
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
=======
];
>>>>>>> cb6b71e (.)
=======
];
>>>>>>> 494c61a (.)
=======
>>>>>>> 4b6364d (.)
=======
];
>>>>>>> 17a939c (.)
=======
>>>>>>> e18a671 (.)
=======
];
>>>>>>> f81fb2b (.)
=======
>>>>>>> 1a36ecc (.)
=======
];
>>>>>>> 77b6d88 (.)
=======
];
>>>>>>> efdd063 (.)
=======
>>>>>>> 58646d5 (.)
=======
];
>>>>>>> 7a2d4da (.)
=======
>>>>>>> 232bbba (.)
=======
];
>>>>>>> cec545b (.)
