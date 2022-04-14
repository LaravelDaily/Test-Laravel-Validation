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
    @if ($errors->has('name'))
        <span style="color: red;">
            {{ $errors->first('name') }}
        </span>
    @endif
    <br />
    Description:
    <br />
    <input type="text" name="description" />
    <br />
    @if ($errors->has('description'))
    <span style="color: red;">
        {{ $errors->first('description') }}
    </span>
@endif
    <br />
    <button type="submit">Save</button>
</form>
