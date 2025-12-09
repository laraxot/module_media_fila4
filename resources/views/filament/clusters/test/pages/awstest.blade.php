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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
=======
>>>>>>> 5200b63 (.)
=======
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
<?php

declare(strict_types=1);

?>
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
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
=======
>>>>>>> 5200b63 (.)
=======
=======
>>>>>>> 0a466ed (.)
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> f1c6d6e (.)
=======
>>>>>>> c8f3185 (.)
<x-filament::page>
=======
<x-fi<x-filament::page>
>>>>>>> e0ce06e (.)
    @php
        // Ensure $results is defined with a default value
        $results = $results ?? null;
    @endphp
    
    @if ($results)
        <div
            class="p-4 rounded-lg border mb-4 
    @if ($results['status'] === 'success') bg-success-50 border-success-200 @endif
    @if ($results['status'] === 'error') bg-danger-50 border-danger-200 @endif">
            <h3 class="font-bold mb-2">{{ $results['message'] }}</h3>

            @if (isset($results['details']))
                <div class="space-y-1">
                    @foreach ($results['details'] as $key => $value)
                        <div class="grid grid-cols-3">
                            <span class="text-gray-600">{{ $key }}:</span>
                            <span class="col-span-2">{{ $value }}</span>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    @else
        <div class="p-4 text-gray-500 text-center">
            {{ __('ui::aws_test.no_results') }}
        </div>
    @endif
</x-filament::page>
