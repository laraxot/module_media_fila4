<?php

declare(strict_types=1);

namespace Modules\Media\Http\Livewire\Card\Video;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use Modules\Xot\Actions\GetViewAction;

/**
 * Class Clip.
 */
class Clip extends Component
{
    public string $tpl = 'edit';

    public Model $model;

    /**
     * Undocumented variable.
     *
     * @var array
     */
    /** @var array<string, string> */
    protected $listeners = [
        'updateDataFromModal' => 'updateDataFromModal',
    ];

    /**
     * Undocumented function.
     */
    public function mount(Model $model): void
    {
        $this->model = $model;
    }

    /**
     * Undocumented function.
     */
    public function render(): View
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }

    /**
     * Undocumented function.
     */
    public function editClip(): void
    {
        $data = $this->model->toArray();
        $this->dispatch('showModal', ['editClip', $data]);
    }

    /**
     * Undocumented function.
     */
    public function updateDataFromModal(string $id, array $data): void
    {
        if ($id !== 'editClip') {
            return;
        }

        if ($data['id'] !== $this->model->getKey()) {
            return;
        }

        // dddx(['data'=>$data,'model'=>$this->model]);
        /** @var array<string, string> */
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
        $up = collect($data)->only(['title', 'subtitle'])->all();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 1d21a10 (.)
        $up = collect($data)->only(['title', 'subtitle'])->all();
=======
        $up = collect($data)
            ->only(['title', 'subtitle'])
            ->all();
>>>>>>> a12f125f4a (.)
=======
        $up = collect($data)->only(['title', 'subtitle'])->all();
>>>>>>> b93ef594b4 (.)
=======
        $up = collect($data)
            ->only(['title', 'subtitle'])
            ->all();
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $up = collect($data)->only(['title', 'subtitle'])->all();
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 98c37f4 (.)
        $up = collect($data)->only(['title', 'subtitle'])->all();
=======
=======
        $up = collect($data)->only(['title', 'subtitle'])->all();
=======
>>>>>>> 877e05f (.)
=======
        $up = collect($data)->only(['title', 'subtitle'])->all();
=======
>>>>>>> 054dfa6 (.)
        $up = collect($data)
            ->only(['title', 'subtitle'])
            ->all();
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
        $up = collect($data)->only(['title', 'subtitle'])->all();
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
        $up = collect($data)->only(['title', 'subtitle'])->all();
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
        $up = collect($data)->only(['title', 'subtitle'])->all();
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 877e05f (.)
=======
=======
        $up = collect($data)->only(['title', 'subtitle'])->all();
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======
        $up = collect($data)->only(['title', 'subtitle'])->all();
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
        $up = collect($data)->only(['title', 'subtitle'])->all();
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 054dfa6 (.)

        $this->model->update($up);
        $this->model->refresh();
    }
}
