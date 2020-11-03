<!-- View stored in resources/views/admin/vacancies/create.blade.php -->

<html>
    <body>
        <h1>New Vacancy</h1>
        <ul>
            <form method="POST" action="<?= route('admin.vacancy.update', $vacancy) ?>">
                @csrf
                @method('PATCH')
                <input
                    id="vacancyId"
                    type="text"
                    name="vacancy.id"
                    value="<?= $vacancy->id?>"
                    hidden=true
                >
                <li>
                    <label for="vacancyTitle">Vacancy title:</label>
                    <input
                        id="vacancyTitle"
                        type="text"
                        name="vacancy.title"
                        value="<?= $vacancy->title?>"
                        required=true
                    >
                </li>
                <li>
                    <label for="vacancyDescription">Vacancy description:</label>
                    <input
                        id="vacancyDescription"
                        type="text"
                        name="vacancy.description"
                        value="<?= $vacancy->description?>"
                        required=true
                    >
                    <button type="submit">Submit</button>
                </li>
                <li>
                    <label for="vacancyCity">Vacancy City:</label>
                    <select id="vacancyCity" name="vacancy.city.id">
                        @foreach ($cities as $city)
                            <option value="<?= $city->id ?>"
                                @if ($vacancy->city_id == $city->id)
                                selected
                                @endif
                            >
                            <?= $city->name ?></option>
                        @endforeach
                        {{-- <option value="new">new</option> --}}
                    </select>
                </li>
                <li>
                    <select id="vacancyTitle"name="vacancy.company.id">
                        @foreach ($companies as $company)
                            <option value="<?= $company->id ?>"
                                @if ($vacancy->company == $company->id)
                                selected
                                @endif
                            >
                            <?= $company->name ?></option>
                        @endforeach
                        {{-- <option value="new">new</option> --}}
                    </select>
                </li>
            </form>
        </ul>
    </body>
</html>