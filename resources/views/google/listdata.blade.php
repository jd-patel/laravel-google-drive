@extends("includes.app") 

@section("htmlheader_title", "List All Data")
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
	<h1 class="display-5">List All Data From The Folder</h1>
		<div class="w-100 p-3" style="background-color: #eee;">
			
	<pre>
	<code>try{
			
		$folder_id = 'FOLDER_ID';

		$recursive = false;
		$directory_contents = collect(Storage::disk('google')->listContents($folder_id, $recursive));

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