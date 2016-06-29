<div class="form-group">
	<label>房間狀態</label>
	<br>
	@foreach ($states as $state)
	<label class="radio-inline">
		<input type="radio" name="state_id" value="{{ $state->id }}"{{
			(isset($room) && $room->state->id == $state->id) ? ' checked' : ''
		}}>
		{{ $state->label }}
	</label>
	@endforeach
</div>
<div class="form-group">
	<label>床型</label>
	<br>
	@foreach ($beds as $bed)
	<label class="radio-inline">
		<input type="radio" name="bed_id" value="{{ $bed->id }}"{{
			(isset($room) && $room->bed->id == $bed->id) ? ' checked' : ''
		}}>
		{{ $bed->label }}
	</label>
	@endforeach
</div>
