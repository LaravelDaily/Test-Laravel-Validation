{{-- Form without any design --}}

{{-- TASK: add the validation errors here - with whatever HTML structure you want --}}
{{-- in case of title/description empty, visitor should see --}}
{{-- "The name field is required." and "The description field is required." --}}

<form method="POST" action="{{ route('projects.store') }}">
    @csrf
    Title:
    <br />
    <input type="text" name="title" />
    <br />
    @error('name')
    <div>The name field is required.</div>
    @enderror
    <br />
    Description:
    <br />
    <input type="text" name="description" />
    <br />
    @error('description')
    <div>The description field is required.</div>
    @enderror<br />
    <button type="submit">Save</button>
</form>
