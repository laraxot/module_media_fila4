<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Tables\Columns;

<<<<<<< HEAD
use Filament\Tables\Columns\IconColumn;
use Modules\Media\Actions\CloudFront\GetCloudFrontSignedUrlAction;
=======
use Exception;
<<<<<<< HEAD
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

class CloudFrontIconMediaColumn extends IconColumn
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
            ->url(function ($record) use ($attachment): ?string {
                if (! is_object($record) || ! method_exists($record, 'getFirstMedia')) {
                    return null;
                }
                
                $media = $record->getFirstMedia($attachment);
                if (! is_object($media) || ! method_exists($media, 'getPath')) {
                    return null;
                }
                
                $path = $media->getPath();
                if (! is_string($path)) {
                    return null;
                }
                
                return app(GetCloudFrontSignedUrlAction::class)->execute($path, 60);
=======
        $this->default(fn($record) => $record->getFirstMedia($attachment))
            ->icon('heroicon-o-document-text')
            ->color(fn($record) => $record->getFirstMedia($attachment) ? 'success' : 'danger')
            ->tooltip(fn($record) => $record->getFirstMedia($attachment)->file_name ?? 'Documento non caricato')
            ->url(function ($record) use ($attachment) {
                $media = $record->getFirstMedia($attachment);
                if (!$media) {
                    return;
                }
                $signedUrl = app(GetCloudFrontSignedUrlAction::class)->execute($media->getPath(), 60);
                return $signedUrl;
>>>>>>> 5200b63 (.)
            })
            ->openUrlInNewTab();
    }
}
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

class CloudFrontIconMediaColumn extends IconColumn
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
                 ->url(function($record) use ($attachment){
                    $media = $record->getFirstMedia($attachment);
                    if (!$media) {
                        return;
                    }
                    $signedUrl = app(GetCloudFrontSignedUrlAction::class)->execute($media->getPath(), 60);
                    return $signedUrl;
                 })
                 ->openUrlInNewTab()

                ;


    }




}
>>>>>>> 0a466ed (.)
