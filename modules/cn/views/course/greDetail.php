<link rel="stylesheet" href="/cn/css/classDetails-gre.css?v=1.1">
<script type="text/javascript" src="/cn/js/classDetails.js"></script>

<div id="content_big">
    <!--首页导航栏-->
    <div id="content_head">
        <ul>
            <li><a href="/">首页</a>&gt;<a href="/gre.html">GRE课程</a>&gt;<a href="#"><?php echo str_replace("雷哥", "申友",$data['data']['name'])?></a></li>
        </ul>
    </div>
    <!--雷哥基金串讲-->
    <div id="con_video">
        <div class="video_left">
            <p class="video_left_name"><?php echo str_replace("雷哥", "申友",$data['data']['name'])?></p>
            <div class="video_left_type">申友GRE</div>
        </div>
        <div class="video_right">
            <span class="vedio_r_bigtitle"><?php echo str_replace("雷哥", "申友",$data['data']['name'])?></span><!--课程名称-->
            <ul>
                <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                    <span class="vi_r_price"><?php echo $data['data']['price']?></span>
                    &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $data['data']['originalPrice']?></span></li><!--原价-->

                <li>课程时长：<?php echo $data['data']['duration']?></li><!--课程时长-->
                <li>开课日期： <?php echo $data['data']['commencement']?></li><!--开课日期-->
            </ul>
            <div class="course-btns">

                <a target="_blank" href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">点击咨询</a>
            </div>
            <div class="vi_r_bluexian"></div>
            <div class="vi_r_fenxiang">
                <span>共<span style="color: #d01917;font-size: 20px"><?php echo $data['data']['viewCount']?></span>次浏览</span><!--浏览次数-->
                <div class="bshare-custom icon-medium" style="float: right"><div class="bsPromo bsPromo2"></div>
                    <a title="分享到QQ空间" class="bshare-qzone"></a>
                    <a title="分享到新浪微博" class="bshare-sinaminiblog"></a>
                    <a title="分享到人人网" class="bshare-renren"></a>
                    <a title="分享到腾讯微博" class="bshare-qqmb"></a>
                    <a title="分享到网易微博" class="bshare-neteasemb"></a>
                    <a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a>
                </div>
                <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script>
                <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
            </div>
        </div>
    </div>
    <!--课程介绍-->
    <div id="classJieshao">
        <!--课程介绍头部-->
        <div id="discuss" class="class_jieshao_head hd">
            <ul>
                <li class="on">
                    <input type="button" value="课程详情">
                </li>
                <li class="">
                    <input type="button" value="名师专家">
                </li>
                <li class="">
                    <input type="button" value="用户评价">
                </li>
                <li class="">
                    <input type="button" value="资料下载">
                </li>
            </ul>
        </div>
        <!--课程表的内容-->
        <!--下面变换的div -->
        <div class="keti_xq_bianh bd">
            <!--课程详情-->
            <ul class="intr-wrap">
                <div>
                    <?php if($data['data']['description']!=false) {
                         $str=preg_replace('/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)\\1[^>]*?\/?\s*>/i', '', str_replace("雷哥", "申友",$data['data']['description']));
                    }else{
                        $str=preg_replace('/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)\\1[^>]*?\/?\s*>/i', '',str_replace("雷哥", "申友",$data['parent']['description']));
                    }
                    $str=preg_replace('/2072966452/','2899175815',$str);
                    $str=preg_replace('/Larrythinku/','thinkwithu2016',$str);
                    $str=preg_replace('/43382135617/','1738367468',$str);
                    $str=preg_replace('/18957118117/','18621928642',$str);
                    $str=preg_replace('/2630161614/','2072966452',$str);
                    $str=preg_replace('/2095453331/','2250281936',$str);
                    $str=preg_replace('/GMATonline-Lindy/','Michellethinku',$str);
                    $str=preg_replace('/3382135617/','3176627895',$str);
                    $str=preg_replace('/400-1816-180/','400-600-1123',$str);
                    $str=preg_replace('/：申友GRE/','mingxiaoliuxue',$str);
                    $str=preg_replace('/:申友GRE/','mingxiaoliuxue',$str);
                    $str=preg_replace('/1963606598/','GMAT-ss',$str);
                    $str=preg_replace('/上海市杨浦区政学路51号创智天地企业中心2号楼305室/','上海市徐汇区虹桥路355号 城开国际大厦5层',$str);
                    $str=preg_replace('/杭州市下城区庆春路118号嘉德广场1703室/','杭州市江干区钱江新城万银国际1303室',$str);
                    $str=preg_replace('/greonline/','mingxiaoliuxue',$str);
                    echo $str;
                    ?>
                    <!--课程详情输出内容-->
                </div>
            </ul>
            <!--名师专家-->
            <ul class="keti_teacher_box">
                <?php
                if($data['parent']['trainer']!=false){
                    echo str_replace("雷哥", "",$data['parent']['trainer']);
                }
                ?>
            </ul>
            <!--用户评价-->
            <ul>
                <li>
                    <div class="liuyan_user_big">
                        <ol id="disContent"><!--循环li-->
                            <?php if ($data['comment']['data'] != false) {
                                foreach ($data['comment']['data'] as $v) {
                                    ?>
                                    <li>
                                        <div class="imgUser">
                                            <img src="http://gmat.viplgw.cn/app/web_core/styles/images/tiku_meidt_userimg.png" alt="" width="50"
                                                 style="float: left">
                                        </div>
                                        <div class="user_liuyan">
                                            <p><span class="size_9"><?php echo $v['userName'] ?></span></p>
                                            <span><?php echo str_replace("雷哥", "申友",$v['content']) ?></span>
                                        </div>
                                    </li>
                                <?php }
                            } ?>
                        </ol>
                    </div>
                </li>
                <li style="clear: both"></li>
            </ul>
            <!--资料下载-->
            <ul class="jiangy_xiaz">
                <li>
<!--                    --><?php //if (isset($data['datelist']) && $data['datelist'] != false) { ?>
<!--                        <p class="p_title">参考资料（是你所听课程需要的学习资料，更好地辅助你的学习）</p>-->
<!--                        <ol>-->
                            <li><!--循环P标签-->
<!--                                --><?php //foreach ($data['datelist'] as $v) { ?>
<!--                                    <p style="line-height: 16px;">-->
<!--                                        <img src="/cn/images/icon_pdf.gif">-->
<!--                                        <span title="GMAT数学术语.pdf"-->
<!--                                              href="/files/attach/file/20150609/1433817061715360.pdf">GMAT数学术语.pdf</span>-->
<!--                                        <a href="/files/attach/file/20150609/1433817061715360.pdf"-->
<!--                                           target="_blank">下载</a>-->
<!--                                    </p>-->
<!--                                --><?php //} ?>
<!--                            </li>-->
<!--                        </ol>-->
<!--                    --><?php //} else { ?>
                        <p class="p_title">暂无资料可以下载！</p>
<!--                    --><?php //} ?>
                </li>
            </ul>
        </div>
    </div>
    <div id="uidSign" data-uid="0" style="display:none">
        <a href="http://www.51js.com" target="_blank" id="link">text</a>
    </div>
</div>



