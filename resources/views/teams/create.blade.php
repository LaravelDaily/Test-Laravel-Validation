<form method="POST" action="{{ route('teams.store') }}">
    @csrf
    Name:
    <br />
    {{-- TASK: change this field so it would contain old value after validation error --}}
    <input type="text" name="name" value="{{old('name')}}"/>
    <br /><br />

    @if ($errors->any()) 
        @foreach ($errors->all() as $error)
            <span>{{ $error }}</span>
        @endforeach
    @endif
    <button type="submit">Save</button>
</form>
