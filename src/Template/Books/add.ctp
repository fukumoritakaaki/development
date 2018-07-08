<h1 class="page-header">書籍新規登録</h1>
<?php
echo $this->Form->create($book);
echo $this->Form->input('title');
echo $this->Form->input('price');
echo $this->Form->input('author_id', ['options' => $authors,"empty" =>"選択"]);
echo $this->Form->input('category_id', ['options' => $categories,"empty" =>"選択"]);
echo $this->Form->button("登録");
echo $this->Form->end();
?>

