<form method="POST" action="/user">
    @csrf

    name <input type="text" name="name">
    地点 <input type="text" name="area">
    <button type="submit">提交</button>
</form>