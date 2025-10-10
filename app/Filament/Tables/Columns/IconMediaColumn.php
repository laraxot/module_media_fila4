<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Tables\Columns;

use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class IconMediaColumn extends IconColumn
{
    protected function setUp(): void
    {
        parent::setUp();
        $attachment = $this->getName();

        $this->default(function (Model $record) use ($attachment) {
            if (method_exists($record, 'getFirstMedia')) {
                return $record->getFirstMedia($attachment);
            }

        })
            ->icon('heroicon-o-document-text')
            ->color(function (Model $record) use ($attachment) {
                return method_exists($record, 'getFirstMedia') && $record->getFirstMedia($attachment) ? 'success' : 'danger';
            })
            ->tooltip(function (Model $record) use ($attachment) {
                if (method_exists($record, 'getFirstMedia')) {
                    $media = $record->getFirstMedia($attachment);
                    if (is_object($media) && property_exists($media, 'file_name')) {
                        return $media->file_name ?? 'Documento non caricato';
                    }
                }

                return 'Documento non caricato';
            })
            ->action(function (Model $record, Request $request) use ($attachment) {
                if (method_exists($record, 'getFirstMedia')) {
                    $media = $record->getFirstMedia($attachment);
                    if (is_object($media) && method_exists($media, 'toInlineResponse')) {
                        return $media->toInlineResponse($request);
                    }
                }

            });
        /*
         * ->url(function(Model $record) use ($attachment){
         * $media = $record->getFirstMedia($attachment);
         * if (!$media) {
{{ ... }}
         * }
         * $signedUrl =$media->getUrl();
         * return $signedUrl;
         * })
         * ->openUrlInNewTab()
         */
    }
}
