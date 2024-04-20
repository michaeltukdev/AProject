<div>
    <div class="flex justify-between gap-4 my-4">
        <form>
            <input wire:model.live="title" type="text" placeholder="Search by title..." class="rounded-lg primary-input"/>
            <input wire:model.live="startDate" type="date" class="rounded-lg primary-input"/>
        </form>
    </div>

    <div class="grid h-full gap-4 mt-4 md:grid-cols-2 lg:grid-cols-3">
        @forelse($projects as $project)
        <a class="h-full cursor-pointer" x-on:click="$dispatch('openproject', { projectId: {{ $project->id }}})">
            <div class="h-full p-5 space-y-4 transition rounded-lg shadow-lg bg-container hover:shadow-2xl">
                <h3 class="text-text-primary">{{ $project->title }}</h3>
                <p class="text-sm font-light leading-6 tracking-wide text-text-secondary">{{ Str::limit($project->description, 90, '...') }}</p>
                <p class="text-sm font-light leading-6 tracking-wide text-text-secondary">Made by <span class="font-normal text-primary">{{ $project->user->username }}</span></p>
            </div>
        </a>
        @empty
        <p class="font-light text-text-secondary">No projects found.</p>
        @endforelse
    </div>
    <div class="mt-8">
        {{ $projects->links() }}
    </div>    
</div>
