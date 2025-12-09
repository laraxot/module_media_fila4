<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\MediaResource\Pages;

<<<<<<< HEAD
use Filament\Actions\DeleteAction;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Filament\Actions\DeleteAction;
use Modules\Media\Filament\Resources\MediaResource;
>>>>>>> 5200b63 (.)

class EditMedia extends XotBaseEditRecord
{
    protected static string $resource = MediaResource::class;

    /**
     * @return DeleteAction[]
     *
     * @psalm-return list{DeleteAction}
     */
    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
