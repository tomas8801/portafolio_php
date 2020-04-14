<div class="col-md-12">
    <?php if(isset($_SESSION['delete'])):?>
        <div class="alert"><?= $_SESSION['delete']?></div>
    <?php endif; ?>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Languages</th>
        <th scope="col">Date</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($projects as $project):?>
        <tr>
            <td><?=$project->id?></td>
            <td><?=$project->name?></td>
            <td><?=$project->languages?></td>
            <td><?=$project->date?></td>
            <td>
            <a href="<?=url_base?>project/delete&id=<?=$project->id?>">Delete</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>

    </table>
</div>