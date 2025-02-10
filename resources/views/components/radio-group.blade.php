<div>
    @if ($allOption)
    <label for="{{ $name }}" class="mb-1 flex items-center">
        <input type="radio" name="{{ $name }}" value=""
         @checked(!request($name))/>
        <span class="ml-2">All</span>
    </label>
    @endif

    @foreach ($options as $option)
        <label for="{{ $name }}" class="mb-1 flex items-center">
            <input type="radio" name="{{ $name }}" value="{{ $option }}"
            @checked($option === $selectedOption) />
            <span class="ml-2">{{ ucwords($option) }}</span>
        </label>
    @endforeach
</div>
