<?php

declare(strict_types=1);

namespace Modules\Media\Tests\Unit\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Media\Models\BaseModel;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

test('base model extends eloquent model', function (): void {
    $baseModel = new class extends BaseModel
    {
        protected $table = 'test_media_table';
    };

    expect($baseModel)->toBeInstanceOf(Model::class);
});

test('base model has correct table name', function (): void {
    $baseModel = new class extends BaseModel
    {
        protected $table = 'test_media_table';
    };

    expect($baseModel->getTable())->toBe('test_media_table');
});

test('base model can be instantiated', function (): void {
    $baseModel = new class extends BaseModel
    {
        protected $table = 'test_media_table';
    };

    expect($baseModel)->toBeInstanceOf(BaseModel::class);
});

test('base model has proper inheritance chain', function (): void {
    $baseModel = new class extends BaseModel
    {
        protected $table = 'test_media_table';
    };

    expect($baseModel)->toBeInstanceOf(BaseModel::class);
    expect($baseModel)->toBeInstanceOf(Model::class);
});

test('base model has timestamps enabled', function (): void {
    $baseModel = new class extends BaseModel
    {
        protected $table = 'test_media_table';
    };

    expect($baseModel->usesTimestamps())->toBeTrue();
});
