<!-- View stored in resources/views/admin/companies/create.blade.php -->

<html>
    <body>
        <h1>New Company</h1>
        <ul>
            <li>
                <form method="POST" action="<?= route('admin.company.store') ?>">
                    @csrf
                    <label for="companyName">Company name:</label>
                    <input id="companyName" type="text" name="company.name" required=true>
                    <button type="submit">Submit</button>
                </form>
            </li>
        </ul>
    </body>
</html>