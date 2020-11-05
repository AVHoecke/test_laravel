    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
        <tr onclick="showVacancyModal(<?= $vacancy->id ?>)">
            <td><?= $vacancy->title ?></td>
            <td><?= $vacancy->description ?></td>
            <td><?= $vacancy->city->name ?? '' ?></td>
            <td><?= $vacancy->company->name ?? '' ?></td>
            <td><?= $vacancy->vacancyType->name ?? '' ?></td>
        </tr>
<div class="modal fade" id="mediumModal<?= $vacancy->id ?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <h1><?= $vacancy->title ?></h1>
            <h3><?= $vacancy->description ?></h3>
            <p>Apply now via : <a href="mailto:<?= $vacancy->company->ghost ?? 'no mail provided. Use a bloody bat.' ?>">email</a></p>
        </div>
    </div>
</div>