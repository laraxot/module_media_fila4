<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\MediaResource\Pages;

<<<<<<< HEAD
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;

<<<<<<< HEAD
class CreateMedia extends XotBaseCreateRecord
=======
<<<<<<< HEAD
class CreateMedia extends XotBaseCreateRecord
=======
class CreateMedia extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
=======
use Filament\Resources\Pages\CreateRecord;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;

class CreateMedia extends XotBaseCreateRecord
>>>>>>> 5200b63 (.)
{
    protected static string $resource = MediaResource::class;
}
