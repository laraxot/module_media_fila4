<?php

declare(strict_types=1);

return [
    'actions' => [
        'testCredentials' => [
            'label' => 'Test Credenziali AWS',
            'tooltip' => 'Verifica le credenziali AWS configurate',
        ],
        'testS3Connection' => [
            'label' => 'Test Connessione S3',
            'tooltip' => 'Verifica la connessione al bucket S3',
        ],
        'testPermissions' => [
            'label' => 'Test Permessi S3',
            'tooltip' => 'Verifica i permessi per operazioni S3',
        ],
        'testBucketPolicy' => [
            'label' => 'Test Policy Bucket',
            'tooltip' => 'Verifica la policy del bucket S3',
        ],
        'testCloudFront' => [
            'label' => 'Test CloudFront',
            'tooltip' => 'Verifica la configurazione CloudFront',
        ],
        'testFileOperations' => [
            'label' => 'Test Operazioni File',
            'tooltip' => 'Testa upload, download e cancellazione file',
        ],
        'debugConfig' => [
            'label' => 'Debug Configurazione',
            'tooltip' => 'Mostra la configurazione AWS corrente',
        ],
        'clearResults' => [
            'label' => 'Cancella Risultati',
            'tooltip' => 'Cancella tutti i risultati dei test',
        ],
        'sendEmail' => [
            'label' => 'Invia Email Test',
            'tooltip' => 'Invia email con allegato per test',
        ],
    ],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======

>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======

>>>>>>> 0a466ed (.)
=======
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

>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======

>>>>>>> 0a466ed (.)
=======
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

>>>>>>> 0a466ed (.)
>>>>>>> c08a553 (.)
=======
=======

>>>>>>> 0a466ed (.)
=======
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

>>>>>>> 0a466ed (.)
>>>>>>> 10ef3f7 (.)
=======
=======

>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> 37b6a94 (.)
=======
>>>>>>> e5c049f (.)
=======
>>>>>>> a70c4fa (.)
=======
>>>>>>> ece6f0a (.)
    'notifications' => [
        'credentials_tested' => 'Credenziali AWS testate',
        'bucket_policy_tested' => 'Policy bucket testata',
        'file_operations_tested' => 'Operazioni file testate',
        'config_debugged' => 'Configurazione analizzata',
        'results_cleared' => 'Risultati cancellati',
        's3_test_successful' => 'Test S3 completato con successo',
        'operations_completed' => 'Tutte le operazioni completate',
        'test_failed' => 'Test fallito',
        'no_attachment' => 'Nessun allegato selezionato',
        'upload_file_first' => 'Carica prima un file per testare',
        'email_sent' => 'Email test inviata',
        'email_with_attachment' => 'Email con allegato inviata correttamente',
        'email_failed' => 'Invio email fallito',
    ],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 06bb10d (.)
=======
>>>>>>> 98c37f4 (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 7ea0764 (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> 89eb716 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 760b37c (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> ece6f0a (.)
    'debug' => [
        'run_tests_message' => 'Esegui i test per vedere i risultati qui...',
    ],
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
    'debug' => [
        'run_tests_message' => 'Esegui i test per vedere i risultati qui...',
    ],
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 06bb10d (.)
=======
>>>>>>> 47a54fe (.)
=======
>>>>>>> 877e05f (.)
=======
>>>>>>> 1d21a10 (.)
=======
>>>>>>> 054dfa6 (.)
=======
>>>>>>> b8fda23 (.)
=======
>>>>>>> c08a553 (.)
=======
>>>>>>> 9a4eacb (.)
=======
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> ece6f0a (.)

    'debug' => [
        'run_tests_message' => 'Esegui i test per vedere i risultati qui...',
    ],

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> a12f125f4a (.)
=======
    'debug' => [
        'run_tests_message' => 'Esegui i test per vedere i risultati qui...',
    ],
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    'debug' => [
        'run_tests_message' => 'Esegui i test per vedere i risultati qui...',
    ],
>>>>>>> 5200b63 (.)
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
    'debug' => [
        'run_tests_message' => 'Esegui i test per vedere i risultati qui...',
    ],
>>>>>>> 37a2da6 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 98c37f4 (.)
=======
    'debug' => [
        'run_tests_message' => 'Esegui i test per vedere i risultati qui...',
    ],
>>>>>>> a80d398 (.)
=======
>>>>>>> 47a54fe (.)
=======
    'debug' => [
        'run_tests_message' => 'Esegui i test per vedere i risultati qui...',
    ],
>>>>>>> f1c6d6e (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
>>>>>>> 7ea0764 (.)
=======
    'debug' => [
        'run_tests_message' => 'Esegui i test per vedere i risultati qui...',
    ],
>>>>>>> e0a46f3 (.)
=======
>>>>>>> 1d21a10 (.)
=======
    'debug' => [
        'run_tests_message' => 'Esegui i test per vedere i risultati qui...',
    ],
>>>>>>> 146bbc3 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
>>>>>>> 89eb716 (.)
=======
    'debug' => [
        'run_tests_message' => 'Esegui i test per vedere i risultati qui...',
    ],
>>>>>>> af40dd6 (.)
=======
>>>>>>> b8fda23 (.)
=======
    'debug' => [
        'run_tests_message' => 'Esegui i test per vedere i risultati qui...',
    ],
>>>>>>> f5f7069 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> c08a553 (.)
=======
>>>>>>> 760b37c (.)
=======
    'debug' => [
        'run_tests_message' => 'Esegui i test per vedere i risultati qui...',
    ],
>>>>>>> 3f513a2 (.)
=======
>>>>>>> 9a4eacb (.)
=======
    'debug' => [
        'run_tests_message' => 'Esegui i test per vedere i risultati qui...',
    ],
>>>>>>> fa051fc (.)
=======
    'debug' => [
        'run_tests_message' => 'Esegui i test per vedere i risultati qui...',
    ],
>>>>>>> 22b1256 (.)
=======
>>>>>>> 0a466ed (.)
>>>>>>> 10ef3f7 (.)
=======
>>>>>>> 91c1d65 (.)
=======
    'debug' => [
        'run_tests_message' => 'Esegui i test per vedere i risultati qui...',
    ],
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
    'debug' => [
        'run_tests_message' => 'Esegui i test per vedere i risultati qui...',
    ],
>>>>>>> 37b6a94 (.)
=======
    'debug' => [
        'run_tests_message' => 'Esegui i test per vedere i risultati qui...',
    ],
>>>>>>> e5c049f (.)
=======
    'debug' => [
        'run_tests_message' => 'Esegui i test per vedere i risultati qui...',
    ],
>>>>>>> a70c4fa (.)
=======
>>>>>>> ece6f0a (.)
    'fields' => [
        'attachment' => [
            'label' => 'Allegato',
            'placeholder' => 'Seleziona un file da allegare',
            'helper_text' => 'File di test per verificare le operazioni S3',
        ],
        'debug_output' => [
            'label' => 'Output Debug',
            'placeholder' => 'I risultati dei test appariranno qui',
            'helper_text' => 'Output dettagliato dei test eseguiti',
        ],
    ],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======

>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======

>>>>>>> 0a466ed (.)
=======
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

>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======

>>>>>>> 0a466ed (.)
=======
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

>>>>>>> 0a466ed (.)
>>>>>>> c08a553 (.)
=======
=======

>>>>>>> 0a466ed (.)
=======
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

>>>>>>> 0a466ed (.)
>>>>>>> 10ef3f7 (.)
=======
=======

>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> 37b6a94 (.)
=======
>>>>>>> e5c049f (.)
=======
>>>>>>> a70c4fa (.)
=======
>>>>>>> ece6f0a (.)
    'messages' => [
        'test_successful' => 'Test completato con successo',
        'test_failed' => 'Test fallito',
        'configuration_valid' => 'Configurazione valida',
        'configuration_invalid' => 'Configurazione non valida',
        'permissions_ok' => 'Permessi verificati',
        'permissions_failed' => 'Permessi insufficienti',
        'connection_ok' => 'Connessione stabilita',
        'connection_failed' => 'Connessione fallita',
    ],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======

>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======

>>>>>>> 0a466ed (.)
=======
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

>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======

>>>>>>> 0a466ed (.)
=======
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

>>>>>>> 0a466ed (.)
>>>>>>> c08a553 (.)
=======
=======

>>>>>>> 0a466ed (.)
=======
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

>>>>>>> 0a466ed (.)
>>>>>>> 10ef3f7 (.)
=======
=======

>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> 37b6a94 (.)
=======
>>>>>>> e5c049f (.)
=======
>>>>>>> a70c4fa (.)
=======
>>>>>>> ece6f0a (.)
    'errors' => [
        'aws_credentials_invalid' => 'Credenziali AWS non valide',
        's3_bucket_inaccessible' => 'Bucket S3 non accessibile',
        'cloudfront_config_incomplete' => 'Configurazione CloudFront incompleta',
        'file_operations_failed' => 'Operazioni file fallite',
        'permissions_insufficient' => 'Permessi insufficienti',
        'unknown_error' => 'Errore sconosciuto',
    ],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======

>>>>>>> 0a466ed (.)
>>>>>>> 877e05f (.)
=======
=======

>>>>>>> 0a466ed (.)
=======
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

>>>>>>> 0a466ed (.)
>>>>>>> 054dfa6 (.)
=======
=======

>>>>>>> 0a466ed (.)
=======
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

>>>>>>> 0a466ed (.)
>>>>>>> c08a553 (.)
=======
=======

>>>>>>> 0a466ed (.)
=======
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

>>>>>>> 0a466ed (.)
>>>>>>> 10ef3f7 (.)
=======
=======

>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
>>>>>>> 91c1d65 (.)
=======
>>>>>>> c90879e (.)
=======
>>>>>>> c4425b4 (.)
=======
>>>>>>> 37b6a94 (.)
=======
>>>>>>> e5c049f (.)
=======
>>>>>>> a70c4fa (.)
=======
>>>>>>> ece6f0a (.)
    'solutions' => [
        'check_credentials' => 'Verifica le credenziali AWS in .env',
        'check_bucket_name' => 'Verifica il nome del bucket S3',
        'check_region' => 'Verifica la regione AWS configurata',
        'check_permissions' => 'Verifica i permessi IAM per S3',
        'check_cloudfront_config' => 'Verifica la configurazione CloudFront',
        'contact_admin' => 'Contatta l\'amministratore del sistema',
    ],
];
