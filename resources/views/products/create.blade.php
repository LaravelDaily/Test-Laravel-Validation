<form method="POST" action="{{ route('products.store') }}">
    @csrf
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    Name:
    <br />
    <input type="text" name="name"  value="{{ old('name') }}"/>
    <br />
    {{-- TASK: show the validation error for the specific "name" field --}}
    {{-- using one Blade directive: pseudo-code below --}}
    {{-- @directive --}}
    {{-- {{ $message }} --}}
    {{-- @endDirective --}}
    @error('name')
        <p>{{ $message }}</p>
    @enderror
    <br /><br />
    <button type="submit">Save</button>
</form>
