<x-layout>
    <x-card>
        <form action="{{route('employer.store')}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="company_name">Company Name</label>
                <x-text-input name="company_name"></x-text-input>
            </div>
            <x-button class="w-full">Create</x-button>
        </form>
    </x-card>
</x-layout>
