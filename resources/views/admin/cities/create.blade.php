<!-- View stored in resources/views/admin/cities/create.blade.php -->

<html>
    <body>
        <h1>New City</h1>
        <ul>
            <li>
                <form method="POST" action="<?= route('admin.city.store') ?>">
                    @csrf
                    <label for="cityName">City name:</label>
                    <input id="cityName" type="text" name="city.name" required=true>
                    <button type="submit">Save</button>
                </form>
            </li>
        </ul>
    </body>
</html>