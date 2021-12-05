{{-- Form without any design --}}

{{-- TASK: add the validation errors here - with whatever HTML structure you want --}}
{{-- in case of title/description empty, visitor should see --}}
{{-- "The name field is required." and "The description field is required." --}}
<ul class="list-unstyled">
    <li>@error('title')@enderror</li>
    <li></li>
</ul>
<form method="POST" action="{{ route('projects.store') }}">
    @csrf
    Title:
    <br />
    <input type="text" name="title" />
    @error('name')<span class="text-danger">{{  $message }}</span>@enderror
    <br /><br />
    Description:
    <br />
    <input type="text" name="description" />
    @error('description')<span class="text-danger">{{ $message }}</span>@enderror
    <br /><br />
    <button type="submit">Save</button>
</form>
