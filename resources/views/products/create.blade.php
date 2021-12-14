<form method="POST" action="{{ route('products.store') }}">
    @csrf

    @error('name')
        <ul>
            <li>{{ $message }}</li>
        </ul>
    @enderror
    Name:
    <br />
    <input type="text" name="name" />
    <br />
    {{-- TASK: show the validation error for the specific "name" field --}}
    {{-- using one Blade directive: pseudo-code below --}}
    {{-- @directive --}}
    {{-- {{ $message }} --}}
    {{-- @endDirective --}}
    <br /><br />
    <button type="submit">Save</button>
</form>
