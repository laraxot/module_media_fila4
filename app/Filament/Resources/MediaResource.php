<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
use Filament\Schemas\Components\Component;
use Override;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
use Modules\Media\Filament\Resources\MediaResource\Pages\ListMedia;
use Modules\Media\Filament\Resources\MediaResource\Pages\CreateMedia;
use Modules\Media\Filament\Resources\MediaResource\Pages\EditMedia;
use Modules\Media\Filament\Resources\MediaResource\Pages\ViewMedia;
use Modules\Media\Filament\Resources\MediaResource\Pages\ConvertMedia;
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\PageRegistration;
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Modules\Media\Filament\Resources\MediaResource\Pages\ConvertMedia;
use Modules\Media\Filament\Resources\MediaResource\Pages\CreateMedia;
use Modules\Media\Filament\Resources\MediaResource\Pages\EditMedia;
use Modules\Media\Filament\Resources\MediaResource\Pages\ListMedia;
use Modules\Media\Filament\Resources\MediaResource\Pages\ViewMedia;
use Modules\Media\Models\Media;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Override;

class MediaResource extends XotBaseResource
{
    protected static ?string $model = Media::class;
=======
use Modules\Media\Filament\Resources\MediaResource\Pages;
use Modules\Media\Models\Media;
use Modules\Xot\Filament\Resources\XotBaseResource;

class MediaResource extends XotBaseResource
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
    protected static null|string $model = Media::class;
>>>>>>> 5200b63 (.)

    /**
     * @return array<string, Component>
     */
    #[Override]
<<<<<<< HEAD
=======
=======
    protected static ?string $model = Media::class;
=======
    protected static null|string $model = Media::class;
>>>>>>> b93ef594b4 (.)

    /**
     * @return array<string, Component>
     */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
    protected static ?string $model = Media::class;

    /**
     * @return array<string, \Filament\Forms\Components\Component>
     */
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    public static function getFormSchema(): array
    {
        return [
            'file' => FileUpload::make('file')
                ->hint(static::trans('fields.file_hint'))
                ->storeFileNamesIn('original_file_name')
                ->visibility('private')
                ->required()
                ->columnSpanFull(),
            'attachment_type' => Radio::make('attachment_type'),
            'name' => TextInput::make('name')
                ->translateLabel()
                ->hint(static::trans('fields.name.hint'))
                ->autocomplete(false)
                ->maxLength(255)
                ->columnSpanFull(),
        ];
    }

    /**
     * @psalm-return array<never, never>
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
    #[Override]
    public static function getRelations(): array
    {
        return [];
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    public static function getRelations(): array
    {
        return [
        ];
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
    public static function getRelations(): array
    {
        return [];
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    }

    /**
     * @return array<PageRegistration>
     *
     * @psalm-return array{index: PageRegistration, create: PageRegistration, edit: PageRegistration}
     */
<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
    public static function getPages(): array
    {
        return [
            'index' => ListMedia::route('/'),
            'create' => CreateMedia::route('/create'),
            'edit' => EditMedia::route('/{record}/edit'),
            'view' => ViewMedia::route('/{record}'),
            'convert' => ConvertMedia::route('/{record}/convert'),
<<<<<<< HEAD
=======
=======
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMedia::route('/'),
            'create' => Pages\CreateMedia::route('/create'),
            'edit' => Pages\EditMedia::route('/{record}/edit'),
            'view' => Pages\ViewMedia::route('/{record}'),
            'convert' => Pages\ConvertMedia::route('/{record}/convert'),
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        ];
    }
}
