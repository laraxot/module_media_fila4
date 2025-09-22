<?php

declare(strict_types=1);

namespace Modules\Media\Actions\Image;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Intervention\Image\Drivers\Gd\Driver as GdDriver;
=======
use Intervention\Image\ImageManager as InterventionImageManager;
>>>>>>> c14635e (.)
=======
use Intervention\Image\ImageManager as InterventionImageManager;
>>>>>>> 9348522 (.)
=======
use Intervention\Image\Drivers\Gd\Driver as GdDriver;
>>>>>>> 5a393f1 (.)

class Merge
{
    /**
     * Unisce due immagini in una sola.
     *
     * @param string $path1 Percorso della prima immagine
     * @param string $path2 Percorso della seconda immagine
     * @param string $outputPath Percorso di salvataggio
     * @return bool
     */
    public function handle(string $path1, string $path2, string $outputPath): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 9348522 (.)
        // Compatibile con Intervention Image v2 (Laravel 10):
        $manager = new InterventionImageManager(['driver' => 'gd']);

        // Carica le immagini
        $image1 = $manager->make($path1);
        $image2 = $manager->make($path2);

        // Inserisce image2 sopra image1 (centrato)
        $image1->insert($image2, 'center');
<<<<<<< HEAD
>>>>>>> c14635e (.)
=======
>>>>>>> 9348522 (.)
=======
>>>>>>> 5a393f1 (.)

        // Salva il risultato
        $image1->save($outputPath);

        return true;
    }
}
