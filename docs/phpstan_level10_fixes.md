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
=======
>>>>>>> 446bc61 (.)
=======
>>>>>>> 1a0067b (.)
=======
>>>>>>> 3f50d25 (.)
=======
>>>>>>> 9ffe7a9 (.)
=======
>>>>>>> 29d7386 (.)
=======
=======
>>>>>>> 07b5575 (.)
=======
>>>>>>> 76e8f34 (.)
=======
>>>>>>> 2883a97 (.)
=======
>>>>>>> 446a02b (.)
=======
>>>>>>> e938c00 (.)
=======
=======
>>>>>>> 517d97d (.)
=======
>>>>>>> c3b81ef (.)
=======
>>>>>>> d2f9543 (.)
=======
>>>>>>> cb6b71e (.)
=======
>>>>>>> 9a54a67 (.)
=======
=======
>>>>>>> 25df7cb (.)
=======
>>>>>>> aa78a92 (.)
=======
>>>>>>> 3295fed (.)
=======
=======
>>>>>>> 546e226 (.)
=======
>>>>>>> 7623488 (.)
=======
>>>>>>> f81fb2b (.)
=======
>>>>>>> 77b6d88 (.)
=======
>>>>>>> 52f215e (.)
=======
=======
>>>>>>> 266c399 (.)
=======
>>>>>>> dbad69d (.)
=======
>>>>>>> f9883a0 (.)
=======
=======
>>>>>>> c28b613 (.)
=======
>>>>>>> 1cb2428 (.)
=======
>>>>>>> 897507e (.)
=======
=======
>>>>>>> 5af4d81 (.)
=======
>>>>>>> 3a7cb0c (.)
=======
>>>>>>> d44d947 (.)
=======
>>>>>>> 71b97ae (.)
=======
>>>>>>> d37983b (.)
=======
=======
>>>>>>> 49268f4 (.)
=======
>>>>>>> b4ee9be (.)
=======
>>>>>>> a45d99f (.)
=======
>>>>>>> a23d464 (.)
=======
>>>>>>> 6752b49 (.)
# Correzioni PHPStan Livello 10 - Modulo Media

> **Collegamento globale:** Per le strategie generali e le best practices sulla risoluzione dei conflitti git, vedi [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md).

Questo documento traccia gli errori PHPStan di livello 10 identificati nel modulo Media e le relative soluzioni implementate.

## Errori Identificati

### 1. Uso del tipo mixed per risorsa di file in VideoStream.php

```php
private mixed $stream; // File stream resource
```

**Problema**: Utilizzo del tipo `mixed` per la proprietà `$stream` che rappresenta una risorsa di file. In PHP, le risorse hanno un tipo specifico che non può essere correttamente rappresentato come scalare o oggetto.

**Soluzione**:
1. Utilizzato un'annotazione PHPDoc per specificare il tipo `resource|null` e inizializzato la proprietà a `null`:
   ```php
   /** @var resource|null */
   private $stream = null; // File stream resource
   ```

   Questo approccio è necessario perché PHP non supporta direttamente il tipo `resource` come tipo di dichiarazione, ma PHPStan può comprenderlo attraverso l'annotazione PHPDoc.

### 2. Altri problemi di tipo in SubtitleService.php

Il file `SubtitleService.php` contiene un'annotazione PHPDoc con tipi complessi che potrebbero generare errori a livello 10:

```php
* @return (float|int|mixed|string)[][]
* @psalm-return list{0?: array{sentence_i: int<0, max>, item_i: int<0, max>, start: float|int, end: float|int, time: string, text: mixed},...}
```

**Problema**: L'uso di `mixed` e tipizzazioni complesse può rendere difficile per PHPStan analizzare correttamente il codice.

**Soluzione da implementare**:
1. Rivedere e semplificare le tipizzazioni quando possibile
2. Sostituire i tipi `mixed` con tipi più specifici in base al contesto

### 3. Proprietà con tipo mixed in Media.php

Il modello `Media.php` contiene diverse proprietà documentate con tipo `mixed`:

```php
* @property mixed $extension
* @property mixed $human_readable_size
* @property mixed $original_url
* @property mixed $preview_url
```

**Soluzione da implementare**:
1. Specificare tipi più precisi per queste proprietà in base ai valori effettivi che possono assumere

### 4. Errori con le API fluenti di FFMpeg in azioni di conversione video

**Problema**: Le classi `ConvertVideoByMediaConvertAction` e `ConvertVideoByConvertDataAction` presentavano errori PHPStan relativi all'utilizzo dell'API fluente di FFMpeg, in particolare:
- `Call to an undefined method ProtoneMedia\LaravelFFMpeg\Drivers\PHPFFMpeg::inFormat()`
- `Call to an undefined method ProtoneMedia\LaravelFFMpeg\Drivers\PHPFFMpeg::save()` o `Cannot call method save() on mixed`

**Soluzione implementata**:
1. Sostituzione del metodo `inFormat()` problematico
2. Istanziazione esplicita dell'oggetto formato prima di usarlo:
   ```php
   // Instanziamo il formato prima di usarlo
   $formatInstance = new $format();
   
   // @phpstan-ignore-next-line
   FFMpeg::fromDisk($data->disk)
       ->open($data->file)
       ->export()
       // ...
       // Utilizziamo il formato istanziato come parametro
       ->save($file_new, $formatInstance);
   ```

**Motivazione**:
- L'API di Laravel-FFMpeg utilizza una catena di metodi fluenti che PHPStan non riesce a seguire correttamente
- L'istanziazione esplicita del formato e il passaggio diretto al metodo `save()` fornisce a PHPStan un tipo concreto che può analizzare
- L'annotazione `@phpstan-ignore-next-line` è utilizzata solo dove strettamente necessario per gestire le limitazioni dell'analisi statica su API fluenti complesse

Questa soluzione mantiene la funzionalità originale migliorando al contempo la chiarezza del codice e la compatibilità con l'analisi statica di PHPStan a livello 10.

### 5. Risoluzione dei conflitti di merge nei file del modulo Media

**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
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
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
=======
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 7df6a71 (.)
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
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
=======
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 91c1d65 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 37a2da6 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 98c37f4 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> a80d398 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 0caa3cf (.)
=======
>>>>>>> 47a54fe (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> b1b659d (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 446bc61 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 1a0067b (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 3f50d25 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
=======
>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
>>>>>>> 7ea0764 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> e0a46f3 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 9ffe7a9 (.)
=======
>>>>>>> 1d21a10 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 29d7386 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 07b5575 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 76e8f34 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 2883a97 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
=======
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
>>>>>>> 89eb716 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> af40dd6 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 446a02b (.)
=======
>>>>>>> b8fda23 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> e938c00 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 517d97d (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> c3b81ef (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> d2f9543 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
=======
>>>>>>> 0a466ed (.)
>>>>>>> c08a553 (.)
=======
>>>>>>> 760b37c (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 3f513a2 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> cb6b71e (.)
=======
>>>>>>> 9a4eacb (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 9a54a67 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 25df7cb (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> aa78a92 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 3295fed (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 546e226 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 7623488 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> f81fb2b (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
=======
>>>>>>> 0a466ed (.)
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> 91c1d65 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> c90879e (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 77b6d88 (.)
=======
>>>>>>> c4425b4 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 52f215e (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 266c399 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> dbad69d (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> f9883a0 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> c28b613 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 1cb2428 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 897507e (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 5af4d81 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 3a7cb0c (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> d44d947 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 71b97ae (.)
=======
>>>>>>> ece6f0a (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> d37983b (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 49268f4 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> b4ee9be (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> a45d99f (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> a23d464 (.)
=======
>>>>>>> da2a819 (.)
=======
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git (`=======`, `>>>>>>>`, ecc.). Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
**Problema**: Diversi file del modulo Media contenevano conflitti di merge non risolti, indicati da marcatori git . Questi conflitti impedivano la corretta esecuzione del codice e causavano errori di sintassi.
>>>>>>> 6752b49 (.)

**Soluzione implementata**:
1. Analisi sistematica dei conflitti di merge in ciascun file
2. Risoluzione dei conflitti mantenendo la versione più completa e documentata del codice
3. Verifica della coerenza delle modifiche con le best practices del progetto
4. Backup dei file originali prima delle modifiche per sicurezza

**File corretti**:
- `TemporaryUploadPathGenerator.php`
- `ConvertVideoByMediaConvertAction.php`
- `ConvertVideoByConvertDataAction.php`
- `MediaRelationManager.php`
- `PHPSTAN_LEVEL10_FIXES.md`

## Principi Applicati

1. **Uso appropriato di PHPDoc per tipi speciali**: Quando PHP non supporta nativamente un tipo (come `resource`), utilizzare annotazioni PHPDoc per fornire informazioni di tipo a PHPStan.
2. **Inizializzazione appropriata**: Inizializzare le proprietà con valori appropriati per il loro tipo.
3. **Documentazione chiara**: Fornire commenti esplicativi che indicano lo scopo e il tipo atteso delle proprietà.

## Prossimi Passi

1. Completare la revisione di `SubtitleService.php` per risolvere i problemi di tipo complessi.
2. Aggiornare il modello `Media.php` per specificare tipi più precisi per le proprietà attualmente documentate come `mixed`.
3. Eseguire l'analisi PHPStan a livello 10 per verificare che le correzioni risolvano effettivamente gli errori.
4. Documentare pattern e soluzioni standard per gestire risorse di file e altri tipi speciali nel progetto.

---

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
>>>>>>> ece6f0a (.)
=======
>>>>>>> da2a819 (.)
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 7df6a71 (.)
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
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../project_docs/git_conflict_resolution.md). 
>>>>>>> 0a466ed (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06bb10d (.)
=======
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 37a2da6 (.)
>>>>>>> 98c37f4 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> a80d398 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 0caa3cf (.)
=======
>>>>>>> 47a54fe (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> b1b659d (.)
=======
>>>>>>> 8cdc78f (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 1999eb3 (.)
>>>>>>> 446bc61 (.)
=======
>>>>>>> 36d5713 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 1a0067b (.)
=======
>>>>>>> 70517e3 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 3f50d25 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../project_docs/git_conflict_resolution.md). 
>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 37a2da6 (.)
>>>>>>> 7ea0764 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 960f18d (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 9ffe7a9 (.)
=======
>>>>>>> 1d21a10 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 29d7386 (.)
=======
>>>>>>> 76d3921 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 1999eb3 (.)
>>>>>>> 07b5575 (.)
=======
>>>>>>> 77463ee (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 76e8f34 (.)
=======
>>>>>>> 71435ff (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 2883a97 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../project_docs/git_conflict_resolution.md). 
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 37a2da6 (.)
>>>>>>> 89eb716 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> af40dd6 (.)
=======
>>>>>>> 5e10cb4 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 446a02b (.)
=======
>>>>>>> b8fda23 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> e938c00 (.)
=======
>>>>>>> 60ceacf (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 1999eb3 (.)
>>>>>>> 517d97d (.)
=======
>>>>>>> 21f8a63 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> c3b81ef (.)
=======
>>>>>>> 9a7a2fa (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> d2f9543 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../project_docs/git_conflict_resolution.md). 
>>>>>>> 0a466ed (.)
>>>>>>> c08a553 (.)
=======
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 37a2da6 (.)
>>>>>>> 760b37c (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 3f513a2 (.)
=======
>>>>>>> ffc92bd (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> cb6b71e (.)
=======
>>>>>>> 9a4eacb (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 9a54a67 (.)
=======
>>>>>>> 4b6364d (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 1999eb3 (.)
>>>>>>> 25df7cb (.)
=======
>>>>>>> 3de101c (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> aa78a92 (.)
=======
>>>>>>> 73b0eea (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 3295fed (.)
=======
>>>>>>> e18a671 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 1999eb3 (.)
>>>>>>> 546e226 (.)
=======
>>>>>>> 2d01f8a (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 7623488 (.)
=======
>>>>>>> 2819c8f (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> f81fb2b (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../project_docs/git_conflict_resolution.md). 
>>>>>>> 0a466ed (.)
>>>>>>> 10ef3f7 (.)
=======
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> c90879e (.)
=======
>>>>>>> 1a36ecc (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 77b6d88 (.)
=======
>>>>>>> c4425b4 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 52f215e (.)
=======
>>>>>>> 58646d5 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 1999eb3 (.)
>>>>>>> 266c399 (.)
=======
>>>>>>> 62cc523 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> dbad69d (.)
=======
>>>>>>> 4ff7d22 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> f9883a0 (.)
=======
>>>>>>> 232bbba (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 1999eb3 (.)
>>>>>>> c28b613 (.)
=======
>>>>>>> 5d803de (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 1cb2428 (.)
=======
>>>>>>> 3fe0fe2 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 897507e (.)
=======
>>>>>>> f6ae653 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 1999eb3 (.)
>>>>>>> 5af4d81 (.)
=======
>>>>>>> acfdc54 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 3a7cb0c (.)
=======
>>>>>>> 42a9eaf (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> d44d947 (.)
=======
>>>>>>> e398f47 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 71b97ae (.)
=======
>>>>>>> ece6f0a (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> d37983b (.)
=======
>>>>>>> d6f82fc (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 1999eb3 (.)
>>>>>>> 49268f4 (.)
=======
>>>>>>> 17005cd (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> b4ee9be (.)
=======
>>>>>>> 4d8cf17 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> a45d99f (.)
=======
>>>>>>> b3403a9 (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> a23d464 (.)
=======
>>>>>>> da2a819 (.)
=======
>>>>>>> 53e059b (.)
=======
> **Collegamento globale:** Questa documentazione locale dettaglia i casi concreti e le decisioni architetturali adottate nel modulo Media. Per le strategie generali e le best practices, consulta sempre anche la documentazione globale in [docs/git_conflict_resolution.md](../../../../docs/git_conflict_resolution.md). 
>>>>>>> 6752b49 (.)
