<?php 
// 小專試作第一版
?>

<?php include __DIR__. '/parts/html-head.php'; ?>
<?php include __DIR__. '/parts/navbar.php'; ?>

<style>
.book {
    height: 300px;
    background-color: #EEE;
    border: solid 1px;
}
</style>

<div class="container mt-3">

    <div class="row">
        <div class="col-12" style="height: 600px; border: solid 1px; background-color: #EEE;">
            Game
        </div>
    </div>
    <div class="row">
        <div class="col-lg book autobg">
            立春 / 雨水
        </div>
        <div class="col-lg book autobg">
            驚蟄 / 春分
        </div>
        <div class="col-lg book autobg">
            清明 / 穀雨
        </div>
        <div class="col-lg book autobg">
            立夏 / 小滿
        </div>
        <div class="col-lg book autobg">
            芒種 / 夏至
        </div>
        <div class="col-lg book autobg">
            小暑 / 大暑
        </div>
    </div>
    <div class="row">
        <div class="col-lg book autobg">
            立秋 / 處暑
        </div>
        <div class="col-lg book autobg">
            白露 / 秋分
        </div>
        <div class="col-lg book autobg">
            寒露 / 霜降
        </div>
        <div class="col-lg book autobg">
            立冬 / 小雪
        </div>
        <div class="col-lg book autobg">
            大雪 / 冬至
        </div>
        <div class="col-lg book autobg">
            小寒 / 大寒
        </div>
    </div>
    <div class="row">
        <div class="col d-flex flex-row-reverse fixed-bottom">
            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                叫出拼圖選單
            </button>
            <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Test1</a>
                <a href="#" class="dropdown-item">Test1</a>
                <a href="#" class="dropdown-item">Test1</a>
                <a href="#" class="dropdown-item">Test1</a>
                <a href="#" class="dropdown-item">Test1</a>
            </div>
        </div>
        </div>

        
    </div>
</div>



<?php include __DIR__. '/parts/scripts.php'; ?>
<?php include __DIR__. '/parts/html-foot.php'; ?>