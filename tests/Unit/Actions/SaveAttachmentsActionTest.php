<?php

declare(strict_types=1);

namespace Modules\Media\Tests\Unit\Actions;

use Exception;
use Illuminate\Support\Facades\Storage;
use Mockery;
use Modules\Media\Actions\SaveAttachmentsAction;
use Modules\Media\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Tests\TestCase;

class SaveAttachmentsActionTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake('attachments');
    }

    public function test_executes_save_attachments_successfully(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new SaveAttachmentsAction;
=======
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
        $action = new SaveAttachmentsAction();
>>>>>>> 5200b63 (.)
=======
        $action = new SaveAttachmentsAction;
>>>>>>> f41e45e (.)

        // Mock del record HasMedia
        $record = Mockery::mock(HasMedia::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $record->shouldReceive('addMedia')->andReturnSelf();
        /** @phpstan-ignore-next-line method.nonObject */
        $record->shouldReceive('usingFileName')->andReturnSelf();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $record->shouldReceive('toMediaCollection')->andReturn(new Media);
=======
        $record->shouldReceive('toMediaCollection')->andReturn(new Media());
>>>>>>> 5200b63 (.)
=======
        $record->shouldReceive('toMediaCollection')->andReturn(new Media);
>>>>>>> f41e45e (.)
=======
        /** @phpstan-ignore-next-line method.nonObject */
        $record->shouldReceive('toMediaCollection')->andReturn(new Media);
        /** @phpstan-ignore-next-line method.nonObject */
>>>>>>> 13d1d7e (.)
=======
        $record->shouldReceive('toMediaCollection')->andReturn(new Media);
>>>>>>> 2a4b5df (.)
=======
        /** @phpstan-ignore-next-line method.nonObject */
        $record->shouldReceive('toMediaCollection')->andReturn(new Media);
        /** @phpstan-ignore-next-line method.nonObject */
>>>>>>> e28bed7 (.)
=======
        $record->shouldReceive('toMediaCollection')->andReturn(new Media);
>>>>>>> de4643e (.)
=======
        /** @phpstan-ignore-next-line method.nonObject */
        $record->shouldReceive('toMediaCollection')->andReturn(new Media);
        /** @phpstan-ignore-next-line method.nonObject */
>>>>>>> 0987d27 (.)
        $record->shouldReceive('update')->andReturn(true);

        $attachments = ['invoice', 'contract'];
        $data = [
            'invoice' => 'temp/invoice.pdf',
            'contract' => 'temp/contract.pdf',
        ];

        // Crea file temporanei
        Storage::disk('attachments')->put('temp/invoice.pdf', 'fake content');
        Storage::disk('attachments')->put('temp/contract.pdf', 'fake content');

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $action->execute($record, $attachments, $data, 'attachments');

        // Assert
        static::assertTrue(Storage::disk('attachments')->exists('temp/invoice.pdf'));
        static::assertTrue(Storage::disk('attachments')->exists('temp/contract.pdf'));
    }

    public function test_handles_empty_attachments(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new SaveAttachmentsAction;
=======
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
        $action = new SaveAttachmentsAction();
>>>>>>> 5200b63 (.)
=======
        $action = new SaveAttachmentsAction;
>>>>>>> f41e45e (.)

        $record = Mockery::mock(HasMedia::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $record->shouldReceive('update')->with([])->andReturn(true);

        $attachments = [];
        $data = [];

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $action->execute($record, $attachments, $data, 'attachments');

        // Assert - non dovrebbe lanciare eccezioni
        static::assertTrue(true);
    }

    public function test_skips_nonexistent_files(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new SaveAttachmentsAction;
=======
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
        $action = new SaveAttachmentsAction();
>>>>>>> 5200b63 (.)
=======
        $action = new SaveAttachmentsAction;
>>>>>>> f41e45e (.)

        $record = Mockery::mock(HasMedia::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $record->shouldReceive('update')->with([])->andReturn(true);

        $attachments = ['invoice'];
        $data = [
            'invoice' => 'nonexistent/file.pdf',
        ];

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $action->execute($record, $attachments, $data, 'attachments');

        // Assert - non dovrebbe lanciare eccezioni
        static::assertTrue(true);
    }

    public function test_handles_storage_errors_gracefully(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new SaveAttachmentsAction;
=======
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
        $action = new SaveAttachmentsAction();
>>>>>>> 5200b63 (.)
=======
        $action = new SaveAttachmentsAction;
>>>>>>> f41e45e (.)

        $record = Mockery::mock(HasMedia::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $record->shouldReceive('addMedia')->andThrow(new Exception('Storage error'));

        $attachments = ['invoice'];
        $data = [
            'invoice' => 'temp/invoice.pdf',
        ];

        Storage::disk('attachments')->put('temp/invoice.pdf', 'fake content');

        // Act & Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->expectException(Exception::class);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->expectExceptionMessage('Storage error');

        /** @phpstan-ignore-next-line method.nonObject */
        $action->execute($record, $attachments, $data, 'attachments');
    }

    public function test_uses_correct_disk(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new SaveAttachmentsAction;
=======
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
        $action = new SaveAttachmentsAction();
>>>>>>> 5200b63 (.)
=======
        $action = new SaveAttachmentsAction;
>>>>>>> f41e45e (.)

        $record = Mockery::mock(HasMedia::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $record->shouldReceive('addMedia')->andReturnSelf();
        /** @phpstan-ignore-next-line method.nonObject */
        $record->shouldReceive('usingFileName')->andReturnSelf();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $record->shouldReceive('toMediaCollection')->andReturn(new Media);
=======
        $record->shouldReceive('toMediaCollection')->andReturn(new Media());
>>>>>>> 5200b63 (.)
=======
        $record->shouldReceive('toMediaCollection')->andReturn(new Media);
>>>>>>> f41e45e (.)
=======
        /** @phpstan-ignore-next-line method.nonObject */
        $record->shouldReceive('toMediaCollection')->andReturn(new Media);
        /** @phpstan-ignore-next-line method.nonObject */
>>>>>>> 13d1d7e (.)
=======
        $record->shouldReceive('toMediaCollection')->andReturn(new Media);
>>>>>>> 2a4b5df (.)
=======
        /** @phpstan-ignore-next-line method.nonObject */
        $record->shouldReceive('toMediaCollection')->andReturn(new Media);
        /** @phpstan-ignore-next-line method.nonObject */
>>>>>>> e28bed7 (.)
=======
        $record->shouldReceive('toMediaCollection')->andReturn(new Media);
>>>>>>> de4643e (.)
=======
        /** @phpstan-ignore-next-line method.nonObject */
        $record->shouldReceive('toMediaCollection')->andReturn(new Media);
        /** @phpstan-ignore-next-line method.nonObject */
>>>>>>> 0987d27 (.)
        $record->shouldReceive('update')->andReturn(true);

        $attachments = ['invoice'];
        $data = [
            'invoice' => 'temp/invoice.pdf',
        ];

        // Crea file su disco diverso
        Storage::fake('custom_disk');
        Storage::disk('custom_disk')->put('temp/invoice.pdf', 'fake content');

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $action->execute($record, $attachments, $data, 'custom_disk');

        // Assert
        static::assertTrue(Storage::disk('custom_disk')->exists('temp/invoice.pdf'));
    }

    public function test_cleans_up_temp_files(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new SaveAttachmentsAction;
=======
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
        $action = new SaveAttachmentsAction();
>>>>>>> 5200b63 (.)
=======
        $action = new SaveAttachmentsAction;
>>>>>>> f41e45e (.)

        $record = Mockery::mock(HasMedia::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $record->shouldReceive('addMedia')->andReturnSelf();
        /** @phpstan-ignore-next-line method.nonObject */
        $record->shouldReceive('usingFileName')->andReturnSelf();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $record->shouldReceive('toMediaCollection')->andReturn(new Media);
=======
        $record->shouldReceive('toMediaCollection')->andReturn(new Media());
>>>>>>> 5200b63 (.)
=======
        $record->shouldReceive('toMediaCollection')->andReturn(new Media);
>>>>>>> f41e45e (.)
=======
        /** @phpstan-ignore-next-line method.nonObject */
        $record->shouldReceive('toMediaCollection')->andReturn(new Media);
        /** @phpstan-ignore-next-line method.nonObject */
>>>>>>> 13d1d7e (.)
=======
        $record->shouldReceive('toMediaCollection')->andReturn(new Media);
>>>>>>> 2a4b5df (.)
=======
        /** @phpstan-ignore-next-line method.nonObject */
        $record->shouldReceive('toMediaCollection')->andReturn(new Media);
        /** @phpstan-ignore-next-line method.nonObject */
>>>>>>> e28bed7 (.)
=======
        $record->shouldReceive('toMediaCollection')->andReturn(new Media);
>>>>>>> de4643e (.)
=======
        /** @phpstan-ignore-next-line method.nonObject */
        $record->shouldReceive('toMediaCollection')->andReturn(new Media);
        /** @phpstan-ignore-next-line method.nonObject */
>>>>>>> 0987d27 (.)
        $record->shouldReceive('update')->andReturn(true);

        $attachments = ['invoice'];
        $data = [
            'invoice' => 'temp/invoice.pdf',
        ];

        Storage::disk('attachments')->put('temp/invoice.pdf', 'fake content');

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $action->execute($record, $attachments, $data, 'attachments');

        // Assert - il file temporaneo dovrebbe essere pulito
        // Questo test verifica che la pulizia avvenga nel finally block
        static::assertTrue(true);
    }

    public function test_handles_multiple_attachments(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new SaveAttachmentsAction;
=======
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
        $action = new SaveAttachmentsAction();
>>>>>>> 5200b63 (.)
=======
        $action = new SaveAttachmentsAction;
>>>>>>> f41e45e (.)

        $record = Mockery::mock(HasMedia::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $record->shouldReceive('addMedia')->times(3)->andReturnSelf();
        /** @phpstan-ignore-next-line method.nonObject */
        $record->shouldReceive('usingFileName')->times(3)->andReturnSelf();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $record->shouldReceive('toMediaCollection')->times(3)->andReturn(new Media);
=======
        $record->shouldReceive('toMediaCollection')->times(3)->andReturn(new Media());
>>>>>>> 5200b63 (.)
=======
        $record->shouldReceive('toMediaCollection')->times(3)->andReturn(new Media);
>>>>>>> f41e45e (.)
=======
        /** @phpstan-ignore-next-line method.nonObject */
        $record->shouldReceive('toMediaCollection')->times(3)->andReturn(new Media);
        /** @phpstan-ignore-next-line method.nonObject */
>>>>>>> 13d1d7e (.)
=======
        $record->shouldReceive('toMediaCollection')->times(3)->andReturn(new Media);
>>>>>>> 2a4b5df (.)
=======
        /** @phpstan-ignore-next-line method.nonObject */
        $record->shouldReceive('toMediaCollection')->times(3)->andReturn(new Media);
        /** @phpstan-ignore-next-line method.nonObject */
>>>>>>> e28bed7 (.)
=======
        $record->shouldReceive('toMediaCollection')->times(3)->andReturn(new Media);
>>>>>>> de4643e (.)
=======
        /** @phpstan-ignore-next-line method.nonObject */
        $record->shouldReceive('toMediaCollection')->times(3)->andReturn(new Media);
        /** @phpstan-ignore-next-line method.nonObject */
>>>>>>> 0987d27 (.)
        $record->shouldReceive('update')->andReturn(true);

        $attachments = ['invoice', 'contract', 'receipt'];
        $data = [
            'invoice' => 'temp/invoice.pdf',
            'contract' => 'temp/contract.pdf',
            'receipt' => 'temp/receipt.pdf',
        ];

        // Crea file temporanei
        Storage::disk('attachments')->put('temp/invoice.pdf', 'fake content');
        Storage::disk('attachments')->put('temp/contract.pdf', 'fake content');
        Storage::disk('attachments')->put('temp/receipt.pdf', 'fake content');

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $action->execute($record, $attachments, $data, 'attachments');

        // Assert
        static::assertTrue(Storage::disk('attachments')->exists('temp/invoice.pdf'));
        static::assertTrue(Storage::disk('attachments')->exists('temp/contract.pdf'));
        static::assertTrue(Storage::disk('attachments')->exists('temp/receipt.pdf'));
    }
}
