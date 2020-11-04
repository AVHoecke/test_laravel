<!-- View stored in resources/views/admin/cities/create.blade.php -->
<x-html-5>
    <x-slot name="title">
        New City
    </x-slot>
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
                <button type="submit">Save</button>
            </form>
        </li>
    </ul>
</x-html-5>