#Install Laravel Latest Version (8.x)
#Laravel 8.x required PHP Version >= 7.3

laravel new Laravel_google_drive_s3

Include Google Drive File System in Composer and update composer

"nao-pon/flysystem-google-drive": "~1.1"

Include GoogleDriveAdapter.php and GoogleDriveServiceProvider.php into "app/providers"

Add App\Providers\GoogleDriveServiceProvider::class, in "config/app.php"

Add disk "google" into "config/filesystems.php"

'google' => [
    'driver' => 'google',
    'clientId' => env('GOOGLE_DRIVE_CLIENT_ID'),
    'clientSecret' => env('GOOGLE_DRIVE_CLIENT_SECRET'),
    'refreshToken' => env('GOOGLE_DRIVE_REFRESH_TOKEN'),
    'folderId' => env('GOOGLE_DRIVE_FOLDER_ID'),
],

#Create your Google Drive API keys