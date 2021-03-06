<?php
namespace app\modules\cn\models;
use app\libs\Method;
use yii\db\ActiveRecord;
use app\modules\cn\models\CategoryContent;
use app\modules\cn\models\ContentExtend;
use app\modules\cn\models\ExtendData;

use app\libs\GoodsPager;

class Content extends ActiveRecord {

    public static function tableName(){
            return '{{%content}}';
    }

    /**
     * 申友前台调用内容
     * @param $select 包含where条件，查询字段，分页，排序
     * @return array
     * @Obelisk
     */
    public static function getContent($select){
        $where = "1=1";
        $where .= isset($select['where'])?" AND ".$select['where']:'';
        $seField = "";
        $fields = isset($select['fields'])?$select['fields']:'';
        //邮箱
        if(strstr($fields,'email')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='9a56ebd181c0b6fbfe6c8e0c5698f794') as email";
        }
        //英文简称
        if(strstr($fields,'shortName')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='58008509110e385763db85b59523ae0b') as shortName";
        }
        //所属联盟
        if(strstr($fields,'consortium')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='53879ca8a2c8b7dd7343ed78aae1cc8e') as consortium";
        }
        //难度
        if(strstr($fields,'difficulty')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='118d10ff6b0c5bd15a361feead11fd1d') as difficulty";
        }
        //录取专业
        if(strstr($fields,'major')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='c273ac9fb03fe83739dc0bd5ad2678a6') as major";
        }
        //推荐理由
        if(strstr($fields,'recommend')){
            $seField .= ",(SELECT  CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='e3907e73724468983b784c17586b9c6d') as recommend";
        }
        //英文名称
        if(strstr($fields,'enName')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='c8b1fbb5bcf5f601b18647fd6547ecdc') as enName";
        }
        //知名人物
        if(strstr($fields,'starPersonality')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='12b6a99917fc972ff56ff089eef27624') as starPersonality";
        }
        //连接地址
        if(strstr($fields,'url')){
            $seField .= ",(SELECT CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='43f8278a38a3539a7cfcdff67e5af92c') as url";
        }
        //地铁路线
        if(strstr($fields,'metroRoutes')){
            $seField .= ",(SELECT  CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='35240e72b4314299cd8b448281f75d9d') as metroRoutes";
        }
        //公交路线
        if(strstr($fields,'busRoutes')){
            $seField .= ",(SELECT  CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='1f6646683af347ca062bc9f6a7b3d79f') as busRoutes";
        }
        //周围地标
        if(strstr($fields,'landmark')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='0e3cc2ecef4de354c81fda58bb60deed') as landmark";
        }
        //电话学校
        if(strstr($fields,'phone')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='49897faf354586f492e46e475a1edc20') as phone";
        }
        //留学学校
        if(strstr($fields,'abroadSchool')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='7d5cd08f7c929c4b95533a9371dca73d') as abroadSchool";
        }
        //原学校
        if(strstr($fields,'oldSchool')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='a05db4d7754035fb0768492b7720eef6') as oldSchool";
        }
        //成绩
        if(strstr($fields,'score')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='6d18833806f505bb06b5083adc72b1b3') as score";
        }
        //内容介绍
        if(strstr($fields,'synopsis')){
            $seField .= ",(SELECT  CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='68a1f7449e583052ae90c63648ef9f89') as synopsis";
        }
        //小头像
        if(strstr($fields,'smallPhoto')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='2c2b1f3acbc121fcfe3a4a26e9560845') as smallPhoto";
        }
        //地点
        if(strstr($fields,'place')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='92aab357b4b1df524579450415a30bc9') as place";
        }
        //时间
        if(strstr($fields,'time')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='08f279b9597fef243497d99276f341fb') as time";
        }
        //主讲人
        if(strstr($fields,'speaker')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='c82350e59d02eb8ce6dfab5d9c5a1215') as speaker";
        }
        //标志
        if(strstr($fields,'flag')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='1cd30579b52c12daed362e08184cd3ae') as flag";
        }
        //摘要
        if(strstr($fields,'abstract')){
            $seField .= ",(SELECT  CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='91fc27502ef167f30de0f39a5ea0f630') as abstract";
        }
        //关键词
        if(strstr($fields,'keywords')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='e1eb000dde15e05fa0dfaa8c4b9d2504') as keywords";
        }
        //热门
        if(strstr($fields,'hot')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='451fb82a6dd6bd8639311e5b26d79657') as hot";
        }
        //感言详情
        if(strstr($fields,'luos')){
            $seField .= ",(SELECT  CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='d29f0bd8c4309cfdf0c40d0e54bc0b66') as luos";
        }
        //职位
        if(strstr($fields,'job')){
            $seField .= ",(SELECT  CONCAT_WS(',',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='87ec188a4ea8ce90abc77ca2b3061171') as job";
        }
        //描述
        if(strstr($fields,'description')){
            $seField .= ",(SELECT  CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='3f2a054ced4425ef1fec32e9fe7978ca') as description";
        }
        if(isset($select['category'])){
            if(isset($select['type'])){
                $where .= " AND c.id in(select DISTINCT cc.contentId from {{%category_content}} cc where cc.catId in(".$select['category'].") ) ";
            }else{
                $count = count(explode(",",$select['category']));
                $where .= " AND c.id in(select cc.contentId from {{%category_content}} cc where cc.catId in(".$select['category'].") group by cc.contentId having count(1)=$count ) ";
            }
        }
        $page = isset($select['page'])?$select['page']:1;
        $order = isset($select['order'])?$select['order']:'c.sort ASC,c.id DESC';
        $pageSize = isset($select['pageSize'])?$select['pageSize']:10;
        $limit = isset($select['limit'])?$select['limit']:(($page-1)*$pageSize).",$pageSize";
        $sql = "select c.*,ca.name as catName$seField from {{%content}} c LEFT JOIN {{%category}} ca ON c.catId=ca.id where $where";
        if(isset($select['extend_category'])){
            $sql = " select * from ($sql) c WHERE id in(select DISTINCT cc.contentId from {{%category_content}} cc where cc.catId in({$select['extend_category']}))  ";
        }
        $content = \Yii::$app->db->createCommand("$sql ORDER BY $order LIMIT ".$limit)->queryAll();
        if(isset($select['pageStr'])){
            $count = count(\Yii::$app->db->createCommand("$sql")->queryAll());
            $pageStr = Method::getPagedRows(['count'=>$count,'pageSize'=>$pageSize]);
            $content['pageStr'] = $pageStr;
            $content['count'] = $count;
            $content['total'] = ceil($count/$pageSize);
        }
        return $content;

    }
    

    /**
     * 获取内容副分类的名称
     * @param $contentId
     * @Obelisk
     */
    public static function getAllCatName($contentId){
        $data = [];
        $cateData = CategoryContent::find()->where("contentId=$contentId")->all();
        $country = self::getOneCatName(87);
        $organization = self::getOneCatName(179);
        $major = self::getOneCatName(143);
        $year = self::getOneCatName(186);
        $degree = self::getOneCatName(134);
        foreach($cateData as $v){
            if(in_array($v['catId'],$country['idArr'])){
                $data['country'] = $country[$v['catId']];
            }
            if(in_array($v['catId'],$organization['idArr'])){
                $data['organization'] = $organization[$v['catId']];
            }
            if(in_array($v['catId'],$major['idArr'])){
                $data['major'] = $major[$v['catId']];
            }
            if(in_array($v['catId'],$year['idArr'])){
                $data['year'] = $year[$v['catId']];
            }
            if(in_array($v['catId'],$degree['idArr'])){
                $data['degree'] = $degree[$v['catId']];
            }
        }
        return $data;
    }

    /**
     * 获取子类名称以id为键位
     * @param $pid
     * @Obelisk
     */
    public static function getOneCatName($pid){
        $reData = [];
        $data = \Yii::$app->db->createCommand('SELECT id,name FROM {{%category}} WHERE pid='.$pid)->queryAll();
        foreach($data as $v){
            $reData[$v['id']] = $v['name'];
            $reData['idArr'][] = $v['id'];
        }
        return $reData;
    }

    /**
     * 验证短信码
     * @param $code
     * @Obelisk
     */
    public function checkCode($phone,$code){
        $phoneCode = \Yii::$app->session->get($phone.'phoneCode');
        if($phoneCode == $code){
            \Yii::$app->session->remove($phone.'phoneCode');
            $re = true;
        }else{
            $re = false;
        }
        return $re;
    }

    /**
     * 验证短信的时间是否过期
     * @Obelisk
     */
    public function checkTime(){
        $phoneTime = \Yii::$app->session->get('phoneTime');
        $timeLimit = \Yii::$app->params['timeLimit'];
        if(time()-$phoneTime>$timeLimit){
            $re = false;
        }else{
            $re = true;
        }
        return $re;
    }

    /**
     * 信息采集添加内容
     * @param $phone
     * @param $name
     * @param $extendVal
     * @Obelisk
     */
    public function addContent($catId,$phone,$name,$extendVal){
        $this->name = $name;
        $this->catId = $catId;
        $this->createTime = date('Y-m-d H:i:s');
        $this->save();
        $model = new CategoryContent();
        $model->contentId = $this->primaryKey;
        $model->catId = $catId;
        $model->save();
        $cateExtend = \Yii::$app->db->createCommand("select * from {{%category_extend}} WHERE catId=$catId AND belong='content' ORDER by id ASC")->queryAll();
        foreach($cateExtend as $k => $v){
            if(!isset($extendVal[$k])){
                $extendVal[$k] = "";
            }
            if($k == (count($cateExtend)-1)){
                $extendVal[$k] = $phone;
            }
            $contExtendModel = new ContentExtend();
            $contExtendModel->catExtendId = $v['id'];
            $contExtendModel->contentId = $this->primaryKey;
            $contExtendModel->name = $v['name'];
            $contExtendModel->title = $v['title'];
            $contExtendModel->image = $v['image'];
            $contExtendModel->description = $v['description'];
            $contExtendModel->type = $v['type'];
            $contExtendModel->userId = $v['userId'];
            $contExtendModel->createTime = $v['createTime'];
            $contExtendModel->inheritId = $v['inheritId'];
            $contExtendModel->canDelete = $v['canDelete'];
            $contExtendModel->code = $v['code'];
            $contExtendModel->typeValue = $v['typeValue'];
            if(!isset($extendValue[$k]{255})){
                $contExtendModel->value = $extendVal[$k];
            }
            $contExtendModel->save();
            if(isset($extendValue[$k]{255})){
                $dataModel = new ExtendData();
                $dataModel->extendId = $contExtendModel->primaryKey;
                $dataModel->value = $extendVal[$k];
                $dataModel->save();
            }
        }
    }

    /**
     * 日历活动
     * @return array
     * @Obelisk
     */
    public static function getActive(){
        $date = date("Y-m");
        $firstday = date("Y-m-01",strtotime($date));
        $lastday = date("Y-m-d",strtotime("$firstday +2 month"));
        $sql = "select c.id,c.name,ce.value from {{%content}} c LEFT JOIN {{%content_extend}} ce ON c.id=ce.contentId WHERE ce.code='08f279b9597fef243497d99276f341fb' AND c.catId=107 AND ce.value >='$firstday' AND ce.value <='$lastday'";
        $data = \Yii::$app->db->createCommand($sql)->queryAll();
        $re = [];
        $date = [];
        foreach($data as $v){
            $re[ date("Y-m-d",strtotime($v['value']))] = $v;
            $date[] = date("Y-m-d",strtotime($v['value']));
        }
        return ['activity' => $re,'activityDate' => $date];
    }


    public function gpaScore($country, $gpa)
    {
        if ($country == 1 || $country == 3) {
            if ($gpa < 5) {
                $gpa = round($gpa * 100 / 4, 1);
            }
            if ($gpa <= 62.5) {
                return 5;
            } else {
                return $gpa > 87.5 ? 16 : ceil(($gpa - 62.5) / 2.5) + 5;
            }
        } else {
            if ($gpa < 5) {
                $gpa = round($gpa * 100 / 3.7, 1);
            }
            if ($gpa <= 61) {
                return 5;
            } else {
                return $gpa >= 93 ? 22 : ceil(($gpa - 61) / 2);
            }

        }
    }

    public function gmatScore($country, $gmat, $gre)
    {
        if ($country == 1 || $country == 3) {
            if ($gmat) {
                if ($gmat <= 600) {
                    return 5;
                } else {
                    return $gmat > 700 ? 16 : floor(($gmat - 600) / 10) + 5;
                }
            }
            if ($gre) {
                if ($gre <= 290) {
                    return 6;
                } else {
                    return $gre >= 335 ? 15 : floor(($gre - 290) / 5) + 6;
                }
            }
        } else {
            if ($gmat) {
                if ($gmat <= 600) {
                    return 5;
                } else {
                    return $gmat > 710 ? 15 : floor(($gmat - 600) / 20) + 5;
                }
            }
            if ($gre) {
                if ($gre <= 290) {
                    return 4;
                } else {
                    return $gre > 320 ? 15 : floor(($gre - 290) / 5) + 4;
                }
            }

        }
    }

    public function toeflScore($country, $toefl, $ielts)
    {
        if ($country == 1 || $country == 3) {
            if ($toefl) {
                if ($toefl <= 80) {
                    return 6;
                } else {
                    return $toefl >= 120 ? 16 : floor(($toefl - 80) / 4) + 6;
                }
            }
            if ($ielts) {
                if ($ielts <= 5) {
                    return 8;
                } else {
                    return $ielts >= 9 ? 16 : floor(($ielts - 5) / 0.5) + 8;
                }
            }
        } else {
            if ($toefl) {
                if ($toefl <= 80) {
                    return 12;
                } else {
                    return $toefl >= 116 ? 22 : floor(($toefl - 80) / 4) + 12;
                }
            }
            if ($ielts) {
                if ($ielts <= 5) {
                    return 11;
                } else {
                    return $ielts >= 8 ? 22 : floor(($ielts - 5) / 0.5 * 2) + 11;
                }
            }

        }
    }

    public function schoolScore($country, $school)
    {
        if ($country == 1 || $country == 3) {
            switch ($school) {
                case $school == 1:
                    return 15;
                    break;
                case $school == 2:
                    return 12;
                    break;
                case $school == 3:
                    return 10;
                    break;
                case $school == 4:
                    return 8;
                    break;
                default:
                    return 5;
                    break;
            }
        } else {
            switch ($school) {
                case $school == 1:
                    return 20;
                    break;
                case $school == 2:
                    return 16;
                    break;
                case $school == 3:
                    return 13;
                    break;
                case $school == 4:
                    return 10;
                    break;
                default:
                    return 8;
                    break;
            }

        }
    }

    //实习经历
    public function fieldworkScore($country, $company, $num)
    {
        if ($country == 1 || $country == 3) {
            if ($company == 1 || $company == 2) {
                if ($num == 1) {
                    return 18;
                } elseif ($num >= 2) {
                    return 20;
                }
            } elseif ($company == 3) {
                if ($num == 1) {
                    return 15;
                } elseif ($num == 2) {
                    return 18;
                } elseif ($num >= 3) {
                    return 20;
                }
            } elseif ($company == 4) {
                if ($num == 1) {
                    return 12;
                } elseif ($num == 2) {
                    return 15;
                } elseif ($num >= 3) {
                    return 18;
                }
            } elseif ($company == 5) {
                if ($num == 1) {
                    return 10;
                } elseif ($num == 2) {
                    return 12;
                } elseif ($num >= 3) {
                    return 18;
                }
            }

        } else {
            if ($company == 1 || $company == 2) {
                if ($num == 1) {
                    return 8;
                } elseif ($num >= 2) {
                    return 10;
                }
            } elseif ($company == 3) {
                if ($num == 1) {
                    return 6;
                } elseif ($num == 2) {
                    return 8;
                } elseif ($num >= 3) {
                    return 10;
                }
            } elseif ($company == 4) {
                if ($num == 1) {
                    return 5;
                } elseif ($num == 2) {
                    return 7;
                } elseif ($num >= 3) {
                    return 9;
                }
            } elseif ($company == 5) {
                if ($num == 1) {
                    return 3;
                } elseif ($num == 2) {
                    return 5;
                } elseif ($num >= 3) {
                    return 7;
                }
            }
        }
    }


    /**
     * 选校测评学生得分
     * @return array
     * @yoyo
     */
    public function score($country, $gpa, $gmat, $toefl, $school, $gre = '', $ielts = '')
    {
        if ($gmat < 400) {
            $gre = $gmat;
            $gmat = '';
        }
        if ($toefl < 10) {
            $ielts = $toefl;
            $toefl = '';
        }
        $s1 = $this->gpaScore($country, $gpa);
        $s2 = $this->gmatScore($country, $gmat, $gre);
        $s3 = $this->toeflScore($country, $toefl, $ielts);
        $s4 = $this->schoolScore($country, $school);
        return $s1 + $s2 + $s3 + $s4;
    }

    /**
     * 选校测评目标学校的得分
     * @return array
     * @Obelisk
     */
    public function getTotalScore($schoolRank, $country)
    {
        //美国
        if ($country == 1) {
            if ($schoolRank <= 10) {
                $total = 100;
            } elseif ($schoolRank <= 20) {
                $total = 94;
            } elseif ($schoolRank <= 30) {
                $total = 89;
            } elseif ($schoolRank <= 50) {
                $total = 79;
            } elseif ($schoolRank <= 60) {
                $total = 69;
            } elseif ($schoolRank <= 80) {
                $total = 64;
            } elseif ($schoolRank <= 100) {
                $total = 59;
            } elseif ($schoolRank <= 120) {
                $total = 54;
            } elseif ($schoolRank <= 150) {
                $total = 49;
            } else {
                $total = 40;
            }
        }
        //英国
        if ($country == 2) {
            if ($schoolRank <= 5) {
                $total = 100;
            } elseif ($schoolRank <= 12) {
                $total = 80;
            } elseif ($schoolRank <= 20) {
                $total = 70;
            } elseif ($schoolRank <= 30) {
                $total = 55;
            } elseif ($schoolRank <= 50) {
                $total = 45;
            } else {
                $total = 40;
            }
        }
        //加拿大
        if ($country == 3) {
            if ($schoolRank <= 5) {
                $total = 100;
            } elseif ($schoolRank <= 10) {
                $total = 70;
            } else {
                $total = 54;
            }
        }
        //澳洲
        if ($country == 4) {
            if ($schoolRank <= 5) {
                $total = 71;
            } else {
                $total = 50;
            }
        }
        //新加坡
        if ($country == 5) {
            if ($schoolRank <= 2) {
                $total = 100;
            } else {
                $total = 82;
            }
        }
        //香港
        if ($country == 6) {
            if ($schoolRank <= 4) {
                $total = 100;
            } else {
                $total = 70;
            }
        }
        return $total;
    }

//    public function getCase($catId, $w = '', $page, $pageSize, $order = '')
//    {
//
//        $seField = ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='c273ac9fb03fe83739dc0bd5ad2678a6') as major";
//        $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='7d5cd08f7c929c4b95533a9371dca73d') as abroadSchool";
//        $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='a05db4d7754035fb0768492b7720eef6') as oldSchool";
//        $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='6d18833806f505bb06b5083adc72b1b3') as score";
//        $where = "1=1";
//        $where .= " AND c.id in(select DISTINCT cc.contentId from {{%category_content}} cc where cc.catId in(" . $catId . ") ) ";
//        $where .= $w != false ? " AND " . $w : '';
//        $page = $page != false ? $page : 1;
//        $order = $order != false ? $order : 'c.id DESC';
//        $pageSize = $pageSize != false ? $pageSize : 10;
//        $limit = isset($select['limit']) ? $select['limit'] : (($page - 1) * $pageSize) . ",$pageSize";
//        $sql = "select c.*,ca.name as catName$seField from {{%content}} c LEFT JOIN {{%category}} ca ON c.catId=ca.id left join {{%category_content}} cc on c.id=cc.contentId where $where";
//        $content = \Yii::$app->db->createCommand("$sql ORDER BY $order LIMIT " . $limit)->queryAll();
//        $count = count(\Yii::$app->db->createCommand("$sql")->queryAll());
//        $pageStr = Method::getPagedRows(['count' => $count, 'pageSize' => $pageSize]);
//        $content['pageStr'] = $pageStr;
//        $content['count'] = $count;
//        $content['total'] = ceil($count / $pageSize);
//
//        return $content;
//
//    }


    /**
     * 查询db1 的数据
     * @sejam
     */
    public function listSearch($category,$country='',$aim='',$order='',$page,$pageSize=8,$id=''){
        // $limit = " limit ".($page-1)*$pageSize.",$pageSize";
        $sql = "Select c.*, (SELECT CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='dc4793dfb52237db70b240038d086d98') as buyNum,(SELECT CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='0ac9d45187ea22acbadedef8f8ab0e54') as price,(SELECT CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='7611fcaa334c360593cb15bfdd72dc70') as answer,(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='61f13913003193ea19e7e1271bca2752') as originalPrice FROM {{%content}} c WHERE c.catId=150 AND pid =0 ";
        if($category){
            $sql = "select * from ($sql) country WHERE id in(select DISTINCT cc.contentId from {{%category_content}} cc where cc.catId in($category))  ";
        }
        if($country){
            $sql = "select * from ($sql) country WHERE id in(select DISTINCT cc.contentId from {{%category_content}} cc where cc.catId in($country))  ";
        }
        if($aim){
            $sql = "select * from ($sql) aim WHERE id in(select DISTINCT cc.contentId from {{%category_content}} cc where cc.catId in($aim))  ";
        }
        if($id){
            $sql .= " and id in ($id)";
        }
        $count = count(\Yii::$app->db1->createCommand($sql)->queryAll());
        $sql .= $order;
        // $sql .= " $limit";
        $data = \Yii::$app->db1->createCommand($sql)->queryAll();
        $pageModel = new GoodsPager($count,$page,$pageSize,5);
        $pageStr = $pageModel->GetPagerContent();
        $totalPage = ceil($count/$pageSize);
        return ['totalPage' => $totalPage,'data' => $data,'pageStr' => $pageStr,'count' => $count,'page' => $page];
    }



    /**
     * smart 写入临时 调用内容
     * @param $select 包含where条件，查询字段，分页，排序
     * @return array
     * @ sejam 
     */
     public static function getClass($select){
        $where = "1=1";
        $show = isset($select['show'])?$select['show']:1;
        $where .= " AND c.show=$show";
        $where .= isset($select['where'])?" AND ".$select['where']:'';
        $seField = "";
        $fields = isset($select['fields'])?$select['fields']:'';
        //原价
        if(strstr($fields,'originalPrice')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='61f13913003193ea19e7e1271bca2752') as originalPrice";
        }
        //vip总监
        if(strstr($fields,'vip')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='63948cf4e1234694cfa02048a77ad754') as vip";
        }
        //总监老师
        if(strstr($fields,'majordomo')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='ab6df6ee04cfccc7f6ff9aadf0f46a8d') as majordomo";
        }
        //A级培训师
        if(strstr($fields,'A')){
            $seField .= ",(SELECT CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='3aa42936f977b9ef0b1717c646c5f91c') as A";
        }
        //描述
        if(strstr($fields,'description')){
            $seField .= ",(SELECT  CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='32cc8e6f27caf3fdf26e8cfd4e7b4433') as description";
        }
        //培训师
        if(strstr($fields,'trainer')){
            $seField .= ",(SELECT CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='784b0cdb89d960e484f35f8872b7b7ea') as trainer";
        }
        //课程时长
        if(strstr($fields,'duration')){
            $seField .= ",(SELECT CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='c8cc4bd99d4fcfcdfd5673bd635b5bcd') as duration";
        }
        //连接地址
        if(strstr($fields,'url')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='43f8278a38a3539a7cfcdff67e5af92c') as url";
        }
        //开课日期
        if(strstr($fields,'commencement')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='90f1d6d0fea6f171e8b82d9cbefee283') as commencement";
        }
        //性价比
        if(strstr($fields,'performance')){
            $seField .= ",(SELECT CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='32cc8e6f27caf3fdf26e8cfd4e7b44f9') as performance";
        }
        //主讲课程
        if(strstr($fields,'speak')){
            $seField .= ",(SELECT CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='dc4793dfb52237db70b240038d086d98') as speak";
        }
        //价格
        if(strstr($fields,'price')){
            $seField .= ",(SELECT CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='0ac9d45187ea22acbadedef8f8ab0e54') as price";
        }
        //答案
        if(strstr($fields,'answer')){
            $seField .= ",(SELECT CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='7611fcaa334c360593cb15bfdd72dc70') as answer";
        }
        //备选项
        if(strstr($fields,'alternatives')){
            $seField .= ",(SELECT CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='dc4793dfb52237db70b240038d086d98') as alternatives";
        }
//文章
        if(strstr($fields,'article')){
            $seField .= ",(SELECT CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='b34abe997968ee9a0852814db839f75e') as article";
        }
        //听力文件
        if(strstr($fields,'listeningFile')){
            $seField .= ",(SELECT CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='99b3cc02b18ec45447bd9fd59f1cd655') as listeningFile";
        }
        //中午名称
        if(strstr($fields,'cnName')){
            $seField .= ",(SELECT CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='6d67cf3eba969f1515df48f6f43e740d') as cnName";
        }
        //句子编号
        if(strstr($fields,'sentenceNumber')){
            $seField .= ",(SELECT CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='60883c91048a952f7abe6c666b54648b') as sentenceNumber";
        }
        //问题类型
        if(strstr($fields,'questionType')){
            $seField .= ",(SELECT CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='1837da083c9ba84649782cda5d7b2cd9') as questionType";
        }

        //段落编号
        if(strstr($fields,'numbering')){
            $seField .= ",(SELECT CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='28ec209ca256d8e34aea41d0bda50fc4') as numbering";
        }
        //问题补充听力
        if(strstr($fields,'problemComplement')){
            $seField .= ",(SELECT CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='e4dd05210147f22f9da9bdfcb1c0c562') as problemComplement";
        }
        if(isset($select['category'])){
            if(isset($select['type'])){
                $where .= " AND c.id in(select DISTINCT cc.contentId from {{%category_content}} cc where cc.catId in(".$select['category'].") ) ";
            }else{
                $count = count(explode(",",$select['category']));
                $where .= " AND c.id in(select cc.contentId from {{%category_content}} cc where cc.catId in(".$select['category'].") group by cc.contentId having count(1)=$count ) ";
            }
        }
        $page = isset($select['page'])?$select['page']:1;
        $order = isset($select['order'])?$select['order']:'c.sort ASC,c.id DESC';
        $pageSize = isset($select['pageSize'])?$select['pageSize']:10;
        $limit = (($page-1)*$pageSize).",$pageSize";
        $sql = "select c.*,ca.name as catName$seField from {{%content}} c LEFT JOIN {{%category}} ca ON c.catId=ca.id where $where";
        if(isset($select['extend_category'])){
            $sql = " select * from ($sql) c WHERE id in(select DISTINCT cc.contentId from {{%category_content}} cc where cc.catId in({$select['extend_category']}))  ";
        }
        if(isset($select['pageStr'])){
            $count = count(\Yii::$app->db1->createCommand("$sql")->queryAll());
            $res = \Yii::$app->db1->createCommand("$sql ORDER BY $order LIMIT ".$limit)->queryAll();
            $pageModel = new Pager($count,$page,$pageSize);
            $pageStr = $pageModel->GetPagerContent();
            $content['pageStr'] = $pageStr;
            $content['count'] = $count;
            $content['total'] = ceil($count/$pageSize);
            $content['data'] = $res;
        } else {
            $content = \Yii::$app->db1->createCommand("$sql ORDER BY $order LIMIT ".$limit)->queryAll();
        }

        // 查询所有 db
        if(isset($select['countall'])){
            $content = \Yii::$app->db1->createCommand("select c.*,ca.id as catId,ca.name as catName$seField from {{%content}} c LEFT JOIN {{%category}} ca ON c.catId=ca.id where $where ORDER BY $order")->queryAll();
        }
        // 查询所有 db1
        if(isset($select['countallone'])){
            $content = \Yii::$app->db1->createCommand("select c.*,ca.id as catId,ca.name as catName$seField from {{%content}} c LEFT JOIN {{%category}} ca ON c.catId=ca.id where $where ORDER BY $order")->queryAll();
        }

        return $content;
    }




    //路径替换方法
    //by sjeam
    public function updaeturl($text){
        // 有图片路径 并且 没有/  的情况 添加/
        if(strpos($text,'files/attach')==true && strpos($text,'/files/attach') == false){
            $expurl =  explode('files',$text);
            // var_dump($expurl);
            $text = $expurl[0].'/files'.$expurl[1];
        }
        $parrern = '/<img.*?src="(.*?)".*?\/?>/i';  //i忽略大小写 括号中内容放到内存中        
        preg_match_all($parrern,$text,$march);
        $str ='https://gmat.viplgw.cn';
        if(!empty($march)){
            foreach($march[1] as $v ){
                $string =  $str.$v;
                // var_dump($string);
                // var_dump($v);
                $text =  str_replace($v,$string,$text);
            }
        }
        return $text;
    }





    
    // 去掉图片
    //by sjeam
    public function deletestr($text,$str){
        // 有图片路径 并且 没有/  的情况 添加/
        if(strpos($text,$str)==true){
            $parrern = '/<img.*?src="(.*?)".*?\/?>/i';  //i忽略大小写 括号中内容放到内存中        
            preg_match_all($parrern,$text,$march);
            $text= str_replace($march[0],"", $text);
        }
        return $text;
    }
}
