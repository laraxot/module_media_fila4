<?php

declare(strict_types=1);

use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Modules\Media\Filament\Resources\MediaConvertResource;
use Tests\TestCase;

uses(TestCase::class);

test('get form schema returns expected components', function (): void {
<<<<<<< HEAD
    $form = MediaConvertResource::getFormSchema();

    expect($form)->toBeArray();
    expect($form)->not->toBeEmpty();

    $componentClasses = array_map(get_class(...), $form);
=======
    $schema = MediaConvertResource::getFormSchema();

    expect($schema)->toBeArray();
    expect($schema)->not->toBeEmpty();

    $componentClasses = array_map(get_class(...), $schema);
>>>>>>> 739e4b7 (.)

    expect($componentClasses)->toContain(Radio::class);
    expect($componentClasses)->toContain(TextInput::class);
});
