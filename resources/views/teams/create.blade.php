<form method="POST" action="{{ route('teams.store') }}">
    @csrf
    Name:
    <br />
    {{-- TASK: change this field so it would contain old value after validation error --}}
    <input type="text" name="name" @error('name')value="{{old('name')}}"@enderror/>
    <br /><br />
    <button type="submit">Save</button>
</form>
