<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\MediaResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\BaseFilter;
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
use Filament\Tables\Filters\BaseFilter;
use Filament\Actions\ActionGroup;
use Override;
use Filament\Actions\ViewAction;
=======
>>>>>>> f41e45e (.)
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
use Filament\Tables\Filters\BaseFilter;
>>>>>>> f41e45e (.)
use Filament\Tables\Filters\SelectFilter;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Media\Models\Media;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> 5200b63 (.)
=======
use Override;
>>>>>>> f41e45e (.)
use Webmozart\Assert\Assert;

class ListMedia extends XotBaseListRecords
{
    protected static string $resource = MediaResource::class;

    /**
     * @return array<string, Tables\Columns\Column>
     */
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
<<<<<<< HEAD
<<<<<<< HEAD
            'size' => TextColumn::make('size')->formatStateUsing(fn (string $state): string => number_format(
                ((int) $state) / 1024,
                2,
            ).' KB'),
=======
            'size' => TextColumn::make('size')->formatStateUsing(fn(string $state): string => number_format(
                ((int) $state) / 1024,
                2,
            ) . ' KB'),
>>>>>>> 5200b63 (.)
=======
            'size' => TextColumn::make('size')->formatStateUsing(fn (string $state): string => number_format(
                ((int) $state) / 1024,
                2,
            ).' KB'),
>>>>>>> f41e45e (.)
            'created_at' => TextColumn::make('created_at')->dateTime(),
        ];
    }

    /**
     * @return array<string, BaseFilter>
     */
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
        ];
    }

    /**
     * @return array<string, Action|ActionGroup>
     */
    #[Override]
    public function getTableActions(): array
    {
        return [
            'view' => ViewAction::make(),
            'view_attachment' => Action::make('view_attachment')
                ->icon('heroicon-s-eye')
                ->color('gray')
<<<<<<< HEAD
<<<<<<< HEAD
                ->url(static fn (Media $record): string => $record->getUrl())
=======
                ->url(static fn(Media $record): string => $record->getUrl())
>>>>>>> 5200b63 (.)
=======
                ->url(static fn (Media $record): string => $record->getUrl())
>>>>>>> f41e45e (.)
                ->openUrlInNewTab(true),
            'delete' => DeleteAction::make()->requiresConfirmation(),
            'download' => Action::make('download_attachment')
                ->icon('heroicon-o-arrow-down-tray')
                ->color('primary')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1900eb1 (.)
                ->action(static function ($record) {
                    // PHPStan Level 10: isset() per Eloquent magic property
                    if (! is_object($record) || ! method_exists($record, 'getPath') || ! isset($record->file_name)) {
                        throw new \RuntimeException('Invalid record for download');
                    }
                    $filePath = $record->getPath();
                    Assert::string($filePath, 'getPath must return string');

                    return response()->download($filePath, (string) $record->file_name);
                }),
<<<<<<< HEAD
=======
                ->action(static fn($record) => response()->download($record->getPath(), $record->file_name)),
>>>>>>> 5200b63 (.)
=======
                ->action(static fn ($record) => response()->download($record->getPath(), $record->file_name)),
>>>>>>> f41e45e (.)
=======
                ->action(function ($record) {
                    if (is_object($record) && method_exists($record, 'getPath') && property_exists($record, 'file_name')) {
                        $path = $record->getPath();
                        $fileName = $record->file_name;
                        if (is_string($path) && is_string($fileName)) {
                            return response()->download($path, $fileName);
                        }
                    }
                    return null;
                }),
>>>>>>> 13d1d7e (.)
=======
                ->action(static fn ($record) => response()->download($record->getPath(), $record->file_name)),
>>>>>>> 2a4b5df (.)
=======
                ->action(static function (Media $record): \Symfony\Component\HttpFoundation\BinaryFileResponse {
                    return response()->download($record->getPath(), $record->file_name);
                }),
>>>>>>> 1634e53 (.)
=======
                ->action(static fn ($record) => response()->download($record->getPath(), $record->file_name)),
>>>>>>> 21a9aec (.)
=======
>>>>>>> 1900eb1 (.)
            'convert' => Action::make('convert')
                ->icon('media-convert')
                ->color('gray')
                ->url(function ($record): string {
                    Assert::string($res = static::$resource::getUrl('convert', ['record' => $record]));
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 5200b63 (.)
=======

>>>>>>> f41e45e (.)
                    return $res;
                })
                ->openUrlInNewTab(true),
        ];
    }
}
