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
            ->mapWithKeys(static fn(self $case): array => [$case->value => $case->getTypeNote()])
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ->mapWithKeys(static fn(self $case): array => [$case->value => $case->getTypeNote()])
=======
            ->mapWithKeys(
                static fn (self $case): array => [$case->value => $case->getTypeNote()],
            )
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
            ->toArray();
    }

    /* Method Modules\Media\Enums\AttachmentTypeEnum::operationCases() never returns null so it can be removed from the return type
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
     * public static function operationCases(): ?array
     * {
     * $originalCases = self::cases();
     * array_pop($originalCases);
     *
     * return $originalCases;
     * }
     */
<<<<<<< HEAD

    public function getTypeNote(): null|string
=======
<<<<<<< HEAD

    public function getTypeNote(): null|string
=======
=======
>>>>>>> origin/develop
    public static function operationCases(): ?array
    {
        $originalCases = self::cases();
        array_pop($originalCases);

        return $originalCases;
    }
        */

    public function getTypeNote(): ?string
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

    public function getTypeNote(): null|string
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
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
    }

    // private static function translateBaseUniquePath(): string
    // {
    //    return 'media::attachments.types';
    // }
}
