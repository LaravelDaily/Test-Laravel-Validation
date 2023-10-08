<form method="POST" action="{{ route('teams.store') }}">
    @csrf
    Name:
    <br />
    <input type="text" value="{{ old('name') }}" name="name" />
    <br /><br />
    <button type="submit">Save</button>
</form>
