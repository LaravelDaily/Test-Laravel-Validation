{{-- Form without any design --}}

{{-- TASK: add the validation errors here - with whatever HTML structure you want --}}
{{-- in case of title/description empty, visitor should see --}}
{{-- "The name field is required." and "The description field is required." --}}
{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
<form method="POST" action="{{ route('projects.store') }}">
    @csrf
    Title:
    <br />
    <input type="text" name="name" />
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br /><br />
    Description:
    <br />
    <input type="text" name="description" />
    @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br /><br />
    <button type="submit">Save</button>
</form>
