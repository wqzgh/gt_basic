<h1><?php echo $hello?>:这是一个演示模块</h1>
<?php if($from_table_rows):?>
    <h2>以下内容来源于数据库</h2>
<?php foreach($from_table_rows as $k=>$v):?>
    <p><?php echo $v['AppID']?></p>
    <?php endforeach;?>
<?php endif;?>

<?php if($from_model_rows):?>
    <h2>以下内容来源于MODEL初始化函数</h2>
<?php foreach($from_model_rows as $k=>$v):?>
    <p><?php echo $v['AppID']?></p>
    <?php endforeach;?>
<?php endif;?>
