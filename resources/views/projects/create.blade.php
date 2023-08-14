{{-- Form without any design --}}

{{-- TASK: add the validation errors here - with whatever HTML structure you want --}}
{{-- in case of title/description empty, visitor should see --}}
{{-- "The name field is required." and "The description field is required." --}}

<form method="POST" action="{{ route('projects.store') }}">
    @csrf
    Title:
    @error('name')
        {{ $message }}
    @enderror
    <br />
    <input type="text" name="name" />
    <br /><br />
    Description: @error('description')
        {{ $message }}
    @enderror
    <br />
    <input type="text" name="description" />
    <br /><br />
    <button type="submit">Save</button>
</form>
