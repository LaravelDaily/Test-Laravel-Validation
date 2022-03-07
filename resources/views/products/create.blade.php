<form method="POST" action="{{ route('products.store') }}">
    @csrf
    Name:
    <br />
    <input type="text" name="name" value="{{old('name', '')}}" />
    <br />
    {{-- TASK: show the validation error for the specific "name" field --}}
    {{-- using one Blade directive: pseudo-code below --}}
    {{-- @directive --}}
    {{-- {{ $message }} --}}
    {{-- @endDirective --}}
    @if($erros->has('name'))
        <p>{{$errors->first('name')}}</p>
    @endif
    <br /><br />
    <button type="submit">Save</button>
</form>
