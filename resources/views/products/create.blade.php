<form method="POST" action="{{ route('products.store') }}">
    @csrf
    Name:
    <br />
    <input type="text" name="name" />
    <br />
    {{-- TASK: show the validation error for the specific "name" field --}}
    {{-- using one Blade directive: pseudo-code below --}}
    {{-- @directive --}}
    @error('name')
    <ul><li>{{ $message }}</li></ul>
    @enderror
    {{-- @endDirective --}}
    <br /><br />
    <button type="submit">Save</button>
</form>
