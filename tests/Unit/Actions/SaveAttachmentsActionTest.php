<?php

declare(strict_types=1);

namespace Modules\Media\Tests\Unit\Actions;

use Exception;
use Illuminate\Support\Facades\Storage;
use Mockery;
use Modules\Media\Actions\SaveAttachmentsAction;
use Modules\Media\Models\Media;
use Spatie\MediaLibrary\HasMedia;
<<<<<<< HEAD
<<<<<<< HEAD
use Tests\TestCase;
=======
>>>>>>> 0a466ed (.)
=======
use Tests\TestCase;
>>>>>>> 37a2da6 (.)

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
        $action = new SaveAttachmentsAction;
=======
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
        $action = new SaveAttachmentsAction();
>>>>>>> 5200b63 (.)

        // Mock del record HasMedia
        $record = Mockery::mock(HasMedia::class);
        $record->shouldReceive('addMedia')->andReturnSelf();
        $record->shouldReceive('usingFileName')->andReturnSelf();
<<<<<<< HEAD
        $record->shouldReceive('toMediaCollection')->andReturn(new Media);
=======
        $record->shouldReceive('toMediaCollection')->andReturn(new Media());
>>>>>>> 5200b63 (.)
        $record->shouldReceive('update')->andReturn(true);
<<<<<<< HEAD
=======
        $action = new SaveAttachmentsAction;

        // Mock del record HasMedia
        $record = Mockery::mock(HasMedia::class);
        $record->shouldReceive('addMedia')
            ->andReturnSelf();
        $record->shouldReceive('usingFileName')
            ->andReturnSelf();
        $record->shouldReceive('toMediaCollection')
            ->andReturn(new Media);
        $record->shouldReceive('update')
            ->andReturn(true);
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)

        $attachments = ['invoice', 'contract'];
        $data = [
            'invoice' => 'temp/invoice.pdf',
            'contract' => 'temp/contract.pdf',
        ];

        // Crea file temporanei
        Storage::disk('attachments')->put('temp/invoice.pdf', 'fake content');
        Storage::disk('attachments')->put('temp/contract.pdf', 'fake content');

        // Act
        $action->execute($record, $attachments, $data, 'attachments');

        // Assert
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertTrue(Storage::disk('attachments')->exists('temp/invoice.pdf'));
        static::assertTrue(Storage::disk('attachments')->exists('temp/contract.pdf'));
=======
        $this->assertTrue(Storage::disk('attachments')->exists('temp/invoice.pdf'));
        $this->assertTrue(Storage::disk('attachments')->exists('temp/contract.pdf'));
>>>>>>> 0a466ed (.)
=======
        static::assertTrue(Storage::disk('attachments')->exists('temp/invoice.pdf'));
        static::assertTrue(Storage::disk('attachments')->exists('temp/contract.pdf'));
>>>>>>> 37a2da6 (.)
    }

    public function test_handles_empty_attachments(): void
    {
        // Arrange
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
        $action = new SaveAttachmentsAction();
>>>>>>> 5200b63 (.)

        $record = Mockery::mock(HasMedia::class);
        $record->shouldReceive('update')->with([])->andReturn(true);
<<<<<<< HEAD
=======
        $action = new SaveAttachmentsAction;

        $record = Mockery::mock(HasMedia::class);
        $record->shouldReceive('update')
            ->with([])
            ->andReturn(true);
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)

        $attachments = [];
        $data = [];

        // Act
        $action->execute($record, $attachments, $data, 'attachments');

        // Assert - non dovrebbe lanciare eccezioni
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertTrue(true);
=======
        $this->assertTrue(true);
>>>>>>> 0a466ed (.)
=======
        static::assertTrue(true);
>>>>>>> 37a2da6 (.)
    }

    public function test_skips_nonexistent_files(): void
    {
        // Arrange
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
        $action = new SaveAttachmentsAction();
>>>>>>> 5200b63 (.)

        $record = Mockery::mock(HasMedia::class);
        $record->shouldReceive('update')->with([])->andReturn(true);
<<<<<<< HEAD
=======
        $action = new SaveAttachmentsAction;

        $record = Mockery::mock(HasMedia::class);
        $record->shouldReceive('update')
            ->with([])
            ->andReturn(true);
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)

        $attachments = ['invoice'];
        $data = [
            'invoice' => 'nonexistent/file.pdf',
        ];

        // Act
        $action->execute($record, $attachments, $data, 'attachments');

        // Assert - non dovrebbe lanciare eccezioni
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertTrue(true);
=======
        $this->assertTrue(true);
>>>>>>> 0a466ed (.)
=======
        static::assertTrue(true);
>>>>>>> 37a2da6 (.)
    }

    public function test_handles_storage_errors_gracefully(): void
    {
        // Arrange
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
        $action = new SaveAttachmentsAction();
>>>>>>> 5200b63 (.)

        $record = Mockery::mock(HasMedia::class);
        $record->shouldReceive('addMedia')->andThrow(new Exception('Storage error'));
<<<<<<< HEAD
=======
        $action = new SaveAttachmentsAction;

        $record = Mockery::mock(HasMedia::class);
        $record->shouldReceive('addMedia')
            ->andThrow(new Exception('Storage error'));
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)

        $attachments = ['invoice'];
        $data = [
            'invoice' => 'temp/invoice.pdf',
        ];

        Storage::disk('attachments')->put('temp/invoice.pdf', 'fake content');

        // Act & Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Storage error');

        $action->execute($record, $attachments, $data, 'attachments');
    }

    public function test_uses_correct_disk(): void
    {
        // Arrange
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
        $action = new SaveAttachmentsAction();
>>>>>>> 5200b63 (.)

        $record = Mockery::mock(HasMedia::class);
        $record->shouldReceive('addMedia')->andReturnSelf();
        $record->shouldReceive('usingFileName')->andReturnSelf();
<<<<<<< HEAD
        $record->shouldReceive('toMediaCollection')->andReturn(new Media);
=======
        $record->shouldReceive('toMediaCollection')->andReturn(new Media());
>>>>>>> 5200b63 (.)
        $record->shouldReceive('update')->andReturn(true);
<<<<<<< HEAD
=======
        $action = new SaveAttachmentsAction;

        $record = Mockery::mock(HasMedia::class);
        $record->shouldReceive('addMedia')
            ->andReturnSelf();
        $record->shouldReceive('usingFileName')
            ->andReturnSelf();
        $record->shouldReceive('toMediaCollection')
            ->andReturn(new Media);
        $record->shouldReceive('update')
            ->andReturn(true);
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)

        $attachments = ['invoice'];
        $data = [
            'invoice' => 'temp/invoice.pdf',
        ];

        // Crea file su disco diverso
        Storage::fake('custom_disk');
        Storage::disk('custom_disk')->put('temp/invoice.pdf', 'fake content');

        // Act
        $action->execute($record, $attachments, $data, 'custom_disk');

        // Assert
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertTrue(Storage::disk('custom_disk')->exists('temp/invoice.pdf'));
=======
        $this->assertTrue(Storage::disk('custom_disk')->exists('temp/invoice.pdf'));
>>>>>>> 0a466ed (.)
=======
        static::assertTrue(Storage::disk('custom_disk')->exists('temp/invoice.pdf'));
>>>>>>> 37a2da6 (.)
    }

    public function test_cleans_up_temp_files(): void
    {
        // Arrange
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
        $action = new SaveAttachmentsAction();
>>>>>>> 5200b63 (.)

        $record = Mockery::mock(HasMedia::class);
        $record->shouldReceive('addMedia')->andReturnSelf();
        $record->shouldReceive('usingFileName')->andReturnSelf();
<<<<<<< HEAD
        $record->shouldReceive('toMediaCollection')->andReturn(new Media);
=======
        $record->shouldReceive('toMediaCollection')->andReturn(new Media());
>>>>>>> 5200b63 (.)
        $record->shouldReceive('update')->andReturn(true);
<<<<<<< HEAD
=======
        $action = new SaveAttachmentsAction;

        $record = Mockery::mock(HasMedia::class);
        $record->shouldReceive('addMedia')
            ->andReturnSelf();
        $record->shouldReceive('usingFileName')
            ->andReturnSelf();
        $record->shouldReceive('toMediaCollection')
            ->andReturn(new Media);
        $record->shouldReceive('update')
            ->andReturn(true);
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)

        $attachments = ['invoice'];
        $data = [
            'invoice' => 'temp/invoice.pdf',
        ];

        Storage::disk('attachments')->put('temp/invoice.pdf', 'fake content');

        // Act
        $action->execute($record, $attachments, $data, 'attachments');

        // Assert - il file temporaneo dovrebbe essere pulito
        // Questo test verifica che la pulizia avvenga nel finally block
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertTrue(true);
=======
        $this->assertTrue(true);
>>>>>>> 0a466ed (.)
=======
        static::assertTrue(true);
>>>>>>> 37a2da6 (.)
    }

    public function test_handles_multiple_attachments(): void
    {
        // Arrange
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
        $action = new SaveAttachmentsAction();
>>>>>>> 5200b63 (.)

        $record = Mockery::mock(HasMedia::class);
        $record->shouldReceive('addMedia')->times(3)->andReturnSelf();
        $record->shouldReceive('usingFileName')->times(3)->andReturnSelf();
<<<<<<< HEAD
        $record->shouldReceive('toMediaCollection')->times(3)->andReturn(new Media);
=======
        $record->shouldReceive('toMediaCollection')->times(3)->andReturn(new Media());
>>>>>>> 5200b63 (.)
        $record->shouldReceive('update')->andReturn(true);
<<<<<<< HEAD
=======
        $action = new SaveAttachmentsAction;

        $record = Mockery::mock(HasMedia::class);
        $record->shouldReceive('addMedia')
            ->times(3)
            ->andReturnSelf();
        $record->shouldReceive('usingFileName')
            ->times(3)
            ->andReturnSelf();
        $record->shouldReceive('toMediaCollection')
            ->times(3)
            ->andReturn(new Media);
        $record->shouldReceive('update')
            ->andReturn(true);
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)

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
        $action->execute($record, $attachments, $data, 'attachments');

        // Assert
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertTrue(Storage::disk('attachments')->exists('temp/invoice.pdf'));
        static::assertTrue(Storage::disk('attachments')->exists('temp/contract.pdf'));
        static::assertTrue(Storage::disk('attachments')->exists('temp/receipt.pdf'));
=======
        $this->assertTrue(Storage::disk('attachments')->exists('temp/invoice.pdf'));
        $this->assertTrue(Storage::disk('attachments')->exists('temp/contract.pdf'));
        $this->assertTrue(Storage::disk('attachments')->exists('temp/receipt.pdf'));
>>>>>>> 0a466ed (.)
=======
        static::assertTrue(Storage::disk('attachments')->exists('temp/invoice.pdf'));
        static::assertTrue(Storage::disk('attachments')->exists('temp/contract.pdf'));
        static::assertTrue(Storage::disk('attachments')->exists('temp/receipt.pdf'));
>>>>>>> 37a2da6 (.)
    }
}
