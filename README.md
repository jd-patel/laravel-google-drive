# AWS and Google Drive Storage with Laravel

## Demo Project With Laravel 8x

To install laravel latest version please type below command in your terminal

<code>laravel new YOUR_PROJECT_NAME</code>

Or you can setup demo project locally

<code>git clone git@github.com:jd-patel/laravel-google-drive-s3.git</code>

## Install google drive package to your project

Add this command in your composer.json and update composer through terminal

<code>"nao-pon/flysystem-google-drive": "~1.1"</code>

Add [GoogleDriveAdapter](https://github.com/jd-patel/laravel-google-drive-s3/blob/master/app/Providers/GoogleDriveAdapter.php) and [GoogleDriveServiceProvider](https://github.com/jd-patel/laravel-google-drive-s3/blob/master/app/Providers/GoogleDriveServiceProvider.php) into "app/providers"

Add App\Providers\GoogleDriveServiceProvider::class, in "config/app.php"

Add disk "google" into "config/filesystems.php"
<code>
'google' => [
    'driver' => 'google',
    'clientId' => env('GOOGLE_DRIVE_CLIENT_ID'),
    'clientSecret' => env('GOOGLE_DRIVE_CLIENT_SECRET'),
    'refreshToken' => env('GOOGLE_DRIVE_REFRESH_TOKEN'),
    'folderId' => env('GOOGLE_DRIVE_FOLDER_ID'),
]
</code>