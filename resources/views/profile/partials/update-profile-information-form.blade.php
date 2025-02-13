<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" id="adminUpdate" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        {{-- @method('PUT') --}}
        <div>
            <x-input-label for="name" :value="__('Profile Picture')" />
            <x-text-input id="picture" name="picture" type="file" class="block w-full mt-1" :value="old('picture', $user->picture)"  autofocus autocomplete="picture" />
            <x-input-error class="mt-2" :messages="$errors->get('picture')" />
            <img src="{{asset('user/img/'.$user->picture)}}" alt="Profile" height="80px" width="90px">   
        </div>

        <div>
            <x-input-label for="name" :value="__('First Name')" />
            <x-text-input id="name" name="firstName" type="text" class="block w-full mt-1" :value="old('firstName', $user->firstName)"  autofocus autocomplete="firstName" />
            <x-input-error class="mt-2" :messages="$errors->get('firstName')" />
        </div>


        <div>
            <x-input-label for="name" :value="__('Last Name')" />
            <x-text-input id="name" name="lastName" type="text" class="block w-full mt-1" :value="old('lastName', $user->lastName)"  autofocus autocomplete="lastName" />
            <x-input-error class="mt-2" :messages="$errors->get('lastName')" />
        </div>

        <div>
            <x-input-label for="name" :value="__('Username')" />
            <x-text-input id="username" name="username" type="text" class="block w-full mt-1" :value="old('username', $user->username)"  autofocus autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('username')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="block w-full mt-1" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="mt-2 text-sm text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 text-sm font-medium text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});
        $('#adminUpdate').on('submit', function(e) {
            e.preventDefault();
            alert('ok');
            $(".save_data").text('Saving...');
        let isValid = true;
        $('.error').text(''); // Clear existing errors

        
            $.ajax({
                url: '{{ route("profile.update")}}',
                type: 'POST',
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(response) {
                    // alert(response.success);
                    // alert('success');
                     Swal.fire({
                        icon: 'success',
                        title: 'Inserted Successfully',
                     })
                     // Redirect after 3 seconds
                     setTimeout(function() {
                    }, 1000);
                    window.location.href = '/admin/web/setting'; // Redirect to home page
                  
                    $('#userInfo')[0].reset();
                    fetchEmployeeId();
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            // alert(value[0]);
                        });
                    }
                }
            });
        });
    
</script>

