<h1>update</h1>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}" />
    <input type="text" name="name" value="{{$data['name']}}" placeholder="enter your name"/>
    <input type="text" name="mobile" value="{{$data['mobile']}}" placeholder="enter your mobile"/>
    <input type="text" name="city" value="{{$data['city']}}" placeholder="enter your city"/>
    <button type="submit">update</button>
</form>