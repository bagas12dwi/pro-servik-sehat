<div class="mb-3">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <input type="date" class="form-control" name="{{ $id }}" id="{{ $id }}"
        placeholder="{{ $placeholder }}" value="{{ old($id, $db) }}" />
</div>
