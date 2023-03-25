<form method="POST" action="{{ route('projects.store') }}">
    @csrf
    Title:
    <br />
    <input type="text" name="title" />
    @error('name')<div>{{$message}}</div> @enderror
    <br /><br />
    Description:
    <br />
    <input type="text" name="description" />
    @error('description')<div>{{$message}}</div> @enderror
    <br /><br />
    <button type="submit">Save</button>
</form>
