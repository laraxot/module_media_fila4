<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Tables\Columns;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Tables\Columns\IconColumn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Media\Actions\CloudFront\GetCloudFrontSignedUrlAction;
=======
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 146bbc3 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> f5f7069 (.)
use Illuminate\Http\Request;
use Exception;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Actions\Action;
=======
>>>>>>> 13d1d7e (.)
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Modules\Media\Actions\CloudFront\GetCloudFrontSignedUrlAction;
use Modules\<main module>\Models\User;
use Spatie\ModelStates\State;
>>>>>>> 5200b63 (.)
=======
use Illuminate\Http\Request;
>>>>>>> 13d1d7e (.)

class IconMediaColumn extends IconColumn
{
    protected function setUp(): void
    {
        parent::setUp();
        $attachment = $this->getName();

<<<<<<< HEAD
<<<<<<< HEAD
        $this->default(function ($record) use ($attachment) {
                if (is_object($record) && method_exists($record, 'getFirstMedia')) {
                    return $record->getFirstMedia($attachment);
                }
                return null;
            })
            ->icon('heroicon-o-document-text')
            ->color(function ($record) use ($attachment): string {
                if (is_object($record) && method_exists($record, 'getFirstMedia')) {
                    return $record->getFirstMedia($attachment) ? 'success' : 'danger';
                }
                return 'danger';
            })
            ->tooltip(function ($record) use ($attachment): string {
                if (is_object($record) && method_exists($record, 'getFirstMedia')) {
                    $media = $record->getFirstMedia($attachment);
                    if (is_object($media) && property_exists($media, 'file_name') && is_string($media->file_name)) {
                        return $media->file_name;
                    }
                }
                return 'Documento non caricato';
            })
            ->action(function (array $arguments, Request $request) use ($attachment) {
                // Skip action if record is not available or doesn't have media capabilities
                if (! isset($arguments['record'])) {
                    return null;
                }
                
                $record = $arguments['record'];
                
                // Verify record is an object and has the required method
                if (! is_object($record) || ! method_exists($record, 'getFirstMedia')) {
                    return null;
                }
                
                /** @var \Spatie\MediaLibrary\MediaCollections\Models\Media|null $media */
                $media = $record->getFirstMedia($attachment);
                if ($media === null) {
                    return null;
                }

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
=======
        $this->default(fn($record) => $record->getFirstMedia($attachment))
=======
        $this->default(function (Model $record) use ($attachment) {
            if (method_exists($record, 'getFirstMedia')) {
                return $record->getFirstMedia($attachment);
            }

        })
>>>>>>> 13d1d7e (.)
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

<<<<<<< HEAD

                //return Storage::disk($media->disk)->response($media->getPathRelativeToRoot(), null, $headers);
                
>>>>>>> 5200b63 (.)
=======
>>>>>>> 13d1d7e (.)
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
