<div class="form-group">
	<label>room state</label>
	@foreach ($states as $state)
	<div class="radio">
		<label>
			<input type="radio" name="state_id" value="{{ $state->id }}"{{
				(isset($room) && $room->state->id == $state->id) ? ' checked' : ''
			}}>
			{{ $state->label }}
		</label>
	</div>
	@endforeach
</div>
