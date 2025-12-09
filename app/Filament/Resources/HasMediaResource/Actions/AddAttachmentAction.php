<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\HasMediaResource\Actions;

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
use Filament\Forms\Components\BaseFileUpload;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Filament\Tables\Actions\Action;
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;

class AddAttachmentAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
        $this->icon('heroicon-o-plus')
            ->color('success')
            ->button()
<<<<<<< HEAD
            ->schema(fn (): array => static::getFormSchema(false))
=======
            ->schema(fn(): array => static::getFormSchema(false))
>>>>>>> 5200b63 (.)
            ->action(static::formHandlerCallback(...));
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $this
            ->icon('heroicon-o-plus')
            ->color('success')
            ->button()
            ->form(
                fn (): array => static::getFormSchema(false)
            )
            ->action(
                fn (RelationManager $livewire, array $data) => static::formHandlerCallback($livewire, $data),
            );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $this->icon('heroicon-o-plus')
            ->color('success')
            ->button()
            ->schema(fn(): array => static::getFormSchema(false))
            ->action(static::formHandlerCallback(...));
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    }

    public static function trans(string $key): string
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        Assert::string(
<<<<<<< HEAD
            $ris = trans('media::add_attachment_action.'.$key),
            '['.$key.']['.__LINE__.']['.class_basename(__CLASS__).']',
=======
            $ris = trans('media::add_attachment_action.' . $key),
            '[' . $key . '][' . __LINE__ . '][' . class_basename(__CLASS__) . ']',
>>>>>>> 5200b63 (.)
        );
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        Assert::string($ris = trans('media::add_attachment_action.'.$key), '['.$key.']['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($ris = trans('media::add_attachment_action.'.$key), '['.$key.']['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)

        return $ris;
    }

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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
            Radio::make('attachment_type')
                ->hiddenLabel()
                ->options(
                    AttachmentTypeEnum::descriptionsByValue($asset ? AttachmentTypeEnum::cases() : AttachmentTypeEnum::operationCases()),
                )
                ->default(AttachmentTypeEnum::Image())
                ->columns(
                    $asset ? \count(AttachmentTypeEnum::cases()) : \count(AttachmentTypeEnum::operationCases()),
                )
                ->required()
                ->columnSpanFull(),
            */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
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
        if (! method_exists($ownerRecord, 'addMediaFromDisk')) {
            throw new Exception('wip');
        }

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
        if (!method_exists($ownerRecord, 'addMediaFromDisk')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!method_exists($ownerRecord, 'addMediaFromDisk')) {
=======
        if (! method_exists($ownerRecord, 'addMediaFromDisk')) {
>>>>>>> a12f125f4a (.)
=======
        if (!method_exists($ownerRecord, 'addMediaFromDisk')) {
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
            throw new Exception('wip');
        }

        $attachment = $ownerRecord
<<<<<<< HEAD
            ->addMediaFromDisk($data['file'], config('attachment.upload.disk.driver'))
            ->setName($data['name'] ?? Str::beforeLast($data['original_file_name'], '.'))
=======
<<<<<<< HEAD
<<<<<<< HEAD
            ->addMediaFromDisk($data['file'], config('attachment.upload.disk.driver'))
            ->setName($data['name'] ?? Str::beforeLast($data['original_file_name'], '.'))
=======
=======
        if (! method_exists($ownerRecord, 'addMediaFromDisk')) {
            throw new \Exception('wip');
        }

        $attachment = $ownerRecord
>>>>>>> origin/develop
            ->addMediaFromDisk(
                $data['file'],
                config('attachment.upload.disk.driver'),
            )
            ->setName(
                $data['name'] ?? Str::beforeLast($data['original_file_name'], '.'),
            )
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            ->addMediaFromDisk($data['file'], config('attachment.upload.disk.driver'))
            ->setName($data['name'] ?? Str::beforeLast($data['original_file_name'], '.'))
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
            ->preservingOriginal()
            ->toMediaCollection($mediaCollection);
>>>>>>> 5200b63 (.)

        $user_id = authId();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        $attachment->update([
            'created_by' => $user_id,
            'updated_by' => $user_id,
        ]);

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
        /*
         * $attachment->created_by=$user_id;
         * $attachment->created_by=$user_id;
         * $attachment->save();
         */
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $attachment->update(
            [
                'created_by' => $user_id,
                'updated_by' => $user_id,
            ]
        );
        /*
        $attachment->created_by=$user_id;
        $attachment->created_by=$user_id;
        $attachment->save();
        */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        /*
         * $attachment->created_by=$user_id;
         * $attachment->created_by=$user_id;
         * $attachment->save();
         */
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    }
}
