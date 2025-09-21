<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\MediaResource\Pages;

<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Override;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
use Filament\Schemas\Components\Flex;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Actions;
use Filament\Actions\Action;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
use Filament\Actions\DeleteAction;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;
use Modules\Media\Actions\Video\ConvertVideoByConvertDataAction;
use Modules\Media\Datas\ConvertData;
use Modules\Media\Filament\Infolists\VideoEntry;
use Modules\Media\Filament\Resources\MediaConvertResource;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Media\Filament\Resources\MediaResource\Widgets\ConvertWidget;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
<<<<<<< HEAD

class ViewMedia extends XotBaseViewRecord
=======
=======
use Filament\Infolists\Infolist;
=======
>>>>>>> b93ef594b4 (.)
use Filament\Actions\DeleteAction;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;
use Modules\Media\Actions\Video\ConvertVideoByConvertDataAction;
use Modules\Media\Datas\ConvertData;
use Modules\Media\Filament\Infolists\VideoEntry;
use Modules\Media\Filament\Resources\MediaConvertResource;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Media\Filament\Resources\MediaResource\Widgets\ConvertWidget;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
>>>>>>> b93ef594b4 (.)

class ViewMedia extends XotBaseViewRecord
=======
use Filament\Infolists\Infolist;
use Filament\Actions\DeleteAction;
use Modules\Media\Datas\ConvertData;
use Filament\Infolists\Components\Split;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Components\Actions;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Modules\Media\Filament\Infolists\VideoEntry;
use Filament\Infolists\Components\Actions\Action;
use Filament\Infolists\Components\RepeatableEntry;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Media\Filament\Resources\MediaConvertResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
use Modules\Media\Actions\Video\ConvertVideoByConvertDataAction;
use Modules\Media\Filament\Resources\MediaResource\Widgets\ConvertWidget;

class ViewMedia extends \Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
{
    protected static string $resource = MediaResource::class;

    /**
     * Restituisce lo schema dell'infolist per la visualizzazione dei dettagli del record.
     *
<<<<<<< HEAD
     * @return array<string, Component>
     */
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, Component>
     */
    #[Override]
=======
     * @return array<string, \Filament\Schemas\Components\Component>
     */
>>>>>>> a12f125f4a (.)
=======
     * @return array<string, Component>
     */
    #[Override]
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
    public function getInfolistSchema(): array
    {
        return [
            'media_viewer' => Flex::make([
                Section::make()->schema([
                    ImageEntry::make('url')
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
                        ->defaultImageUrl(fn($record) => $record->getUrl())
                        ->size(500)
                        ->visible(fn($record): bool => $record->type === 'image'),
                    VideoEntry::make('url')
                        ->defaultImageUrl(fn($record) => $record->getUrl())
                        ->size(500)
                        ->visible(fn($record): bool => $record->type === 'video'),
<<<<<<< HEAD
=======
=======
                        ->defaultImageUrl(fn ($record) => $record->getUrl())
=======
                        ->defaultImageUrl(fn($record) => $record->getUrl())
>>>>>>> b93ef594b4 (.)
                        ->size(500)
                        ->visible(fn($record): bool => $record->type === 'image'),
                    VideoEntry::make('url')
                        ->defaultImageUrl(fn($record) => $record->getUrl())
                        ->size(500)
<<<<<<< HEAD
                        ->visible(fn ($record): bool => $record->type === 'video'),
>>>>>>> a12f125f4a (.)
=======
                        ->visible(fn($record): bool => $record->type === 'video'),
>>>>>>> b93ef594b4 (.)
=======
     * @return array<string, \Filament\Infolists\Components\Component>
     */
    public function getInfolistSchema(): array
    {
        return [
            'media_viewer' => Split::make([
                Section::make()->schema([
                    ImageEntry::make('url')
                        ->defaultImageUrl(fn ($record) => $record->getUrl())
                        ->size(500)
                        ->visible(fn ($record): bool => $record->type === 'image'),

                    VideoEntry::make('url')
                        ->defaultImageUrl(fn ($record) => $record->getUrl())
                        ->size(500)
                        ->visible(fn ($record): bool => $record->type === 'video'),
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
                ]),
                Section::make()->schema([
                    Actions::make([
                        Action::make('convert')
                            ->tooltip('convert')
                            ->icon('heroicon-o-scale')
<<<<<<< HEAD
                            ->schema(MediaConvertResource::getFormSchema())
                            ->action(function ($record, array $data): void {
                                $data['disk'] = $record->disk;
                                $data['file'] = $record->path . '/' . $record->file_name;
=======
<<<<<<< HEAD
                            ->schema(MediaConvertResource::getFormSchema())
                            ->action(function ($record, array $data): void {
                                $data['disk'] = $record->disk;
<<<<<<< HEAD
<<<<<<< HEAD
                                $data['file'] = $record->path . '/' . $record->file_name;
=======
                                $data['file'] = $record->path.'/'.$record->file_name;
>>>>>>> a12f125f4a (.)
=======
                                $data['file'] = $record->path . '/' . $record->file_name;
>>>>>>> b93ef594b4 (.)
=======
                            ->form(MediaConvertResource::getFormSchema())
                            ->action(function ($record, array $data): void {
                                $data['disk'] = $record->disk;
                                $data['file'] = $record->path.'/'.$record->file_name;
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
                                $convert_data = ConvertData::from($data);
                                $record->mediaConverts()->create($convert_data->toArray());
                            }),
                    ]),
                    TextEntry::make('name'),
                    TextEntry::make('collection_name'),
                    TextEntry::make('mime_type'),
                    TextEntry::make('human_readable_size'),
                    TextEntry::make('created_at'),
<<<<<<< HEAD
                ]),
            ]),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ]),
            ]),
=======
                ])
            ]),
            
>>>>>>> a12f125f4a (.)
=======
                ]),
            ]),
>>>>>>> b93ef594b4 (.)
=======
                ])
            ]),
            
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
            'entry_conversions' => RepeatableEntry::make('entry_conversions')
                ->schema([
                    TextEntry::make('name'),
                    TextEntry::make('src'),
                    ImageEntry::make('src'),
                ])
<<<<<<< HEAD
                ->columns(4),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->columns(4),
=======
                ->columns(4)
>>>>>>> a12f125f4a (.)
=======
                ->columns(4),
>>>>>>> b93ef594b4 (.)
=======
                ->columns(4)
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        ];
    }

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

    protected function getHeaderWidgets(): array
    {
        return [
            ConvertWidget::make(['record' => $this->record]),
        ];
    }
}
