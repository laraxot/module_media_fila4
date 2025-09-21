<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\MediaResource\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Filament\Actions\DeleteAction;
use Modules\Media\Filament\Resources\MediaResource;

class EditMedia extends XotBaseEditRecord
<<<<<<< HEAD
=======
=======
use Filament\Actions\DeleteAction;
use Modules\Media\Filament\Resources\MediaResource;

class EditMedia extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
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
