<form action="{{ route('companies.update', $company) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name', $company->name) }}">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" value="{{ old('email', $company->email) }}">
    </div>

    <div>
        <label for="website">Website</label>
        <input type="url" name="website" value="{{ old('website', $company->website) }}">
    </div>
    <button type="submit">Update</button>
</form>
