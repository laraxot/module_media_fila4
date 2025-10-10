<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Tables\Columns;

use Exception;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Actions\Action;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Modules\Media\Actions\CloudFront\GetCloudFrontSignedUrlAction;
use Modules\User\Models\User;
use Spatie\ModelStates\State;

class CloudFrontIconMediaColumn extends IconColumn
{
    protected function setUp(): void
    {
        parent::setUp();
        $attachment = $this->getName();

        $this->default(function($record) use ($attachment) {
                if (is_object($record) && method_exists($record, 'getFirstMedia')) {
                    return $record->getFirstMedia($attachment);
                }
                return null;
            })
            ->icon('heroicon-o-document-text')
            ->color(function($record) use ($attachment) {
                if (is_object($record) && method_exists($record, 'getFirstMedia')) {
                    return $record->getFirstMedia($attachment) ? 'success' : 'danger';
                }
                return 'danger';
            })
            ->tooltip(function($record) use ($attachment) {
                if (is_object($record) && method_exists($record, 'getFirstMedia')) {
                    $media = $record->getFirstMedia($attachment);
                    if (is_object($media) && property_exists($media, 'file_name')) {
                        return $media->file_name ?? 'Documento non caricato';
                    }
                }
                return 'Documento non caricato';
            })
            ->url(function ($record) use ($attachment) {
                if (is_object($record) && method_exists($record, 'getFirstMedia')) {
                    $media = $record->getFirstMedia($attachment);
                    if (is_object($media) && method_exists($media, 'getPath')) {
                        $path = $media->getPath();
                        if (is_string($path)) {
                            return app(GetCloudFrontSignedUrlAction::class)->execute($path, 60);
                        }
                    }
                }
                return null;
            })
            ->openUrlInNewTab();
    }
}
