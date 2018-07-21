/*
Navicat MySQL Data Transfer

Source Server         : 111
Source Server Version : 50156
Source Host           : sql.w17.vhostgo.com:3306
Source Database       : tytsg

Target Server Type    : MYSQL
Target Server Version : 50156
File Encoding         : 65001

Date: 2018-07-21 19:37:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `createtime` datetime NOT NULL,
  `navid` int(255) NOT NULL,
  `sort` int(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('3', 'ddd', 'ccccc', '2018-07-15 05:31:46', '7', '0', null);
INSERT INTO `article` VALUES ('7', '开放时间2', '开放时间2开放时间2开放时间2开放时间2开放时间2开放时间2开放时间2开放时间2开放时间2开放时间2开放时间2开放时间2开放时间2开放时间2开放时间2开放时间2开放时间2开放时间2开放时间2开放时间2', '2018-07-15 16:59:51', '12', '2', null);
INSERT INTO `article` VALUES ('9', '大学宿舍，一起走过的青春', '    大学的青春，结束了，“我们就要毕业了”，一切忧伤的，欢乐的时光，都曾是我们“挥霍”的岁月流年。相守的地方，几个人，几把同样的钥匙，打开一扇情谊之门；离别的地方，几个人，一种同样的惆怅，跟空荡的寝室说声“怀念”。\n　　大学生活，梦想开始飞扬，青春开始漂泊，学生宿舍就像一个温暖的“窝”，用家一般的感觉庇护着学子们一路前行。\n　　最近常看到这样的新闻报道：“某高校男生将寝室改装成咖啡音乐室”、“女生大学宿舍创意装扮”，风格也是各有千秋，有的小清新，有的无厘头，有的情调简约，有的回归自然……网友的留言评论一针见血：“你的宿舍只是生存，人家的才叫大学生活”。网络上甚至有专门的大学宿舍装扮教程，购物网站上也有店铺出售相关的装饰物品。\n　　大学宿舍，或许是我们在陌生的城市中最熟悉的地方，也可能是在一座城市里呆得最久的地方。一间十几个平方的小屋，布局简单，生活用品简单，它是一个人一生中除了家之外，住宿时间最长的地方，因而总能勾起人们的回忆……\n　　那年，秋风送爽，丹桂飘香。在度过了高中紧张的学习生活后，我和来自四面八方的莘莘学子共同踏进了大学的校门，对人生新一阶段的生活满怀希望。\n　　刚入学的我们青涩而懵懂。彼此熟悉后，只要好姐妹一声招呼，大家总是集体行动，每天一起上课、一起吃饭、一起逛街、一起参加社团活动……最期待的是每天晚上熄灯后的“宿舍夜话”，大家交谈着一天的趣事、乐事、伤心事，聊未来，聊理想，伴着青春的梦想安然入睡。\n　　接下来的日子，学习任务的艰巨让大家倍感压力。被最早起床的室友一个个叫醒后，大家拿着早餐，飞快奔进教室，开始了一天的课程。下午课后，回到宿舍，大家写作业、讨论问题、做团队课题，常常为一个问题而激烈争论，然后又默默地达成一致，完成任务后的喜悦之情溢于言表。\n　　日子就这样在教室、宿舍、食堂、图书馆四点一线中继续……\n　　当一缕清香在校园飘逸，我们知道：栀子花开毕业季，挥手分别的时刻到了。在大学的日子里，总是憧憬步入社会后的生活，而即将离开的时候，又深深留恋这里的一草一木。默默整理行李，清空宿舍，看着空荡荡的房间和柜子，总觉得还留下了什么，哦，是对姐妹的不舍，对大学美好时光的不舍。\n　　大学宿舍，那幢斑驳的旧楼房，那位脾气火爆的楼管阿姨，那个四年都不变的门牌号，那些阳台上五颜六色的衣服，以及那张睡过的单人床，都是青春的纪念。这间充满欢声笑语、喜怒哀乐的大学宿舍，是我们一起走过的青春，永远镌刻在年轮的心底。\n（廖华玲）', '2018-07-17 16:39:49', '16', '0', null);
INSERT INTO `article` VALUES ('10', '无影灯下的无悔付出', '——记县“五一”劳动奖章获得者、县医院普外科主任苏昀\n 6月11日早上7点30分，一位身材修长的大夫刚出现在县人民医院普外科病区诊疗室，就被十余名患者及家属围住。面对这些人，这位大夫没有丝毫的不耐烦情绪，对每个人都答复的明确清晰：“小张，你的刀口恢复得不错，放心吧！再休息半个月，就可以正常上班了。”“你们看，这块病灶很明显，我会尽快为病人安排手术。”“老吴，您孩子的肝脏移植手术越早做越好，建议尽快转院治疗”……\n这位大夫就是县医院院长助理、普外科主任兼肝胆外科主任，现年47岁的苏昀。自1994年医学院校本科毕业至今，他一直在县人民医院从事肝胆、胃肠、泌尿外科等临床工作。参加工作以来，他凭着自身熟练的诊治技术、良好的道德情操和高尚的医者仁心，得到了各级领导的赞誉、同事的认可和患者的好评。\n“技术靠勤奋创新，才能精湛娴熟”\n苏昀向笔者介绍说：“医疗服务工作是一个专业性极强的行业，要想使自己技术精湛，就必须有勤奋的付出。”为提高临床理论水平，他经常到医院图书馆翻阅、研读普外科方面的医学书籍，并多次参加医技培训。在医术上他精益求情，对自己诊治过的每一位患者的病情都认真揣摩及时总结，对每一台做过的手术都仔细做好记录，对每一次可推广的好经验都大胆应用到临床工作中。现在，他每年做手术都在400台以上，目前累计共完成各类手术9000余台。\n为切实减轻患者痛苦，苏昀还积极探索应用新技术新疗法。2000年，他在参加一次微创外科研讨会时，被一台经腹腔镜胆囊切除手术深深震撼：患者术中出血少，术后创伤小、几乎无疼痛、伤口恢复又快又美容。回来后，他随即在县人民医院外科首次提出“微创“概念，并多次到武汉、广州知名医院进修学习。2003年10月，由他首次开展的经腹腔镜胆囊切除术获得成功。随后，他又大胆地将腹腔镜手术范围扩展到巨大肝囊肿手术、胃穿孔手术、阑尾切除术、肠粘连松解术及疝微创等多种手术，同时在妇科、泌尿外科中广泛应用。目前他已完成腹腔镜胆囊手术达3000余例。\n“医术和艺术一样，需要在深爱中体味”\n人们经常说，医患关系不好处。但在苏昀看来却并非如此：“医术和艺术一样，需要在深爱中体味，在过程中感动。对患者的关心一定要发自肺腑，患者把生命交给我们，这本身就是一种信任。我们一定把要患者的生命看得和我们自己一样重要。”\n针对每位病人的心理变化，苏昀经常告诉身边同事要换位思考，将心比心，注重沟通的实效。一位85岁高龄的老人由于心理恐惧，一直拒绝做胆囊手术，谁劝都不听。他了解到相关情况后柔声细语与老人沟通，并承诺亲自为其手术，最终赢得了老人的信任和许可。手术成功后，老人的子女对他非常感谢。2016年11月，瓦岗乡女病人魏某由于第一次手术造成腹腔粘连、解剖不清等后遗症，如进行第二次手术极有可能导致失败。面对病人及家属的信任，他仔细研究病历，认真制定治疗方案，经过精心准备，手术终于获得成功，病人出院时紧紧拉着他的手久久不愿松开。\n    苏昀坚持以德养身廉洁行医，他的办公室挂满了大大小小的锦旗。他不仅多次拒绝、退还病人的红包，还尽力帮助生活有困难的病人。一个名叫小佳的18岁男孩，因患先天性巨结肠入院，这样的手术一般都是在出生后不久即进行手术治疗效果最好。由于男孩家庭经济困难，小佳的病情一直拖到孩子18岁才来就医。他知道原委后，自己率先拿出500元，并号召科室全体医护人员向小佳捐款，每人100元，看到这一举动，男孩的父母感动得不知说什么才好。\n采访时笔者发现，无论是同事还是患者及患者家属，只要与苏昀接触过的人，都说苏昀心里时刻装着病人。同事小张说：“不管正常上班还是轮休，苏大夫都是第一个到医院的。遇到有重大手术、急重病人等情况，他就会连续几天坚守在医院。”一位马姓患者激动地说：“苏医生亲自为我治病，我就如同吃了颗定心丸，心里踏实了很多。”\n\n苏昀从医22年来，用自己的实际行动描摹了“白衣天使”的大爱形象，诠释了“医者仁心”的生动内涵。他也因此先后被授予“安阳市青年岗位能手”、汤阴县“五一”劳动奖章、安阳市学科技术带头人、汤阴县首届“最美医生”等荣誉称号。 2016年，他还被推选为安阳市抗癌协会肝胆胰脾专业委员会副主任委员。（李晓伟）\n\n ', '2018-07-17 16:40:49', '16', '1', null);
INSERT INTO `article` VALUES ('11', '汤阴县文广新局召开2017年文化工作会', '3月17日上午，县文广新局召开2017年文化工作会，会议总结回顾了过去一年文化工作，并安排部署今年的工作任务。全县十乡镇主管文化副镇长、各文化站长参加会议。会议指出：2016年，全县文化战线认真贯彻县委、县政府的决策部署，在群众文化、精神文明建设等方面做了大量卓有成效的工作，为全县文化建设作出了积极贡献。2017年，全县文化工作要按照“12427”的工作思路，继续实施“文化建设提升年”工程，以建设省级公共文化服务体系示范区为总目标，重点加快各级文化阵地建设，开展好各项群众文化活动，做好县文化馆、县图书馆、各乡（镇）综合文化站以及298个行政村的农家书屋免费开放工作，配合相关部门做好“扫黄打非”相关工作，做好文物保护工作，增强文化工作的主动性和创造性，创作出更多符合“五风”建设、“岳乡榜样、汤阴模范”等主旋律的文艺作品，以汤阴的文化软实力带动全县发展硬实力，为进一步推动汤阴文化大发展、大繁荣，建设自信、自豪、幸福汤阴做出新的、更大的贡献。                                                                                             （县文广新局  李元正）\n\n', '2018-07-17 16:43:11', '15', '10', null);
INSERT INTO `article` VALUES ('12', '汤阴县图书馆积极开展“世界读书日”活动', '4月23日，为庆祝世界读书日，县图书馆以“倡导全民阅读，共建书香汤阴”为主题，制作宣传了条幅、版面、宣传单，并与县精忠武术学校联谊举办了学生观看爱国主义影片。活动期间，人头攒动，积极踊跃，该活动免费发放图书《成语故事》500余本、宣传单500余份，同时利用电子图书借阅机积极向广大群众进行宣传指导和下载操作使用方法。本次活动参与人数达500余人次，有效的促进了广大群众阅读热情，提高了全县全民阅读积极性，形成了良好的阅读风尚。（汤阴县图书馆  李佳芮）\n\n', '2018-07-17 16:44:28', '15', '9', null);

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `remark` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `sort` int(255) NOT NULL,
  `isshow` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES ('15', null, 'http://tytsg.gotoip11.com/public/photos/upload/15318165505456fc54c74a297ce994998c2873b370.jpg', '1', '1');
INSERT INTO `banner` VALUES ('12', '第一张', 'http://tytsg.gotoip11.com/public/photos/upload/15317984455456fc54c74a297ce994998c2873b370.jpg', '0', '1');
INSERT INTO `banner` VALUES ('18', null, 'http://tytsg.gotoip11.com/public/photos/upload/15318181275456fc54c74a297ce994998c2873b370.jpg', '2', '1');

-- ----------------------------
-- Table structure for feature
-- ----------------------------
DROP TABLE IF EXISTS `feature`;
CREATE TABLE `feature` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(1000) NOT NULL,
  `isshow` int(2) NOT NULL,
  `sort` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of feature
-- ----------------------------

-- ----------------------------
-- Table structure for nav
-- ----------------------------
DROP TABLE IF EXISTS `nav`;
CREATE TABLE `nav` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `sort` int(255) NOT NULL,
  `isshow` int(2) NOT NULL,
  `pid` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nav
-- ----------------------------
INSERT INTO `nav` VALUES ('11', '新闻公告', '2', '1', '-1');
INSERT INTO `nav` VALUES ('10', '数字资源', '1', '1', '-1');
INSERT INTO `nav` VALUES ('12', '开放时间', '0', '1', '9');
INSERT INTO `nav` VALUES ('9', '本馆概况', '0', '1', '-1');
INSERT INTO `nav` VALUES ('13', '场馆位置', '1', '1', '9');
INSERT INTO `nav` VALUES ('14', '入馆指南', '2', '1', '9');
INSERT INTO `nav` VALUES ('15', '馆内新闻', '0', '1', '11');
INSERT INTO `nav` VALUES ('16', '美文鉴赏', '1', '1', '11');
INSERT INTO `nav` VALUES ('17', '党建工作', '4', '1', '-1');

-- ----------------------------
-- Table structure for notice
-- ----------------------------
DROP TABLE IF EXISTS `notice`;
CREATE TABLE `notice` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `sort` int(255) NOT NULL,
  `isshow` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of notice
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_tp` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'tylib_abc', '123278392@qq.com', '$2y$10$Wd5H6BvB5yEpR8sV2u3.nuV78xvvBNCtcl/gYEnWO9fBFQl8NF7uK', '100', 'sngld2HfCYT4Z3wscEObzTJ9TjzKRWVLruNRTBUQzsxbSfe0HujDVXHGg0RT', '2018-07-02 07:59:36', '2018-07-02 07:59:36');
INSERT INTO `users` VALUES ('2', 'abc', '390069898@qq.com', '$2y$10$gcwOZt.FERxGJTCWdSCQOehK7EcnYxZY9mKqMrJgI3x7jR1QjV9m2', '10', 'XjnkvBKoY39vnRrupMi26cQgQsxOCn3QZhPkfk0a0nEJxxHMLb7uDZxhX5Gn', null, '2018-07-14 03:09:45');
INSERT INTO `users` VALUES ('3', 'abc', '390069898@qq.com', '$2y$10$HkKHalaoOrzHEYLsum3Yruu2peaRB.7R5i2RBDX7IfW5dVkKrq5qq', '10', null, null, null);
INSERT INTO `users` VALUES ('4', 'abc', '390069898@qq.com', '$2y$10$hMgcsGqgvvM9.X.VlOTU/uY/iHzbr0Wnn2GMx9Ni2EAqLrXSLnlTG', '10', null, null, null);
