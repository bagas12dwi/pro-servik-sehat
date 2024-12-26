<div class="mb-3">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <select class="form-select form-select-sm" name="{{ $id }}" id="{{ $id }}">
        <option value="">-- Pilih {{ $label }} --</option> <!-- Optional placeholder -->
        @foreach ($data as $item)
            <option value="{{ $item->code }}" {{ $db == $item->code ? 'selected' : '' }}>
                {{ $item->name }}
            </option>
        @endforeach
    </select>
</div>
