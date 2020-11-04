<!-- View stored in resources/views/admin/vacancies/create.blade.php -->
<x-html-5>
    <x-slot name="title">
        New Vacancy
    </x-slot>
    <h1>New Vacancy</h1>
    <ul>
        <li>
            <form method="POST" action="<?= route('admin.vacancy.store') ?>">
                @csrf
                <label for="vacancyTitle">Title:</label>
                <input id="vacancyTitle" type="text" name="vacancy.title" required=true>
                <label for="vacancyDescription">Description:</label>
                <input id="vacancyDescription" type="text" name="vacancy.description" required=true>
                <label for="vacancyTitle">City:</label>
                <select id="vacancyTitle"name="vacancy.city.id">
                    @foreach ($cities as $city)
                    <option value="<?= $city->id ?>"><?= $city->name ?></option>
                    @endforeach
                    {{-- <option value="new">new</option> --}}
                </select>
                <label for="vacancyCompany">Company:</label>
                <select id="vacancyCompany"name="vacancy.company.id">
                    @foreach ($companies as $company)
                    <option value="<?= $company->id ?>"><?= $company->name ?></option>
                    @endforeach
                    {{-- <option value="new">new</option> --}}
                </select>
                <label for="vacancyType">Vacancy type:</label>
                <select id="vacancyType"name="vacancy.type.id">
                    @foreach ($vacancyTypes as $vacancyType)
                    <option value="<?= $vacancyType->id?>"><?= $vacancyType->name ?></option>
                    @endforeach
                    {{-- <option value="new">new</option> --}}
                </select>
                <button type="submit">Save</button>
            </form>
        </li>
    </ul>
</x-html-5>