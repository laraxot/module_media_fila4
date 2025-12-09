<?php

declare(strict_types=1);

namespace Modules\Media\Actions\Image;

use Intervention\Image\Drivers\Gd\Driver as GdDriver;
use Intervention\Image\ImageManager as InterventionImageManager;

class Merge
{
    /**
     * Unisce due immagini in una sola.
     *
     * @param  string  $path1  Percorso della prima immagine
     * @param  string  $path2  Percorso della seconda immagine
     * @param  string  $outputPath  Percorso di salvataggio
     */
    public function handle(string $path1, string $path2, string $outputPath): bool
    {
        // Intervention Image v3: il costruttore richiede un DriverInterface
        $manager = new InterventionImageManager(new GdDriver());

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
