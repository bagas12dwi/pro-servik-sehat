<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <br>
    @if (isset($db) && $action != 'create')
        <input type="hidden" name="{{ $name . '_old' }}" value="{{ $db }}">
        <img src="{{ URL::asset('storage/' . $db) }}" style="height: 7em;" alt="">
    @endif
    <input type="file" class="form-control" name="{{ $name }}" id="{{ $name }}" placeholder=""
        aria-describedby="filehelp{{ $name }}" />
    <div id="filehelp{{ $name }}" class="form-text">{{ $helperText }}</div>
</div>
