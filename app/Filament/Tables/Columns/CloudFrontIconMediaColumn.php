<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Tables\Columns;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Tables\Columns\IconColumn;
use Modules\Media\Actions\CloudFront\GetCloudFrontSignedUrlAction;
=======
use Exception;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Actions\Action;
=======
>>>>>>> 1634e53 (.)
use Filament\Tables\Columns\IconColumn;
use Modules\Media\Actions\CloudFront\GetCloudFrontSignedUrlAction;
<<<<<<< HEAD
use Modules\<main module>\Models\User;
use Spatie\ModelStates\State;
>>>>>>> 5200b63 (.)
=======
use Modules\Media\Models\Media;
>>>>>>> 1634e53 (.)

class CloudFrontIconMediaColumn extends IconColumn
{
    protected function setUp(): void
    {
        parent::setUp();
        $attachment = $this->getName();

<<<<<<< HEAD
<<<<<<< HEAD
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
                    if (is_object($media) && isset($media->file_name) && is_string($media->file_name)) {
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
=======
        $this->default(static function (mixed $record) use ($attachment): mixed {
            if (! is_object($record) || ! method_exists($record, 'getFirstMedia')) {
                return null;
            }

            return $record->getFirstMedia($attachment);
        })
>>>>>>> 1634e53 (.)
            ->icon('heroicon-o-document-text')
            ->color(static function (mixed $record) use ($attachment): string {
                if (! is_object($record) || ! method_exists($record, 'getFirstMedia')) {
                    return 'danger';
                }
<<<<<<< HEAD
                $signedUrl = app(GetCloudFrontSignedUrlAction::class)->execute($media->getPath(), 60);
                return $signedUrl;
>>>>>>> 5200b63 (.)
=======
        $this->default(function($record) use ($attachment) {
                if (is_object($record) && method_exists($record, 'getFirstMedia')) {
                    return $record->getFirstMedia($attachment);
                }
                return null;
            })
=======
        $this->default(fn($record) => $record->getFirstMedia($attachment))
>>>>>>> 2a4b5df (.)
            ->icon('heroicon-o-document-text')
            ->color(fn($record) => $record->getFirstMedia($attachment) ? 'success' : 'danger')
            ->tooltip(fn($record) => $record->getFirstMedia($attachment)->file_name ?? 'Documento non caricato')
            ->url(function ($record) use ($attachment) {
                $media = $record->getFirstMedia($attachment);
                if (!$media) {
                    return;
                }
<<<<<<< HEAD
                return null;
>>>>>>> 13d1d7e (.)
=======
                $signedUrl = app(GetCloudFrontSignedUrlAction::class)->execute($media->getPath(), 60);
                return $signedUrl;
>>>>>>> 2a4b5df (.)
=======

                return $record->getFirstMedia($attachment) ? 'success' : 'danger';
            })
            ->tooltip(static function (mixed $record) use ($attachment): string {
                if (! is_object($record) || ! method_exists($record, 'getFirstMedia')) {
                    return 'Documento non caricato';
                }
                /** @var Media|null $media */
                $media = $record->getFirstMedia($attachment);

                return $media->file_name ?? 'Documento non caricato';
            })
            ->url(static function (mixed $record) use ($attachment): ?string {
                if (! is_object($record) || ! method_exists($record, 'getFirstMedia')) {
                    return null;
                }
                /** @var Media|null $media */
                $media = $record->getFirstMedia($attachment);

                if ($media === null) {
                    return null;
                }

                return app(GetCloudFrontSignedUrlAction::class)->execute($media->getPath(), 60);
>>>>>>> 1634e53 (.)
            })
            ->openUrlInNewTab();
    }
}
