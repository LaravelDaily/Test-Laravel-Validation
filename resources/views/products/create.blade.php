<form method="POST" action="{{ route('products.store') }}">
    @csrf
    Name:
    <br />
    <input type="text" name="name" />
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br />
    {{-- TASK: show the validation error for the specific "name" field --}}
    {{-- using one Blade directive: pseudo-code below --}}
    {{-- @directive --}}
    {{-- {{ $message }} --}}
    {{-- @endDirective --}}
    <br /><br />
    <button type="submit">Save</button>
</form>
