<div class="tempDiv" style="min-height: 90vh; margin: auto; padding: 75px 16px">
    <div class="container">
        <a href="/productscheme/create" class="button"><i class="fa fa-plus"></i> <?= $text_new_item ?></a>
        <table class="data">
            <thead>
                <tr>
                    <th><?= $text_table_name ?></th>
                    <th><?= $text_table_control ?></th>
                </tr>
            </thead>
            <tbody>
            <?php if(false !== $ps): foreach ($ps as $s): ?>
                <tr>
                    <td><?= $s->PSName ?></td>
                    <td>
                        <a href="/productscheme/edit/<?= $s->PSId ?>"><i class="fa fa-edit"></i></a>
                        <a href="/productscheme/delete/<?= $s->PSId ?>" onclick="if(!confirm('<?= $text_table_control_delete_confirm ?>')) return false;"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; endif; ?>
            </tbody>
        </table>
    </div>
</div>