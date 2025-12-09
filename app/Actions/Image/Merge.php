<?php

declare(strict_types=1);

namespace Modules\Media\Actions\Image;

<<<<<<< HEAD
use Intervention\Image\Drivers\Gd\Driver as GdDriver;
use Intervention\Image\ImageManager as InterventionImageManager;
=======
use Intervention\Image\ImageManager as InterventionImageManager;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;
>>>>>>> 5200b63 (.)

class Merge
{
    /**
     * Unisce due immagini in una sola.
     *
<<<<<<< HEAD
     * @param  string  $path1  Percorso della prima immagine
     * @param  string  $path2  Percorso della seconda immagine
     * @param  string  $outputPath  Percorso di salvataggio
=======
     * @param string $path1 Percorso della prima immagine
     * @param string $path2 Percorso della seconda immagine
     * @param string $outputPath Percorso di salvataggio
     * @return bool
>>>>>>> 5200b63 (.)
     */
    public function handle(string $path1, string $path2, string $outputPath): bool
    {
        // Intervention Image v3: il costruttore richiede un DriverInterface
<<<<<<< HEAD
        $manager = new InterventionImageManager(new GdDriver);
=======
        $manager = new InterventionImageManager(new GdDriver());
>>>>>>> 5200b63 (.)

        // Carica le immagini
        $image1 = $manager->read($path1);
        $image2 = $manager->read($path2);

        // Inserisce image2 sopra image1 (centrato) - v3 usa place()
        $image1->place($image2, 'center');

        // Salva il risultato
        $image1->save($outputPath);

        return true;
    }
}
