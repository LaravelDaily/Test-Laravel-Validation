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
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->get('name') as $message)
                <p>{{ $message }}</p>
            @endforeach
        </ul>
    </div>
    <br /><br />
    <button type="submit">Save</button>
</form>
