<?php

declare(strict_types=1);

use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Modules\Media\Filament\Resources\MediaConvertResource;
use Tests\TestCase;

uses(TestCase::class);

test('get form schema returns expected components', function (): void {
    $form = MediaConvertResource::getFormSchema();

    expect($form)->toBeArray();
    expect($form)->not->toBeEmpty();

<<<<<<< HEAD
    $componentClasses = array_map(get_class(...), $form);
=======
    $componentClasses = array_map(get_class(...), $schema);
>>>>>>> 1999eb3 (.)

    expect($componentClasses)->toContain(Radio::class);
    expect($componentClasses)->toContain(TextInput::class);
});
