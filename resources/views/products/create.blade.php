<form method="POST" action="{{ route('products.store') }}">
    @csrf
    Name:
    <br />
    <input type="text" name="name" />
    <br />
    @error('name')
        <p>{{ $message }}</p>
    @enderror
    <br /><br />
    <button type="submit">Save</button>
</form>
