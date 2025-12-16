<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Media\Filament\Actions\Table;

// Header actions must be an instance of Filament\Actions\Action, or Filament\Actions\ActionGroup.
// use Filament\Actions\Action;
use Filament\Actions\Action;
use Filament\Forms\Components\Radio;

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
<<<<<<< HEAD
            ->schema([
=======
            ->form([
>>>>>>> 0a466ed (.)
=======
            ->schema([
>>>>>>> 37a2da6 (.)
                Radio::make('format')
                    ->options([
                        'webm01' => 'webm01',
                        'webm02' => 'webm02',
                    ])
                    ->inline()
                    ->inlineLabel(false),
            ])
<<<<<<< HEAD
<<<<<<< HEAD
            ->action(dddx(...));

=======
            ->action(fn ($record): string => dddx($record));
>>>>>>> 0a466ed (.)
=======
            ->action(dddx(...));

>>>>>>> 37a2da6 (.)
        // ->requiresConfirmation()
    }
}
