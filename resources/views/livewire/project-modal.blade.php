<div>
    @if ($project)
        <div x-cloak x-data="{ modalOpen: false }" @deleteproject.window="modalOpen = false"
            @openproject.window="modalOpen = true">
            <div x-transition.duration.400ms x-show="modalOpen"
                class="fixed inset-0 z-50 transition-opacity bg-gray-900 bg-opacity-40 backdrop-blur-sm">
                <div @click="modalOpen = false" class="flex items-center justify-center h-screen vw-full">
                    <div @click.stop class="z-10 w-full max-w-2xl rounded-lg shadow-2xl bg-container">

                        <div class="flex items-center justify-between p-5 border-b border-b-input-border">
                            <h1 class="font-medium text-white text-md">{{ $project->title }}</h1>
                            <button @click="modalOpen = false">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="#FFFFFF">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </button>
                        </div>

                        <div class="p-5 border-b text-text-secondary border-b-input-border">
                            <p class="text-sm">{{ $project->description }}</p>

                            <div class="flex items-center gap-3 mt-8">
                                <p class="p-2 text-sm rounded-lg bg-input-border">
                                    {{ date('F jS Y', strtotime($project->start_date)) }}</p>
                                <p>@svg('heroicon-o-arrow-long-right', 'w-4 h-4')</p>
                                <p class="p-2 text-sm rounded-lg bg-input-border">
                                    {{ date('F jS Y', strtotime($project->end_date)) }}</p>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-5">
                            <p class="text-sm text-text-secondary">Current phase:
                                <span
                                    style="color: @switch($project->phase)
                                    @case('design')
                                        #3498db;
                                        @break
                                    @case('development')
                                        #e67e22; 
                                        @break
                                    @case('testing')
                                        #f1c40f;
                                        @break
                                    @case('deployment')
                                        #2ecc71;
                                        @break
                                    @case('complete')
                                        #95a5a6;
                                        @break
                                    @default
                                        #34495e; 
                                @endswitch">
                                    {{ ucfirst($project->phase) }}
                                </span>
                            </p>
                            <div>
                                @if ($project->user_id === auth()->id())
                                    <button @click="$dispatch('editproject', { projectID: {{ $project->id }}}); modalOpen = false;" class="px-4 py-2 text-sm transition rounded-lg text-container bg-primary hover:bg-secondary">Edit</button>
                                    <button wire:click="delete"
                                        class="p-2 text-sm text-white transition bg-red-400 rounded-lg hover:bg-red-500">Delete</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
