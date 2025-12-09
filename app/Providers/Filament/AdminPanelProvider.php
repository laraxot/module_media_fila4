<?php

declare(strict_types=1);

namespace Modules\Media\Providers\Filament;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Panel;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
use Override;
=======
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
use Override;
use Filament\Panel;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
>>>>>>> 5200b63 (.)
=======
use Filament\Panel;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
use Override;
>>>>>>> f41e45e (.)

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Media';

    #[Override]
    public function panel(Panel $panel): Panel
    {
        return parent::panel($panel);
    }
}
