<!-- View stored in resources/views/admin/cities/create.blade.php -->

<html>
    <body>
        <h1>New City</h1>
        <ul>
            <li>
                <form method="POST" action="<?= route('admin.city.update', $city) ?>">
                    @csrf
                    @method('PATCH')
                    <input
                        id="cityId"
                        type="text"
                        name="city.id"
                        value="<?= $city->id?>"
                        hidden=true
                    >
                    <label for="cityName">City name:</label>
                    <input
                        id="cityName"
                        type="text"
                        name="city.name"
                        value="<?= $city->name?>"
                        required=true
                    >
                    <button type="submit">Submit</button>
                </form>
            </li>
        </ul>
    </body>
</html>