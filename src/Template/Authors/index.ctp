<h1 class="page-header">著者一覧</h1>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <tr>
        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
        <th scope="col" class="actions">アクション</th>
    </tr>
<?php foreach ($authors as $author): ?>
    <tr>
        <td><?= $this->Number->format($author->id) ?></td>
        <td><?= h($author->name) ?></td>
        <td><?= h($author->modified->format("Y年m月d日H時i分")) ?></td>
        <td><?= h($author->created->format("Y年m月d日H時i分")) ?></td>
      <td class="actions">
          <?= $this->Html->link("表示", ['action' => 'view', $author->id]) ?>
          <?= $this->Html->link("編集", ['action' => 'edit', $author->id]) ?>
      </td>
    </tr>
<?php endforeach; ?>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->numbers([
            'before' => $this->Paginator->first("<<"),
            'after' => $this->Paginator->last(">>"),
        ]) ?>
    </ul>
</div>