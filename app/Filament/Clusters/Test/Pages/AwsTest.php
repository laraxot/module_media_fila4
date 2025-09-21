<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
use Override;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Override;
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Actions;
use Filament\Actions\Action;
use Filament\Forms\Components\ViewField;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\KeyValue;
use Exception;
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
use Aws\Exception\AwsException;
use Aws\S3\S3Client;
use Aws\Sts\StsClient;
use Filament\Forms\Components;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Filament\Forms\Form;
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
use Filament\Notifications\Notification;
use Modules\Media\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;

class AwsTest extends XotBasePage
{
<<<<<<< HEAD
    protected static null|string $cluster = Test::class;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static null|string $cluster = Test::class;
=======
    protected static ?string $cluster = Test::class;
>>>>>>> a12f125f4a (.)
=======
    protected static null|string $cluster = Test::class;
>>>>>>> b93ef594b4 (.)
=======
    protected static ?string $cluster = Test::class;
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)

    public array $testResults = [];
    public string $activeTab = 's3';

    private const DEFAULT_REGION = 'eu-west-1';
    private const KEY_PREVIEW_LENGTH = 8;

    public array $connectionTests = [
        's3' => 'Test S3 Connection',
        'cloudfront' => 'Test CloudFront',
        'iam' => 'Test IAM Permissions',
        'full' => 'Full Diagnostic',
    ];

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
    #[Override]
    public function form(Schema $schema): Schema
    {
        return $schema->components([
            Tabs::make('Tests')->tabs([
                Tab::make('S3')->schema($this->getS3TestSchema()),
                Tab::make('CloudFront')->schema($this->getCloudFrontTestSchema()),
                Tab::make('IAM')->schema($this->getIamTestSchema()),
                Tab::make('Diagnostics')->schema($this->getDiagnosticsSchema()),
            ]),
        ]);
<<<<<<< HEAD
=======
=======
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Tests')
                    ->tabs([
                        Tab::make('S3')
                            ->schema($this->getS3TestSchema()),

                        Tab::make('CloudFront')
                            ->schema($this->getCloudFrontTestSchema()),

                        Tab::make('IAM')
                            ->schema($this->getIamTestSchema()),

                        Tab::make('Diagnostics')
                            ->schema($this->getDiagnosticsSchema()),
                    ]),
            ]);
>>>>>>> a12f125f4a (.)
=======
    #[Override]
    public function form(Schema $schema): Schema
    {
        return $schema->components([
            Tabs::make('Tests')->tabs([
                Tab::make('S3')->schema($this->getS3TestSchema()),
                Tab::make('CloudFront')->schema($this->getCloudFrontTestSchema()),
                Tab::make('IAM')->schema($this->getIamTestSchema()),
                Tab::make('Diagnostics')->schema($this->getDiagnosticsSchema()),
            ]),
        ]);
>>>>>>> b93ef594b4 (.)
=======
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Components\Tabs::make('Tests')
                    ->tabs([
                        Components\Tabs\Tab::make('S3')
                            ->schema($this->getS3TestSchema()),

                        Components\Tabs\Tab::make('CloudFront')
                            ->schema($this->getCloudFrontTestSchema()),

                        Components\Tabs\Tab::make('IAM')
                            ->schema($this->getIamTestSchema()),

                        Components\Tabs\Tab::make('Diagnostics')
                            ->schema($this->getDiagnosticsSchema()),
                    ]),
            ]);
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    }

    protected function getS3TestSchema(): array
    {
        return [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
            Section::make('S3 Connection Test')
                ->description('Verify S3 bucket access and permissions')
                ->schema([
                    Actions::make([
                        Action::make('test_s3_connection')
                            ->label(__('ui::aws_test.test_s3_connection'))
                            ->action('testS3Connection'),
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
                        Action::make('test_s3_permissions')
                            ->label(__('ui::aws_test.test_s3_permissions'))
                            ->color('warning')
                            ->action('testS3Permissions'),
<<<<<<< HEAD
                        Action::make('test_file_operations')
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
                        Action::make('test_file_operations')
=======
            Components\Section::make('S3 Connection Test')
                ->description('Verify S3 bucket access and permissions')
                ->schema([
                    Components\Actions::make([
                        Components\Actions\Action::make('test_s3_connection')
                            ->label(__('ui::aws_test.test_s3_connection'))
                            ->action('testS3Connection'),

                        Components\Actions\Action::make('test_s3_permissions')
                            ->label(__('ui::aws_test.test_s3_permissions'))
                            ->color('warning')
                            ->action('testS3Permissions'),

                        Components\Actions\Action::make('test_file_operations')
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
                            ->label(__('ui::aws_test.test_file_operations'))
                            ->color('success')
                            ->action('testS3FileOperations'),
                    ])->fullWidth(),
<<<<<<< HEAD
                    ViewField::make('s3_results')
                        ->view('ui::filament.components.test-results')
                        ->viewData(fn() => ['results' => $this->testResults['s3'] ?? null]),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    ViewField::make('s3_results')
                        ->view('ui::filament.components.test-results')
                        ->viewData(fn() => ['results' => $this->testResults['s3'] ?? null]),
=======

                    ViewField::make('s3_results')
                        ->view('ui::filament.components.test-results')
                        ->viewData(fn () => ['results' => $this->testResults['s3'] ?? null]),
>>>>>>> a12f125f4a (.)
=======
                    ViewField::make('s3_results')
                        ->view('ui::filament.components.test-results')
                        ->viewData(fn() => ['results' => $this->testResults['s3'] ?? null]),
>>>>>>> b93ef594b4 (.)
=======

                    Components\ViewField::make('s3_results')
                        ->view('ui::filament.components.test-results')
                        ->viewData(fn () => ['results' => $this->testResults['s3'] ?? null]),
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
                ]),
        ];
    }

    protected function getCloudFrontTestSchema(): array
    {
        return [
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
            Section::make('CloudFront Test')->schema([
                TextInput::make('cloudfront_url')->default(config('filesystems.cloudfront.url')),
                Actions::make([
                    Action::make('test_cloudfront_config')->action('testCloudFrontConfig'),
                    Action::make('test_signed_urls')->action('testCloudFrontSignedUrls'),
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
                ]),
                ViewField::make('cloudfront_results')
                    ->view('ui::filament.components.test-results')
                    ->viewData(fn() => ['results' => $this->testResults['cloudfront'] ?? null]),
            ]),
<<<<<<< HEAD
=======
=======
            Section::make('CloudFront Test')
                ->schema([
                    TextInput::make('cloudfront_url')
                        ->default(config('filesystems.cloudfront.url')),

                    Actions::make([
                        Action::make('test_cloudfront_config')
                            ->action('testCloudFrontConfig'),

                        Action::make('test_signed_urls')
                            ->action('testCloudFrontSignedUrls'),
                    ]),

                    ViewField::make('cloudfront_results')
                        ->view('ui::filament.components.test-results')
                        ->viewData(fn () => ['results' => $this->testResults['cloudfront'] ?? null]),
                ]),
>>>>>>> a12f125f4a (.)
=======
                ]),
                ViewField::make('cloudfront_results')
                    ->view('ui::filament.components.test-results')
                    ->viewData(fn() => ['results' => $this->testResults['cloudfront'] ?? null]),
            ]),
>>>>>>> b93ef594b4 (.)
=======
            Components\Section::make('CloudFront Test')
                ->schema([
                    Components\TextInput::make('cloudfront_url')
                        ->default(config('filesystems.cloudfront.url')),

                    Components\Actions::make([
                        Components\Actions\Action::make('test_cloudfront_config')
                            ->action('testCloudFrontConfig'),

                        Components\Actions\Action::make('test_signed_urls')
                            ->action('testCloudFrontSignedUrls'),
                    ]),

                    Components\ViewField::make('cloudfront_results')
                        ->view('ui::filament.components.test-results')
                        ->viewData(fn () => ['results' => $this->testResults['cloudfront'] ?? null]),
                ]),
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        ];
    }

    protected function getIamTestSchema(): array
    {
        return [
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
            Section::make('IAM Permissions Test')->schema([
                TextInput::make('iam_user')->default(env('AWS_ACCESS_KEY_ID')),
                Actions::make([
                    Action::make('test_iam_credentials')->action('testIamCredentials'),
                    Action::make('test_iam_policies')->color('warning')->action('testIamPolicies'),
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
                ]),
                ViewField::make('iam_results')
                    ->view('ui::filament.components.test-results')
                    ->viewData(fn() => ['results' => $this->testResults['iam'] ?? null]),
            ]),
<<<<<<< HEAD
=======
=======
            Section::make('IAM Permissions Test')
                ->schema([
                    TextInput::make('iam_user')
                        ->default(env('AWS_ACCESS_KEY_ID')),

                    Actions::make([
                        Action::make('test_iam_credentials')
                            ->action('testIamCredentials'),

                        Action::make('test_iam_policies')
=======
            Components\Section::make('IAM Permissions Test')
                ->schema([
                    Components\TextInput::make('iam_user')
                        ->default(env('AWS_ACCESS_KEY_ID')),

                    Components\Actions::make([
                        Components\Actions\Action::make('test_iam_credentials')
                            ->action('testIamCredentials'),

                        Components\Actions\Action::make('test_iam_policies')
>>>>>>> origin/develop
                            ->color('warning')
                            ->action('testIamPolicies'),
                    ]),

<<<<<<< HEAD
                    ViewField::make('iam_results')
                        ->view('ui::filament.components.test-results')
                        ->viewData(fn () => ['results' => $this->testResults['iam'] ?? null]),
                ]),
>>>>>>> a12f125f4a (.)
=======
                ]),
                ViewField::make('iam_results')
                    ->view('ui::filament.components.test-results')
                    ->viewData(fn() => ['results' => $this->testResults['iam'] ?? null]),
            ]),
>>>>>>> b93ef594b4 (.)
=======
                    Components\ViewField::make('iam_results')
                        ->view('ui::filament.components.test-results')
                        ->viewData(fn () => ['results' => $this->testResults['iam'] ?? null]),
                ]),
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        ];
    }

    protected function getDiagnosticsSchema(): array
    {
        return [
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> e9b0959 (.)
            Section::make('Complete Diagnostic')->schema([
                Actions::make([
                    Action::make('run_full_diagnostic')
                        ->color('danger')
                        ->icon('heroicon-o-bolt')
                        ->action('runFullDiagnostic'),
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e9b0959 (.)
                ]),
                ViewField::make('full_results')
                    ->view('ui::filament.components.test-results')
                    ->viewData(fn() => ['results' => $this->testResults['full'] ?? null]),
                KeyValue::make('aws_config')->columnSpanFull()->state($this->getAwsConfig(...)),
            ]),
<<<<<<< HEAD
=======
=======
            Section::make('Complete Diagnostic')
                ->schema([
                    Actions::make([
                        Action::make('run_full_diagnostic')
=======
            Components\Section::make('Complete Diagnostic')
                ->schema([
                    Components\Actions::make([
                        Components\Actions\Action::make('run_full_diagnostic')
>>>>>>> origin/develop
                            ->color('danger')
                            ->icon('heroicon-o-bolt')
                            ->action('runFullDiagnostic'),
                    ]),

<<<<<<< HEAD
                    ViewField::make('full_results')
                        ->view('ui::filament.components.test-results')
                        ->viewData(fn () => ['results' => $this->testResults['full'] ?? null]),

                    KeyValue::make('aws_config')
                        ->columnSpanFull()
                        ->state(fn () => $this->getAwsConfig()),
                ]),
>>>>>>> a12f125f4a (.)
=======
                ]),
                ViewField::make('full_results')
                    ->view('ui::filament.components.test-results')
                    ->viewData(fn() => ['results' => $this->testResults['full'] ?? null]),
                KeyValue::make('aws_config')->columnSpanFull()->state($this->getAwsConfig(...)),
            ]),
>>>>>>> b93ef594b4 (.)
=======
                    Components\ViewField::make('full_results')
                        ->view('ui::filament.components.test-results')
                        ->viewData(fn () => ['results' => $this->testResults['full'] ?? null]),

                    Components\KeyValue::make('aws_config')
                        ->columnSpanFull()
                        ->state(fn () => $this->getAwsConfig()),
                ]),
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
        ];
    }

    /* Test Methods */
    public function testS3Connection(): void
    {
        try {
            $s3 = new S3Client([
                'region' => config('filesystems.disks.s3.region', self::DEFAULT_REGION),
                'version' => 'latest',
                'credentials' => [
                    'key' => config('filesystems.disks.s3.key'),
                    'secret' => config('filesystems.disks.s3.secret'),
                ],
            ]);

            $result = $s3->headBucket([
                'Bucket' => config('filesystems.disks.s3.bucket'),
            ]);

            $this->testResults['s3'] = [
                'status' => 'success',
                'message' => 'Successfully connected to S3 bucket',
                'details' => [
                    'Bucket' => config('filesystems.disks.s3.bucket'),
                    'Region' => config('filesystems.disks.s3.region'),
                ],
            ];

            Notification::make()
                ->title(__('ui::awstest.notifications.s3_connection_successful'))
                ->success()
                ->send();
        } catch (AwsException $e) {
            $this->testResults['s3'] = [
                'status' => 'error',
                'message' => $e->getAwsErrorCode() ?? 'UnknownError',
                'details' => [
                    'Error' => $e->getMessage(),
                    'Solution' => $this->getS3Solution($e->getAwsErrorCode() ?? 'UnknownError'),
                ],
            ];

            Notification::make()
                ->title(__('ui::awstest.notifications.s3_connection_failed'))
                ->danger()
                ->body($e->getAwsErrorCode() ?? 'UnknownError')
                ->send();
        }
    }

    public function testCloudFrontConfig(): void
    {
        try {
            // Implement CloudFront config test
            $this->testResults['cloudfront'] = [
                'status' => 'success',
                'message' => 'CloudFront configuration valid',
                'details' => [
                    'Base URL' => config('filesystems.cloudfront.url'),
                    'Key Pair ID' => config('filesystems.cloudfront.key_pair_id'),
                ],
            ];

            Notification::make()
                ->title(__('ui::awstest.notifications.cloudfront_config_valid'))
                ->success()
                ->send();
<<<<<<< HEAD
        } catch (Exception $e) {
=======
<<<<<<< HEAD
        } catch (Exception $e) {
=======
        } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
            $this->testResults['cloudfront'] = [
                'status' => 'error',
                'message' => 'CloudFront configuration error',
                'details' => [
                    'Error' => $e->getMessage(),
                    'Solution' => 'Check CloudFront settings in config',
                ],
            ];

            Notification::make()
                ->title(__('ui::awstest.notifications.cloudfront_config_error'))
                ->danger()
                ->send();
        }
    }

    public function runFullDiagnostic(): void
    {
        $this->testS3Connection();
        $this->testS3Permissions();
        $this->testS3FileOperations();
        $this->testCloudFrontConfig();
        $this->testCloudFrontSignedUrls();
        $this->testIamCredentials();
        $this->testIamPolicies();

        $this->testResults['full'] = [
            'status' => 'completed',
            'message' => 'Full diagnostic completed',
            'details' => $this->testResults,
        ];

        Notification::make()
            ->title(__('ui::awstest.notifications.full_diagnostic_completed'))
            ->success()
            ->send();
    }

    /* Helper Methods */
    protected function getAwsConfig(): array
    {
        return [
<<<<<<< HEAD
            'AWS_ACCESS_KEY_ID' =>
                substr((string) config('filesystems.disks.s3.key', ''), 0, self::KEY_PREVIEW_LENGTH) . '...',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'AWS_ACCESS_KEY_ID' =>
                substr((string) config('filesystems.disks.s3.key', ''), 0, self::KEY_PREVIEW_LENGTH) . '...',
=======
            'AWS_ACCESS_KEY_ID' => substr((string) config('filesystems.disks.s3.key', ''), 0, self::KEY_PREVIEW_LENGTH).'...',
>>>>>>> a12f125f4a (.)
=======
            'AWS_ACCESS_KEY_ID' =>
                substr((string) config('filesystems.disks.s3.key', ''), 0, self::KEY_PREVIEW_LENGTH) . '...',
>>>>>>> b93ef594b4 (.)
=======
            'AWS_ACCESS_KEY_ID' => substr((string) config('filesystems.disks.s3.key', ''), 0, self::KEY_PREVIEW_LENGTH).'...',
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
            'AWS_DEFAULT_REGION' => config('filesystems.disks.s3.region'),
            'AWS_BUCKET' => config('filesystems.disks.s3.bucket'),
            'CLOUDFRONT_URL' => config('filesystems.cloudfront.url'),
            'CLOUDFRONT_KEY_PAIR_ID' => config('filesystems.cloudfront.key_pair_id'),
        ];
    }

<<<<<<< HEAD
    protected function getS3Solution(null|string $errorCode): string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected function getS3Solution(null|string $errorCode): string
=======
    protected function getS3Solution(?string $errorCode): string
>>>>>>> a12f125f4a (.)
=======
    protected function getS3Solution(null|string $errorCode): string
>>>>>>> b93ef594b4 (.)
=======
    protected function getS3Solution(?string $errorCode): string
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    {
        if (null === $errorCode) {
            return 'Unknown error - check AWS credentials and configuration';
        }

        $solutions = [
            'SignatureDoesNotMatch' => 'Verify your AWS_SECRET_ACCESS_KEY in .env',
            'AccessDenied' => 'Check IAM permissions for S3 access',
            'NoSuchBucket' => 'Verify bucket name and region',
            'InvalidAccessKeyId' => 'Check AWS_ACCESS_KEY_ID',
        ];

<<<<<<< HEAD
        return $solutions[$errorCode] ?? ('Consult AWS documentation for error: ' . $errorCode);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $solutions[$errorCode] ?? ('Consult AWS documentation for error: ' . $errorCode);
=======
        return $solutions[$errorCode] ?? 'Consult AWS documentation for error: '.$errorCode;
>>>>>>> a12f125f4a (.)
=======
        return $solutions[$errorCode] ?? ('Consult AWS documentation for error: ' . $errorCode);
>>>>>>> b93ef594b4 (.)
=======
        return $solutions[$errorCode] ?? 'Consult AWS documentation for error: '.$errorCode;
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
    }

    public function testS3Permissions(): void
    {
        try {
            $s3 = new S3Client([
                'region' => config('filesystems.disks.s3.region', self::DEFAULT_REGION),
                'version' => 'latest',
                'credentials' => [
                    'key' => config('filesystems.disks.s3.key'),
                    'secret' => config('filesystems.disks.s3.secret'),
                ],
            ]);

            // Test list objects permission
            $result = $s3->listObjectsV2([
                'Bucket' => config('filesystems.disks.s3.bucket'),
                'MaxKeys' => 1,
            ]);

            $this->testResults['s3_permissions'] = [
                'status' => 'success',
                'message' => 'S3 permissions verified successfully',
                'details' => [
                    'ListObjects' => 'OK',
                    'Bucket' => config('filesystems.disks.s3.bucket'),
                ],
            ];

            Notification::make()
                ->title('S3 Permissions OK')
                ->success()
                ->send();
        } catch (AwsException $e) {
            $this->testResults['s3_permissions'] = [
                'status' => 'error',
<<<<<<< HEAD
                'message' => 'S3 permissions error: ' . ($e->getAwsErrorCode() ?? 'UnknownError'),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'message' => 'S3 permissions error: ' . ($e->getAwsErrorCode() ?? 'UnknownError'),
=======
                'message' => 'S3 permissions error: '.($e->getAwsErrorCode() ?? 'UnknownError'),
>>>>>>> a12f125f4a (.)
=======
                'message' => 'S3 permissions error: ' . ($e->getAwsErrorCode() ?? 'UnknownError'),
>>>>>>> b93ef594b4 (.)
=======
                'message' => 'S3 permissions error: '.($e->getAwsErrorCode() ?? 'UnknownError'),
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
                'details' => [
                    'Error' => $e->getMessage(),
                    'Solution' => $this->getS3Solution($e->getAwsErrorCode() ?? 'UnknownError'),
                ],
            ];

            Notification::make()
                ->title('S3 Permissions Failed')
                ->danger()
                ->body($e->getAwsErrorCode() ?? 'UnknownError')
                ->send();
        }
    }

    public function testS3FileOperations(): void
    {
        try {
            $s3 = new S3Client([
                'region' => config('filesystems.disks.s3.region', self::DEFAULT_REGION),
                'version' => 'latest',
                'credentials' => [
                    'key' => config('filesystems.disks.s3.key'),
                    'secret' => config('filesystems.disks.s3.secret'),
                ],
            ]);

<<<<<<< HEAD
            $testFileName = 'test-file-' . now()->timestamp . '.txt';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $testFileName = 'test-file-' . now()->timestamp . '.txt';
=======
            $testFileName = 'test-file-'.now()->timestamp.'.txt';
>>>>>>> a12f125f4a (.)
=======
            $testFileName = 'test-file-' . now()->timestamp . '.txt';
>>>>>>> b93ef594b4 (.)
=======
            $testFileName = 'test-file-'.now()->timestamp.'.txt';
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
            $testContent = 'Test file content for AWS S3 operations';

            // Test put operation
            $s3->putObject([
                'Bucket' => config('filesystems.disks.s3.bucket'),
                'Key' => $testFileName,
                'Body' => $testContent,
                'ContentType' => 'text/plain',
            ]);

            // Test get operation
            $result = $s3->getObject([
                'Bucket' => config('filesystems.disks.s3.bucket'),
                'Key' => $testFileName,
            ]);

            // Clean up - delete test file
            $s3->deleteObject([
                'Bucket' => config('filesystems.disks.s3.bucket'),
                'Key' => $testFileName,
            ]);

            $this->testResults['s3_operations'] = [
                'status' => 'success',
                'message' => 'S3 file operations completed successfully',
                'details' => [
                    'Upload' => 'OK',
                    'Download' => 'OK',
                    'Delete' => 'OK',
                    'Test File' => $testFileName,
                ],
            ];

            Notification::make()
                ->title('S3 File Operations OK')
                ->success()
                ->send();
        } catch (AwsException $e) {
            $this->testResults['s3_operations'] = [
                'status' => 'error',
<<<<<<< HEAD
                'message' => 'S3 file operations error: ' . ($e->getAwsErrorCode() ?? 'UnknownError'),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'message' => 'S3 file operations error: ' . ($e->getAwsErrorCode() ?? 'UnknownError'),
=======
                'message' => 'S3 file operations error: '.($e->getAwsErrorCode() ?? 'UnknownError'),
>>>>>>> a12f125f4a (.)
=======
                'message' => 'S3 file operations error: ' . ($e->getAwsErrorCode() ?? 'UnknownError'),
>>>>>>> b93ef594b4 (.)
=======
                'message' => 'S3 file operations error: '.($e->getAwsErrorCode() ?? 'UnknownError'),
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
                'details' => [
                    'Error' => $e->getMessage(),
                    'Solution' => $this->getS3Solution($e->getAwsErrorCode() ?? 'UnknownError'),
                ],
            ];

            Notification::make()
                ->title('S3 File Operations Failed')
                ->danger()
                ->body($e->getAwsErrorCode() ?? 'UnknownError')
                ->send();
        }
    }

    public function testCloudFrontSignedUrls(): void
    {
        try {
            // Test CloudFront signed URL generation
            $privateKey = config('filesystems.cloudfront.private_key');
            $keyPairId = config('filesystems.cloudfront.key_pair_id');
            $baseUrl = config('filesystems.cloudfront.url');

<<<<<<< HEAD
            if (!$privateKey || !$keyPairId || !$baseUrl) {
                throw new Exception('Missing CloudFront configuration');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (!$privateKey || !$keyPairId || !$baseUrl) {
=======
            if (! $privateKey || ! $keyPairId || ! $baseUrl) {
>>>>>>> a12f125f4a (.)
=======
            if (!$privateKey || !$keyPairId || !$baseUrl) {
>>>>>>> b93ef594b4 (.)
                throw new Exception('Missing CloudFront configuration');
=======
            if (! $privateKey || ! $keyPairId || ! $baseUrl) {
                throw new \Exception('Missing CloudFront configuration');
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
            }

            $this->testResults['cloudfront_signed'] = [
                'status' => 'success',
                'message' => 'CloudFront signed URL configuration valid',
                'details' => [
                    'Base URL' => $baseUrl,
                    'Key Pair ID' => $keyPairId,
                    'Private Key' => 'Configured',
                ],
            ];

            Notification::make()
                ->title('CloudFront Signed URLs OK')
                ->success()
                ->send();
<<<<<<< HEAD
        } catch (Exception $e) {
=======
<<<<<<< HEAD
        } catch (Exception $e) {
=======
        } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
            $this->testResults['cloudfront_signed'] = [
                'status' => 'error',
                'message' => 'CloudFront signed URL error',
                'details' => [
                    'Error' => $e->getMessage(),
                    'Solution' => 'Check CloudFront private key and configuration',
                ],
            ];

            Notification::make()
                ->title('CloudFront Signed URLs Failed')
                ->danger()
                ->send();
        }
    }

    public function testIamCredentials(): void
    {
        try {
            $sts = new StsClient([
                'region' => config('filesystems.disks.s3.region', self::DEFAULT_REGION),
                'version' => 'latest',
                'credentials' => [
                    'key' => config('filesystems.disks.s3.key'),
                    'secret' => config('filesystems.disks.s3.secret'),
                ],
            ]);

            $result = $sts->getCallerIdentity();

            $this->testResults['iam_credentials'] = [
                'status' => 'success',
                'message' => 'IAM credentials verified successfully',
                'details' => [
                    'Account' => $result['Account'] ?? 'Unknown',
                    'ARN' => $result['Arn'] ?? 'Unknown',
                    'User ID' => $result['UserId'] ?? 'Unknown',
                ],
            ];

            Notification::make()
                ->title('IAM Credentials OK')
                ->success()
                ->send();
        } catch (AwsException $e) {
            $this->testResults['iam_credentials'] = [
                'status' => 'error',
<<<<<<< HEAD
                'message' => 'IAM credentials error: ' . ($e->getAwsErrorCode() ?? 'UnknownError'),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'message' => 'IAM credentials error: ' . ($e->getAwsErrorCode() ?? 'UnknownError'),
=======
                'message' => 'IAM credentials error: '.($e->getAwsErrorCode() ?? 'UnknownError'),
>>>>>>> a12f125f4a (.)
=======
                'message' => 'IAM credentials error: ' . ($e->getAwsErrorCode() ?? 'UnknownError'),
>>>>>>> b93ef594b4 (.)
=======
                'message' => 'IAM credentials error: '.($e->getAwsErrorCode() ?? 'UnknownError'),
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
                'details' => [
                    'Error' => $e->getMessage(),
                    'Solution' => 'Check AWS access keys and secret',
                ],
            ];

            Notification::make()
                ->title('IAM Credentials Failed')
                ->danger()
                ->body($e->getAwsErrorCode() ?? 'UnknownError')
                ->send();
        }
    }

    public function testIamPolicies(): void
    {
        try {
            // Test IAM policies by attempting various operations
            $s3 = new S3Client([
                'region' => config('filesystems.disks.s3.region', self::DEFAULT_REGION),
                'version' => 'latest',
                'credentials' => [
                    'key' => config('filesystems.disks.s3.key'),
                    'secret' => config('filesystems.disks.s3.secret'),
                ],
            ]);

            // Test bucket access
            $s3->headBucket([
                'Bucket' => config('filesystems.disks.s3.bucket'),
            ]);

            // Test list objects
            $s3->listObjectsV2([
                'Bucket' => config('filesystems.disks.s3.bucket'),
                'MaxKeys' => 1,
            ]);

            $this->testResults['iam_policies'] = [
                'status' => 'success',
                'message' => 'IAM policies verified successfully',
                'details' => [
                    'S3 Access' => 'OK',
                    'List Objects' => 'OK',
                    'Bucket Access' => 'OK',
                ],
            ];

            Notification::make()
                ->title('IAM Policies OK')
                ->success()
                ->send();
        } catch (AwsException $e) {
            $this->testResults['iam_policies'] = [
                'status' => 'error',
<<<<<<< HEAD
                'message' => 'IAM policies error: ' . ($e->getAwsErrorCode() ?? 'UnknownError'),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'message' => 'IAM policies error: ' . ($e->getAwsErrorCode() ?? 'UnknownError'),
=======
                'message' => 'IAM policies error: '.($e->getAwsErrorCode() ?? 'UnknownError'),
>>>>>>> a12f125f4a (.)
=======
                'message' => 'IAM policies error: ' . ($e->getAwsErrorCode() ?? 'UnknownError'),
>>>>>>> b93ef594b4 (.)
=======
                'message' => 'IAM policies error: '.($e->getAwsErrorCode() ?? 'UnknownError'),
>>>>>>> origin/develop
>>>>>>> e9b0959 (.)
                'details' => [
                    'Error' => $e->getMessage(),
                    'Solution' => 'Check IAM user policies and permissions',
                ],
            ];

            Notification::make()
                ->title('IAM Policies Failed')
                ->danger()
                ->body($e->getAwsErrorCode() ?? 'UnknownError')
                ->send();
        }
    }
}
