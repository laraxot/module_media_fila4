<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\HasMediaResource\Actions;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
use Filament\Actions\Action;
=======
use Filament\Actions\Action;
use Exception;
>>>>>>> 5200b63 (.)
=======
use Filament\Actions\Action;
use Exception;
=======
<<<<<<< HEAD
use Filament\Actions\Action;
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
use Filament\Actions\Action;
use Exception;
>>>>>>> f1c6d6e (.)
=======
use Exception;
use Filament\Actions\Action;
>>>>>>> f41e45e (.)
use Filament\Forms\Components\BaseFileUpload;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;

class AddAttachmentAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->icon('heroicon-o-plus')
            ->color('success')
            ->button()
<<<<<<< HEAD
<<<<<<< HEAD
            ->schema(fn (): array => static::getFormSchema(false))
=======
            ->schema(fn(): array => static::getFormSchema(false))
>>>>>>> 5200b63 (.)
=======
            ->schema(fn (): array => static::getFormSchema(false))
>>>>>>> f41e45e (.)
            ->action(static::formHandlerCallback(...));
    }

    public static function trans(string $key): string
    {
        Assert::string(
<<<<<<< HEAD
<<<<<<< HEAD
            $ris = trans('media::add_attachment_action.'.$key),
            '['.$key.']['.__LINE__.']['.class_basename(__CLASS__).']',
=======
            $ris = trans('media::add_attachment_action.' . $key),
            '[' . $key . '][' . __LINE__ . '][' . class_basename(__CLASS__) . ']',
>>>>>>> 5200b63 (.)
=======
            $ris = trans('media::add_attachment_action.'.$key),
            '['.$key.']['.__LINE__.']['.class_basename(__CLASS__).']',
>>>>>>> f41e45e (.)
        );

        return $ris;
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getDefaultName(): ?string
=======
    public static function getDefaultName(): null|string
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
    public static function getDefaultName(): null|string
=======
    public static function getDefaultName(): ?string
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
    public static function getDefaultName(): null|string
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> a80d398 (.)
=======
    public static function getDefaultName(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getDefaultName(): null|string
=======
    public static function getDefaultName(): ?string
>>>>>>> a12f125f4a (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> b93ef594b4 (.)
=======
    public static function getDefaultName(): ?string
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
    public static function getDefaultName(): null|string
>>>>>>> f1c6d6e (.)
=======
    public static function getDefaultName(): ?string
>>>>>>> f41e45e (.)
    {
        return 'add_attachment';
    }

    /**
     * @return array<int, Radio|TextInput|BaseFileUpload|FileUpload>
     */
    public static function getFormSchema(bool $asset = true): array
    {
        // Assert::string($disk = $asset ? config('xra.asset.attachments.disk.driver') : config('xra.operation.attachments.disk.driver'));
        // Assert::isArray($file_types = $asset ? config('xra.asset.attachments.allowed_file_types') : config('xra.operation.attachments.allowed_file_types'));
        Assert::integer($max_size = config('media-library.max_file_size'));

        return [
            FileUpload::make('file')
                ->hint(static::trans('fields.file_hint'))
                ->storeFileNamesIn('original_file_name')
                // ->disk($disk)
                // ->acceptedFileTypes($file_types)
                ->visibility('private')
                ->maxSize($max_size)
                ->required()
                ->columnSpanFull(),
            /*
             * Radio::make('attachment_type')
             * ->hiddenLabel()
             * ->options(
             * AttachmentTypeEnum::descriptionsByValue($asset ? AttachmentTypeEnum::cases() : AttachmentTypeEnum::operationCases()),
             * )
             * ->default(AttachmentTypeEnum::Image())
             * ->columns(
             * $asset ? \count(AttachmentTypeEnum::cases()) : \count(AttachmentTypeEnum::operationCases()),
             * )
             * ->required()
             * ->columnSpanFull(),
             */
            // Radio::make('attachment_type')->columnSpanFull(),
            TextInput::make('name')
                ->hint(static::trans('fields.name_hint'))
                ->autocomplete(false)
                ->maxLength(255)
                ->columnSpanFull(),
        ];
    }

    public static function formHandlerCallback(RelationManager $livewire, array $data): void
    {
        $ownerRecord = $livewire->getOwnerRecord();
        $mediaCollection = $data['attachment_type'] ?? 'default';
        // $mediaCollection = 'default';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! method_exists($ownerRecord, 'addMediaFromDisk')) {
            throw new Exception('wip');
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $fileAdder = $ownerRecord->addMediaFromDisk($data['file'], config('attachment.upload.disk.driver'));

        if ($fileAdder === null || ! is_object($fileAdder)) {
            throw new Exception('Failed to add media from disk');
        }

        if (! method_exists($fileAdder, 'setName') || ! method_exists($fileAdder, 'preservingOriginal') || ! method_exists($fileAdder, 'toMediaCollection')) {
            throw new Exception('FileAdder does not have required methods');
        }

        $fileAdderWithName = $fileAdder->setName($data['name'] ?? Str::beforeLast((string) ($data['original_file_name'] ?? ''), '.'));
        if (! is_object($fileAdderWithName) || ! method_exists($fileAdderWithName, 'preservingOriginal')) {
            throw new Exception('setName did not return valid object');
        }

        $fileAdderPreserving = $fileAdderWithName->preservingOriginal();
        if (! is_object($fileAdderPreserving) || ! method_exists($fileAdderPreserving, 'toMediaCollection')) {
            throw new Exception('preservingOriginal did not return valid object');
        }

        $attachment = $fileAdderPreserving->toMediaCollection($mediaCollection);

        if (! is_object($attachment) || ! method_exists($attachment, 'update')) {
            throw new Exception('toMediaCollection did not return valid object');
        }
=======
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
        if (!method_exists($ownerRecord, 'addMediaFromDisk')) {
=======
        if (! method_exists($ownerRecord, 'addMediaFromDisk')) {
>>>>>>> f41e45e (.)
            throw new Exception('wip');
        }

=======
>>>>>>> 2a4b5df (.)
=======
>>>>>>> 21a9aec (.)
        $attachment = $ownerRecord
            ->addMediaFromDisk($data['file'], config('attachment.upload.disk.driver'))
            ->setName($data['name'] ?? Str::beforeLast($data['original_file_name'], '.'))
            ->preservingOriginal()
            ->toMediaCollection($mediaCollection);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
        $file = $data['file'] ?? null;
        $fileName = $data['name'] ?? null;
        $originalFileName = $data['original_file_name'] ?? null;
        
        if (!is_string($file) || !is_string($originalFileName)) {
            throw new Exception('Invalid file data');
        }
        
        $media = $ownerRecord->addMediaFromDisk($file, config('attachment.upload.disk.driver'));
        
        if (is_object($media) && method_exists($media, 'setName')) {
            $name = $fileName ?? Str::beforeLast($originalFileName, '.');
            $media = $media->setName($name);
        }
        
        if (is_object($media) && method_exists($media, 'preservingOriginal')) {
            $media = $media->preservingOriginal();
        }
        
        if (is_object($media) && method_exists($media, 'toMediaCollection')) {
            $attachment = $media->toMediaCollection($mediaCollection);
        } else {
            throw new Exception('Cannot add media to collection');
        }
>>>>>>> 13d1d7e (.)
=======
>>>>>>> 2a4b5df (.)
=======
        $media = $ownerRecord->addMediaFromDisk($data['file'], config('attachment.upload.disk.driver'));

        if (! is_object($media)) {
            throw new Exception('Failed to create media attachment - addMediaFromDisk did not return an object');
        }

        /** @phpstan-ignore-next-line */
        if (method_exists($media, 'setName')) {
            /** @phpstan-ignore-next-line */
            $media = $media->setName($data['name'] ?? (isset($data['original_file_name']) ? Str::beforeLast((string) $data['original_file_name'], '.') : ''));
        }

        /** @phpstan-ignore-next-line */
        if (is_object($media) && method_exists($media, 'preservingOriginal')) {
            /** @phpstan-ignore-next-line */
            $media = $media->preservingOriginal();
        }

        /** @phpstan-ignore-next-line */
        if (is_object($media) && method_exists($media, 'toMediaCollection')) {
            /** @phpstan-ignore-next-line */
            $media = $media->toMediaCollection($mediaCollection);
        }

        if (! is_object($media)) {
            throw new Exception('Media object was lost during processing');
        }

        $attachment = $media;
>>>>>>> 1634e53 (.)
=======
>>>>>>> 21a9aec (.)

        $user_id = authId();
        $attachment->update([
            'created_by' => $user_id,
            'updated_by' => $user_id,
        ]);

        /*
         * $attachment->created_by=$user_id;
         * $attachment->created_by=$user_id;
         * $attachment->save();
         */
    }
}
