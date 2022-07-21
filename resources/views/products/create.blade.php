<form method="POST" action="{{ route('products.store') }}">
    @csrf
    Name:
    <br />
    <input type="text" name="name" />
    <br />
    {{-- TASK: show the validation error for the specific "name" field --}}
    {{-- using one Blade directive: pseudo-code below --}}
    {{-- @directive --}}
    {{-- {{ $message }} --}}
    {{-- @endDirective --}}

    @if ($errors->has('name'))
        <span class="error">{{ $errors->first('name') }}</span>
    @endif


    <br /><br />
    <button type="submit">Save</button>
</form>
