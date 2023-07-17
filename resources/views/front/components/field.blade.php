<div class="ud-form-group {{ $class ?? 'col-md-12' }}">
    @isset($type)
        @switch($type)
            @case('select')
                <select class="ud-form-select" name="{{ $name ?? '' }}" id="{{ $id ?? '' }}"
                    placeholder="{{ $placeholder ?? '' }}">
                    @foreach ($option ?? [] as $id => $text)
                        <option value="{{ $id }}">{{ $text }}</option>
                    @endforeach

                </select>
            @break

            @case('textarea')
                <textarea class="ud-form-textarea" name="{{ $name ?? '' }}" id="{{ $id ?? '' }}" placeholder="{{ $placeholder ?? '' }}" cols="30"
                    rows="10"> </textarea>
            @break

            @default
                <input type="{{ $type }}" name="{{ $name ?? '' }}" id="{{ $id ?? '' }}"
                    placeholder="{{ $placeholder ?? '' }}" />
        @endswitch
    @endisset

</div>
