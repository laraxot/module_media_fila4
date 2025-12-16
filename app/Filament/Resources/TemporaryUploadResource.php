<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\PageRegistration;
use Filament\Schemas\Components\Component;
use Modules\Media\Filament\Resources\TemporaryUploadResource\Pages\CreateTemporaryUpload;
use Modules\Media\Filament\Resources\TemporaryUploadResource\Pages\EditTemporaryUpload;
// use Modules\Media\Filament\Resources\TemporaryUploadResource\RelationManagers;
use Modules\Media\Filament\Resources\TemporaryUploadResource\Pages\ListTemporaryUploads;
// use Filament\Forms;
use Modules\Media\Models\TemporaryUpload;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Override;
=======
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 98c37f4 (.)
use Filament\Schemas\Components\Component;
use Override;
=======
>>>>>>> 0a466ed (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> 37a2da6 (.)
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
use Filament\Resources\Pages\PageRegistration;
use Modules\Media\Filament\Resources\TemporaryUploadResource\Pages\CreateTemporaryUpload;
// use Modules\Media\Filament\Resources\TemporaryUploadResource\RelationManagers;
use Modules\Media\Filament\Resources\TemporaryUploadResource\Pages\EditTemporaryUpload;
// use Filament\Forms;
use Modules\Media\Filament\Resources\TemporaryUploadResource\Pages\ListTemporaryUploads;
use Modules\Media\Models\TemporaryUpload;
use Modules\Xot\Filament\Resources\XotBaseResource;
>>>>>>> 5200b63 (.)

// use Illuminate\Database\Eloquent\Builder;
// use Illuminate\Database\Eloquent\SoftDeletingScope;

class TemporaryUploadResource extends XotBaseResource
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static ?string $model = TemporaryUpload::class;
=======
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
    protected static null|string $model = TemporaryUpload::class;
>>>>>>> 5200b63 (.)

    /**
     * @return array<string, Component>
     */
    #[Override]
<<<<<<< HEAD
=======
    protected static ?string $model = TemporaryUpload::class;

    /**
     * @return array<string, \Filament\Schemas\Components\Component>
     */
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
    public static function getFormSchema(): array
    {
        return [
            'file' => FileUpload::make('file')
                ->required()
                ->preserveFilenames()
                ->acceptedFileTypes(['image/*', 'application/pdf', 'application/msword'])
                ->maxSize(10240),
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
>>>>>>> 0a466ed (.)
=======
            'folder' => TextInput::make('folder')->required()->maxLength(255),
            'expires_at' => DateTimePicker::make('expires_at')->required(),
>>>>>>> 37a2da6 (.)
        ];
    }

    /**
     * @psalm-return array<never, never>
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
    #[Override]
    public static function getRelations(): array
    {
        return [];
<<<<<<< HEAD
=======
    public static function getRelations(): array
    {
        return [
        ];
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
    }

    /**
     * @return array<PageRegistration>
     *
     * @psalm-return array{index: PageRegistration, create: PageRegistration, edit: PageRegistration}
     */
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> 0a466ed (.)
=======
    #[Override]
>>>>>>> 37a2da6 (.)
    public static function getPages(): array
    {
        return [
            'index' => ListTemporaryUploads::route('/'),
            'create' => CreateTemporaryUpload::route('/create'),
            'edit' => EditTemporaryUpload::route('/{record}/edit'),
        ];
    }
}
