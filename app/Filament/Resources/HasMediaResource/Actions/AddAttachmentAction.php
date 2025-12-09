<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\HasMediaResource\Actions;

<<<<<<< HEAD
use Filament\Actions\Action;
use Exception;
=======
<<<<<<< HEAD
use Filament\Actions\Action;
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
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
            ->schema(fn(): array => static::getFormSchema(false))
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
            $ris = trans('media::add_attachment_action.' . $key),
            '[' . $key . '][' . __LINE__ . '][' . class_basename(__CLASS__) . ']',
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
