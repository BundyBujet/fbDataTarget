
<form action="{{route('find.data',['id'=>auth()->user()->id])}}" method="post">
   
    @csrf
   {{-- <div>
    <select name="country" >
        <option value=""></option>
    </select>
   </div> --}}
    <div>
        <select name="table" >
            <option value="selectdata">selectdata</option>
            {{-- <option value="Zayenest">Zayenest</option> --}}
            <option value="data">data</option>
        </select>

    </div>
    <div> 
        <label for="name">name</label>
        <input id="name" type="text" name="name">
    </div>
    <div> 
        <label for="eduction">eduction</label>
        <input id="eduction" type="text" name="eduction">
    </div>
    <div> 
        <label for="job">job</label>
        <input id="job" type="text" name="job">
    </div>
    <div> 
        <label for="address">address</label>
        <input id="address" type="text" name="address">
    </div>
 
    <button type="submit">search</button>

</form>
@if (session('message'))
    {{session('message')}}    
@endif
@if (session('messg'))
    {{session('messg')}}    
@endif
@if (session('status'))
    {{session('status')}}    
@endif
    <table>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>email</th>
            <th>address</th>
            <th>eduction</th>
            <th>phone</th>
            <th>job</th>
            
        </tr>
       @isset($datas)
        @foreach ($datas as $data)
        <tr>
           <td>{{$data->id}}</td>
           <td>{{$data->name}}</td>
           <td>{{$data->email}}</td>
           <td>{{$data->address}}</td>
           <td>{{$data->eduction}}</td>
           <td>{{$data->phone}}</td>
           <td>{{$data->job}}</td>
       
           </tr>
       @endforeach
        @endisset
   
    </table>
   
    
