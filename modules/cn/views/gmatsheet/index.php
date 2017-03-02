
    <link rel="stylesheet" href="/cn/css/gmatSheet.css"/>
    <script type="text/javascript" src="/cn/js/gmatSheet.js"></script>

<div style="clear: both"></div>
<div class="gmat-topImg">
    <img src="/cn/images/gmat_bigBG.png"/>
    <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">在线咨询GMAT</a>
</div>
<!--申友GMAT精品课程-->
<section class="gmat-class">
    <h2>申友GMAT精品课程</h2>
    <ul>
    	<li>
    		<div class="class-img">
    			<img src="/cn/images/gmat_class1.png"/>  			
    		</div>
    		<i class="class-left"></i>
    		<div class="class-cont">
    			<div>
					<h4>
						<a href="/picture-details/160/index,161,115.html" target="_blank">GMAT PRE适合人群</a>
					</h4>
					<p>1、英语基础较弱，CET-4/6成绩不高，没有雅思、托福考试经验或者成绩不理想的学员</p>
					<p>2、希望在名师指导下短时间内获得GMAT基础提高训练，偏好小班上课，追求VIP服务体验的学员</p>
					<p>3、GMAT零基础客户</p>
				</div>
				<div>
					<h4>
						<a href="/picture-details/160/index,161,115.html" target="_blank"> GMAT PRE授课内容</a>
					</h4>
					<p>GMAT考试简介，词汇，长难句，语法基础，阅读，数学基础等</p>
				</div>
				<div class="class-btn">
					<a href="/picture-details/160/index,161,115.html" target="_blank">了解详情</a>
					<h3>基础课程</h3>
				</div>
    		</div>
    	</li>
    	<li>
    		<div class="class-imgRight">
    			<img src="/cn/images/gmat_class2.png"/>  	
    		</div>
    		<i class="class-right"></i>
    		<div class="class-cont">
    			<div>
					<h4>
						<a href="/picture-details/160/index,161,115.html" target="_blank">GMAT 700+培训适合人群</a>
					</h4>
					<p>1、考试目标明确，希望获得高分的学员</p>
					<p>2、GMAT高分强化班入学条件</p>
					<p>3、参与申友GMAT入学测试，取得规定分数以上的成绩</p>
				</div>
				<div>
					<h4>
						<a href="/picture-details/160/index,161,115.html" target="_blank"> GMAT 700+培训授课内容</a>
					</h4>
					<p>申友GMAT高分强化班全新升级，通过全方位解析考题和考官的意图， 引导学生的思维，教授简单有效的解题技巧。从课前到课后，全程个性化的监督辅导</p>
				</div>
				<div class="class-btn">
					<a href="/picture-details/160/index,161,115.html" target="_blank">了解详情</a>
					<h3>强化课程</h3>
				</div>
    		</div>
    	</li>
    	<li>
    		<div class="class-img">
    			<img src="/cn/images/gmat_class3.png"/>   			
    		</div>
    		<i class="class-left"></i>
    		<div class="class-cont">
    			<div>
					<h4>
						<a href="/picture-details/160/index,161,115.html" target="_blank">GMAT 周末班适合人群</a>
					</h4>
					<p>有强化基础需求的大学生或在职人士，适合周末上课</p>
				</div>
				<div>
					<h4>
						<a href="/picture-details/160/index,161,115.html" target="_blank"> GMAT 周末班授课内容</a>
					</h4>
					<p>GMAT周末班课程是链接申友高分系列课程的重要课程。引导学生积极思维，短期内有效提高学员基础水平，是申友GMAT周末班课程所倡导的教学理念</p>
				</div>
				<div class="class-btn">
					<a href="/picture-details/160/index,161,115.html" target="_blank">了解详情</a>
					<h3>强化课程</h3>
				</div>
    		</div>
    	</li>
    </ul>
</section>
<!--近期开班-->
<section class="gmat-open">
	<div class="openClass">
	     <div class="topTitle">近期开班</div>
	     <table cellspacing="0">
	         <tr>
	             <th>课程类型</th>
	             <th>面授时间</th>
	             <th>主讲老师</th>
	             <th>城市</th>
	             <th></th>
	         </tr>
	         <?php
	         $data = \app\modules\cn\models\Content::getContent(['fields' => 'hot,time,job,place,url','category' => "248",'pageSize'=>6,'order'=>'sort']);
	         foreach($data as $v) {
	         ?>
	         <tr>
	             <td><a href="<?php echo $v['url']?>"><?php echo $v['hot']?></a></td>
	             <td><?php echo $v['time']?></td>
	             <td><?php echo $v['job']?></td>
	             <td><?php echo $v['place']?></td>
	             <td class="open-apply"><a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">在线报名 </a></td>
	         </tr>
	         <?php
	         }
	         ?>
	     </table>
	    <div class="moreClass">
	        <i class="fa fa-caret-down"></i>
	        <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">更多课程查询</a>
	    </div>
</div>
</section>
<!--申友GMAT课程特色服务-->
<div class="gmat-special">
	<h2>申友GMAT课程服务特色</h2>
	<div class="in-special">
		<div class="gmat-cent">
			<ul class="gmat-centLeft">
				<li>
					<span>01</span>
					<div>
						<h4>名师答疑</h4>
						<p>1对1VIP强化</p>
						<p>论坛答疑</p>
					</div>
				</li>
				<li>
					<span>02</span>
					<div>
						<h4>学习社区</h4>
						<p>全方位解决各种疑惑</p>
						<p>学习资料便捷下载</p>
					</div>
				</li>
				<li>
					<span>03</span>
					<div>
						<h4>机经冲刺</h4>
						<p>考前冲刺&nbsp;&nbsp;助力高分</p>
						<p>论坛答疑</p>
					</div>
				</li>
				<li>
					<span>04</span>
					<div>
						<h4>仿真模考</h4>
						<p>99%参考GMAT考场规划</p>
						<p>抢先体验GMAT考场效果</p>
					</div>
				</li>
			</ul>
			<ul class="gmat-centRight">
				<li>
					<span>05</span>
					<div>
						<h4>核心课程</h4>
						<p>逻辑、语法、阅读</p>
						<p>作文、数学全方位解析</p>
					</div>
				</li>
				<li>
					<span>06</span>
					<div>
						<h4>真题讲解</h4>
						<p>训练解题思维</p>
						<p>逐渐分析解题方法</p>
						<!--<p>真题解析</p>-->
					</div>
				</li>
				<li>
					<span>07</span>
					<div>
						<h4>评估预测访谈</h4>
						<p>名师剖析测评结果</p>
						<p>针对性提出复习意见</p>
					</div>
				</li>
				<li>
					<span>08</span>
					<div>
						<h4>模考解析</h4>
						<p>实战演练</p>
						<p>名师讲解</p>
					</div>
				</li>
			</ul>
		</div>		
	</div>
</div>
<!--国际范儿-->
<div class="toefl-teacher">
    <div class="inTeacher">
        <h2><a href="/teachers.html" target="_blank">国际范儿<span>GMAT名师团队</span>联袂授课</a></h2>
        <div class="toggleSummer">
            <div class="summerHd hd">
                <a href="javascript:void(0);" class="prev">&lt;</a>
                <a href="javascript:void(0);" class="next">&gt;</a>
            </div>
            <div class="summerBd">
            	<ul>
            		<li>
            			<img src="/cn/images/gmat_zora.jpg" alt="老师照片"/>     			
            			<div class="summer-title">
            				<p>Zora</p>
            				<p>主讲：Gmat语法</p>
            			</div>
            			<p class="summer-cent">著作：参编《牡丹江主要旅游景点中英文对照翻译》（东北林业大学出版社）
            				<br />
学术成果：申友教育总部教师，GMAT句子改错“解析王”，不仅对GMAT教学有独到见解，更在专八、BEC高级、雅思等多项重量级考试中获取高分；第十四届中国澳大利亚研究国际学术研讨会外事接待组组长；曾作为东北地区渤海靺鞨秀详细资料、澳大利亚吉拉德政府外交政策以及澳大利亚女作家伊丽莎白•乔利小说《果园窃贼》等多个翻译项目的翻译骨干，参与第十四届中澳研讨会前期项目；普通话水平一级乙等，“东北话水平八级”；教学风格另类幽默，深受学生喜爱。</p>
					    <a class="btn-2" target="_blank"
                   href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">约课</a>          
            		</li>
            		<li>
            			<img src="/cn/images/gmat_natasha.jpg" alt="老师照片"/>
            			<div class="summer-title">
            				<p>Natasha</p>
            				<p>主讲：Gmat阅读、写作</p>
            			</div>
            			<p class="summer-cent">GMAT团队阅读名师，英语师范专业毕业，专业八级。拥有丰富的教育培训行业经验，善于把握重难点，预测常考语言特征及其推理方向；提出“错误特征排除，正确特征验证”的做题方法，和适用于阅读推断题的“就近推理法”，在实践教学中帮助学生拓宽思维、加深理解，提高正确率。</p>
					    <a class="btn-2" target="_blank"
                   href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">约课</a>
            		</li>
            		<li>
            			<img src="/cn/images/gmat_portia.jpg" alt="教师照片"/>
            			<div class="summer-title">
            				<p>Portia</p>
            				<p>主讲：Gmat数学、语法</p>
            			</div>
            			<p class="summer-cent">善于挖掘学生学习的盲点，并能及时满足学生学习所需，对GMAT、SAT数学研究深入，针对基础、中等、高分三段不同程度的学生有独特的教学方案，拥有独特的数学学习构架，难点部分讲解深入易懂；GMAT句子改错讲解细致，对题目分析透彻，善于总结做题技巧，深受学生喜爱。</p>
					    <a class="btn-2" target="_blank"
                   href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">约课</a>
            		</li>
            		<li>
            			<img src="/cn/images/studyA_teacher04.png" alt="老师照片"/>
            			<div class="summer-title">
            				<p>Julie</p>
            				<p>主讲：Gmat阅读、数学、逻辑</p>
            			</div>
            			<p class="summer-cent">美国工学硕士、博士。美国化工协会会员，全奖赴美留学，后留美工作。在美期间，多次参加国际会议，亲历美国文化，游遍美国。本科毕业于西安交通大学，取得双学位(工程/英语)，在校期间以作者身份在英国知名环境类杂志发表论文一篇。在所参加过的各类出国考试中均获得高分，并不断尝试刷新。
 多年GMAT考试培训经验，深谙GMAT阅读、数学考试技法，为广大考生带来福音。以缜密的工科思维和批判式的文科思维穿行于GMAT培训讲堂。目前为申友的GMAT主讲老师之一，并负责教研与教师团队的培训建设。Julie有多年托福授课经验，是国内较早的新托福教师之一，准确把握ETS的出题思路，其研发的口语听力技巧深受学生亲睐。对西方人的思维方式和表达习惯有着深刻理解，能够有效纠正学生学习英语的误区。在留学申请与签证办理，以及海外学习，工作和生活方面有着丰富经验，尤其擅长美国工科硕士申请。
	                    </p>
					    <a class="btn-2" target="_blank"
                   href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">约课</a>
            		</li>
            		<li>
            			<img src="/cn/images/toefl_amanda.png" alt="老师照片"/>
            			<div class="summer-title">
            				<p>Amanda</p>
            				<p>主讲：Gmat阅读、语法</p>
            			</div>
            			<p class="summer-cent">申友集团语言教学研发总监，《申友GMAT阅读笔记》主编，《申友GMAT语法笔记》副主编。英国兰卡斯特大学硕士，国内重本英语专业毕业；曾以培训师身份受邀参加GMAC官方举办的亚太峰会。亲历雅思，GMAT考试。国外的几年深造，使她对西方人的思维方式和表达习惯有着深刻的了解;多年教授和研发留学英语课程，尤其是GMAT、TOEFL、SAT阅读和雅思口语，对其有个人的见解;上课风格诙谐活泼，深受学生的喜欢。
	                    </p>
					    <a class="btn-2" target="_blank"
                   href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">约课</a>
            		</li>
            	</ul>
            </div>
        </div>
        <script type="text/javascript">
           jQuery(".toggleSummer").slide({ mainCell:".summerBd ul", effect:"leftLoop",vis:3, autoPlay:false});
        </script>
    </div>
</div>
<!--关于申友托福-->
<div class="aboutToefl">
    <h2>关于申友GMAT，他们有话说</h2>
    <div class="aboutTSlide">
        <div class="aboutTHd hd">
            <a href="javascript:;" class="next">
                <i class="fa fa-angle-right"></i>
            </a>
            <a href="javascript:;" class="prev">
                <i class="fa fa-angle-left"></i>
            </a>
        </div>
        <div class="aboutTBd">
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['fields' => 'score','category' => "102,115",'pageSize'=>4,'order'=>'sort desc']);
                foreach($data as $v) {
                    ?>
                <li>
                    <div class="aboutTBd-left">
                        <a href="#">
                            <img src="<?php echo $v['image']?>" alt="学员头像"/>
                        </a>
                    </div>
                    <div class="aboutTBd-right">
                        <h4><?php echo $v['name']?></h4>
                        <p><?php echo $v['title']?></p>
                        <a href="/word-details/<?php echo $v['id']?>/102.html">查看详情 &gt;</a>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <?php
                }
                ?>
            </ul>
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['fields' => 'score','category' => "102",'pageSize'=>4,'order'=>'sort']);
                foreach($data as $v) {
                ?>
                <li>
                    <div class="aboutTBd-left">
                        <a href="#">
                            <img src="<?php echo $v['image']?>" alt="学员头像"/>
                        </a>
                    </div>
                    <div class="aboutTBd-right">
                        <h4><?php echo $v['name']?></h4>
                        <p><?php echo $v['title']?></p>
                        <a href="/word-details/<?php echo $v['id']?>/102.html">查看详情 &gt;</a>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(".aboutTSlide").slide({mainCell:".aboutTBd",trigger:"click",pnLoop:false});
    </script>

</div>
<!--申友公开课-->
<div class="shenYou-class">
    <h2>申友公开课</h2>
    <div class="open-commonStyle">
        <?php
        $data = \app\modules\cn\models\Content::getContent(['fields' => 'url,place,time', 'category' => '178,107', 'pageSize' => 4]);
        ?>
        <ul>
            <?php
            foreach ($data as $v) {
                ?>
                <li>
                    <a href="/public-class/<?php echo $v['id'] ?>.html" target="_blank"><img src="<?php echo $v['image'] ?>" alt="课程图"/></a>

                    <p> <a href="/public-class/<?php echo $v['id'] ?>.html" target="_blank"><?php echo $v['name'] ?></a></p>
                    <span><?php echo date("Y-m-d H:i",strtotime($v['time'])) ?></span>
                    <b><?php echo $v['place'] ?></b>

                    <div style="clear: both;border-bottom: 1px #cbcbcb solid"></div>
                    <?php
                    if (!empty($v['url'])) { ?>
                        <a class="classBtn diffColor01" href="/public-class/back/<?php echo $v['id'] ?>.html" target="_blank">课程回放</a>
                    <?php } else { ?>
                        <a href="javascript:;" onclick="addCollect(<?php echo $v['id'] ?>)"
                           class="classBtn diffColor01">报名</a>
                    <?php } ?>
                    <a href="/public-class/<?php echo $v['id'] ?>.html" class="classBtn diffColor02" target="_blank">详情</a>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
<!--    <ul>-->
<!--        --><?php
//        $data = \app\modules\cn\models\Content::getContent(['order'=>'c.viewCount DESC','fields' => 'place,time,','category' => '107','pageSize' => 4,'where' => 'c.catId != 190']);
//        foreach($data as $v) {
//        ?>
<!--        <li>-->
<!--            <div class="topPurple">-->
<!--               <span>--><?php //echo $v['name']?><!--</span>-->
<!--            </div>-->
<!--            <div class="botWhite">-->
<!--                <ul>-->
<!--                    <li>时间：--><?php //echo date("Y-m-d",strtotime($v['time']))?><!--</li>-->
<!--                    <li>地点：--><?php //echo $v['place']?><!--</li>-->
<!--                    <li>-->
<!--                        --><?php
//                        if(!empty($v['url'])) {
//                            ?>
<!--                            <a class="fa fa-caret-right" href="/public-class/back/--><?php //echo $data[0]['id']?><!--.html">课程回放</a>-->
<!--                        --><?php
//                        }else {
//                            ?>
<!--                            <a onclick="addCollect(--><?php //echo $v['id']?>
<!--    //)" href="javascript:;" class="fa fa-caret-right">报名</a>--><?php
//                        }
//                        ?>
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </li>-->
<!--        --><?php
//        }
//        ?>
<!--    </ul>-->
</div>
<!--申友研究中心-->
<div class="researchCenter">
    <div class="inResearch">
        <h2>申友研究中心</h2>
        <div class="research-top">
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['fields' => 'synopsis','category' => "105,108,115",'pageSize'=>2,'order'=>'sort desc']);
                foreach($data as $v) {
                ?>

                <li>
                    <div class="researchT-left">
                        <a href="/materials.html" target="_blank"><img src="<?php echo $v['image']?>" alt="书籍图片"/></a>
                    </div>
                    <div class="researchT-right">
                        <h5> <a href="/materials.html" target="_blank">《<?php echo $v['name']?>》</a></h5>
                        <div class="whiteRes"><p><?php echo $v['synopsis']?></p></div>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <?php
                }
                ?>

            </ul>
        </div>
        <div class="research-bottom">
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => "108",'pageSize'=>6]);
                foreach($data as $v) {
                ?>

                <li>
                    <a href="/materials.html" target="_blank">
                        <div class="reseT-img">
                            <img src="<?php echo $v['image']?>" alt="教材图片"/>
                        </div>
                        <span>《<?php echo $v['name']?>》</span>
                    </a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<!--动态-->
<div class="dynamic">
    <ul>
        <li>
            <div class="dynamic-left">
                <img src="/cn/images/toefl_examIcon01.png" alt="图片"/>
            </div>
            <div class="dynamic-right">
                <h4>考试动态</h4>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "118,115",'pageSize'=>3,'order'=>'sort']);
                    foreach($data as $v) {
                    ?>
                    <li><a href="/list/115,118.html" target="_blank"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <div class="moreDiv">
                    <a href="/list/115,118.html" target="_blank">
                        <span>MORE+</span>
                        <div><i class="fa fa-angle-right"></i></div>
                    </a>
                </div>
                <div style="clear: both"></div>
            </div>
            <div style="clear: both"></div>
        </li>
        <li>
            <div class="dynamic-left">
                <img src="/cn/images/toefl_examIcon02.png" alt="图片"/>
            </div>
            <div class="dynamic-right">
                <h4>名师观点</h4>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "105,117,118",'pageSize'=>3,'order'=>'sort']);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/teachers/interviews.html" target="_blank"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <div class="moreDiv">
                    <a href="/teachers/interviews.html" target="_blank">
                        <span>MORE+</span>
                        <div><i class="fa fa-angle-right"></i></div>
                    </a>
                </div>
                <div style="clear: both"></div>
            </div>
            <div style="clear: both"></div>
        </li>
        <li>
            <div class="dynamic-left">
                <img src="/cn/images/toefl_examIcon03.png" alt="图片"/>
            </div>
            <div class="dynamic-right">
                <h4>申友动态</h4>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "105,117,118",'pageSize'=>3,'order'=>'sort']);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/thinku-news.html" target="_blank"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <div class="moreDiv">
                    <a href="/thinku-news.html" target="_blank">
                        <span>MORE+</span>
                        <div><i class="fa fa-angle-right"></i></div>
                    </a>
                </div>
                <div style="clear: both"></div>
            </div>
            <div style="clear: both"></div>
        </li>
    </ul>
</div>
<!--马上预约享优惠-->
<div class="favorable">
    <h2>马上预约享优惠</h2>
    <ul>
        <?php
        foreach($extendData as $k => $v) {
            ?>
            <li>
                <label><span><?php echo $v['required'] == 1?'*':''?></span><?php echo $v['name']?>：</label>
                <input name="extendValue[]" class="oneWidth"  <?php echo $v['required'] == 1?'class="val"':''?>  type="text"/>
            </li>
        <?php
        }
        ?>
        <li>
            <label>验证码：</label>
            <input type="text" class="twoWidth" name="code"/>
            <input type="button" onclick="onlineCode(this)" value="获取验证码"/>
        </li>
        <li>
            <a href="javascript:void(0);" onclick="onlineSub(this)">点击提交 &gt;</a>
        </li>
    </ul>

</div>
    <script type="text/javascript">
        function onlineCode(_this){
            var phone = $(_this).closest('li').prev().find('input').val();
            $.post('/cn/api/phone-code',{type:3,phoneNum:phone},function(re){
                alert(re.message);
            },"json")
        }

        function onlineSub(_this){
            var phone = $(_this).closest('li').prev().prev().find('input').val();
            var school = $(_this).closest('li').prev().prev().prev().find('input').val();
            var name = $(_this).closest('li').prev().prev().prev().prev().find('input').val();
            var code = $(_this).closest('li').prev().find('input').val();
            if(phone == ''){
                alert('留下您的联系方式');
                return false;
            }
            if(code == ''){
                alert('请输入验证码');
                return false;
            }
            if(name == ''){
                alert('请输入您的姓名');
                return false;
            }
            $.post('/cn/api/subscribe',{name:name,phone:phone,school:school,code:code},function(re){
                alert(re.message);
                window.location.reload()
            },"json")
        }
    </script>
<!--联系方式-->
<!--单页尾部固定部分-->
<div class="addShenYou">
    <i onclick="closeZX(this)">×</i>
    <span>我们就在您身边，申友GMAT高分热线 &nbsp;| </span>
    <img src="/cn/images/mentor_phoneFont.png" alt="电话文字">
    <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">点击咨询报名</a>
</div>
