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
>>>>>>> 3f50d25 (.)
=======
>>>>>>> 9ffe7a9 (.)
=======
>>>>>>> 2883a97 (.)
=======
>>>>>>> 446a02b (.)
=======
>>>>>>> d2f9543 (.)
=======
>>>>>>> cb6b71e (.)
=======
>>>>>>> f81fb2b (.)
=======
>>>>>>> 77b6d88 (.)
=======
>>>>>>> d44d947 (.)
=======
>>>>>>> 71b97ae (.)
=======
>>>>>>> a45d99f (.)
=======
>>>>>>> a23d464 (.)
# ConvertVideoByConvertDataAction

## Panoramica
Azione per la conversione di video utilizzando FFMpeg e dati di conversione specificati.

## Caratteristiche
- Conversione video con FFMpeg
- Supporto per formati video personalizzati
- Monitoraggio del progresso della conversione
- Gestione delle code con QueueableAction
- Validazione dei dati di input

## Miglioramenti PHPStan Livello 9
Le seguenti modifiche sono state apportate per soddisfare PHPStan livello 9:

1. Tipizzazione stretta dei parametri
2. Gestione type-safe dei formati video
3. Validazione dei dati di input
4. Gestione corretta delle eccezioni
5. Implementazione delle interfacce FFMpeg

## Metodo Execute
```php
public function execute(ConvertData $data): string
```

### Parametri
- `$data`: Oggetto ConvertData contenente:
  - `disk`: Il disco di storage
  - `file`: Il file video da convertire
  - `format`: Il formato di output desiderato

### Return
- `string`: Il percorso del file convertito

### Eccezioni
- `\Exception`: Se il file non esiste o il nome del file convertito non è specificato

## Best Practices
1. Validare sempre i dati di input
2. Utilizzare formati video appropriati
3. Gestire il progresso della conversione
4. Implementare logging appropriato
5. Gestire le eccezioni FFMpeg

## Esempi di Utilizzo
```php
use Modules\Media\Actions\Video\ConvertVideoByConvertDataAction;
use Modules\Media\Datas\ConvertData;

$data = new ConvertData([
    'disk' => 'local',
    'file' => 'videos/input.mp4',
    'format' => 'mp4'
]);

$action = new ConvertVideoByConvertDataAction();
$convertedPath = $action->execute($data);
```

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
[Torna alla documentazione Media](/docs/modules/module_media.md#actions) 
=======
[Torna alla documentazione Media](../README.md) 
>>>>>>> 7df6a71 (.)
=======
[Torna alla documentazione Media](/docs/modules/module_media.md#actions) 
>>>>>>> 0caa3cf (.)
=======
=======
>>>>>>> 22abc4a (.)
=======
>>>>>>> 09fde8f (.)
=======
>>>>>>> 494c61a (.)
=======
>>>>>>> 17a939c (.)
=======
>>>>>>> efdd063 (.)
=======
>>>>>>> 7a2d4da (.)
=======
>>>>>>> cec545b (.)
=======
>>>>>>> 5af33b9 (.)
[Torna alla documentazione Media](/docs/modules/module_media.md#actions) 
=======
[Torna alla documentazione Media](../README.md) 
>>>>>>> 9348522 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c9ef35c (.)
=======
[Torna alla documentazione Media](/docs/modules/module_media.md#actions) 
>>>>>>> aa5e51a (.)
=======
>>>>>>> 8cdc78f (.)
=======
[Torna alla documentazione Media](../README.md) 
>>>>>>> 3f50d25 (.)
=======
>>>>>>> 960f18d (.)
=======
[Torna alla documentazione Media](/docs/modules/module_media.md#actions) 
>>>>>>> 9ffe7a9 (.)
=======
>>>>>>> 22abc4a (.)
=======
[Torna alla documentazione Media](/docs/modules/module_media.md#actions) 
>>>>>>> 2564093 (.)
=======
>>>>>>> 76d3921 (.)
=======
[Torna alla documentazione Media](../README.md) 
>>>>>>> 2883a97 (.)
=======
>>>>>>> 5e10cb4 (.)
=======
[Torna alla documentazione Media](/docs/modules/module_media.md#actions) 
>>>>>>> 446a02b (.)
=======
>>>>>>> 09fde8f (.)
=======
[Torna alla documentazione Media](/docs/modules/module_media.md#actions) 
>>>>>>> 667ff46 (.)
=======
>>>>>>> 60ceacf (.)
=======
[Torna alla documentazione Media](../README.md) 
>>>>>>> d2f9543 (.)
=======
>>>>>>> ffc92bd (.)
=======
[Torna alla documentazione Media](/docs/modules/module_media.md#actions) 
>>>>>>> cb6b71e (.)
=======
>>>>>>> 494c61a (.)
=======
[Torna alla documentazione Media](/docs/modules/module_media.md#actions) 
>>>>>>> 0eaf2b7 (.)
=======
>>>>>>> 4b6364d (.)
=======
>>>>>>> 17a939c (.)
=======
[Torna alla documentazione Media](/docs/modules/module_media.md#actions) 
>>>>>>> 43e94ec (.)
=======
>>>>>>> e18a671 (.)
=======
[Torna alla documentazione Media](../README.md) 
>>>>>>> f81fb2b (.)
=======
>>>>>>> 1a36ecc (.)
=======
[Torna alla documentazione Media](/docs/modules/module_media.md#actions) 
>>>>>>> 77b6d88 (.)
=======
>>>>>>> efdd063 (.)
=======
[Torna alla documentazione Media](/docs/modules/module_media.md#actions) 
>>>>>>> 55b5531 (.)
=======
>>>>>>> 58646d5 (.)
=======
>>>>>>> 7a2d4da (.)
=======
[Torna alla documentazione Media](/docs/modules/module_media.md#actions) 
>>>>>>> 776536a (.)
=======
>>>>>>> 232bbba (.)
=======
>>>>>>> cec545b (.)
=======
[Torna alla documentazione Media](/docs/modules/module_media.md#actions) 
>>>>>>> 71fafa8 (.)
=======
>>>>>>> f6ae653 (.)
=======
[Torna alla documentazione Media](../README.md) 
>>>>>>> d44d947 (.)
=======
>>>>>>> e398f47 (.)
=======
[Torna alla documentazione Media](/docs/modules/module_media.md#actions) 
>>>>>>> 71b97ae (.)
=======
>>>>>>> 5af33b9 (.)
=======
[Torna alla documentazione Media](/docs/modules/module_media.md#actions) 
>>>>>>> 22d28e3 (.)
=======
>>>>>>> d6f82fc (.)
=======
[Torna alla documentazione Media](../README.md) 
>>>>>>> a45d99f (.)
=======
>>>>>>> b3403a9 (.)
=======
[Torna alla documentazione Media](/docs/modules/module_media.md#actions) 
>>>>>>> a23d464 (.)
=======
>>>>>>> 53e059b (.)
