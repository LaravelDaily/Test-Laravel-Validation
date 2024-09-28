{{-- Form without any design --}}

{{-- TASK: add the validation errors here - with whatever HTML structure you want --}}
{{-- in case of title/description empty, visitor should see --}}
{{-- "The name field is required." and "The description field is required." --}}

@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('projects.store') }}">
    @csrf
    Name:
    <br />
    <input type="text" name="name" required value="{{ old('name', 'Default name') }}"
        @if ($errors->has('name')) style="border: 1px solid red;" @endif>
    
    <br /><br />
    Description:
    <br />
    <input type="text" name="description" required value="{{ old('description', 'Default description') }}"
        @if ($errors->has('description')) style="border: 1px solid red;" @endif>
    {{-- @error('description')
            <li>The description field is required.</li>
    @enderror --}}
    <br /><br />
    <button type="submit">Save</button>
</form>
