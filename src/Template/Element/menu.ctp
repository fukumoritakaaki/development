
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
      <div class="navbar-header">
      <?=$this->Html->link("書籍くん",["controller" => "books" ]
              ,["class"=>"navbar-brand"]); ?>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown">
              <?=$this->Html->link("書籍","#",["data-toggle"=>"dropdown"]);?>
              <ul class="dropdown-menu">
                  <li><?=$this->Html->link("一覧","/books/index");?></li>
                  <li><?=$this->Html->link("新規追加","/books/add");?></li>
              </ul>
          </li>
          <li class="dropdown">
              <?=$this->Html->link("著者","#",["data-toggle"=>"dropdown"]);?>
              <ul class="dropdown-menu">
                  <li><?=$this->Html->link("一覧","/authors/index");?></li>
                  <li><?=$this->Html->link("新規追加","/authors/add");?></li>
              </ul>
           </li>
          <li class="dropdown">
              <?=$this->Html->link("カテゴリ","#",["data-toggle"=>"dropdown"]);?>
              <ul class="dropdown-menu">
                  <li><?=$this->Html->link("一覧","/categories/index");?></li>
                  <li><?=$this->Html->link("新規追加","/categories/add");?></li>
              </ul>
           </li>
        </ul>          
      </div> 
  </div> 
</div>    