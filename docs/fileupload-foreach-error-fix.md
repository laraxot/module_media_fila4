<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
# FileUpload foreach Error Fix - Internal Server Error

## Problema Identificato

### Errore
```
ErrorException
foreach() argument must be of type array|object, string given
POST 127.0.0.1:8000
```

L'errore si verifica nel metodo `getUploadedFiles` di `Filament\Forms\Components\BaseFileUpload:740` quando il componente tenta di processare i file caricati durante la registrazione del paziente.

### Contesto dell'Errore
- **Widget**: `Modules\User\Filament\Widgets\RegistrationWidget`
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- **Resource**: `Modules\<nome modulo>\Filament\Resources\PatientResource`
>>>>>>> 7df6a71 (.)
=======
>>>>>>> 0caa3cf (.)
=======
>>>>>>> c9ef35c (.)
=======
>>>>>>> aa5e51a (.)
=======
- **Resource**: `Modules\<nome modulo>\Filament\Resources\PatientResource`
>>>>>>> 3f50d25 (.)
=======
>>>>>>> 9ffe7a9 (.)
=======
>>>>>>> 22abc4a (.)
=======
>>>>>>> 2564093 (.)
=======
- **Resource**: `Modules\<nome modulo>\Filament\Resources\PatientResource`
>>>>>>> 2883a97 (.)
=======
>>>>>>> 446a02b (.)
=======
>>>>>>> 09fde8f (.)
=======
>>>>>>> 667ff46 (.)
=======
- **Resource**: `Modules\<nome modulo>\Filament\Resources\PatientResource`
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
- **Resource**: `Modules\<nome modulo>\Filament\Resources\PatientResource`
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
- **Resource**: `Modules\SaluteOra\Filament\Resources\PatientResource`
- **Campi coinvolti**:
  - `data.health_card`
  - `data.identity_document`
  - `data.isee_certificate`
  - `data.pregnancy_certificate`

### Analisi della Causa

Il problema si trova nel metodo `getAttachmentsSchema()` di `XotBaseResource.php` alle linee 209-214:

```php
->formatStateUsing(function ($state,$set) use ($attachment) {
    $sessionFiles[] = $state;  // ❌ ERRORE: $sessionFiles non inizializzato
    $set($attachment, $sessionFiles);
})
```

**Problemi identificati**:

1. **Variabile non inizializzata**: `$sessionFiles` viene usata come array ma non è mai inizializzata
2. **Gestione stato inconsistente**: Il callback `afterStateUpdated` si aspetta un array ma può ricevere una stringa
3. **Serializzazione incorretta**: I percorsi dei file vengono salvati come stringhe nei dati del form, ma Filament si aspetta array di oggetti file

### Dati nel Request
Nel body della richiesta POST, i campi file contengono stringhe invece di array:
```json
{
    "pregnancy_certificate": "session-uploads/mUpLnRj0T2MZGrPNQzbWwDANe9vUFTqQEiQCZFPX/1751571155_test-file-pdf.pdf",
    "isee_certificate": "session-uploads/mUpLnRj0T2MZGrPNQzbWwDANe9vUFTqQEiQCZFPX/1751571150_test.pdf"
}
```

## Soluzione Implementata

### 1. Correzione del metodo `getAttachmentsSchema()`

```php
public static function getAttachmentsSchema(bool $multiple=true): array{
    $model = static::getModel();
    $attachments = $model::$attachments;
    $uuid = Str::uuid()->toString();
    $schema = [];
    
    foreach ($attachments as $attachment) {
        $schema[] = Forms\Components\FileUpload::make($attachment)
            ->disk('local')
            ->directory('documents/'.$attachment.'/'.$uuid)
            ->acceptedFileTypes(['application/pdf', 'image/jpeg', 'image/png', 'image/jpg'])
            ->maxSize(5120*2)
            ->required()
            ->multiple($multiple)
            ->preserveFilenames()
            ->columnSpanFull()
            ->getUploadedFileUsing(function ($file) {
                // Gestione sicura dei file caricati
                if (is_string($file)) {
                    return [$file];
                }
                if (is_array($file)) {
                    return $file;
                }
                return [];
            })
            ->afterStateUpdated(function ($state, Forms\Set $set) use ($attachment, $multiple) {
                if (!$state) return;
                
                // Normalizza sempre come array
                $files = is_array($state) ? $state : [$state];
                $sessionId = session()->getId();
                $sessionDir = "session-uploads/{$sessionId}";
                $sessionFiles = [];
                
                foreach ($files as $file) {
                    if ($file instanceof \Livewire\Features\SupportFileUploads\TemporaryUploadedFile) {
                        // Salva direttamente nella directory di sessione
                        $fileName = time() . '_' . $file->getClientOriginalName();
                        $sessionPath = $file->storeAs($sessionDir, $fileName, 'local');
                        $sessionFiles[] = $sessionPath;
                    } else {
                        // È già un percorso salvato
                        $sessionFiles[] = $file;
                    }
                }
                
                // Imposta il valore corretto in base al tipo
                $finalValue = $multiple ? $sessionFiles : ($sessionFiles[0] ?? null);
                $set($attachment, $finalValue);
            });
    }
    return $schema;
}
```

### 2. Aggiornamento del RegistrationWidget

Modifiche nel metodo `getFormFill()` per gestire correttamente i file:

```php
public function getFormFill(): array
{
    $model = $this->getFormModel();
    
    if ($model->exists) {
        try {
            $data = $model->toArray();
            
            // Gestione specifica per i file upload
            if (isset($model::$attachments)) {
                foreach ($model::$attachments as $attachment) {
                    if (isset($data[$attachment]) && is_string($data[$attachment])) {
                        // Converte stringa in array per compatibilità con FileUpload
                        $data[$attachment] = [$data[$attachment]];
                    }
                }
            }
            
            return $data;
        } catch (\Exception $e) {
            Log::warning("Errore in toArray() per modello {$this->model}: " . $e->getMessage());
            // Fallback logic...
        }
    }
    
    // Resto del metodo...
}
```

## Principi della Soluzione

### 1. Gestione Difensiva dei Tipi
- Sempre verificare il tipo di `$state` prima di processarlo
- Normalizzare i dati come array quando necessario
- Gestire gracefully i casi edge

### 2. Compatibilità con Filament
- Rispettare le aspettative di Filament sui tipi di dati
- Mantenere la struttura dei dati consistente
- Utilizzare i callback appropriati per ogni scenario

### 3. Debugging e Logging
- Aggiungere logging per tracking degli errori
- Implementare fallback sicuri
- Documentare edge cases identificati

## Testing della Soluzione

1. **Test Upload File**: Verificare che i file vengano caricati correttamente
2. **Test Persistenza**: Controllare che i file restino disponibili durante la navigazione del wizard
3. **Test Validazione**: Assicurarsi che la validazione funzioni correttamente
4. **Test Error Handling**: Verificare che gli errori vengano gestiti gracefully

## Prevenzione Futura

### 1. Linee Guida per FileUpload
- Sempre inizializzare le variabili array nei callback
- Usare type checking per i parametri $state
- Documentare il comportamento atteso dei callback

### 2. Pattern di Implementazione
```php
// ✅ Pattern corretto
->afterStateUpdated(function ($state, Forms\Set $set) use ($attachment, $multiple) {
    if (!$state) return;
    
    $files = is_array($state) ? $state : [$state];
    // Resto della logica...
})

// ❌ Pattern errato
->formatStateUsing(function ($state,$set) use ($attachment) {
    $sessionFiles[] = $state; // Variabile non inizializzata
    $set($attachment, $sessionFiles);
})
```

### 3. Testing Obbligatorio
- Test automatici per tutti i componenti FileUpload
- Validazione dei tipi di dati in input/output
- Test di integrazione con i wizard multi-step

## Riferimenti

- [Filament FileUpload Documentation](https://filamentphp.com/docs/3.x/forms/fields/file-upload)
- [Laravel File Upload Best Practices](https://laravel.com/docs/10.x/filesystem)
- [Modules/Xot/docs/fileupload-components.md](../laravel/Modules/Xot/docs/fileupload-components.md)
- [Modules/User/docs/registration-widget.md](../laravel/Modules/User/docs/registration-widget.md)

*Ultimo aggiornamento: 2025-01-03*
*Autore: AI Assistant*
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
*Versione: 1.0* 
=======
>>>>>>> 8cdc78f (.)
=======
*Versione: 1.0* 
>>>>>>> 3f50d25 (.)
=======
>>>>>>> 960f18d (.)
=======
*Versione: 1.0* 
>>>>>>> 9ffe7a9 (.)
=======
>>>>>>> 76d3921 (.)
=======
*Versione: 1.0* 
>>>>>>> 2883a97 (.)
=======
>>>>>>> 5e10cb4 (.)
=======
*Versione: 1.0* 
>>>>>>> 446a02b (.)
=======
>>>>>>> 60ceacf (.)
=======
*Versione: 1.0* 
>>>>>>> d2f9543 (.)
=======
>>>>>>> ffc92bd (.)
=======
*Versione: 1.0* 
>>>>>>> cb6b71e (.)
=======
>>>>>>> 4b6364d (.)
=======
>>>>>>> e18a671 (.)
=======
*Versione: 1.0* 
>>>>>>> f81fb2b (.)
=======
>>>>>>> 1a36ecc (.)
=======
*Versione: 1.0* 
>>>>>>> 77b6d88 (.)
=======
>>>>>>> 58646d5 (.)
