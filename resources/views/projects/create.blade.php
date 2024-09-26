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
        <small class="alert alert-danger">The name field is required.</small>
    @enderror
    <br />
    Description:
    <br />
    <input type="text" name="description" />
    <br />
    @error('description')
        <small class="alert alert-danger">The description field is required.</small>
    @enderror
    <br />
    <button type="submit">Save</button>
</form>
