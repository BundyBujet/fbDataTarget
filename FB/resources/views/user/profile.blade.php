@if (session('status'))
    {{session('status')}}    
@endif
<form action="{{route('user.updateprofile',['id'=>auth()->user()->id])}}" method="POST" enctype="multipart/form-data">
   
    @csrf
   

    <div> 
        <label for="name">name</label>
        <input id="name" type="text" name="name" value="{{auth()->user()->name}}">
    </div>
    <div> 
        <label for="image">image</label>
        <input id="image" type="file" name="image" value="{{auth()->user()->image}}">
    </div>
    
 
    <button type="submit">save</button>

</form>

///////////

<form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
    @csrf
    @method('put')

    <div>
        current_password
        <input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
        {{-- <input :messages="$errors->updatePassword->get('current_password')" class="mt-2" /> --}}
    </div>

    <div>
        new-password
        <input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
        {{-- <input :messages="$errors->updatePassword->get('password')" class="mt-2" /> --}}
    </div>

    <div>
        "password_confirmation
        <input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
        {{-- <input :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" /> --}}
    </div>

    <div class="flex items-center gap-4">
        <button>{{ __('Save') }}</button>

        @if (session('status') === 'password-updated')
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600"
            >{{ __('Saved.') }}</p>
        @endif
    </div>
</form>
