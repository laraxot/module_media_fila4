<?php

declare(strict_types=1);

namespace Modules\Media\Tests\Unit\Actions;

use Filament\Forms\Components\FileUpload;
use Modules\Media\Actions\GetAttachmentsSchemaAction;
<<<<<<< HEAD
<<<<<<< HEAD
use Tests\TestCase;
=======
>>>>>>> 0a466ed (.)
=======
use Tests\TestCase;
>>>>>>> 37a2da6 (.)

class GetAttachmentsSchemaActionTest extends TestCase
{
    public function test_returns_attachment_schema(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> 0a466ed (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 37a2da6 (.)
        $attachments = ['invoice', 'contract', 'receipt'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
        static::assertIsArray($schema);
        static::assertCount(3, $schema);

        // Verifica che ogni attachment abbia un FileUpload component
        foreach ($schema as $component) {
            static::assertInstanceOf(FileUpload::class, $component);
<<<<<<< HEAD
=======
        $this->assertIsArray($schema);
        $this->assertCount(3, $schema);

        // Verifica che ogni attachment abbia un FileUpload component
        foreach ($schema as $component) {
            $this->assertInstanceOf(FileUpload::class, $component);
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
        }
    }

    public function test_schema_has_correct_names(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> 0a466ed (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 37a2da6 (.)
        $attachments = ['invoice', 'contract'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertSame('invoice', $schema[0]->getName());
        static::assertSame('contract', $schema[1]->getName());
=======
        $this->assertEquals('invoice', $schema[0]->getName());
        $this->assertEquals('contract', $schema[1]->getName());
>>>>>>> 0a466ed (.)
=======
        static::assertSame('invoice', $schema[0]->getName());
        static::assertSame('contract', $schema[1]->getName());
>>>>>>> 37a2da6 (.)
    }

    public function test_schema_has_correct_labels(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> 0a466ed (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 37a2da6 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertSame('Invoice', $schema[0]->getLabel());
=======
        $this->assertEquals('Invoice', $schema[0]->getLabel());
>>>>>>> 0a466ed (.)
=======
        static::assertSame('Invoice', $schema[0]->getLabel());
>>>>>>> 37a2da6 (.)
    }

    public function test_schema_has_correct_validation(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> 0a466ed (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 37a2da6 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
        static::assertTrue($component->isRequired());
        static::assertContains('pdf', $component->getAcceptedFileTypes());
        static::assertContains('doc', $component->getAcceptedFileTypes());
        static::assertContains('docx', $component->getAcceptedFileTypes());
<<<<<<< HEAD
=======
        $this->assertTrue($component->isRequired());
        $this->assertContains('pdf', $component->getAcceptedFileTypes());
        $this->assertContains('doc', $component->getAcceptedFileTypes());
        $this->assertContains('docx', $component->getAcceptedFileTypes());
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
    }

    public function test_schema_has_correct_storage(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> 0a466ed (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 37a2da6 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertSame('attachments', $component->getDiskName());
=======
        $this->assertEquals('attachments', $component->getDiskName());
>>>>>>> 0a466ed (.)
=======
        static::assertSame('attachments', $component->getDiskName());
>>>>>>> 37a2da6 (.)
    }

    public function test_schema_has_correct_directory(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> 0a466ed (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 37a2da6 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertSame('temp', $component->getDirectory());
=======
        $this->assertEquals('temp', $component->getDirectory());
>>>>>>> 0a466ed (.)
=======
        static::assertSame('temp', $component->getDirectory());
>>>>>>> 37a2da6 (.)
    }

    public function test_schema_has_correct_visibility(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> 0a466ed (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 37a2da6 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertSame('public', $component->getVisibility());
=======
        $this->assertEquals('public', $component->getVisibility());
>>>>>>> 0a466ed (.)
=======
        static::assertSame('public', $component->getVisibility());
>>>>>>> 37a2da6 (.)
    }

    public function test_schema_has_correct_max_size(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> 0a466ed (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 37a2da6 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertSame(10 * 1024 * 1024, $component->getMaxSize()); // 10MB
=======
        $this->assertEquals(10 * 1024 * 1024, $component->getMaxSize()); // 10MB
>>>>>>> 0a466ed (.)
=======
        static::assertSame(10 * 1024 * 1024, $component->getMaxSize()); // 10MB
>>>>>>> 37a2da6 (.)
    }

    public function test_schema_has_correct_multiple(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> 0a466ed (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 37a2da6 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertFalse($component->isMultiple());
=======
        $this->assertFalse($component->isMultiple());
>>>>>>> 0a466ed (.)
=======
        static::assertFalse($component->isMultiple());
>>>>>>> 37a2da6 (.)
    }

    public function test_schema_has_correct_preview(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> 0a466ed (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 37a2da6 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertTrue($component->isPreviewable());
=======
        $this->assertTrue($component->isPreviewable());
>>>>>>> 0a466ed (.)
=======
        static::assertTrue($component->isPreviewable());
>>>>>>> 37a2da6 (.)
    }

    public function test_schema_has_correct_download(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> 0a466ed (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 37a2da6 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertTrue($component->isDownloadable());
=======
        $this->assertTrue($component->isDownloadable());
>>>>>>> 0a466ed (.)
=======
        static::assertTrue($component->isDownloadable());
>>>>>>> 37a2da6 (.)
    }

    public function test_schema_has_correct_remove(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> 0a466ed (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 37a2da6 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertTrue($component->isRemovable());
=======
        $this->assertTrue($component->isRemovable());
>>>>>>> 0a466ed (.)
=======
        static::assertTrue($component->isRemovable());
>>>>>>> 37a2da6 (.)
    }

    public function test_schema_has_correct_reorder(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> 0a466ed (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 37a2da6 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertFalse($component->isReorderable());
=======
        $this->assertFalse($component->isReorderable());
>>>>>>> 0a466ed (.)
=======
        static::assertFalse($component->isReorderable());
>>>>>>> 37a2da6 (.)
    }

    public function test_schema_has_correct_append(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> 0a466ed (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 37a2da6 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertFalse($component->isAppendable());
=======
        $this->assertFalse($component->isAppendable());
>>>>>>> 0a466ed (.)
=======
        static::assertFalse($component->isAppendable());
>>>>>>> 37a2da6 (.)
    }

    public function test_schema_has_correct_panel(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> 0a466ed (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 37a2da6 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertSame('Attachments', $component->getPanel());
=======
        $this->assertEquals('Attachments', $component->getPanel());
>>>>>>> 0a466ed (.)
=======
        static::assertSame('Attachments', $component->getPanel());
>>>>>>> 37a2da6 (.)
    }

    public function test_schema_has_correct_help_text(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> 0a466ed (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 37a2da6 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertStringContainsString('Upload invoice file', $component->getHelperText());
=======
        $this->assertStringContainsString('Upload invoice file', $component->getHelperText());
>>>>>>> 0a466ed (.)
=======
        static::assertStringContainsString('Upload invoice file', $component->getHelperText());
>>>>>>> 37a2da6 (.)
    }

    public function test_schema_has_correct_placeholder(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> 0a466ed (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 37a2da6 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertStringContainsString('Select invoice file', $component->getPlaceholder());
=======
        $this->assertStringContainsString('Select invoice file', $component->getPlaceholder());
>>>>>>> 0a466ed (.)
=======
        static::assertStringContainsString('Select invoice file', $component->getPlaceholder());
>>>>>>> 37a2da6 (.)
    }
}
