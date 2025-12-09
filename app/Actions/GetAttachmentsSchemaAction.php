<?php

declare(strict_types=1);

namespace Modules\Media\Actions;

<<<<<<< HEAD
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
=======
>>>>>>> 1634e53 (.)
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Config;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

<<<<<<< HEAD
use function Safe\glob;
>>>>>>> 5200b63 (.)

=======
>>>>>>> 1634e53 (.)
class GetAttachmentsSchemaAction
{
    public function execute(array $attachments, string $disk = 'attachments'): array
    {
        $form = [];
        $sessionId = session()->getId();
        $prefix = Config::string('media-library.prefix');

        $sessionDir = "session-uploads/{$sessionId}";
        if ($prefix !== '') {
<<<<<<< HEAD
<<<<<<< HEAD
            $sessionDir = $prefix.'/'.$sessionDir;
        }
        foreach ($attachments as $attachment) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1900eb1 (.)
            $attachmentStr = (string) $attachment;
            $form[$attachmentStr] = FileUpload::make($attachmentStr)
                // $form[$attachment]=SpatieMediaLibraryFileUpload::make($attachment)
=======
            $sessionDir = $prefix . '/' . $sessionDir;
=======
            $sessionDir = $prefix.'/'.$sessionDir;
>>>>>>> 1634e53 (.)
        }
        foreach ($attachments as $attachment) {
            if (! is_string($attachment)) {
                continue;
            }
=======
>>>>>>> 21a9aec (.)
            $form[$attachment] = FileUpload::make($attachment)
<<<<<<< HEAD
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
=======
                // $form[$attachment]=SpatieMediaLibraryFileUpload::make($attachment)
>>>>>>> 1634e53 (.)
                ->directory($sessionDir)
                ->disk($disk)
                ->acceptedFileTypes(['application/pdf', 'image/jpeg', 'image/png', 'image/jpg'])
                ->maxSize(5120 * 2)
                ->preserveFilenames()
                ->required()
                ->previewable(false)
<<<<<<< HEAD
<<<<<<< HEAD
                // ->saveUploadedFiles()
                ->afterStateUpdated(function ($state, Set $set) use ($attachment, $sessionDir, $disk): void {
                    if (! $state) {
                        return;
                    }
=======
                //->saveUploadedFiles()
=======
                // ->saveUploadedFiles()
>>>>>>> 1634e53 (.)
                ->afterStateUpdated(function ($state, Set $set) use ($attachment, $sessionDir, $disk) {
                    if (! $state) {
                        return;
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
                    }
>>>>>>> 1634e53 (.)
                    $state = Arr::wrap($state);

                    $sessionFiles = [];

                    foreach ($state as $file) {
                        if ($file instanceof TemporaryUploadedFile) {
                            // Salva direttamente nella directory di sessione
<<<<<<< HEAD
<<<<<<< HEAD
                            $fileName = time().'_'.$file->getClientOriginalName();
=======
                            $fileName = time() . '_' . $file->getClientOriginalName();
>>>>>>> 5200b63 (.)
=======
                            $fileName = time().'_'.$file->getClientOriginalName();
>>>>>>> 1634e53 (.)
                            $sessionPath = $file->storeAs($sessionDir, $fileName, $disk);
                            $sessionFiles[] = $sessionPath;
                        } else {
                            // È già un percorso salvato
                            $sessionFiles[] = $file;
                        }
                    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    // Set expects Component|string, pass attachment as string
                    \Webmozart\Assert\Assert::string($attachment, 'Attachment must be string');
=======
>>>>>>> 5200b63 (.)
=======
                    /** @phpstan-ignore-next-line staticMethod.alreadyNarrowedType - Runtime safety check */
                    Assert::string($attachment, 'Attachment name must be a string');
>>>>>>> 1634e53 (.)
=======
>>>>>>> 21a9aec (.)
=======
                    // Set expects Component|string, pass attachment as string
                    \Webmozart\Assert\Assert::string($attachment, 'Attachment must be string');
>>>>>>> 1900eb1 (.)
                    $set($attachment, $sessionFiles);
=======
                    $set($attachmentKey, $sessionFiles);
>>>>>>> 13d1d7e (.)
=======
                    $set($attachment, $sessionFiles);
>>>>>>> 2a4b5df (.)
                });
        }

        return $form;
    }
}
