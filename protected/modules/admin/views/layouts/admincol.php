<?php $this->beginContent('/layouts/main'); ?>
<br>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3">
            <div class="well sidebar-nav">
                <ul class="nav nav-list">
                    <li class="nav-header">Дейсвия с работой</li>
                    <?php
                     if($this->action->Id=='View')
                        echo '<li class="active"><a href="/admin/work">Просмотр</a></li>';
                     else
                           echo '<li><a href="/admin/work">Просмотр</a></li>';
                    if($this->action->Id=='Create')
                        echo '<li class="active"><a href="/admin/work/Create">Добавить работу</a></li>';
                    else
                        echo '<li><a href="/admin/work/Create">Добавить работу</a></li>';
                    if($this->action->Id=='Delete')
                        echo '<li class="active"><a href="/admin/work/Delete">Удалить работу</a></li>';
                    else
                        echo '<li><a href="/admin/work/Delete">Удалить работу</a></li>';

                    ?>
                </ul>
            </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">

            <div class="row-fluid">
                <?php echo $content; ?>
            </div><!--/row-->
        </div><!--/span-->
    </div><!--/row-->

    <hr>

    <footer>
        <p>&copy; Company 2012</p>
    </footer>

</div><!--/.fluid-container-->
<?php $this->endContent(); ?>