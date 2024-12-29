<div class="form-check">
    <input class="form-check-input" type="radio" name="{{ $name }}" value="{{ $value }}"
        id="{{ $id }}" {{ $db == $value ? 'checked' : '' }} {{ $action == 'show' ? 'disabled' : '' }} />
    <label class="form-check-label" for="{{ $id }}"> {{ $label }} </label>
    @if (isset($dbDesc))
        @if ($action == 'show' && ($db == $value) && ($dbDesc != null || $dbDesc != '' || 0))
            <div class="{{ isset($satuan) ? 'input-group' : '' }}" id="{{ $id . '-wrapper-text' }}">
                <input type="text" class="form-control font-control-sm" value="{{$dbDesc}}" name="{{ $name . '_desc' }}" disabled>
                @if (isset($satuan))
                    <span class="input-group-text" id="basic-addon2">{{ $satuan }}</span>
                @endif
            </div>
        @endif
    @endif
    <div class="{{ isset($satuan) ? 'input-group' : '' }} d-none" id="{{ $id . '-wrapper' }}">
        <input type="number" class="form-control font-control-sm" name="{{ $name . '_desc' }}" disabled>
        @if (isset($satuan))
            <span class="input-group-text" id="basic-addon2">{{ $satuan }}</span>
        @endif
    </div>
    <div class="{{ isset($satuan) ? 'input-group' : '' }} d-none" id="{{ $id . '-wrapper-date' }}">
        <input type="date" class="form-control font-control-sm" name="{{ $name . '_desc' }}" disabled>
        @if (isset($satuan))
            <span class="input-group-text" id="basic-addon2">{{ $satuan }}</span>
        @endif
    </div>
    <div class="{{ isset($satuan) ? 'input-group' : '' }} d-none" id="{{ $id . '-wrapper-text' }}">
        <input type="text" class="form-control font-control-sm" name="{{ $name . '_desc' }}" disabled>
        @if (isset($satuan))
            <span class="input-group-text" id="basic-addon2">{{ $satuan }}</span>
        @endif
    </div>
</div>
