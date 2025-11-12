<?php

declare(strict_types=1);

namespace Modules\Media\Actions;

<<<<<<< HEAD
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Config;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
=======
use Filament\Schemas\Components\Utilities\Set;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Resource as FilamentResource;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;
use Modules\UI\Actions\Icon\GetAllIconsAction;
use Modules\Xot\Actions\ModelClass\CountAction;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Webmozart\Assert\Assert;

use function Safe\glob;
>>>>>>> 5200b63 (.)

class GetAttachmentsSchemaAction
{
    /**
     * @return array<string, mixed>
     */
    public function execute(array $attachments, string $disk = 'attachments'): array
    {
        $form = [];
        $sessionId = session()->getId();
        $prefix = Config::string('media-library.prefix');

        $sessionDir = "session-uploads/{$sessionId}";
        if ($prefix !== '') {
<<<<<<< HEAD
            $sessionDir = $prefix.'/'.$sessionDir;
        }
        foreach ($attachments as $attachment) {
            $attachmentStr = (string) $attachment;
            $form[$attachmentStr] = FileUpload::make($attachmentStr)
                // $form[$attachment]=SpatieMediaLibraryFileUpload::make($attachment)
=======
            $sessionDir = $prefix . '/' . $sessionDir;
        }
        foreach ($attachments as $attachment) {
            $attachmentKey = is_string($attachment) ? $attachment : (string) $attachment;
            $form[$attachmentKey] = FileUpload::make($attachmentKey)
                //$form[$attachment]=SpatieMediaLibraryFileUpload::make($attachment)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 76e8f34 (.)
=======
>>>>>>> c3b81ef (.)
=======
            $schema[$attachment] = FileUpload::make($attachment)
                //$schema[$attachment]=SpatieMediaLibraryFileUpload::make($attachment)
>>>>>>> 739e4b7 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1a0067b (.)
=======
>>>>>>> 70517e3 (.)
=======
>>>>>>> 76e8f34 (.)
=======
>>>>>>> 71435ff (.)
=======
>>>>>>> c3b81ef (.)
=======
>>>>>>> 9a7a2fa (.)
                ->directory($sessionDir)
                ->disk($disk)
                ->acceptedFileTypes(['application/pdf', 'image/jpeg', 'image/png', 'image/jpg'])
                ->maxSize(5120 * 2)
                ->preserveFilenames()
                ->required()
                ->previewable(false)
<<<<<<< HEAD
                // ->saveUploadedFiles()
                ->afterStateUpdated(function ($state, Set $set) use ($attachment, $sessionDir, $disk): void {
                    if (! $state) {
                        return;
                    }
=======
                //->saveUploadedFiles()
                ->afterStateUpdated(function ($state, Set $set) use ($attachmentKey, $sessionDir, $disk): void {
                    if (!$state)
                        return;
>>>>>>> 5200b63 (.)
                    $state = Arr::wrap($state);

                    $sessionFiles = [];

                    foreach ($state as $file) {
                        if ($file instanceof TemporaryUploadedFile) {
                            // Salva direttamente nella directory di sessione
<<<<<<< HEAD
                            $fileName = time().'_'.$file->getClientOriginalName();
=======
                            $fileName = time() . '_' . $file->getClientOriginalName();
>>>>>>> 5200b63 (.)
                            $sessionPath = $file->storeAs($sessionDir, $fileName, $disk);
                            $sessionFiles[] = $sessionPath;
                        } else {
                            // È già un percorso salvato
                            $sessionFiles[] = $file;
                        }
                    }

<<<<<<< HEAD
<<<<<<< HEAD
                    // Set expects Component|string, pass attachment as string
                    \Webmozart\Assert\Assert::string($attachment, 'Attachment must be string');
=======
>>>>>>> 5200b63 (.)
                    $set($attachment, $sessionFiles);
=======
                    $set($attachmentKey, $sessionFiles);
>>>>>>> 13d1d7e (.)
                });
        }

        return $form;
    }
}
