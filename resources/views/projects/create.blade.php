{{-- Form without any design --}}

{{-- TASK: add the validation errors here - with whatever HTML structure you want --}}
{{-- in case of title/description empty, visitor should see --}}
{{-- "The name field is required." and "The description field is required." --}}





<form method="POST" action="{{ route('projects.store') }}">
    @csrf

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <!-- Title Field -->
    Title:
    <br />
    <input type="text" name="title" value="{{ old('title') }}" />
    @error('title')
        <br />
        <span style="color: red;">{{ $message }}</span>
    @enderror

    <br /><br />

    <!-- Description Field -->
    Description:
    <br />
    <input type="text" name="description" value="{{ old('description') }}" />
    @error('description')
        <br />
        <span style="color: red;">{{ $message }}</span>
    @enderror

    <br /><br />

    <!-- Submit Button -->
    <button type="submit">Save</button>
</form>
