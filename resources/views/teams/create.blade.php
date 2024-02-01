<form method="POST" action="{{ route('teams.store') }}">
    @csrf
    Name:
    <br />
    {{-- TASK: change this field so it would contain old value after validation error --}}
    <input type="text" name="name" vale="{{ old('name') }}" />
    <br /><br />
    <button type="submit">Save</button>
</form>
