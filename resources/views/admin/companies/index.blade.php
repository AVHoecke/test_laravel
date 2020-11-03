<!-- View stored in resources/views/admin/companies/index.blade.php -->

<html>
<body>
    <h1>Companies</h1>
    <ul>
        <li>
            <a href="<?= route('admin.company.create') ?>">Create new company</a>
        </li>
    </ul>
    @if (count($companies) == 0)
    <p>There are no companies.</p>
    @else
    <table class="admin-companies-table">
        <tr>
            <td class="col">Id:</td>
            <td class="col">Name:</td>
        </tr>
        @foreach ($companies as $company)
        <tr>
            <td><?= $company->id ?></td>
            <td><?= $company->name ?></td>
            <td><a href="<?= route('admin.company.edit', $company) ?>">Edit</a></td>
            <td><form method="POST" action="<?= route('admin.company.destroy', $company) ?>">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button> 
            </form></td>
        </tr>
        @endforeach
    </table>
    @endif
</body>
</html>