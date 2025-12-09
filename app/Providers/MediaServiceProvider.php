<?php

declare(strict_types=1);

namespace Modules\Media\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;

class MediaServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Media';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;
<<<<<<< HEAD
=======

<<<<<<< HEAD
<<<<<<< HEAD
    
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
=======
    public function boot(): void
    {
        parent::boot();
        // BladeService::registerComponents($this->module_dir.'/../View/Components', 'Modules\\Media');
    }
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
    
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
}
