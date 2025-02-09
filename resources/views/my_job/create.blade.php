<x-layout>
    <x-breadcrumbs :links="['My Jobs' => route('my-jobs.index'), 'Create' => '#']" class="mb-4"/>

    <x-card class="mb-8">
        <form action="{{ route('my-jobs.store') }}" method="POST">
            @csrf
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <label for="title">Job Title</label>
                    <x-text-input name="title" />
                </div>
                <div>
                    <label for="location">Location</label>
                    <x-text-input name="location" />
                </div>
                <div class="col-span-2">
                    <label for="salary">Salary</label>
                    <x-text-input name="salary" type="number" />
                </div>
                <div class="col-span-2">
                    <label for="description">Description</label>
                    <textarea name="description" class="bg-white w-full rounded-md border-0 py-1.5 px-2.5 pr-8 text-sm ring-1 ring-slate-300 placeholder:text-slate-400 focus:ring-2">

                    </textarea>
                </div>
                <div>
                    <label for="experience">Experience</label>
                    <x-radio-group name="experience" :value="old('experience')" :options="\App\Models\Job::$experience" />
                </div>
                <div>
                    <label for="category">Category</label>
                    <x-radio-group name="category" :value="old('category')" :options="\App\Models\Job::$category" />
                </div>
                <div class="col-span-2">
                    <x-button class="w-full">Create Job</x-button>
                </div>
            </div>
        </form>
    </x-card>
</x-layout>
