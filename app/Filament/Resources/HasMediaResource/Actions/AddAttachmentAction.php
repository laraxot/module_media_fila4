<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\HasMediaResource\Actions;

<<<<<<< HEAD
use Exception;
use Filament\Actions\Action;
=======
use Filament\Actions\Action;
use Exception;
>>>>>>> 5200b63 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
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
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
    }

    public static function trans(string $key): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
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
        Assert::string($ris = trans('media::add_attachment_action.'.$key), '['.$key.']['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)

        return $ris;
    }

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
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
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
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
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
        if (!method_exists($ownerRecord, 'addMediaFromDisk')) {
=======
        if (! method_exists($ownerRecord, 'addMediaFromDisk')) {
>>>>>>> 0a466ed (.)
=======
        if (!method_exists($ownerRecord, 'addMediaFromDisk')) {
>>>>>>> 37a2da6 (.)
            throw new Exception('wip');
        }

        $attachment = $ownerRecord
<<<<<<< HEAD
<<<<<<< HEAD
            ->addMediaFromDisk($data['file'], config('attachment.upload.disk.driver'))
            ->setName($data['name'] ?? Str::beforeLast($data['original_file_name'], '.'))
=======
            ->addMediaFromDisk(
                $data['file'],
                config('attachment.upload.disk.driver'),
            )
            ->setName(
                $data['name'] ?? Str::beforeLast($data['original_file_name'], '.'),
            )
>>>>>>> 0a466ed (.)
=======
            ->addMediaFromDisk($data['file'], config('attachment.upload.disk.driver'))
            ->setName($data['name'] ?? Str::beforeLast($data['original_file_name'], '.'))
>>>>>>> 37a2da6 (.)
            ->preservingOriginal()
            ->toMediaCollection($mediaCollection);
>>>>>>> 5200b63 (.)

        $user_id = authId();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
        $attachment->update([
            'created_by' => $user_id,
            'updated_by' => $user_id,
        ]);

        /*
         * $attachment->created_by=$user_id;
         * $attachment->created_by=$user_id;
         * $attachment->save();
         */
<<<<<<< HEAD
=======
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
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
    }
}
