{{-- Form without any design --}}

{{-- TASK: add the validation errors here - with whatever HTML structure you want --}}
{{-- in case of title/description empty, visitor should see --}}
{{-- "The name field is required." and "The description field is required." --}}

<form method="POST" action="{{ route('projects.store') }}">
    @csrf
    Title:
    <br />
    <input type="text" name="name" />
    @error('name')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <br /><br />
    Description:
    <br />
    <input type="text" name="description" />
    <br /><br />
    @error('description')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <button type="submit">Save</button>
</form>
