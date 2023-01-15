<div class="form-group">
    <label for="{{ $name }}" class="{{ $required ?? '' }}">{{ $labelName }} @if (!empty($optional))<span class="optional-text">{{ $optional }}</span>@endif</label>
    <input class="form-control {{ $class ?? '' }}" name="{{ $name }}" type="{{ $type ?? 'text' }}" id="{{ $name }}" placeholder="{{ $placeholder ?? '' }}">

    @if (!empty($error))
        @error($error)
        <span class="text-danger d-block">{{ $message }}</span>
        @enderror
    @endif
    
</div>