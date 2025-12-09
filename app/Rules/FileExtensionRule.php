<?php

declare(strict_types=1);

namespace Modules\Media\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\UploadedFile;

use function in_array;

class FileExtensionRule implements Rule
{
    protected array $validExtensions = [];

    public function __construct(array $validExtensions = [])
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
        $this->validExtensions = array_map(mb_strtolower(...), $validExtensions);
    }

    /**
     * @param  mixed $_attribute The attribute being validated (not used in this rule)
     * @param  UploadedFile  $value The uploaded file to validate
     */
    public function passes($_attribute, $value): bool
    {
        return in_array(mb_strtolower($value->getClientOriginalExtension()), $this->validExtensions, strict: false);
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $this->validExtensions = array_map(
            static fn (string $extension): string => mb_strtolower($extension),
            $validExtensions,
        );
<<<<<<< HEAD
=======
        $this->validExtensions = array_map(mb_strtolower(...), $validExtensions);
>>>>>>> b93ef594b4 (.)
    }

    /**
     * @param  mixed $_attribute The attribute being validated (not used in this rule)
     * @param  UploadedFile  $value The uploaded file to validate
     */
    public function passes($_attribute, $value): bool
    {
<<<<<<< HEAD
=======
    }

    /**
     * @param  string $attribute
     * @param  UploadedFile  $value
     */
    public function passes($attribute, $value): bool
    {
>>>>>>> origin/develop
        return in_array(
            mb_strtolower($value->getClientOriginalExtension()),
            $this->validExtensions,
            strict: false,
        );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        return in_array(mb_strtolower($value->getClientOriginalExtension()), $this->validExtensions, strict: false);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    }

    public function message(): array|string
    {
<<<<<<< HEAD
        return trans('media::validation.mime', [
            'mimes' => implode(', ', $this->validExtensions),
        ]);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return trans('media::validation.mime', [
            'mimes' => implode(', ', $this->validExtensions),
        ]);
=======
=======
>>>>>>> origin/develop
        return trans(
            'media::validation.mime',
            [
                'mimes' => implode(', ', $this->validExtensions),
            ]
        );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        return trans('media::validation.mime', [
            'mimes' => implode(', ', $this->validExtensions),
        ]);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    }
}
