<?php

declare(strict_types=1);

namespace Modules\Media\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\UploadedFile;

use function in_array;

class FileExtensionRule implements Rule
{
    protected array $validExtensions = [];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1900eb1 (.)
    /**
     * @param  array<int, string>  $validExtensions
     */
    public function __construct(array $validExtensions = [])
    {
        $this->validExtensions = array_map(
            /**
             * @param  mixed  $ext
             * @return lowercase-string
             */
            static fn ($ext): string => mb_strtolower((string) $ext),
            $validExtensions
        );
    }

    /**
     * @param  mixed  $_attribute  The attribute being validated (not used in this rule)
     * @param  UploadedFile  $value  The uploaded file to validate
=======
=======
    /**
     * @param  array<int, string>  $validExtensions
     */
>>>>>>> 1634e53 (.)
    public function __construct(array $validExtensions = [])
    {
        $this->validExtensions = array_map(static fn (string $ext): string => mb_strtolower($ext), $validExtensions);
=======
    public function __construct(array $validExtensions = [])
    {
        $this->validExtensions = array_map(mb_strtolower(...), $validExtensions);
>>>>>>> 21a9aec (.)
    }

    /**
<<<<<<< HEAD
     * @param  mixed $_attribute The attribute being validated (not used in this rule)
     * @param  UploadedFile  $value The uploaded file to validate
>>>>>>> 5200b63 (.)
=======
     * @param  mixed  $_attribute  The attribute being validated (not used in this rule)
     * @param  UploadedFile  $value  The uploaded file to validate
>>>>>>> f41e45e (.)
     */
    public function passes($_attribute, $value): bool
    {
        return in_array(mb_strtolower($value->getClientOriginalExtension()), $this->validExtensions, strict: false);
    }

    public function message(): array|string
    {
        return trans('media::validation.mime', [
            'mimes' => implode(', ', $this->validExtensions),
        ]);
    }
}
