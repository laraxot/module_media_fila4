<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Tables\Columns;

use Filament\Tables\Columns\IconColumn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Media\Actions\CloudFront\GetCloudFrontSignedUrlAction;

class IconMediaColumn extends IconColumn
{
    protected function setUp(): void
    {
        parent::setUp();
        $attachment = $this->getName();

        $this->default(static function (mixed $record) use ($attachment): mixed {
            if (! is_object($record) || ! method_exists($record, 'getFirstMedia')) {
                return null;
            }

            return $record->getFirstMedia($attachment);
        })
            ->icon('heroicon-o-document-text')
            ->color(static function (mixed $record) use ($attachment): string {
                if (! is_object($record) || ! method_exists($record, 'getFirstMedia')) {
                    return 'danger';
                }

                return $record->getFirstMedia($attachment) ? 'success' : 'danger';
            })
            ->tooltip(static function (mixed $record) use ($attachment): string {
                if (! is_object($record) || ! method_exists($record, 'getFirstMedia')) {
                    return 'Documento non caricato';
                }
                $media = $record->getFirstMedia($attachment);
                if (! $media || ! is_object($media) || ! isset($media->file_name)) {
                    return 'Documento non caricato';
                }
                /** @var string $fileName */
                $fileName = $media->file_name;

                return $fileName;
            })
            /*
             * ->url(function($record) use ($attachment){
             * $media = $record->getFirstMedia($attachment);
             * if (!$media) {
             * return;
             * }
             * $signedUrl =$media->getUrl();
             * //$signedUrl = app(GetCloudFrontSignedUrlAction::class)->execute($media->getPath(), 60);
             * return $signedUrl;
             * })
             * ->openUrlInNewTab()
             */

            ->action(static function (mixed $record, Request $request) use ($attachment): mixed {
                /** @phpstan-ignore-next-line function.impossibleType, function.alreadyNarrowedType - Runtime safety check */
                if (! is_object($record) || ! method_exists($record, 'getFirstMedia')) {
                    return null;
                }
                $media = $record->getFirstMedia($attachment);
                if (! $media || ! is_object($media) || ! method_exists($media, 'toInlineResponse')) {
                    return null;
                }

                // dddx($media->getPath());
                return $media->toInlineResponse($request);

                // return $media->toResponse($request);
                // return Storage::disk($media->disk)->download($media->getPathRelativeToRoot());
                // return Storage::disk($media->disk)
                //    ->temporaryUploadUrl($media->getPathRelativeToRoot(),now()->addMinutes(5));
                // return response()->streamDownload(function () use ($media) {
                //    echo $media->get();
                // }, $media->file_name);
                // $headers=[
                //    'Content-Type' => $media->mime_type,
                //    'Content-Disposition' => 'inline; filename="' . basename($media->getPathRelativeToRoot()) . '"'
                // ];
                // $path = Storage::disk($media->disk)->path($media->getPathRelativeToRoot());
                // return response()->file($path, $headers);

                // return Storage::disk($media->disk)->response($media->getPathRelativeToRoot(), null, $headers);
            });
    }
}
