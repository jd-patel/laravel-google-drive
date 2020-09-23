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
		try{

			$google_drive_folder_id = 'FOLDER_ID';

			$Drivefiles = collect(Storage::disk('google')->listContents($google_drive_folder_id, false));

		}catch(\Exception $e){

			\Log::debug($e);
		}
	}

	/**
	 * Put file on google drive
	 *
	 * @return array
	 */
	public function putFile()
	{
		try{
			
			Storage::disk('google')->put('test.txt', 'This is test file!');

			return redirect()->route('dashboard')
			->with('message','File uploaded successfully.');

		}catch(\Exception $e){
			
			\Log::debug($e);
		}
	}

	/**
	 * List all the directories and files from the drive
	 *
	 * @return array
	 */
	public function listData()
	{
		try{
			
			// Parent folder ID to get data under the folder.
			$folder_id = 'FOLDER_ID';

			// Get the directory contents.
			$recursive = false; // If you want sub directories make it 'true'.
			$directory_contents = collect(Storage::disk('google')->listContents($folder_id, $recursive));

		}catch(\Exception $e){
			
			\Log::debug($e);
		}
	}

	/**
	 * Get the file stream from the drive file path
	 *
	 * @return array
	 */
	public function getFile()
	{
		try{
	
			$path = 'File Path Which You Get From Function listData';
			$getFile = Storage::disk('google')->get($path);

		}catch(\Exception $e){
			
			\Log::debug($e);
		}
	}

	/**
	 * Download drive file from the file path in local
	 *
	 * @return array
	 */
	public function downloadFileToLocal()
	{
		try{
			
			// Parent folder ID to get data under the folder.
			$folder_id = 'FOLDER_ID';

			// Get the directory contents.
			$recursive = false; // If you want sub directories make it 'true'.

			//This will return all the file under the given Folder ID
			$directory_contents = collect(Storage::disk('google')->listContents($folder_id, $recursive))
			->where('type','file');

			foreach ($directory_contents as $key => $directory_content) {

				$FileName		= $directory_content['name'];
				$Filepath		= $directory_content['path'];
				$Fileextension	= $directory_content['extension'];
				$FileMimeType	= $directory_content['mimetype'];
				$FileNameWithoutExt	= $directory_content['filename'];
			}
			
			// Store the file in local.
			$fileStream		= Storage::disk('google')->getDriver()->readStream($Filepath);
			$newFileName	= time().$FileName;

			// You can also use file put content.
			// $storage_path	= storage_path($newFileName);
			// file_put_contents($storage_path, stream_get_contents($fileStream), FILE_APPEND);

			// Storage::disk('local')->put($newFileName, stream_get_contents($fileStream));

		}catch(\Exception $e){
			
			\Log::debug($e);
		}
	}
}