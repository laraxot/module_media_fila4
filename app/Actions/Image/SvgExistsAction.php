<?php

declare(strict_types=1);

namespace Modules\Media\Actions\Image;

<<<<<<< HEAD
=======
use Illuminate\Support\Arr;
>>>>>>> 5200b63 (.)
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
     * @param  string  $svgName  Il nome dell'SVG da verificare (es: 'heroicon-o-user')
=======
     * @param  string $svgName  Il nome dell'SVG da verificare (es: 'heroicon-o-user')
>>>>>>> 5200b63 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
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
>>>>>>> 06bb10d (.)
=======
>>>>>>> 98c37f4 (.)
=======
        
        foreach ($packs as $pack) {
            Assert::isArray($pack, 'Ogni pacchetto deve essere un array');
            Assert::keyExists($pack, 'icons', 'Il pacchetto deve contenere la chiave icons');
            
            $icons = $pack['icons'];
            Assert::isIterable($icons, 'icons deve essere un array o un oggetto iterabile');
            
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
=======
>>>>>>> 5200b63 (.)
=======
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
            foreach ($icons as $icon) {
                if ($svgName === $icon) {
                    return true;
                }
            }
        }

        return false;
    }
}
