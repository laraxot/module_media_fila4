<?php

declare(strict_types=1);

namespace Modules\Media\Tests\Unit\Actions;

use Filament\Forms\Components\FileUpload;
use Modules\Media\Actions\GetAttachmentsSchemaAction;
use Tests\TestCase;

class GetAttachmentsSchemaActionTest extends TestCase
{
    public function test_returns_attachment_schema(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction;
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 5200b63 (.)
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> f41e45e (.)
        $attachments = ['invoice', 'contract', 'receipt'];

        // Act
        $form = $action->execute($attachments);

        // Assert
<<<<<<< HEAD
        static::assertIsArray($form);
        static::assertCount(3, $form);
=======
        static::assertIsArray($schema);
        static::assertCount(3, $schema);
>>>>>>> 1999eb3 (.)

        // Verifica che ogni attachment abbia un FileUpload component
        foreach ($form as $component) {
            static::assertInstanceOf(FileUpload::class, $component);
        }
    }

    public function test_schema_has_correct_names(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction;
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 5200b63 (.)
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> f41e45e (.)
        $attachments = ['invoice', 'contract'];

        // Act
        $form = $action->execute($attachments);

        // Assert
<<<<<<< HEAD
        static::assertSame('invoice', $form[0]->getName());
        static::assertSame('contract', $form[1]->getName());
=======
        static::assertSame('invoice', $schema[0]->getName());
        static::assertSame('contract', $schema[1]->getName());
>>>>>>> 1999eb3 (.)
    }

    public function test_schema_has_correct_labels(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction;
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 5200b63 (.)
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> f41e45e (.)
        $attachments = ['invoice'];

        // Act
        $form = $action->execute($attachments);

        // Assert
<<<<<<< HEAD
        static::assertSame('Invoice', $form[0]->getLabel());
=======
        static::assertSame('Invoice', $schema[0]->getLabel());
>>>>>>> 1999eb3 (.)
    }

    public function test_schema_has_correct_validation(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction;
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 5200b63 (.)
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> f41e45e (.)
        $attachments = ['invoice'];

        // Act
        $form = $action->execute($attachments);

        // Assert
<<<<<<< HEAD
        $component = $form[0];
=======
        $component = $schema[0];
>>>>>>> 1999eb3 (.)
        static::assertTrue($component->isRequired());
        static::assertContains('pdf', $component->getAcceptedFileTypes());
        static::assertContains('doc', $component->getAcceptedFileTypes());
        static::assertContains('docx', $component->getAcceptedFileTypes());
    }

    public function test_schema_has_correct_storage(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction;
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 5200b63 (.)
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> f41e45e (.)
        $attachments = ['invoice'];

        // Act
        $form = $action->execute($attachments);

        // Assert
<<<<<<< HEAD
        $component = $form[0];
=======
        $component = $schema[0];
>>>>>>> 1999eb3 (.)
        static::assertSame('attachments', $component->getDiskName());
    }

    public function test_schema_has_correct_directory(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction;
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 5200b63 (.)
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> f41e45e (.)
        $attachments = ['invoice'];

        // Act
        $form = $action->execute($attachments);

        // Assert
<<<<<<< HEAD
        $component = $form[0];
=======
        $component = $schema[0];
>>>>>>> 1999eb3 (.)
        static::assertSame('temp', $component->getDirectory());
    }

    public function test_schema_has_correct_visibility(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction;
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 5200b63 (.)
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> f41e45e (.)
        $attachments = ['invoice'];

        // Act
        $form = $action->execute($attachments);

        // Assert
<<<<<<< HEAD
        $component = $form[0];
=======
        $component = $schema[0];
>>>>>>> 1999eb3 (.)
        static::assertSame('public', $component->getVisibility());
    }

    public function test_schema_has_correct_max_size(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction;
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 5200b63 (.)
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> f41e45e (.)
        $attachments = ['invoice'];

        // Act
        $form = $action->execute($attachments);

        // Assert
<<<<<<< HEAD
        $component = $form[0];
=======
        $component = $schema[0];
>>>>>>> 1999eb3 (.)
        static::assertSame(10 * 1024 * 1024, $component->getMaxSize()); // 10MB
    }

    public function test_schema_has_correct_multiple(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction;
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 5200b63 (.)
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> f41e45e (.)
        $attachments = ['invoice'];

        // Act
        $form = $action->execute($attachments);

        // Assert
<<<<<<< HEAD
        $component = $form[0];
=======
        $component = $schema[0];
>>>>>>> 1999eb3 (.)
        static::assertFalse($component->isMultiple());
    }

    public function test_schema_has_correct_preview(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction;
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 5200b63 (.)
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> f41e45e (.)
        $attachments = ['invoice'];

        // Act
        $form = $action->execute($attachments);

        // Assert
<<<<<<< HEAD
        $component = $form[0];
=======
        $component = $schema[0];
>>>>>>> 1999eb3 (.)
        static::assertTrue($component->isPreviewable());
    }

    public function test_schema_has_correct_download(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction;
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 5200b63 (.)
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> f41e45e (.)
        $attachments = ['invoice'];

        // Act
        $form = $action->execute($attachments);

        // Assert
<<<<<<< HEAD
        $component = $form[0];
=======
        $component = $schema[0];
>>>>>>> 1999eb3 (.)
        static::assertTrue($component->isDownloadable());
    }

    public function test_schema_has_correct_remove(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction;
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 5200b63 (.)
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> f41e45e (.)
        $attachments = ['invoice'];

        // Act
        $form = $action->execute($attachments);

        // Assert
<<<<<<< HEAD
        $component = $form[0];
=======
        $component = $schema[0];
>>>>>>> 1999eb3 (.)
        static::assertTrue($component->isRemovable());
    }

    public function test_schema_has_correct_reorder(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction;
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 5200b63 (.)
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> f41e45e (.)
        $attachments = ['invoice'];

        // Act
        $form = $action->execute($attachments);

        // Assert
<<<<<<< HEAD
        $component = $form[0];
=======
        $component = $schema[0];
>>>>>>> 1999eb3 (.)
        static::assertFalse($component->isReorderable());
    }

    public function test_schema_has_correct_append(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction;
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 5200b63 (.)
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> f41e45e (.)
        $attachments = ['invoice'];

        // Act
        $form = $action->execute($attachments);

        // Assert
<<<<<<< HEAD
        $component = $form[0];
=======
        $component = $schema[0];
>>>>>>> 1999eb3 (.)
        static::assertFalse($component->isAppendable());
    }

    public function test_schema_has_correct_panel(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction;
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 5200b63 (.)
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> f41e45e (.)
        $attachments = ['invoice'];

        // Act
        $form = $action->execute($attachments);

        // Assert
<<<<<<< HEAD
        $component = $form[0];
=======
        $component = $schema[0];
>>>>>>> 1999eb3 (.)
        static::assertSame('Attachments', $component->getPanel());
    }

    public function test_schema_has_correct_help_text(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction;
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 5200b63 (.)
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> f41e45e (.)
        $attachments = ['invoice'];

        // Act
        $form = $action->execute($attachments);

        // Assert
<<<<<<< HEAD
        $component = $form[0];
=======
        $component = $schema[0];
>>>>>>> 1999eb3 (.)
        static::assertStringContainsString('Upload invoice file', $component->getHelperText());
    }

    public function test_schema_has_correct_placeholder(): void
    {
        // Arrange
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction;
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> 5200b63 (.)
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> f41e45e (.)
        $attachments = ['invoice'];

        // Act
        $form = $action->execute($attachments);

        // Assert
<<<<<<< HEAD
        $component = $form[0];
=======
        $component = $schema[0];
>>>>>>> 1999eb3 (.)
        static::assertStringContainsString('Select invoice file', $component->getPlaceholder());
    }
}
