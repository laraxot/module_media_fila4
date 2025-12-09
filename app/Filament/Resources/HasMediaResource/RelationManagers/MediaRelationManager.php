<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\HasMediaResource\RelationManagers;

use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Media\Filament\Resources\HasMediaResource\Actions\AddAttachmentAction;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Override;
=======
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
=======
<<<<<<< HEAD
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
use Override;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Model;
=======
>>>>>>> f41e45e (.)
use Modules\Media\Filament\Resources\HasMediaResource\Actions\AddAttachmentAction;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
<<<<<<< HEAD
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
>>>>>>> 5200b63 (.)

class MediaRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'media';

<<<<<<< HEAD
    protected static ?string $inverseRelationship = 'model';
=======
    protected static null|string $inverseRelationship = 'model';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
use Filament\Forms\Form;
use Illuminate\Database\Eloquent\Model;
=======
=======
=======
=======
use Override;
>>>>>>> b93ef594b4 (.)
use Filament\Forms\Form;
use Illuminate\Database\Eloquent\Model;
use Modules\Media\Filament\Resources\HasMediaResource\Actions\AddAttachmentAction;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
=======
use Override;
>>>>>>> f41e45e (.)

class MediaRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'media';

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Forms\Form;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Actions\ActionGroup;
>>>>>>> 47a54fe (.)
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Modules\Media\Filament\Resources\HasMediaResource\Actions\AddAttachmentAction;

class MediaRelationManager extends XotBaseRelationManager
{


    protected static string $relationship = 'media';

<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 47a54fe (.)
    protected static ?string $inverseRelationship = 'model';




<<<<<<< HEAD
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    protected static null|string $inverseRelationship = 'model';
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
    protected static ?string $inverseRelationship = 'model';
>>>>>>> f41e45e (.)

    #[Override]
    public function getTableHeaderActions(): array
    {
        return [
            'add_attachment' => AddAttachmentAction::make(),
        ];
    }
}
