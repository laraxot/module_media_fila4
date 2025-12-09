<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\MediaResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
use Override;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\ViewRecord;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
>>>>>>> 5200b63 (.)

class ConvertMedia extends XotBaseViewRecord
{
    protected static string $resource = MediaResource::class;

    #[Override]
    public function getInfolistSchema(): array
    {
        return [
            // Definire qui i componenti dell'infolist
        ];
    }
}
