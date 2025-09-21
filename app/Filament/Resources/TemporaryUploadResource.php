<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources;

<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Override;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
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
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
use Filament\Resources\Pages\PageRegistration;
use Modules\Media\Filament\Resources\TemporaryUploadResource\Pages\CreateTemporaryUpload;
// use Modules\Media\Filament\Resources\TemporaryUploadResource\RelationManagers;
use Modules\Media\Filament\Resources\TemporaryUploadResource\Pages\EditTemporaryUpload;
// use Filament\Forms;
use Modules\Media\Filament\Resources\TemporaryUploadResource\Pages\ListTemporaryUploads;
use Modules\Media\Models\TemporaryUpload;
use Modules\Xot\Filament\Resources\XotBaseResource;

// use Illuminate\Database\Eloquent\Builder;
// use Illuminate\Database\Eloquent\SoftDeletingScope;

class TemporaryUploadResource extends XotBaseResource
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
    protected static null|string $model = TemporaryUpload::class;

    /**
     * @return array<string, Component>
     */
    #[Override]
<<<<<<< HEAD
=======
=======
    protected static ?string $model = TemporaryUpload::class;
=======
    protected static null|string $model = TemporaryUpload::class;
>>>>>>> b93ef594b4 (.)

    /**
     * @return array<string, Component>
     */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
    public static function getFormSchema(): array
    {
        return [
            'file' => FileUpload::make('file')
<<<<<<< HEAD
=======
=======
    protected static ?string $model = TemporaryUpload::class;

    /**
     * @return array<string, \Filament\Forms\Components\Component>
     */
    public static function getFormSchema(): array
    {
        return [
            'file' => \Filament\Forms\Components\FileUpload::make('file')
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
                ->required()
                ->preserveFilenames()
                ->acceptedFileTypes(['image/*', 'application/pdf', 'application/msword'])
                ->maxSize(10240),
<<<<<<< HEAD
            'folder' => TextInput::make('folder')->required()->maxLength(255),
            'expires_at' => DateTimePicker::make('expires_at')->required(),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'folder' => TextInput::make('folder')->required()->maxLength(255),
            'expires_at' => DateTimePicker::make('expires_at')->required(),
=======
            'folder' => TextInput::make('folder')
                ->required()
                ->maxLength(255),
            'expires_at' => DateTimePicker::make('expires_at')
                ->required(),
>>>>>>> a12f125f4a (.)
=======
            'folder' => TextInput::make('folder')->required()->maxLength(255),
            'expires_at' => DateTimePicker::make('expires_at')->required(),
>>>>>>> b93ef594b4 (.)
=======
            'folder' => \Filament\Forms\Components\TextInput::make('folder')
                ->required()
                ->maxLength(255),
            'expires_at' => \Filament\Forms\Components\DateTimePicker::make('expires_at')
                ->required(),
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
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
     * @return PageRegistration[]
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
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    public static function getPages(): array
    {
        return [
            'index' => ListTemporaryUploads::route('/'),
            'create' => CreateTemporaryUpload::route('/create'),
            'edit' => EditTemporaryUpload::route('/{record}/edit'),
        ];
    }
}
