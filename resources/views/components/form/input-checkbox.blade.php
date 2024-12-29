<div class="form-check">
    <input class="form-check-input" type="checkbox" value="0" id="{{ $id }}" name="{{ $name }}"
        data-show="{{ $id . $wrapperType ?? '' }}" {{ $db == 1 ? 'checked' : '' }} {{$action == 'show' ? 'disabled' : ''}}/>
    <label class="form-check-label" for="{{ $id }}">{{ $label }}</label>
    @if (isset($dbDesc))
        @if ($action == 'show' && $db == 1 && ($dbDesc != null || $dbDesc != ''))
            <div class="{{ isset($satuan) ? 'input-group' : '' }}" id="{{ $id . '-wrapper-text' }}">
                <input type="text" class="form-control font-control-sm" value="{{$dbDesc}}" name="{{ $name . '_desc' }}" disabled>
                @if (isset($satuan))
                    <span class="input-group-text" id="basic-addon2">{{ $satuan }}</span>
                @endif
            </div>
        @endif
    @endif
    <div class="{{ isset($satuan) ? 'input-group' : '' }} d-none" id="{{ $id . '-wrapper' }}">
        <input type="number" class="form-control font-control-sm" value="0" name="{{ $name . '_desc' }}" disabled>
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