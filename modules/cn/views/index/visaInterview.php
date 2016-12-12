
    <link rel="stylesheet" href="/cn/css/ResearchReport.css"/>
    <script type="text/javascript" src="/cn/js/index.js"></script>

<div class="fiveAdvantage fiveAdvantage-sanji">
    <img src="/cn/images/quesAnswer_topH02.jpg" alt="内容头部图">
</div>
<div class="quesAcontent">
    <div class="contentLeft">

        <div class="leftAnswer">
            <div class="anleft leftWidth">
                <h1><?php echo $cnName?></h1>
            </div>
            <div class="anright rightWidth">
                <b><?php echo $enName?></b>
                <input type="button" value="立即留学评估"/>
                <span><img src="/cn/images/quesAnswer_phone.png" alt="电话图标"> 400-600-1123</span>
            </div>
        </div>
        <div class="researchContent">
            <ul>
                <?php
                    foreach($contentData as $v) {
                        ?>
                        <li>
                            <a href="/word-details/<?php echo $v['id']?>/<?php echo $v['catId']?>.html" class="title"><?php echo $v['name']?></a>

                            <p>
<?php echo $v['abstract']?>……
                            </p>
                            <span>关键词：<?php echo $v['keywords']?></span>
                            <a href="/word-details/<?php echo $v['id']?>/<?php echo $v['catId']?>.html" class="seeMore">查看更多</a>
                        </li>
                    <?php
                    }
                ?>
            </ul>
        </div>

        <!--分页-->
        <script type="text/javascript">
            function goPage(){
                var page = $('.pageNumber').val();
                var total = <?php echo $total?>;
                if(page = "" || page > total || page<1){
                    alert("请输入正确数字");
                    return false;
                }
                var page = $('.pageNumber').val();
                location.href="/VisaInterview/"+page+'.html';
            }
        </script>
        <div class="page pagetop">
            <ul>
                <li>总数：<?php echo $count?></li>
                <li><a href="<?php echo "/VisaInterview/1.html"?>">首页</a></li>
                <li><a href="<?php echo ($page >1)?'/VisaInterview/'.($page-1).'.html':'javascript:;'?>">上一页</a></li>
                <li><a href="<?php echo ($page <$total)?'/VisaInterview/'.($page+1).'.html':'javascript:;'?>">下一页</a></li>
                <li class="mr"><a href="<?php echo "/VisaInterview/$total.html"?>">尾页</a></li>
                <li class="mr02">页次：<span class="colorRed"><?php echo $page?></span>/<?php echo $total?></li>
                <li class="mr02"><input class="pageNumber" type="text"/></li>
                <li><input onclick="goPage()" type="button" value="GO"/></li>
            </ul>

            <div style="clear: both"></div>
        </div>

        <?php use app\commands\front\RelatedWidget;?>
        <?php RelatedWidget::begin();?>
        <?php RelatedWidget::end();?>
    </div>
    <?php use app\commands\front\RightWidget;?>
    <?php RightWidget::begin();?>
    <?php RightWidget::end();?>
    <div style="clear: both"></div>
</div>
<?php use app\commands\front\ContactWidget;?>
<?php ContactWidget::begin();?>
<?php ContactWidget::end();?>
<script type="text/javascript">
    jQuery(".connection").slide({mainCell:".connectBd",trigger:"mouseover"});
</script>
<!-----------------------------尾部------------------------------>
<?php use app\commands\front\FooterWidget;?>
<?php FooterWidget::begin();?>
<?php FooterWidget::end();?>
<!-----------------------------尾部end------------------------------>
<!-------------------------------------------------右边的悬浮窗------------------------------------------->
<?php use app\commands\front\RightSuspensionWidget;?>
<?php RightSuspensionWidget::begin();?>
<?php RightSuspensionWidget::end();?>
<!----------------------------------------------左边悬浮窗-------------------------------------------------------------->
<?php use app\commands\front\LeftSuspensionWidget;?>
<?php LeftSuspensionWidget::begin();?>
<?php LeftSuspensionWidget::end();?>
</body>
</html>