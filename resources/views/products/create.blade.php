<form method="POST" action="{{ route('products.store') }}">
    @csrf
    Name:
    <br />
    <input type="text" name="name" />
    <br />

    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <br /><br />
    <button type="submit">Save</button>
</form>
