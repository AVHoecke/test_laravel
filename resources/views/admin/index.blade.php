<!-- View stored in resources/views/admin/index.blade.php -->

<html>
    <body>
        <h1>Hello, Admin</h1>
            <p>You can manage:</p>
            <ul>
                <li><a href="<?= route('admin.companies')?>">Companies</a></li>
                <li><a href="<?= route('admin.cities')?>">Cities</a></li>
                <li><a href="<?= route('admin.vacancies')?>">Vacancies</a></li>
            </ul>
    </body>
</html>