@if(Session::has('flash_mes'))
	<div class="col-sm-12">
		<div class="alert alert-{!! Session::get('flash_lev') !!}">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			{!! Session::get('flash_mes') !!}
		</div>
	</div>
@endif