<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\MediaResource\Pages;

use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Grid;
use Filament\Actions\Action;
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

class ViewMedia extends XotBaseViewRecord
{
    protected static string $resource = MediaResource::class;

    /**
     * Restituisce lo schema dell'infolist per la visualizzazione dei dettagli del record.
     *
     * @return array<int, Component>
     */
    #[Override]
    /**
     * @return array<string, mixed>
     */
    public function getInfolistSchema(): array
    {
        return [
            Grid::make(2)
                ->schema([
                Section::make()->schema([
                    ImageEntry::make('url')
                        ->defaultImageUrl(function($record) {
                            if (is_object($record) && method_exists($record, 'getUrl')) {
                                return $record->getUrl();
                            }
                            return null;
                        })
                        ->size(500)
                        ->visible(function($record): bool {
                            return is_object($record) && property_exists($record, 'type') && $record->type === 'image';
                        }),
                    VideoEntry::make('url')
                        ->defaultImageUrl(function($record) {
                            if (is_object($record) && method_exists($record, 'getUrl')) {
                                return $record->getUrl();
                            }
                            return null;
                        })
                        ->size(500)
                        ->visible(function($record): bool {
                            return is_object($record) && property_exists($record, 'type') && $record->type === 'video';
                        }),
                ]),
                Section::make()->schema([
                    Actions::make([
                        Action::make('convert')
                            ->tooltip('convert')
                            ->icon('heroicon-o-scale')
                            ->schema(MediaConvertResource::getFormSchema())
                            ->action(function ($record, array $data): void {
                                if (is_object($record) && property_exists($record, 'disk') && property_exists($record, 'path') && property_exists($record, 'file_name')) {
                                    $disk = $record->disk;
                                    $path = $record->path;
                                    $fileName = $record->file_name;
                                    
                                    if (is_string($disk) && is_string($path) && is_string($fileName)) {
                                        $data['disk'] = $disk;
                                        $data['file'] = $path . '/' . $fileName;
                                    }
                                }
                                $convert_data = ConvertData::from($data);
                                if (is_object($record) && method_exists($record, 'mediaConverts')) {
                                    $relation = $record->mediaConverts();
                                    if (is_object($relation) && method_exists($relation, 'create')) {
                                        $relation->create($convert_data->toArray());
                                    }
                                }
                            }),
                    ]),
                    TextEntry::make('name'),
                    TextEntry::make('collection_name'),
                    TextEntry::make('mime_type'),
                    TextEntry::make('human_readable_size'),
                    TextEntry::make('created_at'),
                ]),
            ]),
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
