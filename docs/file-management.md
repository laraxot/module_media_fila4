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
>>>>>>> 3f50d25 (.)
=======
>>>>>>> 2883a97 (.)
=======
>>>>>>> d2f9543 (.)
=======
>>>>>>> f81fb2b (.)
=======
>>>>>>> d44d947 (.)
=======
>>>>>>> a45d99f (.)
# Gestione dei File in 

## Panoramica

Questo documento descrive le best practice per la gestione dei file in , inclusi il caricamento, l'archiviazione e l'accesso ai file in diverse parti dell'applicazione.

## Struttura delle Directory

 utilizza una struttura organizzata per l'archiviazione dei file:
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7df6a71 (.)
=======
>>>>>>> 0caa3cf (.)
=======
>>>>>>> c9ef35c (.)
=======
>>>>>>> aa5e51a (.)
=======
>>>>>>> 3f50d25 (.)
=======
>>>>>>> 9ffe7a9 (.)
=======
>>>>>>> 22abc4a (.)
=======
>>>>>>> 2564093 (.)
=======
>>>>>>> 2883a97 (.)
=======
>>>>>>> 446a02b (.)
=======
>>>>>>> 09fde8f (.)
=======
>>>>>>> 667ff46 (.)
=======
>>>>>>> d2f9543 (.)
=======
>>>>>>> cb6b71e (.)
=======
>>>>>>> 494c61a (.)
=======
>>>>>>> 0eaf2b7 (.)
=======
>>>>>>> 17a939c (.)
=======
>>>>>>> 43e94ec (.)
=======
>>>>>>> f81fb2b (.)
=======
>>>>>>> 77b6d88 (.)
=======
>>>>>>> efdd063 (.)
=======
>>>>>>> 55b5531 (.)
=======
>>>>>>> 7a2d4da (.)
=======
>>>>>>> 776536a (.)
=======
>>>>>>> cec545b (.)
=======
>>>>>>> 71fafa8 (.)
=======
>>>>>>> d44d947 (.)
=======
>>>>>>> 71b97ae (.)
=======
>>>>>>> 5af33b9 (.)
=======
>>>>>>> 22d28e3 (.)
=======
>>>>>>> a45d99f (.)
# Gestione dei File in SaluteOra

## Panoramica

Questo documento descrive le best practice per la gestione dei file in SaluteOra, inclusi il caricamento, l'archiviazione e l'accesso ai file in diverse parti dell'applicazione.

## Struttura delle Directory

SaluteOra utilizza una struttura organizzata per l'archiviazione dei file:

```
/storage
  /app
    /public
      /avatars            # Avatar degli utenti
      /certifications     # Certificazioni dei dottori
      /documents          # Documenti generali
      /reports            # Report e documenti generati
      /temp               # File temporanei
```

## Caricamento dei File

### Utilizzo di Filament

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
Per i form amministrativi,  utilizza il componente `FileUpload` di Filament:
>>>>>>> 7df6a71 (.)
=======
>>>>>>> 0caa3cf (.)
=======
>>>>>>> c9ef35c (.)
=======
>>>>>>> aa5e51a (.)
=======
Per i form amministrativi,  utilizza il componente `FileUpload` di Filament:
>>>>>>> 3f50d25 (.)
=======
>>>>>>> 9ffe7a9 (.)
=======
>>>>>>> 22abc4a (.)
=======
>>>>>>> 2564093 (.)
=======
Per i form amministrativi,  utilizza il componente `FileUpload` di Filament:
>>>>>>> 2883a97 (.)
=======
>>>>>>> 446a02b (.)
=======
>>>>>>> 09fde8f (.)
=======
>>>>>>> 667ff46 (.)
=======
Per i form amministrativi,  utilizza il componente `FileUpload` di Filament:
>>>>>>> d2f9543 (.)
=======
>>>>>>> cb6b71e (.)
=======
>>>>>>> 494c61a (.)
=======
>>>>>>> 0eaf2b7 (.)
=======
>>>>>>> 17a939c (.)
=======
>>>>>>> 43e94ec (.)
=======
Per i form amministrativi,  utilizza il componente `FileUpload` di Filament:
>>>>>>> f81fb2b (.)
=======
>>>>>>> 77b6d88 (.)
=======
>>>>>>> efdd063 (.)
=======
>>>>>>> 55b5531 (.)
=======
>>>>>>> 7a2d4da (.)
=======
>>>>>>> 776536a (.)
=======
>>>>>>> cec545b (.)
=======
>>>>>>> 71fafa8 (.)
=======
Per i form amministrativi,  utilizza il componente `FileUpload` di Filament:
>>>>>>> d44d947 (.)
=======
>>>>>>> 71b97ae (.)
=======
>>>>>>> 5af33b9 (.)
=======
>>>>>>> 22d28e3 (.)
=======
Per i form amministrativi,  utilizza il componente `FileUpload` di Filament:
>>>>>>> a45d99f (.)
Per i form amministrativi, SaluteOra utilizza il componente `FileUpload` di Filament:

```php
use Filament\Forms\Components\FileUpload;

FileUpload::make('certifications')
    ->multiple()
    ->directory('certifications')
    ->acceptedFileTypes(['application/pdf'])
    ->maxSize(5120) // 5MB
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
=======
>>>>>>> 0caa3cf (.)
=======
>>>>>>> c9ef35c (.)
=======
>>>>>>> aa5e51a (.)
=======
>>>>>>> 9ffe7a9 (.)
=======
>>>>>>> 22abc4a (.)
=======
>>>>>>> 2564093 (.)
=======
>>>>>>> 446a02b (.)
=======
>>>>>>> 09fde8f (.)
=======
>>>>>>> 667ff46 (.)
=======
>>>>>>> cb6b71e (.)
=======
>>>>>>> 494c61a (.)
=======
>>>>>>> 0eaf2b7 (.)
=======
>>>>>>> 17a939c (.)
=======
>>>>>>> 43e94ec (.)
=======
>>>>>>> 77b6d88 (.)
=======
>>>>>>> efdd063 (.)
=======
>>>>>>> 55b5531 (.)
=======
>>>>>>> 7a2d4da (.)
=======
>>>>>>> 776536a (.)
=======
>>>>>>> cec545b (.)
=======
>>>>>>> 71fafa8 (.)
=======
>>>>>>> 71b97ae (.)
=======
>>>>>>> 5af33b9 (.)
=======
>>>>>>> 22d28e3 (.)
Per una documentazione dettagliata sull'utilizzo di `FileUpload`, consulta la [Gestione dei File Upload in Filament](/docs/filament-file-uploads.md).

### Utilizzo di Livewire

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3f50d25 (.)
=======
>>>>>>> 2883a97 (.)
=======
>>>>>>> d2f9543 (.)
=======
>>>>>>> f81fb2b (.)
=======
>>>>>>> d44d947 (.)
=======
>>>>>>> a45d99f (.)
Per una documentazione dettagliata sull'utilizzo di `FileUpload`, consulta la [Gestione dei File Upload in Filament](../../UI/docs/filament-file-uploads.md).

### Utilizzo di Livewire

Per i form frontend,  utilizza Livewire:
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7df6a71 (.)
=======
>>>>>>> 0caa3cf (.)
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
Per i form frontend, SaluteOra utilizza Livewire:

```php
public function save()
{
    $this->validate([
        'document' => 'required|file|mimes:pdf|max:5120',
    ]);

    $path = $this->document->store('documents', 'public');
    
    // Salvataggio del percorso nel database
    $this->model->update(['document_path' => $path]);
}
```

## Archiviazione dei File nel Database

### File Singoli

Per i campi che contengono un singolo file, utilizzare un campo stringa:

```php
Schema::table('users', function (Blueprint $table) {
    $table->string('avatar')->nullable();
});
```

### File Multipli

Per i campi che contengono più file, utilizzare un campo JSON:

```php
Schema::table('users', function (Blueprint $table) {
    $table->json('certifications')->nullable();
});
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
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la Mappatura dei Campi Database nel Modulo Patient (da creare se necessario).
>>>>>>> 7df6a71 (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
>>>>>>> 0caa3cf (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la Mappatura dei Campi Database nel Modulo Patient (da creare se necessario).
>>>>>>> 9348522 (.)
>>>>>>> c9ef35c (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
>>>>>>> aa5e51a (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la Mappatura dei Campi Database nel Modulo Patient (da creare se necessario).
>>>>>>> 3f50d25 (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
>>>>>>> 9ffe7a9 (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la Mappatura dei Campi Database nel Modulo Patient (da creare se necessario).
>>>>>>> 9348522 (.)
>>>>>>> 22abc4a (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
>>>>>>> 2564093 (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la Mappatura dei Campi Database nel Modulo Patient (da creare se necessario).
>>>>>>> 2883a97 (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
>>>>>>> 446a02b (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la Mappatura dei Campi Database nel Modulo Patient (da creare se necessario).
>>>>>>> 9348522 (.)
>>>>>>> 09fde8f (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
>>>>>>> 667ff46 (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la Mappatura dei Campi Database nel Modulo Patient (da creare se necessario).
>>>>>>> d2f9543 (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
>>>>>>> cb6b71e (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la Mappatura dei Campi Database nel Modulo Patient (da creare se necessario).
>>>>>>> 9348522 (.)
>>>>>>> 494c61a (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
>>>>>>> 0eaf2b7 (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la Mappatura dei Campi Database nel Modulo Patient (da creare se necessario).
>>>>>>> 9348522 (.)
>>>>>>> 17a939c (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
>>>>>>> 43e94ec (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la Mappatura dei Campi Database nel Modulo Patient (da creare se necessario).
>>>>>>> f81fb2b (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
>>>>>>> 77b6d88 (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la Mappatura dei Campi Database nel Modulo Patient (da creare se necessario).
>>>>>>> 9348522 (.)
>>>>>>> efdd063 (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
>>>>>>> 55b5531 (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la Mappatura dei Campi Database nel Modulo Patient (da creare se necessario).
>>>>>>> 9348522 (.)
>>>>>>> 7a2d4da (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
>>>>>>> 776536a (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la Mappatura dei Campi Database nel Modulo Patient (da creare se necessario).
>>>>>>> 9348522 (.)
>>>>>>> cec545b (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
>>>>>>> 71fafa8 (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la Mappatura dei Campi Database nel Modulo Patient (da creare se necessario).
>>>>>>> d44d947 (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
>>>>>>> 71b97ae (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la Mappatura dei Campi Database nel Modulo Patient (da creare se necessario).
>>>>>>> 9348522 (.)
>>>>>>> 5af33b9 (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md).
>>>>>>> 22d28e3 (.)
=======
Per una documentazione dettagliata sulla mappatura dei campi, consulta la Mappatura dei Campi Database nel Modulo Patient (da creare se necessario).
>>>>>>> a45d99f (.)

## Accesso ai File

### Generazione di URL

Per generare URL per i file archiviati:

```php
$url = Storage::url($path);
```

### Controllo degli Accessi

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
 implementa un sistema di controllo degli accessi per i file sensibili:
>>>>>>> 7df6a71 (.)
=======
>>>>>>> 0caa3cf (.)
=======
>>>>>>> c9ef35c (.)
=======
>>>>>>> aa5e51a (.)
=======
 implementa un sistema di controllo degli accessi per i file sensibili:
>>>>>>> 3f50d25 (.)
=======
>>>>>>> 9ffe7a9 (.)
=======
>>>>>>> 22abc4a (.)
=======
>>>>>>> 2564093 (.)
=======
 implementa un sistema di controllo degli accessi per i file sensibili:
>>>>>>> 2883a97 (.)
=======
>>>>>>> 446a02b (.)
=======
>>>>>>> 09fde8f (.)
=======
>>>>>>> 667ff46 (.)
=======
 implementa un sistema di controllo degli accessi per i file sensibili:
>>>>>>> d2f9543 (.)
=======
>>>>>>> cb6b71e (.)
=======
>>>>>>> 494c61a (.)
=======
>>>>>>> 0eaf2b7 (.)
=======
>>>>>>> 17a939c (.)
=======
>>>>>>> 43e94ec (.)
=======
 implementa un sistema di controllo degli accessi per i file sensibili:
>>>>>>> f81fb2b (.)
=======
>>>>>>> 77b6d88 (.)
=======
>>>>>>> efdd063 (.)
=======
>>>>>>> 55b5531 (.)
=======
>>>>>>> 7a2d4da (.)
=======
>>>>>>> 776536a (.)
=======
>>>>>>> cec545b (.)
=======
>>>>>>> 71fafa8 (.)
=======
 implementa un sistema di controllo degli accessi per i file sensibili:
>>>>>>> d44d947 (.)
=======
>>>>>>> 71b97ae (.)
=======
>>>>>>> 5af33b9 (.)
=======
>>>>>>> 22d28e3 (.)
=======
 implementa un sistema di controllo degli accessi per i file sensibili:
>>>>>>> a45d99f (.)
SaluteOra implementa un sistema di controllo degli accessi per i file sensibili:

```php
// In un controller
public function download($id)
{
    $document = Document::findOrFail($id);
    
    if (! auth()->user()->can('view', $document)) {
        abort(403);
    }
    
    return Storage::download($document->path);
}
```

## Gestione dei File Temporanei

Per i file che devono essere elaborati prima di essere archiviati permanentemente:

```php
$tempPath = $file->store('temp', 'public');

// Elaborazione del file...

// Spostamento nella posizione finale
Storage::move($tempPath, 'documents/' . $fileName);
```

## Eliminazione dei File

Quando un record viene eliminato, è importante eliminare anche i file associati:

```php
// Nel modello
protected static function booted()
{
    static::deleting(function ($model) {
        if ($model->avatar) {
            Storage::delete($model->avatar);
        }
        
        if ($model->certifications) {
            foreach ($model->certifications as $certification) {
                Storage::delete($certification);
            }
        }
    });
}
```

## Best Practices

1. **Validazione Rigorosa**: Validare sempre i file in base al tipo, dimensione e altri criteri di sicurezza
2. **Nomi File Sicuri**: Generare nomi file sicuri per evitare conflitti e problemi di sicurezza
3. **Controllo degli Accessi**: Implementare un controllo degli accessi rigoroso per i file sensibili
4. **Pulizia dei File Temporanei**: Implementare un job pianificato per eliminare i file temporanei non utilizzati
5. **Backup**: Includere i file caricati nei backup regolari del sistema

## Documentazione Correlata

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
>>>>>>> 0caa3cf (.)
=======
>>>>>>> c9ef35c (.)
=======
>>>>>>> aa5e51a (.)
=======
>>>>>>> 9ffe7a9 (.)
=======
>>>>>>> 22abc4a (.)
=======
>>>>>>> 2564093 (.)
=======
>>>>>>> 446a02b (.)
=======
>>>>>>> 09fde8f (.)
=======
>>>>>>> 667ff46 (.)
=======
>>>>>>> cb6b71e (.)
=======
>>>>>>> 494c61a (.)
=======
>>>>>>> 0eaf2b7 (.)
=======
>>>>>>> 17a939c (.)
=======
>>>>>>> 43e94ec (.)
=======
>>>>>>> 77b6d88 (.)
=======
>>>>>>> efdd063 (.)
=======
>>>>>>> 55b5531 (.)
=======
>>>>>>> 7a2d4da (.)
=======
>>>>>>> 776536a (.)
=======
>>>>>>> cec545b (.)
=======
>>>>>>> 71fafa8 (.)
=======
>>>>>>> 71b97ae (.)
=======
>>>>>>> 5af33b9 (.)
=======
>>>>>>> 22d28e3 (.)
- [Gestione dei File Upload in Filament](/docs/filament-file-uploads.md)
- [Mappatura dei Campi Database nel Modulo Patient](/laravel/Modules/Patient/docs/DATABASE_FIELD_MAPPING.md)
- [Migrazioni del Database](/docs/database-migrations.md)
- [Gestione degli Utenti](/docs/user-management.md)
- [Pattern di Ereditarietà dei Modelli](/docs/model-inheritance-patterns.md)
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
>>>>>>> c9ef35c (.)
=======
=======
>>>>>>> 3f50d25 (.)
=======
=======
>>>>>>> 22abc4a (.)
=======
>>>>>>> 2883a97 (.)
=======
=======
>>>>>>> 09fde8f (.)
=======
>>>>>>> d2f9543 (.)
=======
=======
>>>>>>> 494c61a (.)
=======
=======
>>>>>>> 17a939c (.)
=======
>>>>>>> f81fb2b (.)
=======
=======
>>>>>>> efdd063 (.)
=======
=======
>>>>>>> 7a2d4da (.)
=======
=======
>>>>>>> cec545b (.)
=======
>>>>>>> d44d947 (.)
=======
=======
>>>>>>> 5af33b9 (.)
=======
>>>>>>> a45d99f (.)
- [Gestione dei File Upload in Filament](../../UI/docs/filament-file-uploads.md)
- [Migrazioni del Database](../../Xot/docs/migration-standards.md)
- [Gestione degli Utenti](../../User/docs/user-management.md)
- [Pattern di Ereditarietà dei Modelli](../../Xot/docs/archive/model-inheritance-patterns.md)
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
>>>>>>> 7df6a71 (.)
=======
>>>>>>> 0caa3cf (.)
=======
>>>>>>> 9348522 (.)
>>>>>>> c9ef35c (.)
=======
>>>>>>> aa5e51a (.)
=======
>>>>>>> 8cdc78f (.)
=======
>>>>>>> 3f50d25 (.)
=======
>>>>>>> 960f18d (.)
=======
>>>>>>> 9ffe7a9 (.)
=======
>>>>>>> 9348522 (.)
>>>>>>> 22abc4a (.)
=======
>>>>>>> 2564093 (.)
=======
>>>>>>> 76d3921 (.)
=======
>>>>>>> 2883a97 (.)
=======
>>>>>>> 5e10cb4 (.)
=======
>>>>>>> 446a02b (.)
=======
>>>>>>> 9348522 (.)
>>>>>>> 09fde8f (.)
=======
>>>>>>> 667ff46 (.)
=======
>>>>>>> 60ceacf (.)
=======
>>>>>>> d2f9543 (.)
=======
>>>>>>> ffc92bd (.)
=======
>>>>>>> cb6b71e (.)
=======
>>>>>>> 9348522 (.)
>>>>>>> 494c61a (.)
=======
>>>>>>> 0eaf2b7 (.)
=======
>>>>>>> 4b6364d (.)
=======
>>>>>>> 9348522 (.)
>>>>>>> 17a939c (.)
=======
>>>>>>> 43e94ec (.)
=======
>>>>>>> e18a671 (.)
=======
>>>>>>> f81fb2b (.)
=======
>>>>>>> 1a36ecc (.)
=======
>>>>>>> 77b6d88 (.)
=======
>>>>>>> 9348522 (.)
>>>>>>> efdd063 (.)
=======
>>>>>>> 55b5531 (.)
=======
>>>>>>> 58646d5 (.)
=======
>>>>>>> 9348522 (.)
>>>>>>> 7a2d4da (.)
=======
>>>>>>> 776536a (.)
=======
>>>>>>> 232bbba (.)
=======
>>>>>>> 9348522 (.)
>>>>>>> cec545b (.)
=======
>>>>>>> 71fafa8 (.)
=======
>>>>>>> f6ae653 (.)
=======
>>>>>>> d44d947 (.)
=======
>>>>>>> e398f47 (.)
=======
>>>>>>> 71b97ae (.)
=======
>>>>>>> 9348522 (.)
>>>>>>> 5af33b9 (.)
=======
>>>>>>> 22d28e3 (.)
=======
>>>>>>> d6f82fc (.)
=======
>>>>>>> a45d99f (.)
=======
>>>>>>> b3403a9 (.)
