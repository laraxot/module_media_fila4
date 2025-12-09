<?php

declare(strict_types=1);

namespace Modules\Media\Providers\Filament;

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
use Override;
=======
>>>>>>> 0a466ed (.)
=======
use Override;
>>>>>>> 37a2da6 (.)
use Filament\Panel;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
>>>>>>> 5200b63 (.)

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Media';

<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> 0a466ed (.)
=======
    #[Override]
>>>>>>> 37a2da6 (.)
    public function panel(Panel $panel): Panel
    {
        return parent::panel($panel);
    }
}
