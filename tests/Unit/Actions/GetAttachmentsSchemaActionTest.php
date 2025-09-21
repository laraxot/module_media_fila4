<?php

declare(strict_types=1);

namespace Modules\Media\Tests\Unit\Actions;

<<<<<<< HEAD
use Filament\Forms\Components\FileUpload;
use Modules\Media\Actions\GetAttachmentsSchemaAction;
use Tests\TestCase;
=======
<<<<<<< HEAD
use Filament\Forms\Components\FileUpload;
use Modules\Media\Actions\GetAttachmentsSchemaAction;
<<<<<<< HEAD
<<<<<<< HEAD
use Tests\TestCase;
=======
>>>>>>> a12f125f4a (.)
=======
use Tests\TestCase;
>>>>>>> b93ef594b4 (.)
=======
use Modules\Media\Actions\GetAttachmentsSchemaAction;
use Tests\TestCase;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)

class GetAttachmentsSchemaActionTest extends TestCase
{
    public function test_returns_attachment_schema(): void
    {
        // Arrange
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> a12f125f4a (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        $attachments = ['invoice', 'contract', 'receipt'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
        static::assertIsArray($schema);
        static::assertCount(3, $schema);

        // Verifica che ogni attachment abbia un FileUpload component
        foreach ($schema as $component) {
            static::assertInstanceOf(FileUpload::class, $component);
<<<<<<< HEAD
=======
=======
        $this->assertIsArray($schema);
        $this->assertCount(3, $schema);

        // Verifica che ogni attachment abbia un FileUpload component
        foreach ($schema as $component) {
            $this->assertInstanceOf(FileUpload::class, $component);
>>>>>>> a12f125f4a (.)
=======
        static::assertIsArray($schema);
        static::assertCount(3, $schema);

        // Verifica che ogni attachment abbia un FileUpload component
        foreach ($schema as $component) {
            static::assertInstanceOf(FileUpload::class, $component);
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        }
    }

    public function test_schema_has_correct_names(): void
    {
        // Arrange
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> a12f125f4a (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        $attachments = ['invoice', 'contract'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
<<<<<<< HEAD
        static::assertSame('invoice', $schema[0]->getName());
        static::assertSame('contract', $schema[1]->getName());
=======
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertSame('invoice', $schema[0]->getName());
        static::assertSame('contract', $schema[1]->getName());
=======
        $this->assertEquals('invoice', $schema[0]->getName());
        $this->assertEquals('contract', $schema[1]->getName());
>>>>>>> a12f125f4a (.)
=======
        static::assertSame('invoice', $schema[0]->getName());
        static::assertSame('contract', $schema[1]->getName());
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
    }

    public function test_schema_has_correct_labels(): void
    {
        // Arrange
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> a12f125f4a (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
<<<<<<< HEAD
        static::assertSame('Invoice', $schema[0]->getLabel());
=======
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertSame('Invoice', $schema[0]->getLabel());
=======
        $this->assertEquals('Invoice', $schema[0]->getLabel());
>>>>>>> a12f125f4a (.)
=======
        static::assertSame('Invoice', $schema[0]->getLabel());
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
    }

    public function test_schema_has_correct_validation(): void
    {
        // Arrange
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> a12f125f4a (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        static::assertTrue($component->isRequired());
        static::assertContains('pdf', $component->getAcceptedFileTypes());
        static::assertContains('doc', $component->getAcceptedFileTypes());
        static::assertContains('docx', $component->getAcceptedFileTypes());
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice', 'contract', 'receipt'];
        
        // Act
        $schema = $action->execute($attachments);
        
        // Assert
        $this->assertIsArray($schema);
        $this->assertCount(3, $schema);
        
        // Verifica che ogni attachment abbia un FileUpload component
        foreach ($schema as $component) {
            $this->assertInstanceOf(FileUpload::class, $component);
        }
    }
    
    public function test_schema_has_correct_names(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice', 'contract'];
        
        // Act
        $schema = $action->execute($attachments);
        
        // Assert
        $this->assertEquals('invoice', $schema[0]->getName());
        $this->assertEquals('contract', $schema[1]->getName());
    }
    
    public function test_schema_has_correct_labels(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
        // Assert
        $this->assertEquals('Invoice', $schema[0]->getLabel());
    }
    
    public function test_schema_has_correct_validation(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
        // Assert
        $component = $schema[0];
>>>>>>> origin/develop
        $this->assertTrue($component->isRequired());
        $this->assertContains('pdf', $component->getAcceptedFileTypes());
        $this->assertContains('doc', $component->getAcceptedFileTypes());
        $this->assertContains('docx', $component->getAcceptedFileTypes());
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
    }

    public function test_schema_has_correct_storage(): void
    {
        // Arrange
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> a12f125f4a (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
        static::assertSame('attachments', $component->getDiskName());
=======
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertSame('attachments', $component->getDiskName());
=======
        $this->assertEquals('attachments', $component->getDiskName());
>>>>>>> a12f125f4a (.)
=======
        static::assertSame('attachments', $component->getDiskName());
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
    }

    public function test_schema_has_correct_directory(): void
    {
        // Arrange
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> a12f125f4a (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
        static::assertSame('temp', $component->getDirectory());
=======
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertSame('temp', $component->getDirectory());
=======
        $this->assertEquals('temp', $component->getDirectory());
>>>>>>> a12f125f4a (.)
=======
        static::assertSame('temp', $component->getDirectory());
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
    }

    public function test_schema_has_correct_visibility(): void
    {
        // Arrange
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> a12f125f4a (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
        static::assertSame('public', $component->getVisibility());
=======
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertSame('public', $component->getVisibility());
=======
        $this->assertEquals('public', $component->getVisibility());
>>>>>>> a12f125f4a (.)
=======
        static::assertSame('public', $component->getVisibility());
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
    }

    public function test_schema_has_correct_max_size(): void
    {
        // Arrange
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> a12f125f4a (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
        static::assertSame(10 * 1024 * 1024, $component->getMaxSize()); // 10MB
=======
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertSame(10 * 1024 * 1024, $component->getMaxSize()); // 10MB
=======
        $this->assertEquals(10 * 1024 * 1024, $component->getMaxSize()); // 10MB
>>>>>>> a12f125f4a (.)
=======
        static::assertSame(10 * 1024 * 1024, $component->getMaxSize()); // 10MB
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
    }

    public function test_schema_has_correct_multiple(): void
    {
        // Arrange
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> a12f125f4a (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
        static::assertFalse($component->isMultiple());
=======
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertFalse($component->isMultiple());
=======
        $this->assertFalse($component->isMultiple());
>>>>>>> a12f125f4a (.)
=======
        static::assertFalse($component->isMultiple());
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
    }

    public function test_schema_has_correct_preview(): void
    {
        // Arrange
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> a12f125f4a (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
        static::assertTrue($component->isPreviewable());
=======
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertTrue($component->isPreviewable());
=======
        $this->assertTrue($component->isPreviewable());
>>>>>>> a12f125f4a (.)
=======
        static::assertTrue($component->isPreviewable());
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
    }

    public function test_schema_has_correct_download(): void
    {
        // Arrange
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> a12f125f4a (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
        static::assertTrue($component->isDownloadable());
=======
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertTrue($component->isDownloadable());
=======
        $this->assertTrue($component->isDownloadable());
>>>>>>> a12f125f4a (.)
=======
        static::assertTrue($component->isDownloadable());
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
    }

    public function test_schema_has_correct_remove(): void
    {
        // Arrange
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> a12f125f4a (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
        static::assertTrue($component->isRemovable());
=======
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertTrue($component->isRemovable());
=======
        $this->assertTrue($component->isRemovable());
>>>>>>> a12f125f4a (.)
=======
        static::assertTrue($component->isRemovable());
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
    }

    public function test_schema_has_correct_reorder(): void
    {
        // Arrange
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> a12f125f4a (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
        static::assertFalse($component->isReorderable());
=======
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertFalse($component->isReorderable());
=======
        $this->assertFalse($component->isReorderable());
>>>>>>> a12f125f4a (.)
=======
        static::assertFalse($component->isReorderable());
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
    }

    public function test_schema_has_correct_append(): void
    {
        // Arrange
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> a12f125f4a (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
        static::assertFalse($component->isAppendable());
=======
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertFalse($component->isAppendable());
=======
        $this->assertFalse($component->isAppendable());
>>>>>>> a12f125f4a (.)
=======
        static::assertFalse($component->isAppendable());
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
    }

    public function test_schema_has_correct_panel(): void
    {
        // Arrange
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> a12f125f4a (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
        static::assertSame('Attachments', $component->getPanel());
=======
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertSame('Attachments', $component->getPanel());
=======
        $this->assertEquals('Attachments', $component->getPanel());
>>>>>>> a12f125f4a (.)
=======
        static::assertSame('Attachments', $component->getPanel());
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
    }

    public function test_schema_has_correct_help_text(): void
    {
        // Arrange
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> a12f125f4a (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
        static::assertStringContainsString('Upload invoice file', $component->getHelperText());
=======
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertStringContainsString('Upload invoice file', $component->getHelperText());
=======
        $this->assertStringContainsString('Upload invoice file', $component->getHelperText());
>>>>>>> a12f125f4a (.)
=======
        static::assertStringContainsString('Upload invoice file', $component->getHelperText());
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
    }

    public function test_schema_has_correct_placeholder(): void
    {
        // Arrange
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $action = new GetAttachmentsSchemaAction();
=======
        $action = new GetAttachmentsSchemaAction;
>>>>>>> a12f125f4a (.)
=======
        $action = new GetAttachmentsSchemaAction();
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
        $attachments = ['invoice'];

        // Act
        $schema = $action->execute($attachments);

        // Assert
        $component = $schema[0];
<<<<<<< HEAD
        static::assertStringContainsString('Select invoice file', $component->getPlaceholder());
=======
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertStringContainsString('Select invoice file', $component->getPlaceholder());
=======
        $this->assertStringContainsString('Select invoice file', $component->getPlaceholder());
>>>>>>> a12f125f4a (.)
=======
        static::assertStringContainsString('Select invoice file', $component->getPlaceholder());
>>>>>>> b93ef594b4 (.)
=======
    }
    
    public function test_schema_has_correct_storage(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
        // Assert
        $component = $schema[0];
        $this->assertEquals('attachments', $component->getDiskName());
    }
    
    public function test_schema_has_correct_directory(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
        // Assert
        $component = $schema[0];
        $this->assertEquals('temp', $component->getDirectory());
    }
    
    public function test_schema_has_correct_visibility(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
        // Assert
        $component = $schema[0];
        $this->assertEquals('public', $component->getVisibility());
    }
    
    public function test_schema_has_correct_max_size(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
        // Assert
        $component = $schema[0];
        $this->assertEquals(10 * 1024 * 1024, $component->getMaxSize()); // 10MB
    }
    
    public function test_schema_has_correct_multiple(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
        // Assert
        $component = $schema[0];
        $this->assertFalse($component->isMultiple());
    }
    
    public function test_schema_has_correct_preview(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
        // Assert
        $component = $schema[0];
        $this->assertTrue($component->isPreviewable());
    }
    
    public function test_schema_has_correct_download(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
        // Assert
        $component = $schema[0];
        $this->assertTrue($component->isDownloadable());
    }
    
    public function test_schema_has_correct_remove(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
        // Assert
        $component = $schema[0];
        $this->assertTrue($component->isRemovable());
    }
    
    public function test_schema_has_correct_reorder(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
        // Assert
        $component = $schema[0];
        $this->assertFalse($component->isReorderable());
    }
    
    public function test_schema_has_correct_append(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
        // Assert
        $component = $schema[0];
        $this->assertFalse($component->isAppendable());
    }
    
    public function test_schema_has_correct_panel(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
        // Assert
        $component = $schema[0];
        $this->assertEquals('Attachments', $component->getPanel());
    }
    
    public function test_schema_has_correct_help_text(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
        // Assert
        $component = $schema[0];
        $this->assertStringContainsString('Upload invoice file', $component->getHelperText());
    }
    
    public function test_schema_has_correct_placeholder(): void
    {
        // Arrange
        $action = new GetAttachmentsSchemaAction();
        $attachments = ['invoice'];
        
        // Act
        $schema = $action->execute($attachments);
        
        // Assert
        $component = $schema[0];
        $this->assertStringContainsString('Select invoice file', $component->getPlaceholder());
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    }
}
