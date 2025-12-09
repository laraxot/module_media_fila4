<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Aws\Exception\AwsException;
use Aws\S3\S3Client;
use Aws\Sts\StsClient;
use Exception;
=======
=======
>>>>>>> 446bc61 (.)
=======
>>>>>>> 36d5713 (.)
=======
>>>>>>> 1a0067b (.)
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;
=======
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Grid;
>>>>>>> 739e4b7 (.)
use Exception;
use Illuminate\Filesystem\FilesystemAdapter;
use Aws\Exception\AwsException;
use Aws\S3\S3Client;
use Aws\Sts\StsClient;
>>>>>>> 5200b63 (.)
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Notifications\Notification;
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;
use Illuminate\Filesystem\FilesystemAdapter;
=======
>>>>>>> 5200b63 (.)
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Modules\Media\Actions\CloudFront\GetCloudFrontSignedUrlAction;
<<<<<<< HEAD
use Modules\Media\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Override;
=======
use Modules\Media\Datas\CloudFrontData;
use Modules\Media\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
>>>>>>> 5200b63 (.)

use function Safe\file_put_contents;
use function Safe\json_decode;
use function Safe\json_encode;
use function Safe\unlink;

/**
 * S3Test Page for AWS S3 testing and diagnostics.
 *
<<<<<<< HEAD
 * @property array<string, mixed> $debugResults
<<<<<<< HEAD
 *
=======
>>>>>>> 5200b63 (.)
 * @phpstan-ignore-next-line
=======
 * @property Schema $form
 * @property array<string, mixed> $debugResults
>>>>>>> 739e4b7 (.)
 */
class S3Test extends XotBasePage
{
<<<<<<< HEAD
    protected static ?string $cluster = Test::class;
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 5200b63 (.)

    /** @var array<string, mixed> */
    public array $debugResults = [];

    private const DEFAULT_REGION = 'eu-west-1';
<<<<<<< HEAD

    private const TEST_FILE_PREFIX = 'test-upload-';

    private const PERMISSION_TEST_PREFIX = 'test-permissions-';

    private const CLOUDFRONT_TEST_FILE = 'test-file.txt';

    private const DEBUG_OUTPUT_ROWS = 15;

=======
    private const TEST_FILE_PREFIX = 'test-upload-';
    private const PERMISSION_TEST_PREFIX = 'test-permissions-';
    private const CLOUDFRONT_TEST_FILE = 'test-file.txt';
    private const DEBUG_OUTPUT_ROWS = 15;
>>>>>>> 5200b63 (.)
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
        ];
    }

    /**
     * Get the form schema for this page.
     *
     * @return array<int, Component>
     */
    protected function getFormSchema(): array
    {
        $prefix = Config::string('media-library.prefix');

        $attachmentDir = 'form-attachments';
        if ($prefix !== '') {
<<<<<<< HEAD
            $attachmentDir = $prefix.'/'.$attachmentDir;
=======
            $attachmentDir = $prefix . '/' . $attachmentDir;
>>>>>>> 5200b63 (.)
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
        ];
    }

    /**
     * Fill the forms with initial data.
     */
    protected function fillForms(): void
    {
<<<<<<< HEAD
        /** @phpstan-ignore-next-line */
=======
>>>>>>> 739e4b7 (.)
        $this->form->fill([
            'debug_output' => $this->getDebugOutput(),
        ]);
    }

    /**
     * Test S3 connection.
     */
<<<<<<< HEAD
    public function test_s3_connection(): void
    {
        $this->debugResults['s3_connection'] = $this->test_s3_connection_details();
=======
    public function testS3Connection(): void
    {
        $this->debugResults['s3_connection'] = $this->testS3ConnectionDetails();
>>>>>>> 5200b63 (.)
        $this->updateDebugOutput();
    }

    /**
     * Test S3 permissions.
     */
<<<<<<< HEAD
    public function test_permissions(): void
    {
        $this->debugResults['permissions'] = $this->test_s3_permissions();
=======
    public function testPermissions(): void
    {
        $this->debugResults['permissions'] = $this->testS3Permissions();
>>>>>>> 5200b63 (.)
        $this->updateDebugOutput();
    }

    /**
     * Test CloudFront connection.
     */
<<<<<<< HEAD
    public function test_cloud_front(): void
    {
        $this->debugResults['cloudfront'] = $this->test_cloud_front_connection();
=======
    public function testCloudFront(): void
    {
        $this->debugResults['cloudfront'] = $this->testCloudFrontConnection();
>>>>>>> 5200b63 (.)
        $this->updateDebugOutput();
    }

    /**
     * Test AWS credentials.
     */
<<<<<<< HEAD
    public function test_credentials(): void
=======
    public function testCredentials(): void
>>>>>>> 5200b63 (.)
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
<<<<<<< HEAD
    public function test_bucket_policy(): void
=======
    public function testBucketPolicy(): void
>>>>>>> 5200b63 (.)
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
<<<<<<< HEAD
    public function test_file_operations(): void
    {
        $this->debugResults['file_operations'] = $this->test_file_upload_download();
=======
    public function testFileOperations(): void
    {
        $this->debugResults['file_operations'] = $this->testFileUploadDownload();
>>>>>>> 5200b63 (.)
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

    public function test01(): void
    {
<<<<<<< HEAD
        /** @phpstan-ignore-next-line */
=======
>>>>>>> 739e4b7 (.)
        $data = $this->form->getState();
        $filePath = $data['attachment'] ?? null;

<<<<<<< HEAD
        if (! $filePath) {
=======
        if (!$filePath) {
>>>>>>> 5200b63 (.)
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
            'signedurl' => $signedUrl,
            'filePath' => $filePath,
            'url2' => Storage::disk('s3')->url((string) $filePath),
            'url3' => Storage::disk('s3')->temporaryUrl((string) $filePath, now()->addMinutes(5)),
        ]);
        $this->debugResults = [];
        $this->updateDebugOutput();
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
                'AWS_ACCESS_KEY_ID' => substr((string) config('filesystems.disks.s3.key', ''), 0, 8).'...',
=======
                'AWS_ACCESS_KEY_ID' => substr((string) config('filesystems.disks.s3.key', ''), 0, 8) . '...',
>>>>>>> 5200b63 (.)
                'AWS_SECRET_ACCESS_KEY' => config('filesystems.disks.s3.secret') ? '✅ Present' : '❌ Missing',
                'AWS_DEFAULT_REGION' => config('filesystems.disks.s3.region'),
                'AWS_BUCKET' => config('filesystems.disks.s3.bucket'),
                'AWS_USE_PATH_STYLE_ENDPOINT' => config('filesystems.disks.s3.use_path_style_endpoint', 'false'),
                'CLOUDFRONT_BASE_URL' => config(
                    'services.cloudfront.base_url',
                    env('CLOUDFRONT_RESOURCE_KEY_BASE_URL'),
                ),
                'CLOUDFRONT_KEYPAIR_ID' => config('services.cloudfront.key_pair_id', env('CLOUDFRONT_KEYPAIR_ID')),
                'CLOUDFRONT_PRIVATE_KEY' => config('services.cloudfront.private_key') || env('CLOUDFRONT_PRIVATE_KEY')
                    ? '✅ Present'
                    : '❌ Missing',
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
<<<<<<< HEAD
    private function test_s3_connection_details(): array
=======
    private function testS3ConnectionDetails(): array
>>>>>>> 5200b63 (.)
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
<<<<<<< HEAD
    private function test_s3_permissions(): array
=======
    private function testS3Permissions(): array
>>>>>>> 5200b63 (.)
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
            $testKey = self::PERMISSION_TEST_PREFIX.time().'.txt';
=======
            $testKey = self::PERMISSION_TEST_PREFIX . time() . '.txt';
>>>>>>> 5200b63 (.)

            // Test ListBucket
            try {
                $s3->listObjectsV2(['Bucket' => $bucket, 'MaxKeys' => 1]);
                $results['data']['ListBucket'] = '✅ OK';
            } catch (AwsException $e) {
<<<<<<< HEAD
                $results['data']['ListBucket'] = '❌ '.($e->getAwsErrorCode() ?? 'UnknownError');
=======
                $results['data']['ListBucket'] = '❌ ' . ($e->getAwsErrorCode() ?? 'UnknownError');
>>>>>>> 5200b63 (.)
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
                    $results['data']['GetObject'] = '❌ '.($e->getAwsErrorCode() ?? 'UnknownError');
=======
                    $results['data']['GetObject'] = '❌ ' . ($e->getAwsErrorCode() ?? 'UnknownError');
>>>>>>> 5200b63 (.)
                }

                // Test DeleteObject (cleanup)
                try {
                    $s3->deleteObject(['Bucket' => $bucket, 'Key' => $testKey]);
                    $results['data']['DeleteObject'] = '✅ OK';
                } catch (AwsException $e) {
<<<<<<< HEAD
                    $results['data']['DeleteObject'] = '❌ '.($e->getAwsErrorCode() ?? 'UnknownError');
                }
            } catch (AwsException $e) {
                $results['data']['PutObject'] = '❌ '.($e->getAwsErrorCode() ?? 'UnknownError');
=======
                    $results['data']['DeleteObject'] = '❌ ' . ($e->getAwsErrorCode() ?? 'UnknownError');
                }
            } catch (AwsException $e) {
                $results['data']['PutObject'] = '❌ ' . ($e->getAwsErrorCode() ?? 'UnknownError');
>>>>>>> 5200b63 (.)
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
<<<<<<< HEAD
    private function test_cloud_front_connection(): array
=======
    private function testCloudFrontConnection(): array
>>>>>>> 5200b63 (.)
    {
        try {
            // Test CloudFront configuration
            $baseUrl = config('services.cloudfront.base_url', env('CLOUDFRONT_RESOURCE_KEY_BASE_URL'));
            $keyPairId = config('services.cloudfront.key_pair_id', env('CLOUDFRONT_KEYPAIR_ID'));
            $privateKey = config('services.cloudfront.private_key', env('CLOUDFRONT_PRIVATE_KEY'));

<<<<<<< HEAD
            if (! $baseUrl || ! $keyPairId || ! $privateKey) {
=======
            if (!$baseUrl || !$keyPairId || !$privateKey) {
>>>>>>> 5200b63 (.)
                return [
                    'title' => '☁️ CloudFront',
                    'status' => 'error',
                    'data' => [
                        'Configuration' => '❌ Incomplete',
                        'Missing' => collect([
<<<<<<< HEAD
                            'Base URL' => ! $baseUrl,
                            'Key Pair ID' => ! $keyPairId,
                            'Private Key' => ! $privateKey,
=======
                            'Base URL' => !$baseUrl,
                            'Key Pair ID' => !$keyPairId,
                            'Private Key' => !$privateKey,
>>>>>>> 5200b63 (.)
                        ])
                            ->filter()
                            ->keys()
                            ->implode(', '),
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
                    'Sample URL' => substr((string) $testUrl, 0, self::URL_PREVIEW_LENGTH).'...',
=======
                    'Sample URL' => substr((string) $testUrl, 0, self::URL_PREVIEW_LENGTH) . '...',
>>>>>>> 5200b63 (.)
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
    private function getSolutionForError(?string $errorCode): string
    {
        if ($errorCode === null) {
=======
    private function getSolutionForError(null|string $errorCode): string
    {
        if (null === $errorCode) {
>>>>>>> 5200b63 (.)
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
        return $solutions[$errorCode] ?? ('Check AWS documentation for error: '.$errorCode);
=======
        return $solutions[$errorCode] ?? ('Check AWS documentation for error: ' . $errorCode);
>>>>>>> 5200b63 (.)
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
            if (! is_array($result) || ! isset($result['title'], $result['status'], $result['data'])) {
=======
            if (!is_array($result) || !isset($result['title'], $result['status'], $result['data'])) {
>>>>>>> 5200b63 (.)
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
                        $output[] = "{$keyStr}: ".json_encode($value, JSON_PRETTY_PRINT);
=======
                        $output[] = "{$keyStr}: " . json_encode($value, JSON_PRETTY_PRINT);
>>>>>>> 5200b63 (.)
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
<<<<<<< HEAD
            /** @phpstan-ignore-next-line */
=======
>>>>>>> 739e4b7 (.)
            $data = $this->form->getState();
            $filePath = $data['attachment'] ?? null;

<<<<<<< HEAD
            if (! $filePath) {
=======
            if (!$filePath) {
>>>>>>> 5200b63 (.)
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
<<<<<<< HEAD
    private function test_file_upload_download(): array
    {
        try {
            $testData = 'This is a test file content for S3 upload/download test.';
            $testFileName = 'test-file-'.time().'.txt';
            $localTestPath = sys_get_temp_dir().'/'.$testFileName;
=======
    private function testFileUploadDownload(): array
    {
        try {
            $testData = 'This is a test file content for S3 upload/download test.';
            $testFileName = 'test-file-' . time() . '.txt';
            $localTestPath = sys_get_temp_dir() . '/' . $testFileName;
>>>>>>> 5200b63 (.)

            // Create test file
            file_put_contents($localTestPath, $testData);

            // Test upload
            $uploadResult = Storage::disk('s3')->put($testFileName, $testData);

<<<<<<< HEAD
            if (! $uploadResult) {
=======
            if (!$uploadResult) {
>>>>>>> 5200b63 (.)
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
                'message' => 'File operations test failed: '.$e->getMessage(),
=======
                'message' => 'File operations test failed: ' . $e->getMessage(),
>>>>>>> 5200b63 (.)
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
<<<<<<< HEAD
        /** @phpstan-ignore-next-line */
=======
>>>>>>> 739e4b7 (.)
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
            $filename = self::TEST_FILE_PREFIX.time().'.txt';
=======
            $filename = self::TEST_FILE_PREFIX . time() . '.txt';
>>>>>>> 5200b63 (.)
            Storage::disk('s3')->put($filename, 'Hello World from Filament Test');

            // Test CloudFront signed URL
            $cloudFrontUrl = app(GetCloudFrontSignedUrlAction::class)->execute($filename, 5);

            // Test Laravel temporary URL
            /** @var FilesystemAdapter $s3Disk */
            $s3Disk = Storage::disk('s3');
            $temporaryUrl = $s3Disk->temporaryUrl($filename, now()->addMinutes(5));

<<<<<<< HEAD
            /** @phpstan-ignore-next-line */
=======
>>>>>>> 739e4b7 (.)
            $data = $this->form->getState();
            $filePath = $data['attachment'] ?? null;

            $results = [
                'test_file' => [
                    'path' => $filename,
                    'cloudfront_url' => $cloudFrontUrl,
                    'temporary_url' => $temporaryUrl,
                ],
                'uploaded_file' => $filePath
                    ? [
                        'path' => (string) $filePath,
                        'cloudfront_url' => app(GetCloudFrontSignedUrlAction::class)->execute((string) $filePath, 30),
                        'temporary_url' => $s3Disk->temporaryUrl((string) $filePath, now()->addMinutes(30)),
                    ] : null,
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
