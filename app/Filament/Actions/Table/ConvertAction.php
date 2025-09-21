<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Media\Filament\Actions\Table;

// Header actions must be an instance of Filament\Actions\Action, or Filament\Actions\ActionGroup.
// use Filament\Tables\Actions\Action;
<<<<<<< HEAD
use Filament\Actions\Action;
use Filament\Forms\Components\Radio;
=======
<<<<<<< HEAD
use Filament\Actions\Action;
use Filament\Forms\Components\Radio;
=======
use Filament\Forms\Components\Radio;
use Filament\Tables\Actions\Action;
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)

class ConvertAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->translateLabel()
            ->tooltip('convert')
            ->openUrlInNewTab()
            ->icon('media-convert')
<<<<<<< HEAD
            ->schema([
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ->schema([
=======
            ->form([
>>>>>>> a12f125f4a (.)
=======
            ->schema([
>>>>>>> b93ef594b4 (.)
=======
            ->form([
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
                Radio::make('format')
                    ->options([
                        'webm01' => 'webm01',
                        'webm02' => 'webm02',
                    ])
                    ->inline()
                    ->inlineLabel(false),
            ])
<<<<<<< HEAD
            ->action(dddx(...));

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ->action(dddx(...));

=======
            ->action(fn ($record): string => dddx($record));
>>>>>>> a12f125f4a (.)
=======
            ->action(dddx(...));

>>>>>>> b93ef594b4 (.)
=======
            ->action(fn ($record): string => dddx($record));
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        // ->requiresConfirmation()
    }
}
