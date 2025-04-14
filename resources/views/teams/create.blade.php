<form
    method="POST"
    action="{{ route('teams.store') }}"
>
    @csrf
    Name:
    <br />
    {{-- TASK: change this field so it would contain old value after validation error --}}
    <input
        type="text"
        name="name"
        :value="old('name')"
    />
    <br /><br />

    <p>{{ old('name') }}</p>
    <button type="submit">Save</button>
</form>
