@if(Session::has('info'))
	<div class="infobox success">
		<p>{{ Session::get('info') }}</p>
	</div>
@endif