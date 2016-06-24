<div class="form-group">
	<label class="col-md-12">State color</label>
	<?php $bs_color = array('default', 'primary', 'success', 'info', 'warning', 'danger'); ?>
	@for($i = 0; $i < count($bs_color); $i++)
	<div class="col-md-2">
		<div class="radio">
			<label>
				<input type="radio" name="color" value="{{ $i }}"{{
					(isset($state) && $state->color == $i) ? ' checked' : ''
				}}>
				Color : {{ $bs_color[$i] }}
			</label>
			<div class="panel panel-{{ $bs_color[$i] }}">
				<div class="panel-heading">
					<h3 class="panel-title">房號 : Number</h3>
				</div>
				<div class="panel-body">
					<h2>State</h2>
				</div>
			</div>
		</div>
	</div>
	@endfor
</div>
