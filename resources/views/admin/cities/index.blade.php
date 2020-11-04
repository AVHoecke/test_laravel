<!-- View stored in resources/views/admin/cities/index.blade.php -->
<x-html-5>
    <x-slot name="title">
        Cities
    </x-slot>
    <h1>Cities</h1>
    <ul>
        <li>
            <a href="<?= route('admin.city.create') ?>">Create new city</a>
        </li>
    </ul>
    @if (count($cities) == 0)
    <p>There are no cities.</p>
    @else
    <table class="admin-cities-table">
        <tr>
            <td class="col">Id:</td>
            <td class="col">Name:</td>
        </tr>
        @foreach ($cities as $city)
        <tr>
            <td><?= $city->id ?></td>
            <td><?= $city->name ?></td>
            <td><a href="<?= route('admin.city.edit', $city) ?>">Edit</a></td>
            <td><form method="POST" action="<?= route('admin.city.destroy', $city) ?>">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button> 
            </form></td>
        </tr>
        @endforeach
    </table>
    @endif
</x-html-5>