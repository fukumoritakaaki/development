<h1 class="page-header">著者編集</h1>
<?php
  echo $this->Form->create($author);
  echo $this->Form->input('name');
  echo $this->Form->button("登録");
  echo $this->Form->end();
?>  
