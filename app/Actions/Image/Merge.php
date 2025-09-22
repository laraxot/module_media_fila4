<?php

declare(strict_types=1);

namespace Modules\Media\Actions\Image;

use Intervention\Image\ImageManager as InterventionImageManager;
<<<<<<< HEAD
use Intervention\Image\Drivers\Gd\Driver as GdDriver;
=======
>>>>>>> e361059 (.)

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
        // Intervention Image v3: il costruttore richiede un DriverInterface
        $manager = new InterventionImageManager(new GdDriver());

        // Carica le immagini
        $image1 = $manager->read($path1);
        $image2 = $manager->read($path2);

        // Inserisce image2 sopra image1 (centrato) - v3 usa place()
        $image1->place($image2, 'center');
=======
        // Compatibile con Intervention Image v2 (Laravel 10):
        $manager = new InterventionImageManager(['driver' => 'gd']);

        // Carica le immagini
        $image1 = $manager->make($path1);
        $image2 = $manager->make($path2);

        // Inserisce image2 sopra image1 (centrato)
        $image1->insert($image2, 'center');
>>>>>>> e361059 (.)

        // Salva il risultato
        $image1->save($outputPath);

        return true;
    }
}
