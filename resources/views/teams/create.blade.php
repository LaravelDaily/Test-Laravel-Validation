<form method="POST" action="{{ route('teams.store') }}">
    @csrf
    Name:
    <br />
    <input type="text" name="name" value="{{ old('name') }}" />
    <br /><br />
    <button type="submit">Save</button>
</form>
