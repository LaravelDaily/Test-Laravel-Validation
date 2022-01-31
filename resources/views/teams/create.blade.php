<form method="POST" action="{{ route('teams.store') }}">
    @csrf
    Name:
    <br />
    {{ old('name') }}
    <input type="text" name="name" />
    <br /><br />
    <button type="submit">Save</button>
</form>
