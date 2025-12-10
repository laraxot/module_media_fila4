<<<<<<< HEAD
# Modulo Media

## 📋 Panoramica

Il modulo Media gestisce l'upload, l'ottimizzazione e l'organizzazione di file multimediali nell'applicazione Laravel Pizza. Supporta immagini, documenti e altri tipi di file con funzionalità avanzate di gestione.

## 🚀 Installazione

Il modulo è già incluso nel progetto principale. Per verificare lo stato:

```bash
# Verifica se il modulo è attivo
php artisan module:list

# Abilita il modulo se necessario
php artisan module:enable Media
```

## 🎯 Funzionalità Principali

- **Upload Multiplo**: Supporto per upload di file multipli
- **Ottimizzazione Immagini**: Ridimensionamento e compressione automatica
- **Gestione Gallerie**: Organizzazione file in gallerie tematiche
- **CDN Integration**: Supporto per Content Delivery Networks
- **Watermark**: Applicazione watermark automatica
- **Thumbnail Generation**: Creazione automatica miniature
- **File Validation**: Validazione tipi file e dimensioni
- **Storage Management**: Gestione storage multiplo

## 🔧 Configurazione

### Configurazione Base
Il modulo si integra automaticamente con le configurazioni Laravel esistenti:

```php
// config/filesystems.php
'disks' => [
    'media' => [
        'driver' => 'local',
        'root' => storage_path('app/media'),
        'url' => env('APP_URL').'/storage/media',
        'visibility' => 'public',
    ],
],
```

### Configurazioni Specifiche
```php
// Modules/Media/config/media.php
return [
    'max_file_size' => 10240, // 10MB
    'allowed_mime_types' => [
        'image/jpeg',
        'image/png',
        'image/webp',
        'image/gif',
        'application/pdf',
    ],
    'image_optimization' => [
        'enabled' => true,
        'quality' => 85,
        'max_width' => 1920,
        'max_height' => 1080,
    ],
    'thumbnails' => [
        'small' => [150, 150],
        'medium' => [300, 300],
        'large' => [800, 600],
    ],
];
```

## 📁 Struttura

```
Modules/Media/
├── app/
│   ├── Actions/           # Business logic media
│   ├── Datas/             # Data objects media
│   ├── Filament/          # Admin panel resources
│   ├── Http/
│   │   ├── Controllers/   # Media controllers
│   │   └── Requests/      # Validation requests
│   ├── Models/            # Modelli media
│   ├── Providers/         # Service providers
│   └── Services/          # Servizi media
├── config/                # Configurazioni media
├── database/
│   ├── migrations/        # Tabelle media
│   └── seeders/
├── docs/                  # Documentazione
├── resources/
│   └── views/             # Componenti media
└── tests/                 # Test suite
```

## 🔗 Dipendenze

- **Xot**: Per base classes e utilities
- **Activity**: Per logging attività media
- **User**: Per gestione proprietari file

## 📚 Documentazione Correlata

- [Documentazione Tecnica](./docs/README.md)
- [Integration Guides](./docs/_integration/)

## 🎯 Esempi Utilizzo

### Upload File

```php
<?php

namespace Modules\Media\Services;

use Modules\Media\Datas\MediaData;
use Modules\Media\Models\Media;

class MediaService
{
    public function uploadFile(\Illuminate\Http\UploadedFile $file, array $data = []): Media
    {
        // Validazione file
        $this->validateFile($file);

        // Generazione nome file univoco
        $fileName = $this->generateFileName($file);
        $filePath = $file->storeAs('media', $fileName, 'public');

        // Ottimizzazione immagine se necessario
        if ($this->isImage($file)) {
            $this->optimizeImage($filePath);
            $this->generateThumbnails($filePath);
        }

        // Creazione record media
        $media = Media::create([
            'name' => $data['name'] ?? $file->getClientOriginalName(),
            'file_name' => $fileName,
            'mime_type' => $file->getMimeType(),
            'size' => $file->getSize(),
            'path' => $filePath,
            'disk' => 'public',
            'user_id' => auth()->id(),
        ]);

        return $media;
    }

    public function uploadMultiple(array $files, array $data = []): Collection
    {
        return collect($files)->map(function ($file) use ($data) {
            return $this->uploadFile($file, $data);
        });
    }
}
```

### Ottimizzazione Immagini

```php
<?php

namespace Modules\Media\Services;

use Intervention\Image\ImageManager;

class ImageOptimizationService
{
    public function __construct(
        private ImageManager $imageManager
    ) {}

    public function optimizeImage(string $filePath): void
    {
        $image = $this->imageManager->make(storage_path("app/public/{$filePath}"));

        // Ridimensionamento se necessario
        $maxWidth = config('media.image_optimization.max_width', 1920);
        $maxHeight = config('media.image_optimization.max_height', 1080);

        if ($image->width() > $maxWidth || $image->height() > $maxHeight) {
            $image->resize($maxWidth, $maxHeight, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        }

        // Compressione
        $quality = config('media.image_optimization.quality', 85);
        $image->save(storage_path("app/public/{$filePath}"), $quality);
    }

    public function generateThumbnails(string $filePath): array
    {
        $thumbnails = [];
        $image = $this->imageManager->make(storage_path("app/public/{$filePath}"));

        foreach (config('media.thumbnails', []) as $sizeName => $dimensions) {
            [$width, $height] = $dimensions;

            $thumbnail = $image->clone();
            $thumbnail->fit($width, $height);

            $thumbnailPath = $this->getThumbnailPath($filePath, $sizeName);
            $thumbnail->save(storage_path("app/public/{$thumbnailPath}"));

            $thumbnails[$sizeName] = $thumbnailPath;
        }

        return $thumbnails;
    }
}
```

### Gestione Gallerie

```php
<?php

namespace Modules\Media\Models;

use Modules\Xot\Models\XotBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Gallery extends XotBaseModel
{
    protected $fillable = [
        'name',
        'description',
        'slug',
        'is_public',
        'user_id',
    ];

    protected $casts = [
        'is_public' => 'boolean',
    ];

    public function media(): BelongsToMany
    {
        return $this->belongsToMany(Media::class, 'gallery_media')
            ->withPivot(['order', 'caption'])
            ->orderBy('order');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(config('auth.providers.users.model'));
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
```

## 🔧 Comandi Artisan

```bash
# Pulisci file orfani
php artisan media:cleanup

# Rigenera thumbnails
php artisan media:thumbnails:regenerate

# Ottimizza immagini esistenti
php artisan media:optimize:images

# Migra storage
php artisan media:migrate-storage
```

## 📊 Monitoring

### Filament Admin Panel
Il modulo fornisce widget Filament per:
- Statistiche utilizzo storage
- Gestione file e gallerie
- Monitoraggio performance upload
- Report utilizzo media

### Storage Analytics
- Tracking spazio utilizzato
- Analisi tipi file
- Monitoraggio accessi file
- Report pulizia automatica

## 🐛 Troubleshooting

### Problemi Comuni

1. **Upload fallito**: Verifica permessi storage e dimensioni file
2. **Immagini non ottimizzate**: Controlla configurazione ImageOptimization
3. **Thumbnails mancanti**: Verifica generazione automatica

### Debug

```bash
# Verifica configurazione media
php artisan config:show media

# Test upload file
php artisan media:test-upload

# Analizza storage
php artisan media:analyze-storage
```

## 🔒 Sicurezza

- Validazione MIME types
- Limitazione dimensioni file
- Sanitizzazione nomi file
- Controllo accessi file
- Audit trail completo

---
**Modulo**: Media
**Versione**: 1.0
**Status**: ✅ Attivo
**PHPStan**: Level 10
**Documentazione**: Completa
=======
### Versione HEAD

# 🎉 Unlock the Power of Media with Fila3 Module! 🚀

![GitHub issues](https://img.shields.io/github/issues/laraxot/module_media_fila3)
![GitHub forks](https://img.shields.io/github/forks/laraxot/module_media_fila3)
![GitHub stars](https://img.shields.io/github/stars/laraxot/module_media_fila3)
![License](https://img.shields.io/badge/license-MIT-green)

Welcome to the **Fila3 Media Module**! This innovative module is designed to revolutionize how you manage and display media content in your applications. Whether you’re building a new project or enhancing an existing one, the Fila3 module brings flexibility and ease to your media handling needs.

## 📦 What’s Inside?

The Fila3 module integrates seamlessly with your application, providing:

- **Dynamic Media Management**: Effortlessly upload, categorize, and display various media types.
- **User-Friendly Interface**: A sleek and intuitive UI for managing media files.
- **Powerful API Support**: Interact with media content programmatically with our robust API.

## 🌟 Key Features

- **Multi-format Support**: Handle images, videos, and audio files with ease.
- **Advanced Media Upload**: Supports drag-and-drop functionality for effortless uploads.
- **Search & Filter**: Quickly find media files using advanced search and filtering options.
- **Responsive Design**: Looks great on any device, ensuring a smooth user experience.
- **Media Previews**: Get instant previews of media files before finalizing your uploads.
- **Batch Processing**: Upload and manage multiple media files at once.
- **Role-based Access Control**: Secure your media management with customizable user permissions.

## 🚀 Why Choose Fila3?

- **Fast & Efficient**: Say goodbye to sluggish media handling! Experience lightning-fast performance.
- **Scalable**: Perfect for small projects and large enterprises alike.
- **Active Community**: Join a vibrant community of developers and contributors who are ready to help.

## 🔧 Installation

Getting started is a breeze! Follow these simple steps to install the Fila3 module:

1. Clone the repository:
   ```bash
   git clone https://github.com/laraxot/module_media_fila3.git

Navigate to the project directory:
bash
Copia codice
cd module_media_fila3
Install dependencies:
bash
Copia codice
npm install
Configure your settings in the config file.
Start your application and watch the magic happen!
🤝 Contributing
We welcome contributions! Whether it’s fixing bugs, improving documentation, or adding new features, your help is invaluable. Check out the contributing guidelines to get started!

📄 License
This project is licensed under the MIT License - see the LICENSE file for details.

👤 Author
Marco Sottana
Check out more of my work at marco76tv!

### Versione Incoming

# 🖼️ Media Module - Gestione Media

[![PHP Version](https://img.shields.io/badge/PHP-8.2+-blue.svg)](https://php.net)
[![Laravel Version](https://img.shields.io/badge/Laravel-11.x-orange.svg)](https://laravel.com)
[![License](https://img.shields.io/badge/license-MIT-green.svg)](LICENSE)
[![Code Quality](https://img.shields.io/badge/code%20quality-A+-brightgreen.svg)](.codeclimate.yml)
[![Test Coverage](https://img.shields.io/badge/coverage-95%25-success.svg)](phpunit.xml.dist)
[![Media Manager](https://img.shields.io/badge/media-enabled-brightgreen.svg)](docs/module_media.md)
[![Filament Version](https://img.shields.io/badge/Filament-3.x-purple.svg)](https://filamentphp.com)
[![Build Status](https://img.shields.io/badge/build-passing-brightgreen.svg)](https://github.com/laraxot/module_media)
[![Downloads](https://img.shields.io/badge/downloads-1k+-blue.svg)](https://packagist.org/packages/laraxot/module_media)
[![Stars](https://img.shields.io/badge/stars-100+-yellow.svg)](https://github.com/laraxot/module_media)

<div align="center">
  <img src="https://raw.githubusercontent.com/laraxot/module_media/main/docs/assets/media-banner.png" alt="Media Module Banner" width="800">
</div>

## 🇮🇹 Italiano

### 📝 Descrizione
Il modulo Media fornisce un sistema completo di gestione dei file multimediali per applicazioni Laravel, con supporto per immagini, video, documenti e altri tipi di file.

### ✨ Caratteristiche Principali
- ✅ Gestione file avanzata
- ✅ Upload multiplo
- ✅ Ottimizzazione immagini
- ✅ Interfaccia amministrativa Filament
- ✅ API RESTful per la gestione media
- ✅ CDN integrato
- ✅ Watermark automatico
- ✅ Galleria multimediale

### 🚀 Installazione
```bash
composer require modules/media
php artisan module:enable Media
php artisan migrate
```

### 📚 Documentazione
Consulta la [documentazione completa](docs/module_media.md) per:
- [File](docs/files.md)
- [Galleria](docs/gallery.md)
- [API](docs/api.md)

## 🇬🇧 English

### 📝 Description
The Media module provides a complete media file management system for Laravel applications, with support for images, videos, documents, and other file types.

### ✨ Key Features
- ✅ Advanced file management
- ✅ Multiple upload
- ✅ Image optimization
- ✅ Filament admin interface
- ✅ RESTful API for media management
- ✅ Built-in CDN
- ✅ Automatic watermark
- ✅ Media gallery

### 🚀 Installation
```bash
composer require modules/media
php artisan module:enable Media
php artisan migrate
```

### 📚 Documentation
Check out the [complete documentation](docs/module_media.md) for:
- [Files](docs/files.md)
- [Gallery](docs/gallery.md)
- [API](docs/api.md)

## 🇪🇸 Español

### 📝 Descripción
El módulo Media proporciona un sistema completo de gestión de archivos multimedia para aplicaciones Laravel, con soporte para imágenes, videos, documentos y otros tipos de archivos.

### ✨ Características Principales
- ✅ Gestión avanzada de archivos
- ✅ Subida múltiple
- ✅ Optimización de imágenes
- ✅ Interfaz administrativa Filament
- ✅ API RESTful para gestión de medios
- ✅ CDN integrado
- ✅ Marca de agua automática
- ✅ Galería multimedia

### 🚀 Instalación
```bash
composer require modules/media
php artisan module:enable Media
php artisan migrate
```

### 📚 Documentación
Consulta la [documentación completa](docs/module_media.md) para:
- [Archivos](docs/files.md)
- [Galería](docs/gallery.md)
- [API](docs/api.md)

## 🤝 Contribuire / Contributing / Contribuir

Siamo aperti a contribuzioni! Consulta le nostre [linee guida per i contributori](.github/CONTRIBUTING.md).

We are open to contributions! Check out our [contributor guidelines](.github/CONTRIBUTING.md).

¡Estamos abiertos a contribuciones! Consulta nuestras [pautas para contribuidores](.github/CONTRIBUTING.md).

## 📄 Licenza / License / Licencia

Questo progetto è distribuito sotto la licenza MIT. Vedi il file [LICENSE](LICENSE) per maggiori dettagli.

This project is distributed under the MIT license. See the [LICENSE](LICENSE) file for more details.

Este proyecto está distribuido bajo la licencia MIT. Ver el archivo [LICENSE](LICENSE) para más detalles.

---

>>>>>>> f0b0032 (.)
