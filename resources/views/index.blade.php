@foreach ($companies as $company)
    <div>
        <h2>{{ $company->name }}</h2>
        <p>{{ $company->email }}</p>
        <img src="{{ asset('storage/' . $company->logo) }}" alt="{{ $company->name }}" width="100">
        <p>{{ $company->website }}</p>
    </div>
@endforeach

{{ $companies->links() }}
