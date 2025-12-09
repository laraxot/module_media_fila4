<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Tables\Columns;

use Filament\Tables\Columns\IconColumn;
use Modules\Media\Actions\CloudFront\GetCloudFrontSignedUrlAction;
use Modules\Media\Models\Media;

class CloudFrontIconMediaColumn extends IconColumn
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
            })
            ->openUrlInNewTab();
    }
}
