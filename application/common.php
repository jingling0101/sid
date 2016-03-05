<?php
/**
 * Created by nmfox.com
 * User: nmfox
 * Date: 2016/1/2
 * Time: 23:38
 */

function get_ip_city($ip)
{
    $url = 'http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=' . $ip;
    $city = file_get_contents($url) ? $city = file_get_contents($url) : $city = null;
    $city = str_replace(array('var remote_ip_info = ', '};'), array('', '}'), $city);
    $city = json_decode($city, true);
    return $city;
}

function init_net()
{
}


function selecttablecnf($table){
    $config=M($table)->select();
    foreach($config as $v){
        $arr[$v['vkey']]=$v['value'];
    }
    $config=$arr;
    unset($arr);
    return $config;
}

function savetablecnf($data,$table=''){
    foreach ($data as $k => $value) {
        M($table)->execute("insert into ".C('database')['prefix'].$table." set vkey='$k',value='$value' on duplicate key update value='$value'");
    }
    return ture;
}

function is_mobile()
{
    if (isset ($_SERVER['HTTP_X_WAP_PROFILE'])) {
        return true;
    }
    if (isset ($_SERVER['HTTP_VIA'])) {
        return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
    }
    if (isset ($_SERVER['HTTP_USER_AGENT'])) {
        $clientkeywords = array('nokia', 'sony', 'ericsson', 'mot', 'samsung', 'htc', 'sgh', 'lg', 'sharp', 'sie-', 'philips', 'panasonic', 'alcatel', 'lenovo', 'iphone', 'ipod', 'blackberry', 'meizu', 'android', 'netfront', 'symbian', 'ucweb', 'windowsce', 'palm', 'operamini', 'operamobi', 'openwave', 'nexusone', 'cldc', 'midp', 'wap', 'mobile');
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
            return true;
        }
    }
    if (isset ($_SERVER['HTTP_ACCEPT'])) {
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
            return true;
        }
    }
    //return true;
    return false;
}

function get_spider($useragent = '')
{
    if (!$useragent) {
        $useragent = $_SERVER['HTTP_USER_AGENT'];
    }
    $useragent = strtolower($useragent);
    if (strpos($useragent, 'baiduspider') !== false) {
        return 'baiduspider';
    }
    if (strpos($useragent, 'googlebot') !== false) {
        return 'googlebot';
    }
    if (strpos($useragent, 'soso') !== false) {
        return 'soso';
    }
    if (strpos($useragent, 'bing') !== false) {
        return 'bing';
    }
    if (strpos($useragent, 'yahoo') !== false) {
        return 'yahoo';
    }
    if (strpos($useragent, 'sohu-search') !== false) {
        return 'Sohubot';
    }
    if (strpos($useragent, 'sogou') !== false) {
        return 'sogou';
    }
    if (strpos($useragent, 'youdaobot') !== false) {
        return 'YoudaoBot';
    }
    if (strpos($useragent, 'yodaobot') !== false) {
        return 'YodaoBot';
    }
    if (strpos($useragent, 'robozilla') !== false) {
        return 'Robozilla';
    }
    if (strpos($useragent, 'msnbot') !== false) {
        return 'msnbot';
    }
    if (strpos($useragent, 'lycos') !== false) {
        return 'Lycos';
    }
    if (strpos($useragent, 'ia_archiver') !== false || strpos($useragent, 'iaarchiver') !== false) {
        return 'alexa';
    }
    if (strpos($useragent, 'archive.org_bot') !== false) {
        return 'Archive';
    }
    if (strpos($useragent, 'robozilla') !== false) {
        return 'Robozilla';
    }
    if (strpos($useragent, 'sitebot') !== false) {
        return 'SiteBot';
    }
    if (strpos($useragent, 'mj12bot') !== false) {
        return 'MJ12bot';
    }
    if (strpos($useragent, 'gosospider') !== false) {
        return 'gosospider';
    }
    if (strpos($useragent, 'gigabot') !== false) {
        return 'Gigabot';
    }
    if (strpos($useragent, 'yrspider') !== false) {
        return 'YRSpider';
    }
    if (strpos($useragent, 'gigabot') !== false) {
        return 'Gigabot';
    }
    if (strpos($useragent, 'jikespider') !== false) {
        return 'jikespider';
    }
    if (strpos($useragent, 'addsugarspiderbot') !== false) {
        return 'AddSugarSpiderBot';
    }
    if (strpos($useragent, 'testspider') !== false) {
        return 'TestSpider';
    }
    if (strpos($useragent, 'etaospider') !== false) {
        return 'EtaoSpider';
    }
    if (strpos($useragent, 'wangidspider') !== false) {
        return 'WangIDSpider';
    }
    if (strpos($useragent, 'foxspider') !== false) {
        return 'FoxSpider';
    }
    if (strpos($useragent, 'docomo') !== false) {
        return 'DoCoMo';
    }
    if (strpos($useragent, 'yandexbot') !== false) {
        return 'YandexBot';
    }
    if (strpos($useragent, 'ezooms') !== false) {
        return 'Ezooms';
    }
    if (strpos($useragent, 'sinaweibobot') !== false) {
        return 'SinaWeiboBot';
    }
    if (strpos($useragent, 'catchbot') !== false) {
        return 'CatchBot';
    }
    if (strpos($useragent, 'surveybot') !== false) {
        return 'SurveyBot';
    }
    if (strpos($useragent, 'dotbot') !== false) {
        return 'DotBot';
    }
    if (strpos($useragent, 'purebot') !== false) {
        return 'Purebot';
    }
    if (strpos($useragent, 'ccbot') !== false) {
        return 'CCBot';
    }
    if (strpos($useragent, 'mlbot') !== false) {
        return 'MLBot';
    }
    if (strpos($useragent, 'adsbot-google') !== false) {
        return 'AdsBot-Google';
    }
    if (strpos($useragent, 'ahrefsbot') !== false) {
        return 'AhrefsBot';
    }
    if (strpos($useragent, 'spbot') !== false) {
        return 'spbot';
    }
    if (strpos($useragent, 'augustbot') !== false) {
        return 'AugustBot';
    }
    return false;
}
