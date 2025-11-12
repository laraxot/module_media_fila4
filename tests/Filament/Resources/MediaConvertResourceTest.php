<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Modules\Media\Filament\Resources\MediaConvertResource;
use Tests\TestCase;
=======
use Tests\TestCase;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Modules\Media\Filament\Resources\MediaConvertResource;
>>>>>>> 5200b63 (.)
=======
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Modules\Media\Filament\Resources\MediaConvertResource;
use Tests\TestCase;
>>>>>>> f41e45e (.)

uses(TestCase::class);

test('get form schema returns expected components', function (): void {
    $form = MediaConvertResource::getFormSchema();

    expect($form)->toBeArray();
    expect($form)->not->toBeEmpty();

    $componentClasses = array_map(get_class(...), $form);

    expect($componentClasses)->toContain(Radio::class);
    expect($componentClasses)->toContain(TextInput::class);
});
