<div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
        @forelse($projects as $project)
        <a href="">
            <div class="bg-container rounded-lg p-5 shadow-lg hover:shadow-2xl transition space-y-4">
                <h3 class="text-text-primary">{{ $project->title }}</h3>
                <p class="text-text-secondary leading-6 font-light tracking-wide text-sm">{{ $project->description }}</p>
                <p class="text-text-secondary leading-6 font-light tracking-wide text-sm">Made by <span class="text-primary font-normal">{{ $project->user->username }}</span></p>
            </div>
        </a>
        @empty
        <p class="text-text-secondary font-light">No projects found.</p>
        @endforelse
    </div>
    <div class="mt-8">
        {{ $projects->links() }}
    </div>    
</div>