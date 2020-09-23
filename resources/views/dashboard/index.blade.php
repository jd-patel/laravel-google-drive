@extends("includes.app") 

@section("htmlheader_title", "Dashboard")

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

	<ul class="list-group">
		<li class="list-group-item"><a href="{{route('drive.list')}}">List All Files</a></li>
		<li class="list-group-item"><a href="{{route('drive.put.file')}}">Put File</a></li>
		<li class="list-group-item"><a href="{{route('drive.list.data')}}">List All Data Under Parent Folder ID</a></li>
		<li class="list-group-item"><a href="{{route('drive.get.file')}}">Get Drive File From ID</a></li>
		<li class="list-group-item"><a href="{{route('download.file.local')}}">Download Drive File In Local</a></li>
	</ul>

@endsection

@push('styles')

@endpush

@push('scripts')
@endpush