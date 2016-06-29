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
<div class="form-group">
	<label>room bed</label>
	@foreach ($beds as $bed)
	<div class="radio">
		<label>
			<input type="radio" name="bed_id" value="{{ $bed->id }}"{{
				(isset($room) && $room->bed->id == $bed->id) ? ' checked' : ''
			}}>
			{{ $bed->label }}
		</label>
	</div>
	@endforeach
</div>
