<div {{$attributes->merge(['class' => 'mb-4 rounded-md border-spacing-1 border-1 p-4 mb-1 bg-white shadow-sm'])}}>
    <div class="flex justify-between">
        <h2 class="text-lg font-medium mb-2">{{ $job->title  }}</h2>
        <div class="text-slate-500">
            ${{ number_format($job->salary) }}
        </div>
    </div>
    <div class="mb-4 flex justify-between text-sm text-slate-500 items-center">
        <div class="flex space-x-4">
            <div class="font-bold">Comapny Name</div>
            <div class="font-bold">{{ $job->location }}</div>
        </div>
        <div class="flex space-x-1 text-xs">
            <x-tag>{{ Str::ucfirst($job->experience) }}</x-tag>
            <x-tag>{{ $job->category }}</x-tag>
        </div>
    </div>

    {{ $slot }}
</div>
