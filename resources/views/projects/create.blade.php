{{-- Form without any design --}}

{{-- TASK: add the validation errors here - with whatever HTML structure you want --}}
{{-- in case of title/description empty, visitor should see --}}
{{-- "The name field is required." and "The description field is required." --}}

<form method="POST" action="{{ route('projects.store') }}">
    @csrf
    Title:
    <br />
    <input type="text" name="name" />
    @if($errors->has('name'))
    <div class="error">{{ $errors->first('name') }}</div>
    @endif
    <br /><br />
    Description:
    <br />
    <input type="text" name="description" />
    @if($errors->has('description'))
    <div class="error">{{ $errors->first('description') }}</div>
    @endif
    <br /><br />
    <button type="submit">Save</button>
</form>
