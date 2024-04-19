<div class="h-screen w-screen p-5 flex items-center justify-center">
    <div class="bg-container p-8 rounded-lg shadow-2xl w-full max-w-md">

        <form class="space-y-5" wire:submit.prevent="register">
            <div>
                <label class="text-sm font-medium text-text-primary" for="username">Username</label>
                <div class="primary-input-container">
                    @svg('heroicon-s-user', 'h-5 text-primary')
                    <input required type="text" class="primary-input" wire:model.blur="username" placeholder="Username">
                </div>
                @error('username') <span class="text-xs text-red-400">{{ $message }}</span> @enderror
            </div>
    
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
            
            <div>
                <label class="text-sm font-medium text-text-primary" for="password_confirmation">Confirm Password</label>
                <div class="primary-input-container">
                    @svg('heroicon-s-lock-closed', 'h-5 text-primary')
                    <input required type="password" class="primary-input" wire:model.blur="password_confirmation" autocomplete placeholder="Confirm Password">
                </div>
            </div>
    
            <button type="submit" class="w-full bg-primary py-2.5 rounded-lg hover:bg-secondary transition text-sm">Register</button>
        
            <p class="text-center text-text-secondary text-sm">Have an account?<a class="text-primary hover:text-secondary transition" wire:navigate href="{{ route('login') }}"> Sign In</a></p>
        </form>
 
    </div>
</div>
