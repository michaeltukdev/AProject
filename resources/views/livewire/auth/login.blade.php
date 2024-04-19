<div class="h-screen w-screen p-5 flex items-center justify-center">
    <div class="bg-container p-8 rounded-lg shadow-2xl w-full max-w-lg">

        <form class="space-y-5" wire:submit.prevent="login">
            <div>
                <label class="text-sm font-medium text-text-primary" for="email">Email</label>
                <div class="primary-input-container">
                    @svg('heroicon-s-envelope', 'h-5 text-primary')
                    <input required type="email" class="primary-input" wire:model.blur="email" placeholder="Email">
                </div>
                @error('email') <span class="text-xs text-red-400">{{ $message }}</span> @enderror
            </div>
            
            <div>
                <label class="text-sm font-medium text-text-primary" for="password">Password</label>
                <div class="primary-input-container">
                    @svg('heroicon-s-lock-closed', 'h-5 text-primary')
                    <input required type="password" class="primary-input" wire:model.blur="password" autocomplete placeholder="Password">
                </div>
                @error('password') <span class="text-xs text-red-400">{{ $message }}</span> @enderror
            </div>
            
            <button type="submit" class="w-full bg-primary py-2.5 rounded-lg hover:bg-secondary transition text-sm">Sign In</button>
        
            <p class="text-center text-text-secondary text-sm">Don't have an account?<a class="text-primary hover:text-secondary transition" wire:navigate href="{{ route('register') }}"> Join Us</a></p>
        </form>
 
    </div>
</div>