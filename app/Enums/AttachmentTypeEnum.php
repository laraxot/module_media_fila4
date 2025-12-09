<?php

declare(strict_types=1);

namespace Modules\Media\Enums;

use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Facades\Lang;

enum AttachmentTypeEnum: string implements HasLabel
{
    case IMAGE = 'image';
    case VIDEO = 'video';
    case DOCUMENT = 'document';
    case MANUAL = 'manual';

    public static function getTypeNoteDescriptionsByValues(): array
    {
        return collect(self::cases())
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ->mapWithKeys(static fn (self $case): array => [$case->value => $case->getTypeNote()])
=======
            ->mapWithKeys(static fn(self $case): array => [$case->value => $case->getTypeNote()])
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
            ->mapWithKeys(static fn(self $case): array => [$case->value => $case->getTypeNote()])
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 47a54fe (.)
            ->mapWithKeys(static fn(self $case): array => [$case->value => $case->getTypeNote()])
=======
            ->mapWithKeys(
                static fn (self $case): array => [$case->value => $case->getTypeNote()],
            )
<<<<<<< HEAD
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
            ->mapWithKeys(static fn(self $case): array => [$case->value => $case->getTypeNote()])
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
            ->mapWithKeys(static fn(self $case): array => [$case->value => $case->getTypeNote()])
>>>>>>> a80d398 (.)
=======
>>>>>>> a12f125f4a (.)
=======
            ->mapWithKeys(static fn(self $case): array => [$case->value => $case->getTypeNote()])
>>>>>>> b93ef594b4 (.)
=======
            ->mapWithKeys(
                static fn (self $case): array => [$case->value => $case->getTypeNote()],
            )
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
            ->mapWithKeys(static fn(self $case): array => [$case->value => $case->getTypeNote()])
>>>>>>> f1c6d6e (.)
            ->toArray();
    }

    /* Method Modules\Media\Enums\AttachmentTypeEnum::operationCases() never returns null so it can be removed from the return type
     * public static function operationCases(): ?array
     * {
     * $originalCases = self::cases();
     * array_pop($originalCases);
     *
     * return $originalCases;
     * }
     */

<<<<<<< HEAD
    public function getTypeNote(): ?string
=======
    public function getTypeNote(): null|string
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
=======
=======
<<<<<<< HEAD

    public function getTypeNote(): null|string
=======
=======
>>>>>>> origin/develop
>>>>>>> 47a54fe (.)
    public static function operationCases(): ?array
    {
        $originalCases = self::cases();
        array_pop($originalCases);

        return $originalCases;
    }
        */

    public function getTypeNote(): ?string
<<<<<<< HEAD
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

    public function getTypeNote(): null|string
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
    {
        $translationKey = sprintf('media::attachments.type_notes.%s', $this->value);
        if (Lang::has($translationKey)) {
            return trans($translationKey);
        }

        return null;
    }

    public function getLabel(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return trans('media::attachments.types.'.$this->value);
=======
        return trans('media::attachments.types.' . $this->value);
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
        return trans('media::attachments.types.' . $this->value);
=======
        return trans('media::attachments.types.'.$this->value);
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
        return trans('media::attachments.types.' . $this->value);
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
        return trans('media::attachments.types.' . $this->value);
>>>>>>> a80d398 (.)
=======
        return trans('media::attachments.types.' . $this->value);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return trans('media::attachments.types.' . $this->value);
=======
        return trans('media::attachments.types.'.$this->value);
>>>>>>> a12f125f4a (.)
=======
        return trans('media::attachments.types.' . $this->value);
>>>>>>> b93ef594b4 (.)
=======
        return trans('media::attachments.types.'.$this->value);
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
        return trans('media::attachments.types.' . $this->value);
>>>>>>> f1c6d6e (.)
    }

    // private static function translateBaseUniquePath(): string
    // {
    //    return 'media::attachments.types';
    // }
}
