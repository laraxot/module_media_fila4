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
            ->mapWithKeys(static fn (self $case): array => [$case->value => $case->getTypeNote()])
=======
            ->mapWithKeys(static fn(self $case): array => [$case->value => $case->getTypeNote()])
>>>>>>> 5200b63 (.)
=======
            ->mapWithKeys(static fn(self $case): array => [$case->value => $case->getTypeNote()])
=======
            ->mapWithKeys(
                static fn (self $case): array => [$case->value => $case->getTypeNote()],
            )
>>>>>>> 0a466ed (.)
>>>>>>> 06bb10d (.)
            ->toArray();
    }

    /* Method Modules\Media\Enums\AttachmentTypeEnum::operationCases() never returns null so it can be removed from the return type
<<<<<<< HEAD
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
>>>>>>> 5200b63 (.)
=======
=======
    public static function operationCases(): ?array
    {
        $originalCases = self::cases();
        array_pop($originalCases);

        return $originalCases;
    }
        */

    public function getTypeNote(): ?string
>>>>>>> 0a466ed (.)
>>>>>>> 06bb10d (.)
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
        return trans('media::attachments.types.'.$this->value);
=======
        return trans('media::attachments.types.' . $this->value);
>>>>>>> 5200b63 (.)
=======
        return trans('media::attachments.types.' . $this->value);
=======
        return trans('media::attachments.types.'.$this->value);
>>>>>>> 0a466ed (.)
>>>>>>> 06bb10d (.)
    }

    // private static function translateBaseUniquePath(): string
    // {
    //    return 'media::attachments.types';
    // }
}
