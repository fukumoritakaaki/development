<h1 class="page-header">カテゴリ表示</h1>
<table class="table" cellpadding="0" cellspacing="0">
    <tr>
        <td>ID</td>
        <td><?php echo $category->id;  ?></td>
    </tr>
    <tr>
        <td>名前</td>
        <td><?php echo $category->name;  ?></td>
    </tr>
</table>
<?php
if(!empty($category->books)) :
?>
<h3>関連する本</h3>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>タイトル</th>
        <th>金額</th>
    </tr>
<?php
foreach($category->books as $book) :
  echo "<tr>";
  echo "<td>{$book->id}</td>";
  echo "<td>{$book->title}</td>";
  echo "<td>{$book->price}</td>";
  echo "</tr>";
endforeach;
?>  
</table>
<?php
endif;
?>