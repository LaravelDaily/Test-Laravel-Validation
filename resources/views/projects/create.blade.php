{{-- Form without any design --}}

{{-- TASK: add the validation errors here - with whatever HTML structure you want --}}
{{-- in case of title/description empty, visitor should see --}}
{{-- "The name field is required." and "The description field is required." --}}

<form method="POST" action="{{ route('projects.store') }}">
    @csrf
    Title:
    <br />
    <input type="text" name="title" />
    <br /><br />
    Description:
    <br />
    <input type="text" name="description" />
    <br /><br />
    <ul>
        <li>
            @error('name')
                {{ $message }}
            @enderror
        </li>
        <li>
            @error('description')
                {{ $message }}
            @enderror
        </li>
    </ul>
    <button type="submit">Save</button>
</form>
