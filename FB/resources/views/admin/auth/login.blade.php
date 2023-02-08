@if (session('message'))
    {{session('message')}}    
@endif

<form action="{{route('admin.login')}}" method="post">
    @csrf
    <input type="email" name="email">
    @error('email')
        {{$message}}
    @enderror
    <input type="password" name="password">
    @error('password')
        {{$message}}
    @enderror
    <button type="submit">submit</button>
</form>