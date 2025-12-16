<?php

declare(strict_types=1);

namespace Modules\Media\Actions\Image;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Arr;
>>>>>>> 5200b63 (.)
=======
>>>>>>> f41e45e (.)
use Modules\UI\Actions\Icon\GetAllIconsAction;
use Webmozart\Assert\Assert;

/**
 * Verifica l'esistenza di un SVG registrato utilizzando BladeUI Icons.
 *
 * @method bool execute(string $svgName)
 */
class SvgExistsAction
{
    /**
     * Verifica se l'SVG esiste nei set di icone registrati.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $svgName  Il nome dell'SVG da verificare (es: 'heroicon-o-user')
=======
     * @param  string $svgName  Il nome dell'SVG da verificare (es: 'heroicon-o-user')
>>>>>>> 5200b63 (.)
=======
     * @param  string  $svgName  Il nome dell'SVG da verificare (es: 'heroicon-o-user')
>>>>>>> f41e45e (.)
     * @return bool True se l'SVG esiste, false altrimenti
     */
    public function execute(string $svgName): bool
    {
        if (empty($svgName)) {
            return false;
        }

        $packs = app(GetAllIconsAction::class)->execute();
        Assert::isArray($packs, 'Il risultato di GetAllIconsAction deve essere un array');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5200b63 (.)
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 146bbc3 (.)

        foreach ($packs as $pack) {
            Assert::isArray($pack, 'Ogni pacchetto deve essere un array');
            Assert::keyExists($pack, 'icons', 'Il pacchetto deve contenere la chiave icons');

            $icons = $pack['icons'];
            Assert::isIterable($icons, 'icons deve essere un array o un oggetto iterabile');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 1d21a10 (.)
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        foreach ($packs as $pack) {
            Assert::isArray($pack, 'Ogni pacchetto deve essere un array');
            Assert::keyExists($pack, 'icons', 'Il pacchetto deve contenere la chiave icons');

            $icons = $pack['icons'];
            Assert::isIterable($icons, 'icons deve essere un array o un oggetto iterabile');
<<<<<<< HEAD
            
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
>>>>>>> 98c37f4 (.)
=======
=======
>>>>>>> 47a54fe (.)
=======
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 1d21a10 (.)
        
        foreach ($packs as $pack) {
            Assert::isArray($pack, 'Ogni pacchetto deve essere un array');
            Assert::keyExists($pack, 'icons', 'Il pacchetto deve contenere la chiave icons');
            
            $icons = $pack['icons'];
            Assert::isIterable($icons, 'icons deve essere un array o un oggetto iterabile');
            
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
=======
>>>>>>> 5200b63 (.)
=======
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======
>>>>>>> e0a46f3 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 146bbc3 (.)
            foreach ($icons as $icon) {
                if ($svgName === $icon) {
                    return true;
                }
            }
        }

        return false;
    }
}
