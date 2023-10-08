<p>
    @error('name')
    <span>{{$message}}</span>
    @enderror
</p>
<p>
    @error('description')
    <span>{{$message}}</span>
    @enderror
</p>

<form method="POST" action="{{ route('projects.store') }}">
    @csrf
    Title:
    <br />
    <input type="text" name="title" />
    <br /><br />
    Description:
    <br />
    <input type="text" name="description" />
    <br /><br />
    <button type="submit">Save</button>
</form>
