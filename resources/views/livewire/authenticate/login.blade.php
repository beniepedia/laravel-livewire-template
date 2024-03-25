<form wire:submit="sign">
    <!-- Username -->
    <div class="mb-3">
        <label for="email" class="form-label">{{ __('Email') }}</label>
        <input type="text" id="email" class="form-control @error('email') is-invalid @enderror"
            placeholder="{{ __('Enter email') }}" wire:model.blur="email">
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <!-- Password -->
    <div class="mb-3">
        <label for="password" class="form-label">{{ __('Password') }}</label>
        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
            placeholder="**************" wire:model.blur="password">
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <!-- Checkbox -->
    <div class="d-lg-flex justify-content-between align-items-center
                  mb-4">
        <div class="form-check custom-checkbox">
            <input type="checkbox" class="form-check-input" id="rememberme">
            <label class="form-check-label" for="rememberme">{{ __("Remember me") }}</label>
        </div>

    </div>
    <div>

        <!-- Button -->
        <div class="d-grid">
            <x-button type="success">{{ __('Login') }}</x-button>

        </div>

        @session('alert')
        <x-alert type="{{ $value['type'] }}" class="mt-5">
            {{ $value['message'] }}
        </x-alert>
        @endsession
    </div>


</form>