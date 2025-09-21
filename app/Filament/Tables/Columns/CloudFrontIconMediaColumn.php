<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Tables\Columns;

use Exception;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Modules\Media\Actions\CloudFront\GetCloudFrontSignedUrlAction;
use Modules\SaluteOra\Models\User;
use Spatie\ModelStates\State;

class CloudFrontIconMediaColumn extends IconColumn
{
    protected function setUp(): void
    {
        parent::setUp();
        $attachment = $this->getName();

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
            })
            ->openUrlInNewTab();
    }
}
<<<<<<< HEAD
=======
=======
use Illuminate\Support\Arr;
use Spatie\ModelStates\State;
use Modules\SaluteOra\Models\User;
use Filament\Tables\Actions\Action;
=======
>>>>>>> b93ef594b4 (.)
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Modules\Media\Actions\CloudFront\GetCloudFrontSignedUrlAction;
use Modules\SaluteOra\Models\User;
use Spatie\ModelStates\State;

class CloudFrontIconMediaColumn extends IconColumn
{
    protected function setUp(): void
    {
        parent::setUp();
        $attachment = $this->getName();

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
            })
            ->openUrlInNewTab();
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
>>>>>>> origin/develop




<<<<<<< HEAD
}
>>>>>>> a12f125f4a (.)
=======
}
>>>>>>> b93ef594b4 (.)
=======
}
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
