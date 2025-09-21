<?php

declare(strict_types=1);

namespace Modules\Media\Contracts;

use Modules\Media\Models\Media;

/**
 * Interface PathGenerator
<<<<<<< HEAD
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
 * 
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
 * Definisce i metodi necessari per la generazione dei percorsi dei file media.
 */
interface PathGenerator
{
    /**
     * Genera il percorso per il file originale.
     *
     * @param Media $media Il media per cui generare il percorso
     * @return string Il percorso generato
     */
    public function getPath(Media $media): string;

    /**
     * Genera il percorso per le conversioni.
     *
     * @param Media $media Il media per cui generare il percorso
     * @return string Il percorso generato
     */
    public function getPathForConversions(Media $media): string;

    /**
     * Genera il percorso per le immagini responsive.
     *
     * @param Media $media Il media per cui generare il percorso
     * @return string Il percorso generato
     */
    public function getPathForResponsiveImages(Media $media): string;
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
} 
>>>>>>> a12f125f4a (.)
=======
}
>>>>>>> b93ef594b4 (.)
=======
} 
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
