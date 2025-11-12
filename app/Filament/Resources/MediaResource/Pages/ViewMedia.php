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
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 446bc61 (.)
=======
>>>>>>> 36d5713 (.)
=======
>>>>>>> 1a0067b (.)
=======
>>>>>>> 70517e3 (.)
=======
>>>>>>> 07b5575 (.)
=======
>>>>>>> 77463ee (.)
=======
>>>>>>> 76e8f34 (.)
=======
>>>>>>> 71435ff (.)
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Grid;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 1a0067b (.)
=======
>>>>>>> 07b5575 (.)
=======
>>>>>>> 76e8f34 (.)
=======
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Flex;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Actions;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1999eb3 (.)
>>>>>>> 446bc61 (.)
=======
>>>>>>> 36d5713 (.)
=======
>>>>>>> 739e4b7 (.)
>>>>>>> 1a0067b (.)
=======
>>>>>>> 70517e3 (.)
=======
>>>>>>> 1999eb3 (.)
>>>>>>> 07b5575 (.)
=======
>>>>>>> 77463ee (.)
=======
>>>>>>> 739e4b7 (.)
>>>>>>> 76e8f34 (.)
=======
>>>>>>> 71435ff (.)
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
<<<<<<< HEAD
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
=======
use Filament\Resources\Pages\ViewRecord;
use Modules\Media\Actions\Video\ConvertVideoByConvertDataAction;
>>>>>>> 5200b63 (.)
use Modules\Media\Datas\ConvertData;
use Modules\Media\Filament\Infolists\VideoEntry;
use Modules\Media\Filament\Resources\MediaConvertResource;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Media\Filament\Resources\MediaResource\Widgets\ConvertWidget;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
<<<<<<< HEAD
use Override;
=======
>>>>>>> 5200b63 (.)

class ViewMedia extends XotBaseViewRecord
{
    protected static string $resource = MediaResource::class;

    /**
     * Restituisce lo schema dell'infolist per la visualizzazione dei dettagli del record.
     *
     * @return array<int, Component>
     */
    #[Override]
    public function getInfolistSchema(): array
    {
        return [
            Grid::make(2)
                ->schema([
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    Section::make()->schema([
                        ImageEntry::make('url')
                            ->defaultImageUrl(fn (\Modules\Media\Models\Media $record) => $record->getUrl())
                            ->size(500)
                            ->visible(fn (\Modules\Media\Models\Media $record): bool => $record->type === 'image'),
                        VideoEntry::make('url')
                            ->defaultImageUrl(fn (\Modules\Media\Models\Media $record) => $record->getUrl())
                            ->size(500)
                            ->visible(fn (\Modules\Media\Models\Media $record): bool => $record->type === 'video'),
                    ]),
                    Section::make()->schema([
                        Actions::make([
                            Action::make('convert')
                                ->tooltip('convert')
                                ->icon('heroicon-o-scale')
                                ->schema(MediaConvertResource::getFormSchema())
                                ->action(function (\Modules\Media\Models\Media $record, array $data): void {
                                    /** @var array<string, mixed> $actionData */
                                    $actionData = $data;
                                    $actionData['disk'] = (string) $record->disk;
                                    $actionData['file'] = (string) $record->path.'/'.(string) $record->file_name;
                                    $convert_data = ConvertData::from($actionData);
                                    
                                    /** @var array<string, mixed> $convertArray */
                                    $convertArray = $convert_data->toArray();
                                    $record->mediaConverts()->create($convertArray);
                                }),
                        ]),
                        TextEntry::make('name'),
                        TextEntry::make('collection_name'),
                        TextEntry::make('mime_type'),
                        TextEntry::make('human_readable_size'),
                        TextEntry::make('created_at'),
                    ]),
                ]),
=======
=======
=======
            'media_viewer' => Flex::make([
>>>>>>> 739e4b7 (.)
>>>>>>> 1a0067b (.)
=======
>>>>>>> 70517e3 (.)
=======
=======
            'media_viewer' => Flex::make([
>>>>>>> 739e4b7 (.)
>>>>>>> 76e8f34 (.)
=======
>>>>>>> 71435ff (.)
                Section::make()->schema([
                    ImageEntry::make('url')
                        ->defaultImageUrl(fn($record) => $record->getUrl())
                        ->size(500)
                        ->visible(fn($record): bool => $record->type === 'image'),
                    VideoEntry::make('url')
                        ->defaultImageUrl(fn($record) => $record->getUrl())
                        ->size(500)
                        ->visible(fn($record): bool => $record->type === 'video'),
                ]),
                Section::make()->schema([
                    Actions::make([
                        Action::make('convert')
                            ->tooltip('convert')
                            ->icon('heroicon-o-scale')
                            ->schema(MediaConvertResource::getFormSchema())
                            ->action(function ($record, array $data): void {
                                $data['disk'] = $record->disk;
                                $data['file'] = $record->path . '/' . $record->file_name;
                                $convert_data = ConvertData::from($data);
                                $record->mediaConverts()->create($convert_data->toArray());
                            }),
                    ]),
                    TextEntry::make('name'),
                    TextEntry::make('collection_name'),
                    TextEntry::make('mime_type'),
                    TextEntry::make('human_readable_size'),
                    TextEntry::make('created_at'),
                ]),
            ]),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
<<<<<<< HEAD
>>>>>>> 446bc61 (.)
=======
>>>>>>> 36d5713 (.)
=======
>>>>>>> 1a0067b (.)
=======
>>>>>>> 70517e3 (.)
=======
>>>>>>> 07b5575 (.)
=======
>>>>>>> 77463ee (.)
=======
>>>>>>> 76e8f34 (.)
=======
>>>>>>> 71435ff (.)
            RepeatableEntry::make('entry_conversions')
                ->schema([
                    TextEntry::make('name'),
                    TextEntry::make('src'),
                    ImageEntry::make('src'),
                ])
                ->columns(4),
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
