<div class="mb-3">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <input type="datetime-local" class="form-control" name="{{ $id }}" id="{{ $id }}"
        placeholder="{{ $placeholder }}" value="{{ old($id, $db) }}" {{$action == 'show' ? 'disabled' : ''}}/>
</div>
