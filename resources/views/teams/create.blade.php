<form method="POST" action="{{ route('teams.store') }}">
    @csrf
    Name:
    <br />
    {{-- TASK: change this field so it would contain old value after validation error --}}
    @if ($errors->has('name'))
        <input type="text" name="name" value="{{ old('name') }}" style="border: 1px solid red;" />
    @else
        <input type="text" name="name" value="{{ old('name') }}" />
    @endif
    <br /><br />
    <button type="submit">Save</button>
</form>
