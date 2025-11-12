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
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
 *
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 91c1d65 (.)
 *
=======
 * 
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
 *
=======
 * 
>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======
 *
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======
 *
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
 *
>>>>>>> 146bbc3 (.)
=======
 *
=======
 * 
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======
 *
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
 *
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
 *
>>>>>>> f5f7069 (.)
=======
 *
=======
 * 
>>>>>>> 0a466ed (.)
>>>>>>> c08a553 (.)
=======
=======
 *
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
 *
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
 *
>>>>>>> fa051fc (.)
=======
 *
>>>>>>> 22b1256 (.)
=======
 *
=======
 * 
>>>>>>> 0a466ed (.)
>>>>>>> 10ef3f7 (.)
=======
=======
 *
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
 *
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
 *
>>>>>>> 37b6a94 (.)
 * Definisce i metodi necessari per la generazione dei percorsi dei file media.
 */
interface PathGenerator
{
    /**
     * Genera il percorso per il file originale.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Media  $media  Il media per cui generare il percorso
=======
     * @param Media $media Il media per cui generare il percorso
>>>>>>> 5200b63 (.)
=======
     * @param  Media  $media  Il media per cui generare il percorso
>>>>>>> f41e45e (.)
     * @return string Il percorso generato
     */
    public function getPath(Media $media): string;

    /**
     * Genera il percorso per le conversioni.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Media  $media  Il media per cui generare il percorso
=======
     * @param Media $media Il media per cui generare il percorso
>>>>>>> 5200b63 (.)
=======
     * @param  Media  $media  Il media per cui generare il percorso
>>>>>>> f41e45e (.)
     * @return string Il percorso generato
     */
    public function getPathForConversions(Media $media): string;

    /**
     * Genera il percorso per le immagini responsive.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f41e45e (.)
     * @param  Media  $media  Il media per cui generare il percorso
     * @return string Il percorso generato
     */
    public function getPathForResponsiveImages(Media $media): string;
}
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
>>>>>>> b8fda23 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> c4425b4 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
} 
>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======
}
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 146bbc3 (.)
=======
=======
} 
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======
}
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> f5f7069 (.)
=======
=======
} 
>>>>>>> 0a466ed (.)
>>>>>>> c08a553 (.)
=======
=======
}
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> fa051fc (.)
=======
>>>>>>> 22b1256 (.)
=======
=======
} 
>>>>>>> 0a466ed (.)
>>>>>>> 10ef3f7 (.)
=======
=======
}
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> 37b6a94 (.)
