<form action="{{route('edit_points_users',$user->id)}}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="points"  value="{{$user->points}}">
    <button type="submit">save</button>

</form>