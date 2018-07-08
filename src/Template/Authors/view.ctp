<h1 class="page-header">著者表示</h1>
<table class="table" cellpadding="0" cellspacing="0">
    <tr>
        <td>ID</td>
        <td><?php echo $author->id;  ?></td>
    </tr>
    <tr>
        <td>名前</td>
        <td><?php echo $author->name;  ?></td>
    </tr>
</table>
<?php
if(!empty($author->books)) :
?>
<h3>関連する本</h3>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>タイトル</th>
        <th>金額</th>
    </tr>
<?php
foreach($author->books as $book) :
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