<x-guest-layout>

    <style>
        .brand-logo > img{
            width:30% !important;
            margin-right:auto !important;
            margin-left:auto !important;
            display:block;
            margin-bottom:30px;
        }
    </style>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                        <div class="brand-logo">
                            <img src = "{{ asset('./resources/assets/images/logos/bpi_logo.png') }}" />
                            <h2>Bureau of Plant Industry OPCR-IPCR</h2>
                        </div>

                        <h4>Sign in to continue.</h4>

                        @if (Route::has('login'))
                                @auth

                                @switch($auth_id->role_id)

                                @case(1)
                                <br>
                                <a href="{{ route('index.user') }}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" >To dashboard</a>
                                @break

                                @case(2)
                                <br>
                                <a href="{{ route('index.admin') }}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" >To dashboard</a>
                                @break

                                @case(3)
                                <br>
                                <a href="{{ route('index.super-admin') }}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" >To dashboard</a>
                                @break

                                @endswitch

                        @else

                                <form class="pt-3" method="POST" action="{{ route('login') }}">
                                    @csrf
                    
                                    <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="User Email" autocomplete="email" required autofocus>
        
        
                                    @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
        
                                    {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
        
                                    </div>
                    
                                    <div class="form-group">
                                    <label for="email">Password:</label>
                                    <input type="password" class="form-control form-control-lg" id="password" name="password" autocomplete="password" placeholder="Password" required>
        
                                    {{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
        
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
        
                                    </div>
                    
                                    <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                                    </div>
                    
                                </form>
                                
                                @endauth

                        @endif

            
                        

                    </div>
                </div>
            </div>

</x-guest-layout>





