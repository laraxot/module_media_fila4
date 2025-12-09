<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Tables\Columns;

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
use Illuminate\Http\Request;
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
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
use Modules\<main module>\Models\User;
use Spatie\ModelStates\State;
>>>>>>> 5200b63 (.)

class IconMediaColumn extends IconColumn
{
    protected function setUp(): void
    {
        parent::setUp();
        $attachment = $this->getName();

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
            ->icon('heroicon-o-document-text')
            ->color(fn($record) => $record->getFirstMedia($attachment) ? 'success' : 'danger')
            ->tooltip(fn($record) => $record->getFirstMedia($attachment)->file_name ?? 'Documento non caricato')
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

            ->action(function ($record, Request $request) use ($attachment) {
                // @phpstan-ignore method.nonObject
                $media = $record->getFirstMedia($attachment);
                if (!$media) {
                    return;
                }
                //dddx($media->getPath());
                return $media->toInlineResponse($request);

                //return $media->toResponse($request);
                //return Storage::disk($media->disk)->download($media->getPathRelativeToRoot());
                //return Storage::disk($media->disk)
                //    ->temporaryUploadUrl($media->getPathRelativeToRoot(),now()->addMinutes(5));
                //return response()->streamDownload(function () use ($media) {
                //    echo $media->get();
                //}, $media->file_name);
                //$headers=[
                //    'Content-Type' => $media->mime_type,
                //    'Content-Disposition' => 'inline; filename="' . basename($media->getPathRelativeToRoot()) . '"'
                //];
                //$path = Storage::disk($media->disk)->path($media->getPathRelativeToRoot());
                //return response()->file($path, $headers);


                //return Storage::disk($media->disk)->response($media->getPathRelativeToRoot(), null, $headers);
                
>>>>>>> 5200b63 (.)
            });
    }
}
<<<<<<< HEAD
=======
use Illuminate\Support\Arr;
use Spatie\ModelStates\State;
use Modules\SaluteOra\Models\User;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\SelectColumn;
use Modules\Media\Actions\CloudFront\GetCloudFrontSignedUrlAction;

class IconMediaColumn extends IconColumn
{

    protected function setUp(): void
    {
        parent::setUp();
        $attachment=$this->getName();

        $this->default(
            fn($record)=>$record->getFirstMedia($attachment))
                ->icon('heroicon-o-document-text')
                ->color(fn ($record) => $record->getFirstMedia($attachment) ? 'success' : 'danger')
                ->tooltip(fn ($record) => $record->getFirstMedia($attachment)->file_name ?? 'Documento non caricato')
               /*
                 ->url(function($record) use ($attachment){
                    $media = $record->getFirstMedia($attachment);
                    if (!$media) {
                        return;
                    }
                    $signedUrl =$media->getUrl();
                    //$signedUrl = app(GetCloudFrontSignedUrlAction::class)->execute($media->getPath(), 60);
                    return $signedUrl;
                 })
                 ->openUrlInNewTab()
                 */
                
                
                ->action(function ($record,Request $request) use ($attachment) {

                    // @phpstan-ignore method.nonObject
                    $media = $record->getFirstMedia($attachment);
                    if (!$media) {
                        return;
                    }
                    //dddx($media->getPath());
                    return $media->toInlineResponse($request);
                    //return $media->toResponse($request);

                    //return Storage::disk($media->disk)->download($media->getPathRelativeToRoot());
                    //return Storage::disk($media->disk)
                    //    ->temporaryUploadUrl($media->getPathRelativeToRoot(),now()->addMinutes(5));

                    //return response()->streamDownload(function () use ($media) {
                    //    echo $media->get();
                    //}, $media->file_name);

                    //$headers=[
                    //    'Content-Type' => $media->mime_type,
                    //    'Content-Disposition' => 'inline; filename="' . basename($media->getPathRelativeToRoot()) . '"'
                    //];
                    //$path = Storage::disk($media->disk)->path($media->getPathRelativeToRoot());
                    //return response()->file($path, $headers);
                    //
                    //
                    //return Storage::disk($media->disk)->response($media->getPathRelativeToRoot(), null, $headers);
                    //
                })
                  
                ;


    }




}
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
