<?php

declare(strict_types=1);

namespace Modules\Media\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\Xot\Actions\GetViewAction;
use Modules\Xot\Datas\XotData;
use Webmozart\Assert\Assert;

/**
 * Class VideoPlayer.
 */
class VideoPlayer extends Component
{
    public string $driver;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $mp4Src,
        public int $currentTime,
<<<<<<< HEAD
<<<<<<< HEAD
        ?string $driver = null,
    ) {
        $xot = XotData::make();
        Assert::string($driver ??= $xot->video_player, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        null|string $driver = null,
    ) {
        $xot = XotData::make();
        Assert::string($driver ??= $xot->video_player, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
=======
=======
=======
<<<<<<< HEAD
        $xot = XotData::make();
        Assert::string($driver ??= $xot->video_player, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
=======
>>>>>>> origin/develop
>>>>>>> 47a54fe (.)
    public function __construct(public string $mp4Src, public int $currentTime, ?string $driver = null)
    {
        $xot = XotData::make();
        Assert::string($driver ??= $xot->video_player);
<<<<<<< HEAD
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $xot = XotData::make();
        Assert::string($driver ??= $xot->video_player, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
        ?string $driver = null,
    ) {
        $xot = XotData::make();
        Assert::string($driver ??= $xot->video_player, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> f41e45e (.)

        $this->driver = $driver;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View
     */
    public function render()
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->driver);

        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
