<!-- View stored in resources/views/admin/vacancies/create.blade.php -->

<html>
    <body>
        <h1>New Vacancy</h1>
        <ul>
            <li>
                <form method="POST" action="<?= route('admin.vacancy.store') ?>">
                    @csrf
                    <label for="vacancyTitle">Vacancy title:</label>
                    <input id="vacancyTitle" type="text" name="vacancy.title" required=true>
                    <label for="vacancyDescription">Vacancy description:</label>
                    <input id="vacancyDescription" type="text" name="vacancy.description" required=true>
                    <label for="vacancyTitle">Vacancy City:</label>
                    <select id="vacancyTitle"name="vacancy.city.id">
                        @foreach ($cities as $city)
                            <option value="<?= $city->id ?>"><?= $city->name ?></option>
                        @endforeach
                        {{-- <option value="new">new</option> --}}
                    </select>
                    <select id="vacancyTitle"name="vacancy.company.id">
                        @foreach ($companies as $company)
                        <option value="<?= $company->id ?>"><?= $company->name ?></option>
                        @endforeach
                        {{-- <option value="new">new</option> --}}
                    </select>
                    <button type="submit">Save</button>
                </form>
            </li>
        </ul>
    </body>
</html>