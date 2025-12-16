<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\HasMediaResource\RelationManagers;

use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
<<<<<<< HEAD
use Modules\Media\Filament\Resources\HasMediaResource\Actions\AddAttachmentAction;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Override;
=======
use Override;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Model;
use Modules\Media\Filament\Resources\HasMediaResource\Actions\AddAttachmentAction;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
>>>>>>> 5200b63 (.)

class MediaRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'media';

<<<<<<< HEAD
    protected static ?string $inverseRelationship = 'model';
=======
    protected static null|string $inverseRelationship = 'model';
>>>>>>> 5200b63 (.)

    /**
     * @return array<string, Action|ActionGroup>
     */
    #[Override]
    public function getTableHeaderActions(): array
    {
        return [
            'add_attachment' => AddAttachmentAction::make(),
        ];
    }
}
