<!-- View stored in resources/views/admin/vacancies/create.blade.php -->
<x-html-5>
    <x-slot name="title">
        New Vacancy
    </x-slot>
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
                <label for="vacancyTitle">Title:</label>
                <input
                    id="vacancyTitle"
                    type="text"
                    name="vacancy.title"
                    value="<?= $vacancy->title?>"
                    required=true
                >
            </li>
            <li>
                <label for="vacancyDescription">Description:</label>
                <input
                    id="vacancyDescription"
                    type="text"
                    name="vacancy.description"
                    value="<?= $vacancy->description?>"
                    required=true
                >
            </li>
            <li>
                <label for="vacancyType">Vacancy type:</label>
                <select id="vacancyType" name="vacancy.type.id">
                    @foreach ($vacancyTypes as $vacancyType)
                        <option value="<?= $vacancyType->id ?>"
                            @if ($vacancy->vacancy_type_id == $vacancyType->id)
                            selected
                            @endif
                        >
                        <?= $vacancyType->name ?></option>
                    @endforeach
                    {{-- <option value="new">new</option> --}}
                </select>
            </li>
            <li>
                <label for="vacancyCity">City:</label>
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
                <label for="vacancyCity">Company:</label>
                <select id="vacancyTitle"name="vacancy.company.id">
                    @foreach ($companies as $company)
                        <option value="<?= $company->id ?>"
                            @if ($vacancy->company->id == $company->id)
                            selected
                            @endif
                        >
                        <?= $company->name ?></option>
                    @endforeach
                    {{-- <option value="new">new</option> --}}
                </select>
            </li>
            <button type="submit">Save</button>
        </form>
    </ul>
</x-html-5>
