<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\MediaResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
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
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\ViewRecord;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
>>>>>>> 5200b63 (.)

class ConvertMedia extends XotBaseViewRecord
{
    protected static string $resource = MediaResource::class;

<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> 0a466ed (.)
=======
    #[Override]
>>>>>>> 37a2da6 (.)
    public function getInfolistSchema(): array
    {
        return [
            // Definire qui i componenti dell'infolist
        ];
    }
}
