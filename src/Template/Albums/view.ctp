
<div class="albums view large-9 medium-8 columns content">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($album->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($album->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($album->data) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Songs') ?></h4>
        <?php if (!empty($album->songs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Path') ?></th>
            </tr>
            <?php foreach ($album->songs as $songs): ?>
            <tr>
                <td><?= h($songs->name) ?></td>
                <td><?= h($songs->path) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
