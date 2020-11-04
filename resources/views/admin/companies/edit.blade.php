<!-- View stored in resources/views/admin/companies/create.blade.php -->
<x-html-5>
    <x-slot name="title">
        New Company
    </x-slot>
    <h1>New Company</h1>
    <ul>
        <li>
            <form method="POST" action="<?= route('admin.company.update', $company) ?>">
                @csrf
                @method('PATCH')
                <input
                id="companyId"
                type="text"
                name="company.id"
                value="<?= $company->id?>"
                hidden=true
                >
                <label for="companyName">Company name:</label>
                <input
                id="companyName"
                type="text"
                name="company.name"
                value="<?= $company->name?>"
                required=true
                >
                <button type="submit">Save</button>
            </form>
        </li>
    </ul>
</x-html-5>