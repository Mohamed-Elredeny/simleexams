<form action="{{route('notification')}}" method="post" >
    @csrf
    <input type="text" name="title">
    <input type="text" name="message">
    <input type="submit">
</form>
