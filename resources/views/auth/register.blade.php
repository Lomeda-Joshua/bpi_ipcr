<x-guest-layout>

    <div class="row w-100 mx-0">
        <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                <div class="brand-logo">
                    <h2>Bureau of Plant Industry OPCR-IPCR</h2>
                </div>

                <h4>Register account for Super User | Authorized admin only</h4>
                <br>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
            
                    <!-- Name -->
                    <div>
                        <label for="name">Name</label>
                        <input id="name" name="name" class="form-control form-control-lg" required autofocus autocomplete="name" placeholder="User name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
            
                    <!-- Email Address -->
                    <div class="mt-4">
                        <label for="email">Email: </label>
                        <input id="email" class="form-control form-control-lg" type="email" name="email" required autocomplete="username" placeholder="Email"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
            
                    <!-- Password -->
                    <div class="mt-4">
                        <label for="password">Password</label>
            
                        <input id="password" class="form-control form-control-lg"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" placeholder="Password" />
            
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
            
                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <label for="password_confirmation">Confirm Password</label>
            
                        <input id="password_confirmation" class="form-control form-control-lg"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password" />
            
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            
                    </div>
            
                    <div class="flex items-center justify-end mt-4">            
                        <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Register</button>
                    </div>
                </form>


            </div>
        </div>
    </div>

</x-guest-layout>
