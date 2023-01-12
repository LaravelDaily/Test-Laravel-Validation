<form method="POST" action="{{ route('buildings.store') }}">
    @csrf
    Name:
    <br />
    <input type="text" name="name" />
    <br />
    {{-- TASK: Customize the validation error message to say "Please enter the name" --}}
    @error('name')
        {{ $message }}
    @enderror
    <br /><br />
    <button type="submit">Save</button>
</form>
