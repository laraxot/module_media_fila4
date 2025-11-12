<?php

declare(strict_types=1);

namespace Modules\Media\Providers\Filament;

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
use Override;
use Filament\Panel;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
>>>>>>> 5200b63 (.)

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Media';

    #[Override]
    public function panel(Panel $panel): Panel
    {
        $panel = parent::panel($panel);

        return $panel;
    }
}
