<div class="mb-3">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <textarea class="form-control" name="{{ $id }}" id="{{ $id }}" rows="3">{{ old($id, $db) }}</textarea>
</div>