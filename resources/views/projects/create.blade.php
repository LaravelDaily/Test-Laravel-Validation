@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{ route('projects.store') }}">
    @csrf
    Title:
    <br />
    <input type="text" name="title" />
    @error('title')
        <small class="alert alert-danger">{{ $message }}</small>
    @enderror
    <br /><br />
    Description:
    <br />
    <input type="text" name="description" />
    @error('description')
        <small class="alert alert-danger">{{ $message }}</small>
    @enderror
    <br /><br />
    <button type="submit">Save</button>
</form>