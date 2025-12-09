<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\TemporaryUploadResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> 0a466ed (.)
=======
use Override;
>>>>>>> 37a2da6 (.)
use Filament\Actions\ViewAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Modules\Media\Filament\Resources\TemporaryUploadResource;
use Modules\Media\Models\TemporaryUpload;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListTemporaryUploads extends XotBaseListRecords
{
    protected static string $resource = TemporaryUploadResource::class;

    /**
     * @return array<string, TextColumn>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> 0a466ed (.)
=======
    #[Override]
>>>>>>> 37a2da6 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
            'created_at' => TextColumn::make('created_at')->dateTime()->sortable(),
=======
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
>>>>>>> 0a466ed (.)
=======
            'created_at' => TextColumn::make('created_at')->dateTime()->sortable(),
>>>>>>> 37a2da6 (.)
        ];
    }

    /**
     * @return array<string, SelectFilter>
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
    #[Override]
    public function getTableFilters(): array
    {
        return [
            'folder' => SelectFilter::make('folder')->options(TemporaryUpload::distinct()->pluck(
                'folder',
                'folder',
            )->toArray(...)),
<<<<<<< HEAD
=======
    public function getTableFilters(): array
    {
        return [
            'folder' => SelectFilter::make('folder')
                ->options(fn () => TemporaryUpload::distinct()->pluck('folder', 'folder')->toArray()),
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
        ];
    }

    /**
     * @return array<string, ViewAction|EditAction|DeleteAction>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> 0a466ed (.)
=======
    #[Override]
>>>>>>> 37a2da6 (.)
    public function getTableActions(): array
    {
        return [
            'view' => ViewAction::make(),
            'edit' => EditAction::make(),
            'delete' => DeleteAction::make(),
        ];
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, DeleteBulkAction>
     */
    #[Override]
=======
     * @return array<string, \Filament\Actions\DeleteBulkAction>
     */
>>>>>>> 0a466ed (.)
=======
     * @return array<string, DeleteBulkAction>
     */
    #[Override]
>>>>>>> 37a2da6 (.)
    public function getTableBulkActions(): array
    {
        return [
            'delete' => DeleteBulkAction::make(),
        ];
    }
}
