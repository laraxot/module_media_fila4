<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Pages;

<<<<<<< HEAD
=======
use Filament\Pages\Page;
>>>>>>> 5200b63 (.)
use Modules\Xot\Filament\Pages\XotBaseDashboard;

class Dashboard extends XotBaseDashboard
{
<<<<<<< HEAD
<<<<<<< HEAD
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-home';
=======
=======
>>>>>>> 47a54fe (.)
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';
>>>>>>> 5200b63 (.)

    protected string $view = 'media::filament.pages.dashboard';
=======
<<<<<<< HEAD
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';

    protected string $view = 'media::filament.pages.dashboard';
=======
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'media::filament.pages.dashboard';
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
}
