<?php

declare(strict_types=1);

namespace Modules\Media\Tests\Unit\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Media\Models\BaseModel;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
beforeEach(function () {
<<<<<<< HEAD
<<<<<<< HEAD
=======
beforeEach(function (): void {
>>>>>>> 13d1d7e (.)
    $this->baseModel = new class extends BaseModel
=======
test('base model extends eloquent model', function (): void {
    $baseModel = new class extends BaseModel
>>>>>>> b69c36d (.)
=======
beforeEach(function (): void {
=======
beforeEach(function () {
>>>>>>> 2a4b5df (.)
    $this->baseModel = new class extends BaseModel
>>>>>>> fbf6035 (.)
    {
=======
    $this->baseModel = new class extends BaseModel {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> a80d398 (.)
=======
=======
<<<<<<< HEAD
=======
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> b93ef594b4 (.)
use Modules\Media\Models\BaseModel;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

beforeEach(function () {
<<<<<<< HEAD
    $this->baseModel = new class extends BaseModel
    {
>>>>>>> a12f125f4a (.)
=======
    $this->baseModel = new class extends BaseModel {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
    $this->baseModel = new class extends BaseModel
    {
>>>>>>> f41e45e (.)
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
