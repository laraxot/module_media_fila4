<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\TemporaryUploadResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
=======
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
use Override;
use Filament\Actions\ViewAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Tables\Actions\CreateAction;
>>>>>>> 5200b63 (.)
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Modules\Media\Filament\Resources\TemporaryUploadResource;
use Modules\Media\Models\TemporaryUpload;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
<<<<<<< HEAD
use Override;
=======
>>>>>>> 5200b63 (.)

class ListTemporaryUploads extends XotBaseListRecords
{
    protected static string $resource = TemporaryUploadResource::class;

    /**
     * @return array<string, TextColumn>
     */
    #[Override]
    public function getTableColumns(): array
    {
        return [
            'folder' => TextColumn::make('folder')
                ->searchable()
                ->sortable()
                ->wrap(),
            'filename' => TextColumn::make('filename')
                ->searchable()
                ->sortable()
                ->wrap(),
            'created_at' => TextColumn::make('created_at')->dateTime()->sortable(),
        ];
    }

    /**
     * @return array<string, SelectFilter>
     */
    #[Override]
    public function getTableFilters(): array
    {
        return [
            'folder' => SelectFilter::make('folder')->options(TemporaryUpload::distinct()->pluck(
                'folder',
                'folder',
            )->toArray(...)),
        ];
    }

    /**
     * @return array<string, ViewAction|EditAction|DeleteAction>
     */
    #[Override]
    public function getTableActions(): array
    {
        return [
            'view' => ViewAction::make(),
            'edit' => EditAction::make(),
            'delete' => DeleteAction::make(),
        ];
    }

    /**
     * @return array<string, DeleteBulkAction>
     */
    #[Override]
    public function getTableBulkActions(): array
    {
        return [
            'delete' => DeleteBulkAction::make(),
        ];
    }
}
