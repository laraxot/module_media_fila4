<?php

declare(strict_types=1);

namespace Modules\Media\Tests\Unit\Models;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Media\Models\BaseModel;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

beforeEach(function () {
<<<<<<< HEAD
    $this->baseModel = new class extends BaseModel
    {
=======
    $this->baseModel = new class extends BaseModel {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
use Modules\Media\Models\BaseModel;

beforeEach(function () {
    $this->baseModel = new class extends BaseModel
    {
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
        protected $table = 'test_media_table';
    };
});

test('base model extends eloquent model', function () {
    expect($this->baseModel)->toBeInstanceOf(Model::class);
});

test('base model has correct table name', function () {
    expect($this->baseModel->getTable())->toBe('test_media_table');
});

test('base model can be instantiated', function () {
    expect($this->baseModel)->toBeInstanceOf(BaseModel::class);
});

test('base model has proper inheritance chain', function () {
    expect($this->baseModel)->toBeInstanceOf(BaseModel::class);
    expect($this->baseModel)->toBeInstanceOf(Model::class);
});

test('base model has timestamps enabled', function () {
    expect($this->baseModel->usesTimestamps())->toBeTrue();
});
