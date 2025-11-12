<?php

declare(strict_types=1);

namespace Modules\Media\Actions\Image;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Intervention\Image\Drivers\Gd\Driver as GdDriver;
use Intervention\Image\ImageManager as InterventionImageManager;
=======
=======
>>>>>>> 492b8f5 (.)
use Intervention\Image\ImageManager as InterventionImageManager;
=======
>>>>>>> 9359fe7 (.)
use Intervention\Image\Drivers\Gd\Driver as GdDriver;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> e361059 (.)
>>>>>>> 9932c65 (.)
=======
use Intervention\Image\Drivers\Gd\Driver as GdDriver;
>>>>>>> 91d10e9 (.)
=======
=======
>>>>>>> c9ef35c (.)
=======
>>>>>>> 8b93fd8 (.)
use Intervention\Image\Drivers\Gd\Driver as GdDriver;
=======
use Intervention\Image\ImageManager as InterventionImageManager;
>>>>>>> c14635e (.)
<<<<<<< HEAD
>>>>>>> b1b659d (.)
=======
=======
use Intervention\Image\ImageManager as InterventionImageManager;
>>>>>>> 9348522 (.)
<<<<<<< HEAD
>>>>>>> c9ef35c (.)
=======
=======
use Intervention\Image\Drivers\Gd\Driver as GdDriver;
>>>>>>> 5a393f1 (.)
>>>>>>> 8b93fd8 (.)
=======
use Intervention\Image\ImageManager as InterventionImageManager;
<<<<<<< HEAD
use Intervention\Image\Drivers\Gd\Driver as GdDriver;
<<<<<<< HEAD
>>>>>>> aa5e51a (.)
=======
=======
>>>>>>> 6144976 (.)
>>>>>>> f10d8e1 (.)
=======
>>>>>>> 16fa8f8 (.)

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
>>>>>>> f10d8e1 (.)
=======
>>>>>>> 16fa8f8 (.)
=======
>>>>>>> 492b8f5 (.)
        // Intervention Image v3: il costruttore richiede un DriverInterface
<<<<<<< HEAD
        $manager = new InterventionImageManager(new GdDriver);
=======
        $manager = new InterventionImageManager(new GdDriver());
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
=======
        // Compatibile con Intervention Image v2 (Laravel 10):
        $manager = new InterventionImageManager(['driver' => 'gd']);
>>>>>>> 6144976 (.)
>>>>>>> f10d8e1 (.)
=======
>>>>>>> 16fa8f8 (.)

        // Carica le immagini
        $image1 = $manager->read($path1);
        $image2 = $manager->read($path2);

        // Inserisce image2 sopra image1 (centrato) - v3 usa place()
        $image1->place($image2, 'center');
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> b1b659d (.)
=======
>>>>>>> c9ef35c (.)
=======
>>>>>>> 8b93fd8 (.)
=======
=======
>>>>>>> 9348522 (.)
        // Compatibile con Intervention Image v2 (Laravel 10):
        $manager = new InterventionImageManager(['driver' => 'gd']);
=======
        // Intervention Image v3: il costruttore richiede un DriverInterface
        $manager = new InterventionImageManager(new GdDriver());
>>>>>>> aa5e51a (.)

        // Carica le immagini
        $image1 = $manager->read($path1);
        $image2 = $manager->read($path2);

<<<<<<< HEAD
        // Inserisce image2 sopra image1 (centrato)
        $image1->insert($image2, 'center');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e361059 (.)
=======
>>>>>>> 91d10e9 (.)
=======
>>>>>>> c14635e (.)
>>>>>>> b1b659d (.)
=======
>>>>>>> c14635e (.)
=======
>>>>>>> 9348522 (.)
<<<<<<< HEAD
>>>>>>> c9ef35c (.)
=======
=======
>>>>>>> 5a393f1 (.)
>>>>>>> 8b93fd8 (.)
=======
        // Inserisce image2 sopra image1 (centrato) - v3 usa place()
        $image1->place($image2, 'center');
>>>>>>> aa5e51a (.)
=======
        // Inserisce image2 sopra image1 (centrato)
        $image1->insert($image2, 'center');
>>>>>>> 6144976 (.)
>>>>>>> f10d8e1 (.)
=======
>>>>>>> 16fa8f8 (.)
=======
=======
>>>>>>> 9359fe7 (.)
>>>>>>> 492b8f5 (.)

        // Salva il risultato
        $image1->save($outputPath);

        return true;
    }
}
