<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\TemporaryUploadResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\DeleteAction;
use Modules\Media\Filament\Resources\TemporaryUploadResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
=======
=======
=======
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Filament\Actions\DeleteAction;
use Modules\Media\Filament\Resources\TemporaryUploadResource;
>>>>>>> 5200b63 (.)
=======
use Filament\Actions\DeleteAction;
use Modules\Media\Filament\Resources\TemporaryUploadResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
>>>>>>> f41e45e (.)

class EditTemporaryUpload extends XotBaseEditRecord
{
    protected static string $resource = TemporaryUploadResource::class;

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
