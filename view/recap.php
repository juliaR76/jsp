<div class="col-lg-13 col-md-14 mx-auto table-responsive-sm">
<table class="table table-bordered table-hover">
    <thead class="thead">
        <tr>
            <th scope="col">Titre</th>   
            <th scope="col">Date</th>
            <th scope="col">Aperçu</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($lessons as $lesson) { ?>
        <tr>
            <td><?= $lesson->title() ?></td>
            <td><?= substr($lesson->publication_date(),0,20) ?></td>
            <td><i class="fas fa-book-open"></i><a href="index.php?action=lesson&lesson=<?= $lesson->id() ?>"> Voir </a></td>
            <td><a href="index.php?action=update&lesson=<?= $lesson->id() ?>"> Modifier </a></td>
            <td><a href="index.php?action=delete&lesson=<?= $lesson->id() ?>"> Supprimer </a></td>
        </tr>
    </tbody>
<?php }?>
</table>
</div>
