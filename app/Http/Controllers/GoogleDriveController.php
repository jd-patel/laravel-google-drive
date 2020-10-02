<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class GoogleDriveController extends Controller
{
	/**
	 * List all the files from the google drive folder ID
	 *
	 * @return array
	 */
	public function listFiles()
	{
		/*try{

			$google_drive_folder_id = 'FOLDER_ID';

			$Drivefiles = collect(Storage::disk('google')->listContents($google_drive_folder_id, false));

		}catch(\Exception $e){

			\Log::debug($e);
		}*/
		return view('google.listfiles');
	}

	/**
	 * List all the directories and files from the drive
	 *
	 * @return array
	 */
	public function listData()
	{
		/*try{
			
			// Parent folder ID to get data under the folder.
			$folder_id = 'FOLDER_ID';

			// Get the directory contents.
			$recursive = false; // If you want sub directories make it 'true'.
			$directory_contents = collect(Storage::disk('google')->listContents($folder_id, $recursive));

		}catch(\Exception $e){
			
			\Log::debug($e);
		}*/

		return view('google.listdata');
	}

	/**
	 * Put file on google drive
	 *
	 * @return array
	 */
	public function putFile()
	{
		/*try{
			
			$dirPath = 'Directory Path Which You Get From List All Data';
			Storage::disk('google')->put($dirPath.'/test.txt', 'This is test file!');

		}catch(\Exception $e){
			
			\Log::debug($e);
		}*/

		return view('google.putfiles');
	}

	/**
	 * Get the file stream from the drive file path
	 *
	 * @return array
	 */
	public function getFile()
	{
		/*try{
	
			$Filepath = 'File Path Which You Get From List All Data';
			$getFile = Storage::disk('google')->get($Filepath);

		}catch(\Exception $e){
			
			\Log::debug($e);
		}*/

		return view('google.getdrivefile');
	}

	/**
	 * Download drive file from the file path in local
	 *
	 * @return array
	 */
	public function downloadFileToLocal()
	{
		/*try{
			
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
			
				// Store the file in local.
				$fileStream		= Storage::disk('google')->getDriver()->readStream($Filepath);
				$newFileName	= time().$FileName;

				// You can also use file put content.
				// $storage_path	= storage_path($newFileName);
				// file_put_contents($storage_path, stream_get_contents($fileStream), FILE_APPEND);

				// Storage::disk('local')->put($newFileName, stream_get_contents($fileStream));
			}

		}catch(\Exception $e){
			
			\Log::debug($e);
		}*/

		return view('google.downloadfile');
	}

	/**
	 * Export file
	 *
	 * @return array
	 */
	public function exportFile()
	{
		/*try{

			$FileName		= "FILE_NAME";
			$Filepath		= "FILE_PATH";
			$FileMimeType	= "FILE_MIME_TYPE";
			$getFile		= Storage::disk('google')->get($Filepath);

		return response($getFile, 200)
			->header('ContentType', $FileMimeType)
			->header('Content-Disposition', "attachment; filename=$FileName");

		}catch(\Exception $e){
			
			\Log::debug($e);
		}*/

		return view('google.exportfile');
	}
}