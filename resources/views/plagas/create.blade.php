<form action="{{route('plaga.store')}}" method="post">
    @csrf
    <input type="text" name="name" required>
    <button type="submit">Agregarlo</button>
</form>