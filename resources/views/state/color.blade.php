<div class="form-group">
	<label class="col-md-12">顏色</label>
	<?php $bs_color = ['default', 'primary', 'success', 'info', 'warning', 'danger', 'purple']; ?>
	@for($i = 0; $i < count($bs_color); $i++)
	<div class="col-md-2">
		<div class="radio">
			<label>
				<input type="radio" name="color" value="{{ $i }}"{{
					(isset($state) && $state->color == $i) ? ' checked' : ''
				}}>
				{{ $bs_color[$i] }}
			</label>
			<div class="panel panel-{{ $bs_color[$i] }}">
				<div class="panel-heading">
					<h3 class="panel-title">房號 : Number</h3>
				</div>
				<div class="panel-body">
					<h3>State</h3>
				</div>
			</div>
		</div>
	</div>
	@endfor
</div>
