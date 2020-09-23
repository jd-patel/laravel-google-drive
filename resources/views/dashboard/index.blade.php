@extends("includes.app") 

@section("htmlheader_title", "Dashboard")

@section("main-content")
	<ul class="list-group">
		<li class="list-group-item"><a href="{{route('drive.list')}}">List All Files</a></li>
	</ul>
@endsection

@push('styles')

@endpush

@push('scripts')
@endpush