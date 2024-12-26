<div class="form-check">
    <input class="form-check-input" type="checkbox" value="0" id="{{ $id }}" name="{{ $name }}"
        data-show="{{ $id . $wrapperType ?? '' }} " {{ $db == 1 ? 'checked' : '' }} />
    <label class="form-check-label" for="{{ $id }}">{{ $label }}</label>
    <div class="input-group d-none" id="{{ $id . '-wrapper' }}">
        <input type="number" class="form-control" name="{{ $name . '_desc' }}">

        <span class="input-group-text" id="basic-addon2">{{ $satuan ?? '' }}</span>
    </div>
    <div class="input-group d-none" id="{{ $id . '-wrapper-date' }}">
        <input type="date" class="form-control" name="{{ $name . '_desc' }}">

        <span class="input-group-text" id="basic-addon2">{{ $satuan ?? '' }}</span>
    </div>
    <div class="input-group d-none" id="{{ $id . '-wrapper-text' }}">
        <input type="text" class="form-control " name="{{ $name . '_desc' }}">
        <span class="input-group-text" id="basic-addon2">{{ $satuan ?? '' }}</span>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#' + $id).on('change'function() {
            if ($(this).is(':checked')) {
                $(this).val(1);
            } else {
                $(this).val(0);
            }
        });
    });
</script>
