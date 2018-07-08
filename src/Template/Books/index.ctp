<h1 class ="page-header">書籍一覧</h1>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <tr>
        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('title') ?></th>
        <th scope="col"><?= $this->Paginator->sort('price') ?></th>
        <th scope="col"><?= $this->Paginator->sort('author_id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
        <th scope="col" class="actions">アクション</th>
    </tr>
<?php foreach ($books as $book): ?>
    <tr>
        <td><?= $this->Number->format($book->id) ?></td>
        <td><?= h($book->title) ?></td>
        <td><?= $this->Number->format($book->price) ?></td>
        <td><?= $book->author->name ?></td>
        <td><?= $book->category->name ?></td>
        <td><?= h($book->modified->format("Y年m月d日H時i分")) ?></td>
        <td><?= h($book->created->format("Y年m月d日H時i分")) ?></td>
      <td class="actions">
          <?= $this->Html->link("編集", ['action' => 'edit', $book->id]) ?>
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