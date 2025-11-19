<?php

declare(strict_types=1);

<<<<<<< HEAD
use Tests\TestCase;
=======
<<<<<<< HEAD
use Tests\TestCase;
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Modules\Media\Filament\Resources\MediaConvertResource;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
uses(TestCase::class);

test('get form schema returns expected components', function (): void {
    $schema = MediaConvertResource::getFormSchema();

    expect($schema)->toBeArray();
    expect($schema)->not->toBeEmpty();

<<<<<<< HEAD
    $componentClasses = array_map(get_class(...), $schema);

=======
<<<<<<< HEAD
<<<<<<< HEAD
    $componentClasses = array_map(get_class(...), $schema);
=======
    $componentClasses = array_map(fn ($c) => get_class($c), $schema);
>>>>>>> a12f125f4a (.)
=======
    $componentClasses = array_map(get_class(...), $schema);
>>>>>>> b93ef594b4 (.)

=======
uses(Tests\TestCase::class);

test('get form schema returns expected components', function (): void {
    $schema = MediaConvertResource::getFormSchema();
    
    expect($schema)->toBeArray();
    expect($schema)->not->toBeEmpty();
    
    $componentClasses = array_map(fn ($c) => get_class($c), $schema);
    
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    expect($componentClasses)->toContain(Radio::class);
    expect($componentClasses)->toContain(TextInput::class);
});
