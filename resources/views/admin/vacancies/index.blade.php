<!-- View stored in resources/views/admin/vacancies/index.blade.php -->

<html>
<body>
    <h1>Vacancies</h1>
    <ul>
        <li>
            <a href="<?= route('admin.vacancy.create') ?>">Create new vacancy</a>
        </li>
    </ul>
    @if (count($vacancies) == 0)
    <p>There are no vacancies.</p>
    @else
    <table class="admin-vacancies-table">
        <tr>
            <td class="col">Id:</td>
            <td class="col">Title:</td>
            <td class="col">Description:</td>
            <td class="col">City:</td>
        </tr>
        @foreach ($vacancies as $vacancy)
        <tr>
            <td><?= $vacancy->id ?></td>
            <td><?= $vacancy->title ?></td>
            <td><?= $vacancy->description ?></td>
            <td><?= $vacancy->city->name ?></td>
            <td><a href="<?= route('admin.vacancy.edit', $vacancy) ?>">Edit</a></td>
            <td><form method="POST" action="<?= route('admin.vacancy.destroy', $vacancy) ?>">
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