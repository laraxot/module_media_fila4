<?php

declare(strict_types=1);

namespace Modules\Media\Providers\Filament;

<<<<<<< HEAD
use Override;
=======
>>>>>>> 0a466ed (.)
use Filament\Panel;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Media';

<<<<<<< HEAD
    #[Override]
=======
>>>>>>> 0a466ed (.)
    public function panel(Panel $panel): Panel
    {
        $panel = parent::panel($panel);

        return $panel;
    }
}
