<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\MediaResource\Pages;

<<<<<<< HEAD
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
use Override;
=======
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
