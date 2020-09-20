<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class GoogleDriveController extends Controller
{
    /**
	 * List all the files under the google drive folder ID
	 *
	 * @return array
	 */
    public function listFiles()
    {
    	$google_drive_folder_id = 'FOLDER_ID';
    	$Drivefiles = collect(Storage::disk('google')->listContents($google_drive_folder_id, false));
    	
    	echo "<pre>";
    		print_r($Drivefiles);
    	echo "</pre>";
    }
}
