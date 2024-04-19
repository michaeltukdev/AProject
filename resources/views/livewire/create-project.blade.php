<div x-cloak @create-project.window="modalOpen = true" x-data="{ modalOpen: false }">

    <div x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-300"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-show="modalOpen"
        class="fixed inset-0 flex justify-end w-full h-full backdrop-blur-sm" @click.outside="modalOpen = false">

        <div x-transition:enter="transition ease-out duration-300 transform"
            x-transition:enter-start="opacity-0 translate-x-full" x-transition:enter-end="opacity-100 translate-x-0"
            x-transition:leave="transition ease-in duration-300 transform"
            x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 translate-x-full"
            x-show="modalOpen" class="w-full h-full max-w-lg px-5 py-10 bg-container" @click.outside="modalOpen = false">
            
            <form wire:submit.prevent="create">
                <div class="flex items-center justify-between mb-8">
                    <h1 class="text-xl text-white">Create Project</h1>   
    
                    <button x-on:click="modalOpen = false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="#FFFFFF">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </button>
                </div>
    
                <div class="flex gap-4 mb-6">
                    <div>
                        <label for="title" class="text-white">Title</label>
                        <input wire:model.blur="title" min="1" placeholder="Awesome project" type="text" class="w-full py-2 pl-4 pr-10 mt-2 text-sm text-white border rounded-lg outline-none focus:ring-0 bg-input border-input-border focus:border-1 focus:border-input-border">
                        @error('title') <span class="text-xs text-red-400">{{ $message }}</span> @enderror
                    </div>
    
                    <div>
                        <label for="title" class="text-white">Phase</label>
                        <select wire:model.blur="phase" class="w-full py-2 pl-4 pr-10 mt-2 text-sm text-white border rounded-lg outline-none focus:ring-0 bg-input border-input-border focus:border-1 focus:border-input-border">
                            <option>Planning</option>
                            <option>Development</option>
                            <option>Testing</option>
                            <option>Completed</option>
                        </select>
                        @error('phase') <span class="text-xs text-red-400">{{ $message }}</span> @enderror
                    </div>
                </div>
    
                <label for="notes" class="mt-6 text-white">Description</label>
                <textarea wire:model.blur="description" placeholder="This is my awesome project..." class="w-full py-2 pl-4 pr-10 mt-2 text-sm text-white border rounded-lg outline-none focus:ring-0 bg-input border-input-border focus:border-1 focus:border-input-border h-32"></textarea>
                @error('description') <span class="text-xs text-red-400">{{ $message }}</span> @enderror

                <div class="flex gap-4 mb-6">
                    <div>
                        <label for="title" class="text-white">Start Date</label>
                        <input wire:model.blur="start_date" type="date" class="w-full py-2 pl-4 pr-10 mt-2 text-sm text-white border rounded-lg outline-none focus:ring-0 bg-input border-input-border focus:border-1 focus:border-input-border">
                        @error('start_date') <span class="text-xs text-red-400">{{ $message }}</span> @enderror
                    </div>
    
                    <div>
                        <label for="title" class="text-white">End Date</label>
                        <input wire:model.blur="end_date" type="date" class="w-full py-2 pl-4 pr-10 mt-2 text-sm text-white border rounded-lg outline-none focus:ring-0 bg-input border-input-border focus:border-1 focus:border-input-border">
                        @error('end_date') <span class="text-xs text-red-400">{{ $message }}</span> @enderror
                    </div>
                </div>
    
                <div class="mt-5">
                    <button x-on:click="modalOpen = false" class="px-8 py-2.5 text-sm text-white bg-red-400 rounded-lg hover:bg-red-500 transition">Cancel</button>
                    <button type="submit" class="px-8 py-2.5 text-sm text-container bg-primary rounded-lg hover:bg-secondary transition">Create</button>    
                </div>
            </form>
        </div>
    </div>
</div>