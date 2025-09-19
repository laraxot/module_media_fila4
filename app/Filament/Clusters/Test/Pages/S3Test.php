<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Grid;
use Exception;
use Illuminate\Filesystem\FilesystemAdapter;
use Aws\Exception\AwsException;
use Aws\S3\S3Client;
use Aws\Sts\StsClient;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Modules\Media\Actions\CloudFront\GetCloudFrontSignedUrlAction;
use Modules\Media\Datas\CloudFrontData;
use Modules\Media\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;

use function Safe\file_put_contents;
use function Safe\json_decode;
use function Safe\json_encode;
use function Safe\unlink;
<<<<<<< HEAD
=======
use Filament\Schemas\Components\Grid;
use Exception;
use Illuminate\Filesystem\FilesystemAdapter;
use Aws\S3\S3Client;
use Aws\Sts\StsClient;
use function Safe\unlink;
use Filament\Actions\Action;
use function Safe\json_decode;
use function Safe\json_encode;
use Aws\Exception\AwsException;
use Illuminate\Support\Facades\Log;
use function Safe\file_put_contents;
use Illuminate\Support\Facades\Config;
use Filament\Forms\Components\Textarea;
use Illuminate\Support\Facades\Storage;

use Modules\Media\Datas\CloudFrontData;
use Filament\Notifications\Notification;
use Filament\Forms\Components\FileUpload;
use Modules\Media\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Media\Actions\CloudFront\GetCloudFrontSignedUrlAction;
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)

/**
 * S3Test Page for AWS S3 testing and diagnostics.
 *
<<<<<<< HEAD
<<<<<<< HEAD
 * @property Schema $form
=======
 * @property \Filament\Schemas\Schema $form
>>>>>>> 0a466ed (.)
=======
 * @property Schema $form
>>>>>>> 37a2da6 (.)
 * @property array<string, mixed> $debugResults
 */
class S3Test extends XotBasePage
{
<<<<<<< HEAD
<<<<<<< HEAD
    protected static null|string $cluster = Test::class;
=======
    protected static ?string $cluster = Test::class;
>>>>>>> 0a466ed (.)
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 37a2da6 (.)

    /** @var array<string, mixed> */
    public array $debugResults = [];

    private const DEFAULT_REGION = 'eu-west-1';
    private const TEST_FILE_PREFIX = 'test-upload-';
    private const PERMISSION_TEST_PREFIX = 'test-permissions-';
    private const CLOUDFRONT_TEST_FILE = 'test-file.txt';
    private const DEBUG_OUTPUT_ROWS = 15;
    private const URL_PREVIEW_LENGTH = 100;

    public function mount(): void
    {
        $this->fillForms();
    }

    /**
     * Get the forms for this page.
     *
     * @return array<string>
     */
    protected function getForms(): array
    {
        return [
            'form',
        ];
    }

    /**
     * Get the form actions for this page.
     *
     * @return array<Action>
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
    #[Override]
    protected function getFormActions(): array
    {
        return [
            Action::make('testCredentials')->color('secondary')->action('testCredentials'),
            Action::make('testS3Connection')->color('info')->action('testS3Connection'),
            Action::make('testPermissions')->color('warning')->action('testPermissions'),
            Action::make('testBucketPolicy')->color('danger')->action('testBucketPolicy'),
            Action::make('testCloudFront')->color('success')->action('testCloudFront'),
            Action::make('testFileOperations')->color('primary')->action('testFileOperations'),
            Action::make('debugConfig')->color('gray')->action('debugConfig'),
            Action::make('clearResults')->color('warning')->action('clearResults'),
            Action::make('test01')->submit('test01'),
<<<<<<< HEAD
=======
    protected function getFormActions(): array
    {

        
        return [
            Action::make('testCredentials')
                ->color('secondary')
                ->action('testCredentials'),

            Action::make('testS3Connection')
                ->color('info')
                ->action('testS3Connection'),

            Action::make('testPermissions')
                ->color('warning')
                ->action('testPermissions'),

            Action::make('testBucketPolicy')
                ->color('danger')
                ->action('testBucketPolicy'),

            Action::make('testCloudFront')
                ->color('success')
                ->action('testCloudFront'),

            Action::make('testFileOperations')
                ->color('primary')
                ->action('testFileOperations'),

            Action::make('debugConfig')
                ->color('gray')
                ->action('debugConfig'),

            Action::make('clearResults')
                ->color('warning')
                ->action('clearResults'),

            Action::make('test01')
                
                ->submit('test01'),
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
        ];
    }

    /**
     * Get the form schema for this page.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
     * @return array<int, Component>
     */
    protected function getFormSchema(): array
    {
        $prefix = Config::string('media-library.prefix');

        $attachmentDir = 'form-attachments';
        if ($prefix !== '') {
            $attachmentDir = $prefix . '/' . $attachmentDir;
        }

        return [
            Grid::make(2)->schema([
                FileUpload::make('attachment')
                    ->disk('s3')
                    ->directory($attachmentDir)
                    ->visibility('private')
                    ->columnSpan(1),
                Textarea::make('debug_output')
                    ->rows(self::DEBUG_OUTPUT_ROWS)
                    ->default($this->getDebugOutput())
                    ->disabled()
                    ->columnSpan(1),
            ]),
<<<<<<< HEAD
=======
     * @return array<int, \Filament\Schemas\Components\Component>
     */
    protected function getFormSchema(): array
    {
        $prefix=Config::string('media-library.prefix');
        
        $attachmentDir = 'form-attachments';
        if($prefix!=''){
            $attachmentDir =$prefix.'/'.$attachmentDir;
        }
        
        return [
            Grid::make(2)
                ->schema([
                    FileUpload::make('attachment')
                        ->disk('s3')
                        ->directory($attachmentDir)
                        ->visibility('private')
                        ->columnSpan(1),

                    Textarea::make('debug_output')
                        ->rows(self::DEBUG_OUTPUT_ROWS)
                        ->default($this->getDebugOutput())
                        ->disabled()
                        ->columnSpan(1),
                ]),
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
        ];
    }

    /**
     * Fill the forms with initial data.
     */
    protected function fillForms(): void
    {
        $this->form->fill([
            'debug_output' => $this->getDebugOutput(),
        ]);
    }

    /**
     * Test S3 connection.
     */
    public function testS3Connection(): void
    {
        $this->debugResults['s3_connection'] = $this->testS3ConnectionDetails();
        $this->updateDebugOutput();
    }

    /**
     * Test S3 permissions.
     */
    public function testPermissions(): void
    {
        $this->debugResults['permissions'] = $this->testS3Permissions();
        $this->updateDebugOutput();
    }

    /**
     * Test CloudFront connection.
     */
    public function testCloudFront(): void
    {
        $this->debugResults['cloudfront'] = $this->testCloudFrontConnection();
        $this->updateDebugOutput();
    }

    /**
     * Test AWS credentials.
     */
    public function testCredentials(): void
    {
        $this->debugResults['credentials'] = $this->performCredentialsTest();
        $this->updateDebugOutput();

        Notification::make()
            ->title(__('media::s3test.notifications.credentials_tested'))
            ->success()
            ->send();
    }

    /**
     * Test bucket policy.
     */
    public function testBucketPolicy(): void
    {
        $this->debugResults['bucket_policy'] = $this->checkBucketPolicy();
        $this->updateDebugOutput();

        Notification::make()
            ->title(__('media::s3test.notifications.bucket_policy_tested'))
            ->success()
            ->send();
    }

    /**
     * Test file operations.
     */
    public function testFileOperations(): void
    {
        $this->debugResults['file_operations'] = $this->testFileUploadDownload();
        $this->updateDebugOutput();

        Notification::make()
            ->title(__('media::s3test.notifications.file_operations_tested'))
            ->success()
            ->send();
    }

    /**
     * Debug configuration.
     */
    public function debugConfig(): void
    {
        $this->debugResults['config'] = $this->buildConfigDebugData();
        $this->updateDebugOutput();

        Notification::make()
            ->title(__('media::s3test.notifications.config_debugged'))
            ->success()
            ->send();
    }

    /**
     * Clear test results.
     */
    public function clearResults(): void
    {
        $this->debugResults = [];
        $this->updateDebugOutput();

        Notification::make()
            ->title(__('media::s3test.notifications.results_cleared'))
            ->success()
            ->send();
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
    public function test01(): void
    {
        $data = $this->form->getState();
        $filePath = $data['attachment'] ?? null;

<<<<<<< HEAD
<<<<<<< HEAD
        if (!$filePath) {
=======
        if (! $filePath) {
>>>>>>> 0a466ed (.)
=======
        if (!$filePath) {
>>>>>>> 37a2da6 (.)
            Notification::make()
                ->warning()
                ->title(__('media::s3test.notifications.no_attachment'))
                ->body(__('media::s3test.notifications.upload_file_first'))
                ->send();

            return;
        }

        // Generate CloudFront signed URL for attachment
        $signedUrl = app(GetCloudFrontSignedUrlAction::class)->execute((string) $filePath, 60);
        dddx([
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
            'signedurl' => $signedUrl,
            'filePath' => $filePath,
            'url2' => Storage::disk('s3')->url((string) $filePath),
            'url3' => Storage::disk('s3')->temporaryUrl((string) $filePath, now()->addMinutes(5)),
        ]);
        $this->debugResults = [];
        $this->updateDebugOutput();
<<<<<<< HEAD
=======
            'signedurl'=>$signedUrl,
            'filePath'=>$filePath,
            'url2'=>Storage::disk('s3')->url((string) $filePath),
            'url3'=>Storage::disk('s3')->temporaryUrl((string) $filePath, now()->addMinutes(5)),
        ]);
        $this->debugResults = [];
          $this->updateDebugOutput();
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
    }

    /**
     * Build configuration debug data.
     *
     * @return array<string, mixed>
     */
    private function buildConfigDebugData(): array
    {
        return [
            'title' => '📋 Configuration',
            'status' => 'info',
            'data' => [
<<<<<<< HEAD
<<<<<<< HEAD
                'AWS_ACCESS_KEY_ID' => substr((string) config('filesystems.disks.s3.key', ''), 0, 8) . '...',
=======
                'AWS_ACCESS_KEY_ID' => substr((string) config('filesystems.disks.s3.key', ''), 0, 8).'...',
>>>>>>> 0a466ed (.)
=======
                'AWS_ACCESS_KEY_ID' => substr((string) config('filesystems.disks.s3.key', ''), 0, 8) . '...',
>>>>>>> 37a2da6 (.)
                'AWS_SECRET_ACCESS_KEY' => config('filesystems.disks.s3.secret') ? '✅ Present' : '❌ Missing',
                'AWS_DEFAULT_REGION' => config('filesystems.disks.s3.region'),
                'AWS_BUCKET' => config('filesystems.disks.s3.bucket'),
                'AWS_USE_PATH_STYLE_ENDPOINT' => config('filesystems.disks.s3.use_path_style_endpoint', 'false'),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
                'CLOUDFRONT_BASE_URL' => config(
                    'services.cloudfront.base_url',
                    env('CLOUDFRONT_RESOURCE_KEY_BASE_URL'),
                ),
                'CLOUDFRONT_KEYPAIR_ID' => config('services.cloudfront.key_pair_id', env('CLOUDFRONT_KEYPAIR_ID')),
                'CLOUDFRONT_PRIVATE_KEY' => config('services.cloudfront.private_key') || env('CLOUDFRONT_PRIVATE_KEY')
                    ? '✅ Present'
                    : '❌ Missing',
<<<<<<< HEAD
=======
                'CLOUDFRONT_BASE_URL' => config('services.cloudfront.base_url', env('CLOUDFRONT_RESOURCE_KEY_BASE_URL')),
                'CLOUDFRONT_KEYPAIR_ID' => config('services.cloudfront.key_pair_id', env('CLOUDFRONT_KEYPAIR_ID')),
                'CLOUDFRONT_PRIVATE_KEY' => config('services.cloudfront.private_key') || env('CLOUDFRONT_PRIVATE_KEY') ? '✅ Present' : '❌ Missing',
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
            ],
        ];
    }

    /**
     * Perform credentials test.
     *
     * @return array<string, mixed>
     */
    private function performCredentialsTest(): array
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

            return [
                'title' => '🔐 AWS Credentials',
                'status' => 'success',
                'data' => [
                    'Valid' => '✅ Yes',
                    'Account ID' => $result['Account'],
                    'User ARN' => $result['Arn'],
                ],
            ];
        } catch (AwsException $e) {
            return [
                'title' => '🔐 AWS Credentials',
                'status' => 'error',
                'data' => [
                    'Valid' => '❌ No',
                    'Error' => $e->getAwsErrorCode() ?? 'UnknownError',
                    'Message' => $e->getMessage(),
                ],
            ];
        }
    }

    /**
     * Test S3 connection details.
     *
     * @return array<string, mixed>
     */
    private function testS3ConnectionDetails(): array
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

            // Test bucket accessibility
            $s3->headBucket(['Bucket' => config('filesystems.disks.s3.bucket')]);

            // Get bucket region
            $location = $s3->getBucketLocation(['Bucket' => config('filesystems.disks.s3.bucket')]);
            $bucketRegion = $location['LocationConstraint'] ?: 'us-east-1';

            $regionMatch = $bucketRegion === config('filesystems.disks.s3.region');

            return [
                'title' => '☁️ S3 Connection',
                'status' => 'success',
                'data' => [
                    'Bucket Accessible' => '✅ Yes',
                    'Bucket Region' => $bucketRegion,
                    'Config Region' => config('filesystems.disks.s3.region'),
                    'Region Match' => $regionMatch ? '✅ Yes' : '⚠️ No - This might cause issues',
                ],
            ];
        } catch (AwsException $e) {
            return [
                'title' => '☁️ S3 Connection',
                'status' => 'error',
                'data' => [
                    'Bucket Accessible' => '❌ No',
                    'Error Code' => $e->getAwsErrorCode() ?? 'UnknownError',
                    'Message' => $e->getMessage(),
                    'Solution' => $this->getSolutionForError($e->getAwsErrorCode() ?? null),
                ],
            ];
        }
    }

    /**
     * Test S3 permissions.
     *
     * @return array<string, mixed>
     */
    private function testS3Permissions(): array
    {
        $tests = [
            'ListBucket' => 's3:ListBucket',
            'PutObject' => 's3:PutObject',
            'GetObject' => 's3:GetObject',
            'DeleteObject' => 's3:DeleteObject',
        ];

        $results = [
            'title' => '🔒 S3 Permissions',
            'status' => 'info',
            'data' => [],
        ];

        try {
            $s3 = new S3Client([
                'region' => config('filesystems.disks.s3.region', self::DEFAULT_REGION),
                'version' => 'latest',
                'credentials' => [
                    'key' => config('filesystems.disks.s3.key'),
                    'secret' => config('filesystems.disks.s3.secret'),
                ],
            ]);

            $bucket = config('filesystems.disks.s3.bucket');
<<<<<<< HEAD
<<<<<<< HEAD
            $testKey = self::PERMISSION_TEST_PREFIX . time() . '.txt';
=======
            $testKey = self::PERMISSION_TEST_PREFIX.time().'.txt';
>>>>>>> 0a466ed (.)
=======
            $testKey = self::PERMISSION_TEST_PREFIX . time() . '.txt';
>>>>>>> 37a2da6 (.)

            // Test ListBucket
            try {
                $s3->listObjectsV2(['Bucket' => $bucket, 'MaxKeys' => 1]);
                $results['data']['ListBucket'] = '✅ OK';
            } catch (AwsException $e) {
<<<<<<< HEAD
<<<<<<< HEAD
                $results['data']['ListBucket'] = '❌ ' . ($e->getAwsErrorCode() ?? 'UnknownError');
=======
                $results['data']['ListBucket'] = '❌ '.($e->getAwsErrorCode() ?? 'UnknownError');
>>>>>>> 0a466ed (.)
=======
                $results['data']['ListBucket'] = '❌ ' . ($e->getAwsErrorCode() ?? 'UnknownError');
>>>>>>> 37a2da6 (.)
            }

            // Test PutObject
            try {
                $s3->putObject([
                    'Bucket' => $bucket,
                    'Key' => $testKey,
                    'Body' => 'Test permissions',
                    'ACL' => 'private',
                ]);
                $results['data']['PutObject'] = '✅ OK';

                // Test GetObject (only if put succeeded)
                try {
                    $s3->getObject(['Bucket' => $bucket, 'Key' => $testKey]);
                    $results['data']['GetObject'] = '✅ OK';
                } catch (AwsException $e) {
<<<<<<< HEAD
<<<<<<< HEAD
                    $results['data']['GetObject'] = '❌ ' . ($e->getAwsErrorCode() ?? 'UnknownError');
=======
                    $results['data']['GetObject'] = '❌ '.($e->getAwsErrorCode() ?? 'UnknownError');
>>>>>>> 0a466ed (.)
=======
                    $results['data']['GetObject'] = '❌ ' . ($e->getAwsErrorCode() ?? 'UnknownError');
>>>>>>> 37a2da6 (.)
                }

                // Test DeleteObject (cleanup)
                try {
                    $s3->deleteObject(['Bucket' => $bucket, 'Key' => $testKey]);
                    $results['data']['DeleteObject'] = '✅ OK';
                } catch (AwsException $e) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
                    $results['data']['DeleteObject'] = '❌ ' . ($e->getAwsErrorCode() ?? 'UnknownError');
                }
            } catch (AwsException $e) {
                $results['data']['PutObject'] = '❌ ' . ($e->getAwsErrorCode() ?? 'UnknownError');
<<<<<<< HEAD
=======
                    $results['data']['DeleteObject'] = '❌ '.($e->getAwsErrorCode() ?? 'UnknownError');
                }
            } catch (AwsException $e) {
                $results['data']['PutObject'] = '❌ '.($e->getAwsErrorCode() ?? 'UnknownError');
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
                $results['data']['GetObject'] = 'Skipped (PutObject failed)';
                $results['data']['DeleteObject'] = 'Skipped (PutObject failed)';
            }

            $results['status'] = 'success';
        } catch (Exception $e) {
            $results['status'] = 'error';
            $results['data']['Error'] = $e->getMessage();
        }

        return $results;
    }

    /**
     * Check bucket policy.
     *
     * @return array<string, mixed>
     */
    private function checkBucketPolicy(): array
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

            $policy = $s3->getBucketPolicy(['Bucket' => config('filesystems.disks.s3.bucket')]);

            return [
                'title' => '📜 Bucket Policy',
                'status' => 'info',
                'data' => [
                    'Policy Exists' => '✅ Yes',
                    'Policy' => json_encode(json_decode((string) $policy['Policy']), JSON_PRETTY_PRINT),
                ],
            ];
        } catch (AwsException $e) {
            if (($e->getAwsErrorCode() ?? '') === 'NoSuchBucketPolicy') {
                return [
                    'title' => '📜 Bucket Policy',
                    'status' => 'info',
                    'data' => [
                        'Policy Exists' => 'ℹ️ No (This is usually OK)',
                    ],
                ];
            }

            return [
                'title' => '📜 Bucket Policy',
                'status' => 'error',
                'data' => [
                    'Error' => $e->getAwsErrorCode() ?? 'UnknownError',
                    'Message' => $e->getMessage(),
                ],
            ];
        }
    }

    /**
     * Test CloudFront connection.
     *
     * @return array<string, mixed>
     */
    private function testCloudFrontConnection(): array
    {
        try {
            // Test CloudFront configuration
            $baseUrl = config('services.cloudfront.base_url', env('CLOUDFRONT_RESOURCE_KEY_BASE_URL'));
            $keyPairId = config('services.cloudfront.key_pair_id', env('CLOUDFRONT_KEYPAIR_ID'));
            $privateKey = config('services.cloudfront.private_key', env('CLOUDFRONT_PRIVATE_KEY'));

<<<<<<< HEAD
<<<<<<< HEAD
            if (!$baseUrl || !$keyPairId || !$privateKey) {
=======
            if (! $baseUrl || ! $keyPairId || ! $privateKey) {
>>>>>>> 0a466ed (.)
=======
            if (!$baseUrl || !$keyPairId || !$privateKey) {
>>>>>>> 37a2da6 (.)
                return [
                    'title' => '☁️ CloudFront',
                    'status' => 'error',
                    'data' => [
                        'Configuration' => '❌ Incomplete',
                        'Missing' => collect([
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
                            'Base URL' => !$baseUrl,
                            'Key Pair ID' => !$keyPairId,
                            'Private Key' => !$privateKey,
                        ])
                            ->filter()
                            ->keys()
                            ->implode(', '),
<<<<<<< HEAD
=======
                            'Base URL' => ! $baseUrl,
                            'Key Pair ID' => ! $keyPairId,
                            'Private Key' => ! $privateKey,
                        ])->filter()->keys()->implode(', '),
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
                    ],
                ];
            }

            // Test signed URL generation
            $testUrl = app(GetCloudFrontSignedUrlAction::class)->execute(self::CLOUDFRONT_TEST_FILE, 5);

            return [
                'title' => '☁️ CloudFront',
                'status' => 'success',
                'data' => [
                    'Configuration' => '✅ Complete',
                    'Base URL' => $baseUrl,
                    'Key Pair ID' => $keyPairId,
                    'Signed URL Test' => '✅ Success',
<<<<<<< HEAD
<<<<<<< HEAD
                    'Sample URL' => substr((string) $testUrl, 0, self::URL_PREVIEW_LENGTH) . '...',
=======
                    'Sample URL' => substr((string) $testUrl, 0, self::URL_PREVIEW_LENGTH).'...',
>>>>>>> 0a466ed (.)
=======
                    'Sample URL' => substr((string) $testUrl, 0, self::URL_PREVIEW_LENGTH) . '...',
>>>>>>> 37a2da6 (.)
                ],
            ];
        } catch (Exception $e) {
            return [
                'title' => '☁️ CloudFront',
                'status' => 'error',
                'data' => [
                    'Error' => $e->getMessage(),
                ],
            ];
        }
    }

    /**
     * Get solution for AWS error.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    private function getSolutionForError(null|string $errorCode): string
=======
    private function getSolutionForError(?string $errorCode): string
>>>>>>> 0a466ed (.)
=======
    private function getSolutionForError(null|string $errorCode): string
>>>>>>> 37a2da6 (.)
    {
        if (null === $errorCode) {
            return 'Unknown error - check AWS credentials and configuration';
        }

        $solutions = [
            'AccessDenied' => 'Check IAM permissions for your AWS user',
            'SignatureDoesNotMatch' => 'Verify AWS_SECRET_ACCESS_KEY in .env',
            'InvalidAccessKeyId' => 'Check AWS_ACCESS_KEY_ID in .env',
            'NoSuchBucket' => 'Verify bucket name and region',
            'BucketRegionError' => 'Update AWS_DEFAULT_REGION to match bucket region',
        ];

<<<<<<< HEAD
<<<<<<< HEAD
        return $solutions[$errorCode] ?? ('Check AWS documentation for error: ' . $errorCode);
=======
        return $solutions[$errorCode] ?? 'Check AWS documentation for error: '.$errorCode;
>>>>>>> 0a466ed (.)
=======
        return $solutions[$errorCode] ?? ('Check AWS documentation for error: ' . $errorCode);
>>>>>>> 37a2da6 (.)
    }

    /**
     * Get debug output.
     */
    private function getDebugOutput(): string
    {
        if (empty($this->debugResults)) {
            return __('media::s3test.debug.run_tests_message');
        }

        $output = [];
        foreach ($this->debugResults as $category => $result) {
<<<<<<< HEAD
<<<<<<< HEAD
            if (!is_array($result) || !isset($result['title'], $result['status'], $result['data'])) {
=======
            if (! is_array($result) || ! isset($result['title'], $result['status'], $result['data'])) {
>>>>>>> 0a466ed (.)
=======
            if (!is_array($result) || !isset($result['title'], $result['status'], $result['data'])) {
>>>>>>> 37a2da6 (.)
                continue;
            }

            $title = (string) $result['title'];
            $status = (string) $result['status'];
            $data = $result['data'];

            $output[] = "=== {$title} ===";
            $output[] = "Status: {$status}";
            $output[] = '';

            if (is_array($data)) {
                foreach ($data as $key => $value) {
                    $keyStr = (string) $key;
                    if (is_array($value)) {
<<<<<<< HEAD
<<<<<<< HEAD
                        $output[] = "{$keyStr}: " . json_encode($value, JSON_PRETTY_PRINT);
=======
                        $output[] = "{$keyStr}: ".json_encode($value, JSON_PRETTY_PRINT);
>>>>>>> 0a466ed (.)
=======
                        $output[] = "{$keyStr}: " . json_encode($value, JSON_PRETTY_PRINT);
>>>>>>> 37a2da6 (.)
                    } else {
                        $valueStr = (string) $value;
                        $output[] = "{$keyStr}: {$valueStr}";
                    }
                }
            }

            $output[] = '';
            $output[] = str_repeat('-', 50);
            $output[] = '';
        }

        return implode("\n", $output);
    }

    /**
     * Send email with attachment.
     */
    public function sendEmail(): void
    {
        try {
            $data = $this->form->getState();
            $filePath = $data['attachment'] ?? null;

<<<<<<< HEAD
<<<<<<< HEAD
            if (!$filePath) {
=======
            if (! $filePath) {
>>>>>>> 0a466ed (.)
=======
            if (!$filePath) {
>>>>>>> 37a2da6 (.)
                Notification::make()
                    ->warning()
                    ->title(__('media::s3test.notifications.no_attachment'))
                    ->body(__('media::s3test.notifications.upload_file_first'))
                    ->send();

                return;
            }

            // Generate CloudFront signed URL for attachment
            $signedUrl = app(GetCloudFrontSignedUrlAction::class)->execute((string) $filePath, 60);

            // Log the email data for testing purposes (no actual email sent)
            Log::info('S3 Test Email Data', [
                'attachment_path' => $filePath,
                'signed_url' => $signedUrl,
                'timestamp' => now()->toISOString(),
            ]);

            Notification::make()
                ->success()
                ->title(__('media::s3test.notifications.email_sent'))
                ->body(__('media::s3test.notifications.email_with_attachment'))
                ->send();
        } catch (Exception $e) {
            Log::error('S3 Test Email Failed', [
                'error' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);

            Notification::make()
                ->danger()
                ->title(__('media::s3test.notifications.email_failed'))
                ->body($e->getMessage())
                ->send();
        }
    }

    /**
     * Test file upload and download operations.
     *
     * @return array<string, mixed>
     */
    private function testFileUploadDownload(): array
    {
        try {
            $testData = 'This is a test file content for S3 upload/download test.';
<<<<<<< HEAD
<<<<<<< HEAD
            $testFileName = 'test-file-' . time() . '.txt';
            $localTestPath = sys_get_temp_dir() . '/' . $testFileName;
=======
            $testFileName = 'test-file-'.time().'.txt';
            $localTestPath = sys_get_temp_dir().'/'.$testFileName;
>>>>>>> 0a466ed (.)
=======
            $testFileName = 'test-file-' . time() . '.txt';
            $localTestPath = sys_get_temp_dir() . '/' . $testFileName;
>>>>>>> 37a2da6 (.)

            // Create test file
            file_put_contents($localTestPath, $testData);

            // Test upload
            $uploadResult = Storage::disk('s3')->put($testFileName, $testData);

<<<<<<< HEAD
<<<<<<< HEAD
            if (!$uploadResult) {
=======
            if (! $uploadResult) {
>>>>>>> 0a466ed (.)
=======
            if (!$uploadResult) {
>>>>>>> 37a2da6 (.)
                return [
                    'status' => 'error',
                    'message' => 'Failed to upload test file to S3',
                    'details' => ['file' => $testFileName],
                ];
            }

            // Test download
            $downloadedContent = Storage::disk('s3')->get($testFileName);

            if ($downloadedContent !== $testData) {
                return [
                    'status' => 'error',
                    'message' => 'Downloaded content does not match uploaded content',
                    'details' => [
                        'expected_length' => strlen($testData),
                        'actual_length' => strlen($downloadedContent ?? ''),
                    ],
                ];
            }

            // Test file info
            $exists = Storage::disk('s3')->exists($testFileName);
            $size = Storage::disk('s3')->size($testFileName);

            // Cleanup
            Storage::disk('s3')->delete($testFileName);
            unlink($localTestPath);

            return [
                'status' => 'success',
                'message' => 'File upload/download test completed successfully',
                'details' => [
                    'file_uploaded' => true,
                    'file_downloaded' => true,
                    'content_verified' => true,
                    'file_exists_check' => $exists,
                    'file_size' => $size,
                    'cleanup_completed' => true,
                    'test_file' => $testFileName,
                ],
            ];
        } catch (Exception $e) {
            return [
                'status' => 'error',
<<<<<<< HEAD
<<<<<<< HEAD
                'message' => 'File operations test failed: ' . $e->getMessage(),
=======
                'message' => 'File operations test failed: '.$e->getMessage(),
>>>>>>> 0a466ed (.)
=======
                'message' => 'File operations test failed: ' . $e->getMessage(),
>>>>>>> 37a2da6 (.)
                'details' => [
                    'error_class' => get_class($e),
                    'error_file' => $e->getFile(),
                    'error_line' => $e->getLine(),
                ],
            ];
        }
    }

    /**
     * Update debug output.
     */
    private function updateDebugOutput(): void
    {
        $this->form->fill([
            'debug_output' => $this->getDebugOutput(),
        ]);
    }

    /**
     * Save and test S3 operations.
     */
    public function save(): void
    {
        try {
            // Test basic S3 operation
<<<<<<< HEAD
<<<<<<< HEAD
            $filename = self::TEST_FILE_PREFIX . time() . '.txt';
=======
            $filename = self::TEST_FILE_PREFIX.time().'.txt';
>>>>>>> 0a466ed (.)
=======
            $filename = self::TEST_FILE_PREFIX . time() . '.txt';
>>>>>>> 37a2da6 (.)
            Storage::disk('s3')->put($filename, 'Hello World from Filament Test');

            // Test CloudFront signed URL
            $cloudFrontUrl = app(GetCloudFrontSignedUrlAction::class)->execute($filename, 5);

            // Test Laravel temporary URL
            /** @var FilesystemAdapter $s3Disk */
            $s3Disk = Storage::disk('s3');
            $temporaryUrl = $s3Disk->temporaryUrl($filename, now()->addMinutes(5));

            $data = $this->form->getState();
            $filePath = $data['attachment'] ?? null;

            $results = [
                'test_file' => [
                    'path' => $filename,
                    'cloudfront_url' => $cloudFrontUrl,
                    'temporary_url' => $temporaryUrl,
                ],
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 37a2da6 (.)
                'uploaded_file' => $filePath
                    ? [
                        'path' => (string) $filePath,
                        'cloudfront_url' => app(GetCloudFrontSignedUrlAction::class)->execute((string) $filePath, 30),
                        'temporary_url' => $s3Disk->temporaryUrl((string) $filePath, now()->addMinutes(30)),
                    ] : null,
<<<<<<< HEAD
=======
                'uploaded_file' => $filePath ? [
                    'path' => (string) $filePath,
                    'cloudfront_url' => app(GetCloudFrontSignedUrlAction::class)->execute((string) $filePath, 30),
                    'temporary_url' => $s3Disk->temporaryUrl((string) $filePath, now()->addMinutes(30)),
                ] : null,
>>>>>>> 0a466ed (.)
=======
>>>>>>> 37a2da6 (.)
            ];

            // Clean up test file
            Storage::disk('s3')->delete($filename);

            Notification::make()
                ->success()
                ->title(__('media::s3test.notifications.s3_test_successful'))
                ->body(__('media::s3test.notifications.operations_completed'))
                ->send();

            // Log results for debugging
            Log::info('S3 Test Results', $results);
        } catch (Exception $e) {
            Notification::make()
                ->danger()
                ->title(__('media::s3test.notifications.test_failed'))
                ->body($e->getMessage())
                ->send();

            // Log error for debugging
            Log::error('S3 Test Failed', [
                'error' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
            ]);
        }
    }
}
