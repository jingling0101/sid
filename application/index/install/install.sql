<?php
/**
 * Created by nmfox.com
 * User: nmfox
 * Date: 2016/1/3
 * Time: 18:22
 */
DROP TABLE IF EXISTS `qqsid_proxyconfigs`;
CREATE TABLE `qqsid_proxyconfigs` (
 `vkey` varchar(20) NOT NULL,
  `value` text,
  PRIMARY KEY (`vkey`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `qqsid_kms`;
CREATE TABLE `qqsid_kms` (
`kid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `kind` tinyint(1) NOT NULL DEFAULT '0',
  `daili` int(11) NOT NULL DEFAULT '0',
  `km` varchar(50) NOT NULL,
  `ms` tinyint(2) NOT NULL DEFAULT '1',
  `isuse` tinyint(1) DEFAULT '0',
  `uid` int(11) DEFAULT NULL,
  `usetime` datetime DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`kid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `qqsid_mailcode`;
CREATE TABLE `qqsid_mailcode` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `kind` tinyint(1) DEFAULT '0',
  `uid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `code` varchar(100) NOT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `endtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `qqsid_qqs`;
CREATE TABLE `qqsid_qqs` (
`qid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `usedate` datetime DEFAULT NULL,
  `qq` decimal(10,0) NOT NULL,
  `pwd` varchar(80) DEFAULT NULL,
  `sid` varchar(80) NOT NULL,
  `skey` varchar(20) NOT NULL,
  `sidzt` tinyint(1) DEFAULT '0',
  `skeyzt` tinyint(1) DEFAULT '0',
  `qqzt` tinyint(1) NOT NULL DEFAULT '0',
  `iszan` tinyint(1) DEFAULT '0',
  `zanrate` int(3) DEFAULT '15',
  `zannet` tinyint(1) DEFAULT '0',
  `lastzan` datetime DEFAULT NULL,
  `nextzan` datetime DEFAULT NULL,
  `isreply` tinyint(1) DEFAULT '0',
  `replycon` varchar(1000) DEFAULT NULL,
  `replypic` varchar(1000) DEFAULT NULL,
  `replyrate` int(3) DEFAULT '15',
  `replynet` tinyint(1) DEFAULT '0',
  `lastreply` datetime DEFAULT NULL,
  `nextreply` datetime DEFAULT NULL,
  `isshuo` tinyint(1) DEFAULT '0',
  `shuotype` tinyint(1) DEFAULT '0',
  `shuorate` int(3) DEFAULT '30',
  `shuoshuo` text,
  `shuopic` text,
  `shuophone` varchar(200) NOT NULL,
  `lastshuo` datetime DEFAULT NULL,
  `nextshuo` datetime DEFAULT NULL,
  `isdel` tinyint(1) DEFAULT '0',
  `lastdel` datetime DEFAULT NULL,
  `nextdel` datetime DEFAULT NULL,
  `isqd` tinyint(1) DEFAULT NULL,
  `qdcon` varchar(1000) DEFAULT NULL,
  `lastqd` datetime DEFAULT NULL,
  `nextqd` datetime DEFAULT NULL,
  `is3gqq` tinyint(1) DEFAULT '0',
  `last3gqq` datetime DEFAULT NULL,
  `next3gqq` datetime DEFAULT NULL,
  `isly` tinyint(1) NOT NULL DEFAULT '0',
  `lastly` datetime DEFAULT NULL,
  `nextly` datetime DEFAULT NULL,
  `isfw` tinyint(1) NOT NULL DEFAULT '0',
  `lastfw` datetime DEFAULT NULL,
  `nextfw` datetime DEFAULT NULL,
  `isvipqd` tinyint(1) NOT NULL DEFAULT '0',
  `lastvipqd` datetime NOT NULL,
  `nextvipqd` datetime NOT NULL,
  `iszyzan` tinyint(1) NOT NULL DEFAULT '0',
  `lastzyzan` datetime NOT NULL,
  `nextzyzan` datetime NOT NULL,
  `iszf` tinyint(4) NOT NULL DEFAULT '0',
  `zfnet` tinyint(1) DEFAULT '0',
  `zfok` text NOT NULL,
  `zfcon` text NOT NULL,
  `zfrate` tinyint(1) NOT NULL DEFAULT '15',
  `lastzf` datetime NOT NULL,
  `nextzf` datetime NOT NULL,
  `isht` tinyint(1) NOT NULL DEFAULT '0',
  `lastht` datetime NOT NULL,
  `nextht` datetime NOT NULL,
  `ists` tinyint(1) NOT NULL DEFAULT '0',
  `lastts` datetime NOT NULL,
  `nextts` datetime NOT NULL,
  `addtime` datetime DEFAULT NULL,
  `islz` TINYINT NOT NULL DEFAULT '0',
  `lastlz` DATETIME NULL,
  `nextlz` DATETIME NULL,
  `isqb` TINYINT NOT NULL DEFAULT '0',
  `lastqb` DATETIME NULL,
  `nextqb` DATETIME NULL,
  `islw` TINYINT NOT NULL DEFAULT '0',
  `lastlw` DATETIME NULL,
  `nextlw` DATETIME NULL,
  `isauto` TINYINT NOT NULL DEFAULT '1',
  `lastauto` DATETIME NULL,
  `qqlast` DATETIME NULL,
  `qqnext` DATETIME NULL,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `qqsid_users`;
CREATE TABLE `qqsid_users` (
`uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `daili` tinyint(1) NOT NULL DEFAULT '0',
  `vip` tinyint(1) DEFAULT '0',
  `vipstart` date DEFAULT NULL,
  `vipend` date DEFAULT NULL,
  `rmb` int(5) NOT NULL DEFAULT '0',
  `peie` tinyint(2) DEFAULT '1',
  `pwd` varchar(40) NOT NULL,
  `sid` varchar(50) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `login` tinyint(255) DEFAULT '1',
  `mail` varchar(100) DEFAULT NULL,
  `qq` decimal(12,0) DEFAULT NULL,
  `phone` decimal(12,0) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `regip` varchar(50) DEFAULT NULL,
  `lastip` varchar(50) DEFAULT NULL,
  `regtime` datetime DEFAULT NULL,
  `lasttime` datetime DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `qqsid_webconfigs`;
CREATE TABLE `qqsid_webconfigs` (
`vkey` varchar(255) NOT NULL,
  `value` text,
  PRIMARY KEY (`vkey`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `qqsid_proxyconfigs` VALUES ('daili_0vip', '80');
INSERT INTO `qqsid_proxyconfigs` VALUES ('daili_12vip', '60');
INSERT INTO `qqsid_proxyconfigs` VALUES ('daili_6vip', '40');
INSERT INTO `qqsid_proxyconfigs` VALUES ('daili_3vip', '20');
INSERT INTO `qqsid_proxyconfigs` VALUES ('daili_1vip', '8');
INSERT INTO `qqsid_proxyconfigs` VALUES ('daili_0peie', '66');
INSERT INTO `qqsid_proxyconfigs` VALUES ('daili_10peie', '20');
INSERT INTO `qqsid_proxyconfigs` VALUES ('daili_3peie', '10');
INSERT INTO `qqsid_proxyconfigs` VALUES ('daili_1peie', '5');
INSERT INTO `qqsid_webconfigs` VALUES ('adminpwd', '4d3ea8f0d1aa6fa07b6c0a5375645c48');
INSERT INTO `qqsid_webconfigs` VALUES ('web_name', '离线秒赞');
INSERT INTO `qqsid_webconfigs` VALUES ('web_domain', 'qqsid.com');
INSERT INTO `qqsid_webconfigs` VALUES ('web_qq', '621019457');
INSERT INTO `qqsid_webconfigs` VALUES ('cronrand', '1234');
INSERT INTO `qqsid_webconfigs` VALUES ('web_wap_user_gg', '<p class="bg-warning" style="padding: 10px; font-size: 90%;">欢迎！<a target="_blank" href="/free.php">试用卡密自助获取</a>｜<a target="_blank" href="/pay/">平台VIP自助购买</a></p>
<p class="bg-danger" style="padding: 10px; font-size: 90%;">最新售价：月卡10元 季卡20 半年卡35 年卡50 永久配额10元/个。</p>
<p class="bg-success" style="padding: 10px; font-size: 90%;">招收代理100 拿卡1折 搭建分站300</p>');
INSERT INTO `qqsid_webconfigs` VALUES ('web_www_user_gg', '<p class="bg-warning" style="padding: 10px; font-size: 90%;">欢迎！<a target="_blank" href="/free.php">试用卡密自助获取</a>｜<a target="_blank" href="/pay/">平台VIP自助购买</a></p>
<p class="bg-danger" style="padding: 10px; font-size: 90%;">最新售价：月卡10元 季卡20 半年卡35 年卡50 永久配额10元/个。</p>
<p class="bg-success" style="padding: 10px; font-size: 90%;">招收代理100 拿卡1折 搭建分站300</p>');
INSERT INTO `qqsid_webconfigs` VALUES ('regactive', '1');
INSERT INTO `qqsid_webconfigs` VALUES ('regpeie', '1');
INSERT INTO `qqsid_webconfigs` VALUES ('zannet', '4');
INSERT INTO `qqsid_webconfigs` VALUES ('freezan', '1');
INSERT INTO `qqsid_webconfigs` VALUES ('3gqqnet', '2');
INSERT INTO `qqsid_webconfigs` VALUES ('free3gqq', '2');
INSERT INTO `qqsid_webconfigs` VALUES ('replynet', '2');
INSERT INTO `qqsid_webconfigs` VALUES ('shuonet', '2');
INSERT INTO `qqsid_webconfigs` VALUES ('delnet', '1');
INSERT INTO `qqsid_webconfigs` VALUES ('qdnet', '1');
INSERT INTO `qqsid_webconfigs` VALUES ('zfnet', '1');
INSERT INTO `qqsid_webconfigs` VALUES ('netnum', '50');
INSERT INTO `qqsid_webconfigs` VALUES ('mail_email', '1000@qq.com');
INSERT INTO `qqsid_webconfigs` VALUES ('mail_pwd', '123456');
INSERT INTO `qqsid_webconfigs` VALUES ('mail_host', 'smtp.qq.com');
INSERT INTO `qqsid_webconfigs` VALUES ('mail_port', '25');