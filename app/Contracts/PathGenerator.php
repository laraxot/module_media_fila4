<?php

declare(strict_types=1);

namespace Modules\Media\Contracts;

use Modules\Media\Models\Media;

/**
 * Interface PathGenerator
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
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
<<<<<<< HEAD
=======
 *
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
 *
=======
 * 
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
 *
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
 *
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
 *
>>>>>>> f1c6d6e (.)
 * Definisce i metodi necessari per la generazione dei percorsi dei file media.
 */
interface PathGenerator
{
    /**
     * Genera il percorso per il file originale.
     *
<<<<<<< HEAD
     * @param  Media  $media  Il media per cui generare il percorso
=======
     * @param Media $media Il media per cui generare il percorso
>>>>>>> 5200b63 (.)
     * @return string Il percorso generato
     */
    public function getPath(Media $media): string;

    /**
     * Genera il percorso per le conversioni.
     *
<<<<<<< HEAD
     * @param  Media  $media  Il media per cui generare il percorso
=======
     * @param Media $media Il media per cui generare il percorso
>>>>>>> 5200b63 (.)
     * @return string Il percorso generato
     */
    public function getPathForConversions(Media $media): string;

    /**
     * Genera il percorso per le immagini responsive.
     *
<<<<<<< HEAD
     * @param  Media  $media  Il media per cui generare il percorso
     * @return string Il percorso generato
     */
    public function getPathForResponsiveImages(Media $media): string;
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47a54fe (.)
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
<<<<<<< HEAD
=======
     * @param Media $media Il media per cui generare il percorso
     * @return string Il percorso generato
     */
    public function getPathForResponsiveImages(Media $media): string;
<<<<<<< HEAD
}
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
=======
} 
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
}
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
