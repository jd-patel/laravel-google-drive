@extends("includes.app") 

@section("htmlheader_title", "Download File")
@section("main-content")

	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	@if(Session::has('message'))
		<p class="alert {{ Session::get('alert-class', 'alert-success') }} alert-success-message">
			{{ Session::get('message') }}
			<button type="button" class="close" data-dismiss="alert">&times;</button>
		</p>
	@endif
	<h1 class="display-5">Download File From ID</h1>
		<div class="w-100 p-3" style="background-color: #eee;">
			
	<pre>
	<code>try{
			
		<b>// Parent folder ID to get data under the folder.</b>
		$folder_id = 'FOLDER_ID';

		<b>// Get the directory contents.</b>
		$recursive = false; // If you want sub directories make it 'true'.

		<b>// This will return all the file under the given Folder ID</b>
		$directory_contents = collect(Storage::disk('google')->listContents($folder_id, $recursive))
		->where('type','file');

		foreach ($directory_contents as $key => $directory_content) {

			$FileName		= $directory_content['name'];
			$Filepath		= $directory_content['path'];
			$Fileextension		= $directory_content['extension'];
			$FileMimeType		= $directory_content['mimetype'];
			$FileNameWithoutExt	= $directory_content['filename'];
		
			<b>// Store the file in local.</b>
			$fileStream	= Storage::disk('google')->getDriver()->readStream($Filepath);
			$newFileName	= time().$FileName;

			Storage::disk('local')->put($newFileName, stream_get_contents($fileStream));

			<b>// You can also use file put content.
			// $storage_path	= storage_path($newFileName);
			// file_put_contents($storage_path, stream_get_contents($fileStream), FILE_APPEND);
			</b>
		}

	}catch(\Exception $e){
		
		\Log::debug($e);
	}</code></pre>
	</div>
	<ul class="list-group mt-5">
		<li class="list-group-item"><a href="{{route('dashboard')}}">Back to dashboard</a></li>
	</ul>
@endsection

@push('styles')

@endpush

@push('scripts')
@endpush