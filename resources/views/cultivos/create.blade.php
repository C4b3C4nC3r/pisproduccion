<form action="{{route('cultivo.store')}}" method="post">
    @csrf
    <input type="text" name="name" required>
    <button type="submit">Agregarlo</button>
</form>