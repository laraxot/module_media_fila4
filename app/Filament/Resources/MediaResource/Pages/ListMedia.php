<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\MediaResource\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
use Filament\Tables\Filters\BaseFilter;
use Filament\Actions\ActionGroup;
use Override;
use Filament\Actions\ViewAction;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
<<<<<<< HEAD
use Filament\Tables;
=======
=======
use Filament\Actions\ViewAction;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Tables\Filters\BaseFilter;
use Filament\Actions\ActionGroup;
>>>>>>> a12f125f4a (.)
=======
use Filament\Tables\Filters\BaseFilter;
use Filament\Actions\ActionGroup;
use Override;
use Filament\Actions\ViewAction;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
>>>>>>> b93ef594b4 (.)
use Filament\Tables;
=======
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\ViewAction;
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Media\Models\Media;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Webmozart\Assert\Assert;

class ListMedia extends XotBaseListRecords
{
    protected static string $resource = MediaResource::class;

    /**
     * @return array<string, Tables\Columns\Column>
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
    #[Override]
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')->sortable()->searchable(),
            'model_type' => TextColumn::make('model_type')->searchable(),
            'model_id' => TextColumn::make('model_id')->searchable(),
            'collection_name' => TextColumn::make('collection_name')->searchable(),
            'name' => TextColumn::make('name')->searchable(),
            'file_name' => TextColumn::make('file_name')->searchable(),
            'mime_type' => TextColumn::make('mime_type')->searchable(),
            'disk' => TextColumn::make('disk')->searchable(),
            'size' => TextColumn::make('size')->formatStateUsing(fn(string $state): string => number_format(
                ((int) $state) / 1024,
                2,
            ) . ' KB'),
            'created_at' => TextColumn::make('created_at')->dateTime(),
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->sortable()
                ->searchable(),
            'model_type' => TextColumn::make('model_type')
                ->searchable(),
            'model_id' => TextColumn::make('model_id')
                ->searchable(),
            'collection_name' => TextColumn::make('collection_name')
                ->searchable(),
            'name' => TextColumn::make('name')
                ->searchable(),
            'file_name' => TextColumn::make('file_name')
                ->searchable(),
            'mime_type' => TextColumn::make('mime_type')
                ->searchable(),
            'disk' => TextColumn::make('disk')
                ->searchable(),
            'size' => TextColumn::make('size')
                ->formatStateUsing(fn (string $state): string => number_format((int) $state / 1024, 2).' KB'),
            'created_at' => TextColumn::make('created_at')
                ->dateTime(),
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')->sortable()->searchable(),
            'model_type' => TextColumn::make('model_type')->searchable(),
            'model_id' => TextColumn::make('model_id')->searchable(),
            'collection_name' => TextColumn::make('collection_name')->searchable(),
            'name' => TextColumn::make('name')->searchable(),
            'file_name' => TextColumn::make('file_name')->searchable(),
            'mime_type' => TextColumn::make('mime_type')->searchable(),
            'disk' => TextColumn::make('disk')->searchable(),
            'size' => TextColumn::make('size')->formatStateUsing(fn(string $state): string => number_format(
                ((int) $state) / 1024,
                2,
            ) . ' KB'),
            'created_at' => TextColumn::make('created_at')->dateTime(),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        ];
    }

    /**
<<<<<<< HEAD
     * @return array<string, BaseFilter>
     */
=======
<<<<<<< HEAD
     * @return array<string, BaseFilter>
     */
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
    #[Override]
    public function getTableFilters(): array
    {
        return [
            'collection_name' => SelectFilter::make('collection_name')->options(Media::distinct()->pluck(
                'collection_name',
                'collection_name',
            )->toArray(...)),
            'mime_type' => SelectFilter::make('mime_type')->options(Media::distinct()->pluck(
                'mime_type',
                'mime_type',
            )->toArray(...)),
<<<<<<< HEAD
=======
=======
=======
     * @return array<string, Tables\Filters\BaseFilter>
     */
>>>>>>> origin/develop
    public function getTableFilters(): array
    {
        return [
            'collection_name' => SelectFilter::make('collection_name')
                ->options(fn () => Media::distinct()->pluck('collection_name', 'collection_name')->toArray()),
            'mime_type' => SelectFilter::make('mime_type')
                ->options(fn () => Media::distinct()->pluck('mime_type', 'mime_type')->toArray()),
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
    public function getTableFilters(): array
    {
        return [
            'collection_name' => SelectFilter::make('collection_name')->options(Media::distinct()->pluck(
                'collection_name',
                'collection_name',
            )->toArray(...)),
            'mime_type' => SelectFilter::make('mime_type')->options(Media::distinct()->pluck(
                'mime_type',
                'mime_type',
            )->toArray(...)),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        ];
    }

    /**
<<<<<<< HEAD
     * @return array<string, Action|ActionGroup>
     */
=======
<<<<<<< HEAD
     * @return array<string, Action|ActionGroup>
     */
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
    #[Override]
    public function getTableActions(): array
    {
        return [
            'view' => ViewAction::make(),
            'view_attachment' => Action::make('view_attachment')
                ->icon('heroicon-s-eye')
                ->color('gray')
                ->url(static fn(Media $record): string => $record->getUrl())
                ->openUrlInNewTab(true),
            'delete' => DeleteAction::make()->requiresConfirmation(),
            'download' => Action::make('download_attachment')
                ->icon('heroicon-o-arrow-down-tray')
                ->color('primary')
                ->action(static fn($record) => response()->download($record->getPath(), $record->file_name)),
            'convert' => Action::make('convert')
                ->icon('media-convert')
                ->color('gray')
                ->url(function ($record): string {
                    Assert::string($res = static::$resource::getUrl('convert', ['record' => $record]));
                    return $res;
                })
                ->openUrlInNewTab(true),
<<<<<<< HEAD
=======
=======
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
    public function getTableActions(): array
    {
        return [
            'view' => ViewAction::make(),
            'view_attachment' => Action::make('view_attachment')
                ->icon('heroicon-s-eye')
                ->color('gray')
                ->url(static fn(Media $record): string => $record->getUrl())
                ->openUrlInNewTab(true),
            'delete' => DeleteAction::make()->requiresConfirmation(),
            'download' => Action::make('download_attachment')
                ->icon('heroicon-o-arrow-down-tray')
                ->color('primary')
                ->action(static fn($record) => response()->download($record->getPath(), $record->file_name)),
            'convert' => Action::make('convert')
                ->icon('media-convert')
                ->color('gray')
<<<<<<< HEAD
=======
     * @return array<string, Tables\Actions\Action|Tables\Actions\ActionGroup>
     */
    public function getTableActions(): array
    {
        return [
            'view' => ViewAction::make()
                ,
            'view_attachment' => Action::make('view_attachment')
                
                ->icon('heroicon-s-eye')
                ->color('gray')
                ->url(
                    static fn (Media $record): string => $record->getUrl()
                )->openUrlInNewTab(true),
            'delete' => DeleteAction::make()
                
                ->requiresConfirmation(),
            'download' => Action::make('download_attachment')
                
                ->icon('heroicon-o-arrow-down-tray')
                ->color('primary')
                ->action(
                    static fn ($record) => response()->download($record->getPath(), $record->file_name)
                ),
            'convert' => Action::make('convert')
                ->icon('media-convert')
                ->color('gray')
>>>>>>> origin/develop
                ->url(
                    function ($record): string {
                        Assert::string($res = static::$resource::getUrl('convert', ['record' => $record]));
                        return $res;
                    }
                )->openUrlInNewTab(true),
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                ->url(function ($record): string {
                    Assert::string($res = static::$resource::getUrl('convert', ['record' => $record]));
                    return $res;
                })
                ->openUrlInNewTab(true),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        ];
    }
}
