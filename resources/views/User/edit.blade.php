<form method="POST" action="{{ route('user.update',['user'=>$res->id]) }}">
    @csrf
    @method('PATCH')
    name <input type="text" name="name" value="{{$res->name}}">
    地点 <input type="text" name="area" value="{{$res->area}}">
    <button type="submit">提交</button>
</form>