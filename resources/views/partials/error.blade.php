@if(count($errors->all())>0)
	<div class="infobox error">
		@foreach($errors->all() as $error)
			<p>{{ $error }}</p>
		@endforeach
	</div>
@endif

@if(Session::get('error') != null)
	<div class="infobox error">
		<p>{{ Session::get('error') }}</p>
	</div>
@endif

