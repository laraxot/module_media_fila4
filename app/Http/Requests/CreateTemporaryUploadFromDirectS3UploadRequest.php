<?php

declare(strict_types=1);

namespace Modules\Media\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Media\Models\Media;

class CreateTemporaryUploadFromDirectS3UploadRequest extends FormRequest
{
    /**
     * @return string[]
     *
     * @psalm-return array{uuid: string, key: 'required', bucket: 'required', name: 'required', content_type: 'required', size: 'required'}
     */
    public function rules(): array
    {
        return [
            'uuid' => "unique:{$this->getDatabaseConnection()}{$this->getMediaTableName()}",
            'key' => 'required',
            'bucket' => 'required',
            'name' => 'required',
            'content_type' => 'required',
            'size' => 'required',
        ];
    }

    /**
     * @return array<string, array|string>
     *
     * @psalm-return array{'uuid.unique': array|string}
     */
    public function messages(): array
    {
        return [
            'uuid.unique' => trans('medialibrary-pro::upload_request.uuid_not_unique'),
        ];
    }

    protected function getDatabaseConnection(): string
    {
        $mediaModelClass = config('media-library.media_model');

        /** @var Media $mediaModel */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $mediaModel = new $mediaModelClass;
=======
        $mediaModel = new $mediaModelClass();
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
        $mediaModel = new $mediaModelClass();
=======
        $mediaModel = new $mediaModelClass;
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
        $mediaModel = new $mediaModelClass();
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
        $mediaModel = new $mediaModelClass();
>>>>>>> a80d398 (.)

        if ($mediaModel->getConnectionName() === 'default') {
            return '';
        }

        return "{$mediaModel->getConnectionName()}.";
    }

    protected function getMediaTableName(): string
    {
        $mediaModelClass = config('media-library.media_model');

        /** @var Media $mediaModel */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $mediaModel = new $mediaModelClass;
=======
        $mediaModel = new $mediaModelClass();
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
        $mediaModel = new $mediaModelClass();
=======
        $mediaModel = new $mediaModelClass;
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
        $mediaModel = new $mediaModelClass();
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
        $mediaModel = new $mediaModelClass();
>>>>>>> a80d398 (.)

        return $mediaModel->getTable();
    }
}
