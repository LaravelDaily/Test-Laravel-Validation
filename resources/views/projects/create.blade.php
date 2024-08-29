{{-- Form without any design --}}

{{-- TASK: add the validation errors here - with whatever HTML structure you want --}}
{{-- in case of title/description empty, visitor should see --}}
{{-- "The name field is required." and "The description field is required." --}}

<form method="POST" action="{{ route('projects.store') }}">
    @csrf
    Title:
    <br />
    <input type="text" name="name" />
    @if ($errors->has('name'))
        <p class="error">{{ $errors->first('name') }}</p>
    @endif
    <br /><br />
    Description:
    <br />
    <input type="text" name="description" />
    @if ($errors->has('description'))
        <p class="error">{{ $errors->first('description') }}</p>
    @endif
    <br /><br />
    <button type="submit">Save</button>
</form>
