search


<form action="{{route('admin.search.users')}}" method="post">
    @csrf
    <input type="text" name="user">
    <button type="submit">search</button>

</form>

@if (session('status'))
    {{session('status')}}    
@endif
    <table>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>points</th>
            <th>/////</th>
            
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->points}}</td>
                <td>
                    <a href="{{route('admin.deit.users',$user->id)}}">edit</a>
                    <form action="{{route('admin.delete.users',$user->id)}}" method="get">
                            <button type="submit">delete</button>
                    </form>
                    
                </td>
                
            </tr>
        @endforeach
    </table>
