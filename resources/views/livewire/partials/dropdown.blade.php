<div x-show="open" x-on:click.away="open = false" x-transition class="absolute right-0 w-full max-w-lg p-4 border rounded-lg shadow-lg bg-container border-input-border top-10  min-w-40">
    <ul class="w-full space-y-3">
        <li>
            <a href="#" class="block text-sm transition text-text-secondary hover:text-text-primary" wire:navigate>Your Projects</a>
        </li>
        <li>
            <a href="{{ route('logout') }}" class="block text-sm text-red-300 transition hover:text-red-400" wire:navigate>Logout</a>
        </li>
    </ul>
</div>