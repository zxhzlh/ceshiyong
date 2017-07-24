<?php
header("Content-type: text/html; charset=utf-8");
//截取后缀名
// $file = "http://wwww.zstv.cc/index.php";

// for($i=1; $i < 6; $i++) {
// $func = 'get_file_ext_' . $i;
// var_dump($func($file));
// }

// function get_file_ext_1($file) {
// return strtolower(trim(substr(strrchr($file, '.'), 1)));
// }

// function get_file_ext_2($file) {
// return strtolower(trim(pathinfo($file, PATHINFO_EXTENSION)));
// }

// function get_file_ext_3($file) {
// return strtolower(trim(substr($file, strrpos($file, '.')+1)));
// }

// function get_file_ext_4($file) {
// return strtolower(trim(array_pop(explode('.', $file))));
// }

// function get_file_ext_5($file) {
// $tok = strtok($file, '.');
// while($tok !== false) {
// $return = $tok;
// $tok = strtok('.');
// }
// return strtolower(trim($return));
// } 
//*******************************************批量上传多张图片***********************
// $path= date('Y_m_d').'/';
// if(!is_dir($path)){
//     mkdir($path);
// }
// if(!isset($_FILES['filelist'])){
//     return false;
// }
// for($i=0;$i<count($_FILES['filelist']['name']);$i++){
//             $file_name = $_FILES['filelist']['type'][$i];
//             $name=$_FILES['filelist']['name'][$i];
//             $newname =$path;
//             $filename= $_FILES['filelist']['tmp_name'][$i];
//       if( strtolower($file_name)=='image/jpeg' || strtolower($file_name)=='image/png' || strtolower($file_name)=='image/jpg') {
//             if( move_uploaded_file($filename,$newname.$name)){  
//                echo "添加成";
//             }
//               }else{
//                 return false;
//             }         
// }
//****************************************根据后缀名所有的文件***********************
// $files = glob('./shopmvc/public/upload/*.jpg');  
// print_r($files); 
//****************************************文件写入内容*******************************
// $f= fopen("ceshi.txt","w");
// fwrite($f,"It is awesome.");
// fclose($f);echo "done";
//读取文件内容
// $f= fopen("ceshi.txt","r");
// while (!feof($f))
// { 
// $line = fgets($f); 
// echo "site: ",$line,"
// ";
// }fclose($f);
//******************************************生成多个不重复的随机数字php***************
// function get_rand_number($start,$end,$length){
//     $connt=0;
//     $temp=array();
//     while($connt<$length){
//         $temp[]=mt_rand($start,$end);
//         $data=array_unique($temp);
//         $connt=count($data);
//     }
//     sort($data);
//     var_dump($data);
//     return $data;
// }
//  get_rand_number(1,10,4);
// **********************************获取指定字符串***********************************
// $a = 'http://hui.com/shopmvc?index.php?p=back&c=Show&a=index';
//   $b = '//';
//   $c = '.';
//   echo GetBetween($a,$b,$c);
//   function GetBetween($content,$start,$end){
//     $r = explode($start, $content);
//     if (isset($r[1])){
//         $r = explode($end, $r[1]);
//         return $r[0];
//     }
//     return '';
//   }
// ****************************************什么时候访问过 判断时间********************
// function wordTime($time) {
// $time = (int) substr($time, 0, 10);
// $int = time() - $time;
// $str = '';
// if ($int <= 2){
// $str = sprintf('刚刚', $int);
// }elseif ($int < 60){
// $str = sprintf('%d秒前', $int);
// }elseif ($int < 3600){
// $str = sprintf('%d分钟前', floor($int / 60));
// }elseif ($int < 86400){
// $str = sprintf('%d小时前', floor($int / 3600));
// }elseif ($int < 2592000){
// $str = sprintf('%d天前', floor($int / 86400));
// }else{
// $str = date('Y-m-d H:i:s', $time);
// }
// return $str;
// }
// $a=time();
// echo wordTime($a);
//************************************用户名密码必须为6-15位的数字和字母的组合*******
// $password='abc123';
// $plen=strlen($password);
// if(!preg_match("/^(([a-z]+[0-9]+)|([0-9]+[a-z]+))[a-z0-9]*$/i",$password)||$plen<6||$plen>15){
//     echo '密码必须为6-15位的数字和字母的组合';
// }else{
// 	echo "可以使用";
// }
//***********************************************防sql攻击****************************
// function check_input($value)
// {
// // 去除斜杠
// if (get_magic_quotes_gpc())
//   {
//   $value = stripslashes($value);
//   }
// // 如果不是数字则加引号
// if (!is_numeric($value))
//   {
//   $value = "'" . mysql_real_escape_string($value) . "'";
//   }
// return $value;
// }

// $con = mysql_connect("localhost", "hello", "321");
// if (!$con)
//   {
//   die('Could not connect: ' . mysql_error());
//   }
// $user = check_input($_POST['user']);
// $pwd = check_input($_POST['pwd']);
// $sql = "SELECT * FROM users WHERE
// user=$user AND password=$pwd";
// mysql_query($sql);
// mysql_close($con);
// ***********************************curl抓取远程数据***********************************
// function curl_get($url, $gzip=true){
//     $curl = curl_init($url);
//     curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//     curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
//     if($gzip) curl_setopt($curl, CURLOPT_ENCODING, "gzip"); // 关键在这里
//     $content = curl_exec($curl);
//     curl_close($curl);
//     return $content;
// }
// $url="http://hui.com/shopmvc/index.php?p=back&c=Index&a=ceshi";
// $a=curl_get($url);
// echo "<pre>";
// print_r($a);
// echo "</pre>";
//*************************************jquery获取地址栏指定的参数*************************
// function getQueryString(name) {
//     var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
//     var r = window.location.search.substr(1).match(reg);
//     if (r != null) return unescape(r[2]); return null;
// }
// echo $a=getQueryString('fid');
// ***********************************jquery让指定的option的某个值被选中*******************
// $("#select option").each(function(){  
//      var txt = $(this).val(); 
//      if(txt==fid){  
//        $("#fid option[value="+erjifid+"]").attr("selected","selected");
//      }  
// });   
// *****************************************遍历文件夹*************************************
//  function read_all_dir ( $dir )
//     {
//         $result = array();
//         $handle = opendir($dir);
//         if ( $handle )
//         {
//             while ( ( $file = readdir ( $handle ) ) !== false )
//             {
//                 if ( $file != '.' && $file != '..')
//                 {
//                     $cur_path = $dir . DIRECTORY_SEPARATOR . $file;
//                     if ( is_dir ( $cur_path ) )
//                     {
//                         $result['dir'][$cur_path] = read_all_dir ( $cur_path );
//                     }
//                     else
//                     {
//                         $result['file'][] = $cur_path;
//                     }
//                 }
//             }
//             closedir($handle);
//         }
//         return $result;
//     }
//     $a=read_all_dir("D:\wamp\www\Blog");
// var_dump($a);
// ******************************************mysql表分区******************//
//  mysql 查看表分区 的数据  等 详细状态
//  SELECT
//   partition_name part, 
//   partition_expression expr, 
//   partition_description descr, 
//   table_rows 
// FROM
//   INFORMATION_SCHEMA.partitions 
// WHERE
//   TABLE_SCHEMA = schema() 
//   AND TABLE_NAME='employees';
//   
//   表分区 代码 通过list分区
// CREATE TABLE employees (
//     id INT NOT NULL,
//     fname VARCHAR(30),
//     lname VARCHAR(30),
//     hired DATE NOT NULL DEFAULT '1970-01-01',
//     separated DATE NOT NULL DEFAULT '9999-12-31',
//     job_code INT,
//     store_id INT
// )  
//  PARTITION BY LIST(store_id)(
//     PARTITION pNorth VALUES IN (3,5,6,9,17),
//     PARTITION pEast VALUES IN (1,2,10,11,19,20),
//     PARTITION pWest VALUES IN (4,12,13,14,18),
//     PARTITION pCentral VALUES IN (7,8,15,16)
// );
// 
// 表分区 代码 通过range分区
// CREATE TABLE employees (
//     id INT NOT NULL,
//     fname VARCHAR(30),
//     lname VARCHAR(30),
//     hired DATE NOT NULL DEFAULT '1970-01-01',
//     separated DATE NOT NULL DEFAULT '9999-12-31',
//     job_code INT NOT NULL,
//     store_id INT NOT NULL
// )  
//  PARTITION BY RANGE (job_code) (
//     PARTITION p0 VALUES LESS THAN (100),
//     PARTITION p1 VALUES LESS THAN (1000),
//     PARTITION p2 VALUES LESS THAN (10000)
// )
//********************************************结束*****************
// ******************************************mysql分表 存储引擎merge其实就是mysiam******************//
// mysql> CREATE TABLE IF NOT EXISTS `user1` (
//  ->   `id` int(11) NOT NULL AUTO_INCREMENT,
//  ->   `name` varchar(50) DEFAULT NULL,
//  ->   `sex` int(1) NOT NULL DEFAULT '0',
//  ->   PRIMARY KEY (`id`)
//  -> ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

// mysql> CREATE TABLE IF NOT EXISTS `user2` (
//  ->   `id` int(11) NOT NULL AUTO_INCREMENT,
//  ->   `name` varchar(50) DEFAULT NULL,
//  ->   `sex` int(1) NOT NULL DEFAULT '0',
//  ->   PRIMARY KEY (`id`)
//  -> ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
  
// mysql> INSERT INTO `user1` (`name`, `sex`) VALUES('张映', 0);
 
// mysql> INSERT INTO `user2` (`name`, `sex`) VALUES('tank', 1);

// mysql> CREATE TABLE IF NOT EXISTS `alluser` (
//  ->   `id` int(11) NOT NULL AUTO_INCREMENT,
//  ->   `name` varchar(50) DEFAULT NULL,
//  ->   `sex` int(1) NOT NULL DEFAULT '0',
//  ->   INDEX(id)
//  -> ) TYPE=MERGE UNION=(user1,user2) INSERT_METHOD=LAST AUTO_INCREMENT=1 ;
//  获取文件被修改的时间
// $a=filemtime("ceshi.php");
// $b=date("Y-m-d H:i:s",$a);
// echo $b;
// ***************************字符串或手机号中间用**************号隐藏**************************
// $str=13184842164;
//  $str='1044772445@qq.com';
//  $b=hideStar($str);
//  echo $b;
//  function hideStar($str) { //用户名、邮箱、手机账号中间字符串以*隐藏
//    if (strpos($str, '@')) {
//       $email_array = explode("@", $str);
//       $prevfix = (strlen($email_array[0]) < 4) ? "" : substr($str, 0, 3); //邮箱前缀
//       $count = 0;
//       $str = preg_replace('/([\d\w+_-]{0,100})@/', '***@', $str, -1, $count);
//       $rs = $prevfix . $str;
//    } else {
//       $pattern = '/(1[3458]{1}[0-9])[0-9]{4}([0-9]{4})/i';
//       if (preg_match($pattern, $str)) {
//          $rs = preg_replace($pattern, '$1****$2', $str); // substr_replace($name,'****',3,4);
//       } else {
//          $rs = substr($str, 0, 3) . "***" . substr($str, -1);
//       }
//    }
//    return $rs;
// }
//**************************自定义报错方式*******************************
// header('Content-type:text/html;charset=utf8');
// error_reporting(E_ALL);
// set_error_handler('set_error_message');
// echo $a;
// *
// * 发生错误运行的函数
// * $errno    错误信息编码
// * $errstr   错误信息
// * $errfile  错误的文件
// * $errline  错误的行数
// function set_error_message($errno, $errstr, $errfile, $errline){
// echo '错误信息编码为:'.$errno.'<br/>';
// echo '错误信息为:'.$errstr.'<br/>';
// echo '错误文件为:'.$errfile.'<br/>';
// echo '错误行数为:'.$errline;
// die();
// }
// ******************************smarty 里面的字符串替换*******************
//{$news.content|replace:"/company/company":"http://www.hao315.cn/company/company"|replace:"/upload":"http://www.hao315.cn/upload"}
//*******************************二级联动**********************************
// $().ready(function(){
//   sel1();
//   $('#pid').change(function(){
//   	sel2();
//   });
//   var pid=getQueryString('pid');
//   if(pid){
//   	var erjiid=getQueryString('fid');
//     sel1(pid,erjiid);
//   }
// });
// function getQueryString(name) {
//     var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
//     var r = window.location.search.substr(1).match(reg);
//     if (r != null) return unescape(r[2]); return null;
// }
// function sel1(pid,erjiid){
// $.ajax({
//     type:'get',
//     url:'/hao315/get_one_fenlei',
//     data:{'pid':0},
//     dataType:'json',
//     success:function(msg){
//          for (var i = 0; i<msg.length; i++) {
//          	 $("#pid").append("<option value='"+msg[i].id+"'>"+msg[i].name+"</option>");     
//          }

//       if(pid){
// $("#pid option").each(function(){  
//      var txt = $(this).val(); 
//      if(txt==pid){  
//        $("#pid option[value="+pid+"]").attr("selected","selected");
//      }  
// });
//  sel2(pid,erjiid);
//       }
//     } 
// });
// }
// function sel2(fid,erjiid){
// 	if(!fid){
//       var fid= $("#pid option:selected").val();
// 	}
// 	$.ajax({
//     type:'get',
//     url:'/hao315/get_one_fenlei',
//     data:{'pid':fid},
//     dataType:'json',
//     success:function(msg){
//     	$('#fid').html('');
//          for (var i = 0; i<msg.length; i++) {
//          	 $("#fid").append("<option value='"+msg[i].id+"'>"+msg[i].name+"</option>");
//          }
//    if(erjiid){
//      $("#fid option").each(function(){  
//      var txt2 = $(this).val();
//      if(txt2==erjiid){  
//        $("#fid option[value="+erjiid+"]").attr("selected","selected");
//      }  
// });
//       }       
//     } 
// });
// }
//**************************************************解压zip文件************************
//需开启配置 php_zip.dll
//phpinfo();
// header("Content-type:text/html;charset=utf-8");
// function get_zip_originalsize($filename, $path) {
// 	//先判断待解压的文件是否存在
// 	if(!file_exists($filename)){
// 		die("文件 $filename 不存在！");
// 	}	
// 	$starttime = explode(' ',microtime());	//解压开始的时间	
// 	//将文件名和路径转成windows系统默认的gb2312编码，否则将会读取不到
// 	$filename = iconv("utf-8","gb2312",$filename);
// 	$path = iconv("utf-8","gb2312",$path);
// 	//打开压缩包
// 	$resource = zip_open($filename);
// 	$i = 1;
// 	//遍历读取压缩包里面的一个个文件
// 	while ($dir_resource = zip_read($resource)) {
// 		//如果能打开则继续
// 		if (zip_entry_open($resource,$dir_resource)) {
// 			//获取当前项目的名称,即压缩包里面当前对应的文件名
// 			$file_name = $path.zip_entry_name($dir_resource);
// 			//以最后一个“/”分割,再用字符串截取出路径部分
// 			$file_path = substr($file_name,0,strrpos($file_name, "/"));
// 			//如果路径不存在，则创建一个目录，true表示可以创建多级目录
// 			if(!is_dir($file_path)){
// 				mkdir($file_path,0777,true);
// 			}
// 			//如果不是目录，则写入文件
// 			if(!is_dir($file_name)){
// 				//读取这个文件
// 				$file_size = zip_entry_filesize($dir_resource);
// 				//最大读取6M，如果文件过大，跳过解压，继续下一个
// 				if($file_size<(1024*1024*6)){
// 					$file_content = zip_entry_read($dir_resource,$file_size);
// 					file_put_contents($file_name,$file_content);
// 				}else{
// 					echo "<p> ".$i++." 此文件已被跳过，原因：文件过大， -> ".iconv("gb2312","utf-8",$file_name)." </p>";
// 				}
// 			}
// 			//关闭当前
// 			zip_entry_close($dir_resource);
// 		}
// 	}
// 	//关闭压缩包
// 	zip_close($resource);	
// 	$endtime = explode(' ',microtime());	//解压结束的时间
// 	$thistime = $endtime[0]+$endtime[1]-($starttime[0]+$starttime[1]);
// 	$thistime = round($thistime,3);	//保留3为小数
// 	echo "<p>解压完毕！，本次解压花费：$thistime 秒。</p>";
// }
// $size = get_zip_originalsize('web-blog.zip','zhangchoahui/');
// ************************************************压缩zip文件*********************************
// $zipObj = new ZipArchive();
// $res = $zipObj->open('my.zip', ZipArchive::CREATE); //创建一个zip
// if ($res === true)
// { //创建成功
//     $zipObj->addFile('1.php'); //添加当前目录下的info.php文件
//     $zipObj->addFile('2.php'); //添加当前目录下的daixiaorui.zip文件
//     $zipObj->close();
//     echo 'done~';
// }
// else
// {
//     echo 'failed';
// }
// **************************匹配所有的a标签*************************************
	// header("Content-type:text/html;charset=utf-8");
	// $str = '<a href=http://www.daixiaorui.com/ target="_blank">代潇瑞博客</a><p><span>哈哈哈</span></p><a href="http://www.daixiaorui.com/" target="_blank" alt="代潇瑞博客">首页</a><a href="http://www.daixiaorui.com/cat_2.html" target="_blank" alt="">php学习</a><br/>
	// 	php源码<a href=\'http://www.daixiaorui.com/source/\' target="_blank" alt="">单引号</a>';
	// $preg = '/<a.*?href=[\"|\']?(.*?)[\"|\']?\s.*
	// preg_match_all($preg, $str, $result);
	// print_r($result); 
//********************************************php 文件下载******************************
// header("Content-type:text/html;charset=utf-8");
// download('ceshi.php', 'magento下载');	
// function download($file, $down_name){
// 	$suffix = substr($file,strrpos($file,'.'));	//获取文件后缀
//     $down_name = $down_name.$suffix;	//新文件名，就是下载后的名字
// 	//判断给定的文件存在与否 
// 	if(!file_exists($file)){
// 		die("您要下载的文件已不存在，可能是被删除");
// 	} 
// 	$fp = fopen($file,"r");
// 	$file_size = filesize($file);
// 	//下载文件需要用到的头
// 	header("Content-type: application/octet-stream");
// 	header("Accept-Ranges: bytes");
// 	header("Accept-Length:".$file_size);
// 	header("Content-Disposition: attachment; filename=".$down_name);
// 	$buffer = 1024;
// 	$file_count = 0;
// 	//向浏览器返回数据 
// 	while(!feof($fp) && $file_count < $file_size){
// 		$file_con = fread($fp,$buffer);
// 		$file_count += $buffer;
// 		echo $file_con;
// 	} 
// 	fclose($fp);
// }
// **********************************微信红包算法********************
// $total=20;
// $num=10;
// $min=0.01; 
// for ($i=1;$i<$num;$i++) { 
//   $safe_total=($total-($num-$i)*$min)/($num-$i);
//   $money=mt_rand($min*100,$safe_total*100)/100; 
//   $total=$total-$money; 
//  $arr['res'][$i] = array(
//  'i' => $i,
//  'money' => $money,
//  'total' => $total
//  );
// } 
// $arr['res'][$num] = array('i'=>$num,'money'=>$total,'total'=>0);
// var_dump($arr);
//*************************二级联动  一级的在数据库查到遍历**************
//$().ready(function(){
//   $('#uid').change(function(){
//   	sel2();
//   });
//   var pid=getQueryString('uid');
// 	if(pid){
//     	$("#uid option").each(function(){  
// 		var txt = $(this).val(); 
// 		if(txt==pid){  
// 			$("#uid option[value="+pid+"]").attr("selected","selected");
// 		}
// 	    var erjiid=getQueryString('pid');	
//         sel2(erjiid);
// 	});
// }
//  $('#fuid').change(function(){
// 	fenlei2();
//  });
//   var fpid=getQueryString('fuid');
// 	if(fpid){
//     	$("#fuid option").each(function(){  
// 		var txt1 = $(this).val(); 
// 		if(txt1==fpid){  
// 			$("#fuid option[value="+fpid+"]").attr("selected","selected");
// 		}
// 	});
//     var ferjiid=getQueryString('fpid');	
//         fenlei2(ferjiid);
// }
// });
// function getQueryString(name) {
//     var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
//     var r = window.location.search.substr(1).match(reg);
//     if (r != null) return unescape(r[2]); return null;
// }
// function sel2(erjiid){
// 	var fid= $("#uid option:selected").val();
// 	if(fid==0){
//      fid='';
// 	}
// 	$.ajax({
// 		type:'get',
// 		url:'/hao315_channel/get_one_fenlei',
// 		data:{'uid':fid},
// 		dataType:'json',
// 		success:function(msg){
// 			$("#pid").html('');
// 			for (var i = 0; i<msg.length; i++) {
// 				$("#pid").append("<option value='"+msg[i].id+"'>"+msg[i].name+"</option>");
// 			}
// 			if(erjiid){
// 				$("#pid option").each(function(){  
// 					var txt2 = $(this).val();
// 					if(txt2==erjiid){  
// 						$("#pid option[value="+erjiid+"]").attr("selected","selected");
// 					}  
// 				});
// 			}       
// 		} 
// 	});
// }
// function fenlei2(ferjiid){
// 	var ffid= $("#fuid option:selected").val();
// 	if(ffid==0){
//      ffid='';
// 	}
// 	$.ajax({
// 		type:'get',
// 		url:'/hao315_channel/get_hy_fenlei_list',
// 		data:{'uid':ffid},
// 		dataType:'json',
// 		success:function(msg){
// 			$("#fpid").html('');
// 			for (var i = 0; i<msg.length; i++) {
// 				$("#fpid").append("<option value='"+msg[i].id+"'>"+msg[i].name+"</option>");
// 			}

// 			if(ferjiid){
// 				$("#fpid option").each(function(){  
// 					var txt3 = $(this).val();
// 					if(txt3==ferjiid){  
// 						$("#fpid option[value="+ferjiid+"]").attr("selected","selected");
// 					}  
// 				});
// 			}        
// 		} 
// 	});
// }
//**************************获取ip以及地区***********
//  function getUserIP(){
// 	if(@$_SERVER['HTTP_X_REAL_IP'] && strtolower($_SERVER['HTTP_X_REAL_IP'])!='unknown'){
// 		  $ip = $_SERVER['HTTP_X_REAL_IP'];   
// 		}elseif(@$_SERVER['HTTP_CLIENT_IP'] && strtolower($_SERVER['HTTP_CLIENT_IP'])!='unknown') {   
//           $ip = $_SERVER['HTTP_CLIENT_IP'];   
//         } elseif (@$_SERVER['HTTP_X_FORWARDED_FOR'] && strtolower($_SERVER['HTTP_X_FORWARDED_FOR'])!='unknown') {   
//             $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];   
//         } else {   
//             $ip = $_SERVER['REMOTE_ADDR'];   
//         }
// 		return $ip;
// 	}
// function GetIpLookup($ip){  
//   $res = @file_get_contents('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=' . $ip);  
//   if(empty($res)){ return false; }  
//   $jsonMatches = array();  
//   preg_match('#\{.+?\}#', $res, $jsonMatches);  
//   if(!isset($jsonMatches[0])){ return false; }  
//   $json = json_decode($jsonMatches[0], true);  
//   if(isset($json['ret']) && $json['ret'] == 1){  
//     $json['ip'] = $ip;  
//     unset($json['ret']);  
//   }else{  
//     return false;  
//   }  
//   return $json;  
// }
// $ip='220.110.193.162';
// $area=GetIpLookup($ip);
// print_r($area);
// $arr=array(1=>1,2=>2,3=>3,4=>4,5=>5);
// $suiji1[]=$arr[rand(1,4)];
// $suiji2[]=$arr[5];
// $merge=array_merge($suiji1,$suiji2);
// $gailv=count($suiji2)/count($merge);
// print_r($gailv);
 
// function bian(){
// 	$arr=func_get_args();
// 	$a=0;
//    for($i=0;$i<count($arr);$i++){
//      $a+=$arr[$i]<<$i;
//    }
//    return $a;
// }
//  bian(1,2,4);
// $arr=array(8,9,5,6,4,7);
// function maopao($arr){
//   for ($i=0; $i <count($arr)-1;$i++) { 
//      for ($j=0; $j <count($arr)-$i-1;$j++) { 
//     	if($arr[$j]>$arr[$j+1]){
//            $temp=$arr[$j];
//            $arr[$j]=$arr[$j+1];
//            $arr[$j+1]=$temp;
//     	}
//      }
     
//    }
//    return $arr;
// }
// $a=maopao($arr);
// print_r($a);
// session_start();
// $name=session_id();
// $conn = mysql_connect("www.message.com", "root", "",'mysql') or die("数据库链接错误");
// mysql_select_db("xiangmu"); //data为数据库名称
// mysql_query('set names utf8');
// $sql="select * from session_source where session_id='".$name."'";
// $result=mysql_query($sql);
// $row=mysql_fetch_assoc($result);
// print_r($row);
// if(!empty($row)){
//  echo "可以使用session_id";
// }else{
// 	echo "不可以使用";
// }
// ***********************获取主域名********************
// $Url='http://www.yidawang.Net/index.html';  
// $tempu=parse_url($Url);  
// $message=$tempu['host'];  
// echo $message;
// ********************************模拟post提交******************
// function Post($url, $post = null) {
//     if (is_array($post)) {
//         ksort($post);
// 		$context['http'] = array(
// 				'timeout'=>60,
// 				'method' => 'POST',
// 				'header' => "Content-type: application/x-www-form-urlencoded ",
// 				'content' => http_build_query($post, '', '&')
// 				);
//          $res=file_get_contents($url, false, stream_context_create($context));
//          return $res;
//     }
// }
// $data = array(
// 			'name' => 'cehsi',
// 			'pass' => 'heihei'
// 		);	
// $response = Post('http://hui.com/ceshi.php', $data); 
// print_r($response); 
// function zhuanhuan($string){
// 	$char=array();
//   for($i=4;$i>=0;$i--){
//         $char[] = substr($string,$i,1);
//   }
//      return implode('', $char);
// }

// $a=zhuanhuan('hello');
// print_r($a);
// *******************身份证验证*****************************
 //    $IDCard = new IDCard();
	// var_dump($IDCard::isCard('370832199202107017'));
	// class IDCard {
	//     //检证身份证是否正确
	//     public static function isCard($card) {
	//         $card = self::to18Card($card);
	//          if (strlen($card) != 18) {
	//             return false;
	//         }
	//         $cardBase = substr($card, 0, 17);
	//         return (self::getVerifyNum($cardBase) == strtoupper(substr($card, 17, 1)));
	//     } 

	//     //格式化15位身份证号码为18位
	//     public static function to18Card($card) {
	//        $card = trim($card);
	//         if (strlen($card) == 18) {
	//             return $card;
	//         }
	//         if (strlen($card) != 15) {
	//             return false;
	//         }
	//         // 如果身份证顺序码是996 997 998 999，这些是为百岁以上老人的特殊编码
	//         if (array_search(substr($card, 12, 3), array('996', '997', '998', '999')) !== false) {
	//             $card = substr($card, 0, 6) . '18' . substr($card, 6, 9);
	//         } else {
	//             $card = substr($card, 0, 6) . '19' . substr($card, 6, 9);
	//         }
	//         $card = $card . self::getVerifyNum($card);
	//         return $card;
	//     } 
	//     // 计算身份证校验码，根据国家标准gb 11643-1999
	//     private static function getVerifyNum($cardBase) {
	//         if (strlen($cardBase) != 17) {
	//             return false;
	//         }
	//         // 加权因子
	//         $factor = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
	//         // 校验码对应值
	//         $verify_number_list = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');
	//         $checksum = 0;
	//         for ($i = 0; $i < strlen($cardBase); $i++) {
	//             $checksum += substr($cardBase, $i, 1) * $factor[$i];
	//         }
 //        $mod = $checksum % 11;
	//         $verify_number = $verify_number_list[$mod];
	//         return $verify_number;
	//     }
	// }
	// *********************************php加密解密*************
//  function encrypt($data, $key){
//     $key = md5($key);
//     $x  = 0;
//     $len = strlen($data);
//     $l  = strlen($key);
//     $char='';
//     $str='';
//     for ($i = 0; $i < $len; $i++)
//     {
//         if ($x == $l) 
//         {
//          $x = 0;
//         }
//         $char .= $key{$x};
//         $x++;
//     }
//     for ($i = 0; $i < $len; $i++)
//     {
//         $str .= chr(ord($data{$i}) + (ord($char{$i})) % 256);
//     }
//     return base64_encode($str);
// }
// function decrypt($data, $key){
//     $key = md5($key);
//     $x = 0;
//     $data = base64_decode($data);
//     $len = strlen($data);
//     $l = strlen($key);
//     $char='';
//     $str='';
//     for ($i = 0; $i < $len; $i++)
//     {
//         if ($x == $l) 
//         {
//          $x = 0;
//         }
//         $char .= substr($key, $x, 1);
//         $x++;
//     }
//     for ($i = 0; $i < $len; $i++)
//     {
//         if (ord(substr($data, $i, 1)) < ord(substr($char, $i, 1)))
//         {
//             $str .= chr((ord(substr($data, $i, 1)) + 256) - ord(substr($char, $i, 1)));
//         }
//         else
//         {
//             $str .= chr(ord(substr($data, $i, 1)) - ord(substr($char, $i, 1)));
//         }
//     }
//     return $str;
// }
// $data = '张朝辉';  // 被加密信息
// $key = '123';     // 密钥
// $encrypt = encrypt($data, $key);
// $decrypt = decrypt($encrypt, '123');
// echo $encrypt, "分割", $decrypt;
    // $numbers = range(1,5);//创建一个包含指定范围的数组
    // print_r($numbers);//Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
// $link=mysql_connect("hui.com",'root','','mysql') or die('连接不成功');
//  if(mysql_select_db("xiangmu")){
//     echo "选择数据库成功";
//  }else{
//  	echo "选择数据库失败";
//  }
// mysql_query('set names utf8');
// $sql='select * from goods limit 0,10';
// $result=mysql_query($sql);
// $list=array();
// while ($row=mysql_fetch_array($result)) {
// 	 $list[]=$row;
// }
// print_r($list);
// PHP Cake Framework*********************************************************
// 初始化一个 cURL 对象 
// function str_replace_limit($search, $replace, $subject, $limit=-1){  
//     if(is_array($search)){  
//         foreach($search as $k=>$v){  
//             $search[$k] = '`'. preg_quote($search[$k], '`'). '`';  
//         }  
//     }else{  
//         $search = '`'. preg_quote($search, '`'). '`';  
//     }  
//     return preg_replace($search, $replace, $subject, $limit);  
// }  
// $str = 'user_order_list';  
// echo str_replace_limit('_', '/', $str, 2); 
//   function getimgs($url,$userinfo){
//     $ch = curl_init();
//     $timeout = 5;
//     curl_setopt ($ch, CURLOPT_URL, "$url");
//     curl_setopt ($ch, CURLOPT_HEADER, 1);
//     curl_setopt ($ch, CURLOPT_REFERER, $url); 
//     curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
//     curl_setopt ($ch, CURLOPT_USERAGENT, "$userinfo");
//     curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);  
//     $contents = curl_exec($ch);
//     curl_close($ch);
//     return $contents;
//   }
// $a=getimgs('http://www.hao315.cc','Mozilla/5.0 (Windows NT 5.1; rv:22.0) baiduspider Firefox/22.0');
// if(strstr($a,'zstv')){
//   echo '有';
// }else{
// 	echo '没有';
// }
 // function getAction(){
 //        $content = file_get_contents('D:/server/wamp/www/shopmvc/application/controller/back/IndexController.class.php');
 //        preg_match_all("/.*?public.*?function(.*?)\(.*?\)/i", $content, $matches);
 //        $functions = $matches[1];
 //        //排除部分方法
 //        $inherents_functions = array('_before_index','_after_index','_initialize','__construct','getActionName','isAjax','display','show','fetch','buildHtml','assign','__set','get','__get','__isset','__call','error','success','ajaxReturn','redirect','__destruct','_empty');
 //        foreach ($functions as $func){
 //            $func = trim($func);
 //            if(!in_array($func, $inherents_functions)){
 //              if (strlen($func)>0)   $customer_functions[] = $func;
 //            }
 //        }
 //        return $customer_functions;
 //    }
 //    print_r(getAction());
// function getController(){
//         $module_path = 'D:/server/wamp/www/shopmvc/application/controller/back';  //控制器路径
//         if(!is_dir($module_path)) return null;
//         $module_path .= '/*.class.php';
//         $ary_files = glob($module_path);
//         foreach ($ary_files as $file) {
//             if (is_dir($file)) {
//                 continue;
//             }else {
//                 $files[] = basename($file,'.class.php');
//             }
//         }
//         return $files;
//     }
//     print_r(getController());
// function send_post($url, $post_data) {
//   $postdata = http_build_query($post_data);  
//   $options = array(
// 		'http' => array(
// 			'method' => 'POST',  
// 			'header' => 'Content-type:application/x-www-form-urlencoded',  
// 			'content' => $postdata,  
// 			'timeout' => 15 * 60 // 超时时间（单位:s）
// 		)  
//   );  
//   $context = stream_context_create($options);  
//   $result = file_get_contents($url, false, $context);
//   return $result;  
// }  
// //	使用方法  
// $post_data = array(
// 	'name' => '马富天',  
// 	'age' => '18',
// 	'summary' => '演示一下 PHP 跨站 POST 请求'
// ); 
// var_dump(send_post('http://uc.hao315.com/aaa.php', $post_data));
// $conn=@mysql_connect('hui.com','root','') or die("error connecting") ; //连接数据库
 
// mysql_query("set names 'utf8'"); //数据库输出编码 应该与你的数据库编码保持一致.南昌网站建设公司百恒网络PHP工程师建议用UTF-8 国际标准编码.
 
// mysql_select_db('xiangmu'); //打开数据库
 
// $sql ="select * from goods "; //SQL语句
 
// $result = mysql_query($sql,$conn); //查询
// $list=array();
// while($row=mysql_fetch_array($result)){
//    $list[]=$row;
// }
// for($i=0;$i<count($list);$i++){
// 	$a=276-$i;
// 	$a1=$a-1;
//   $sql1="insert into goods_pic (goods_id,path) VALUES (".$list[$i]['goods_id'].",'Public/images1/public_upload_".$a.".jpg'".")";
//   $sql2="insert into goods_pic (goods_id,path) VALUES (".$list[$i]['goods_id'].",'Public/images1/public_upload_".$a1.".jpg'".")";
//   mysql_query($sql1,$conn);
//   mysql_query($sql2,$conn);
// }
//*************************定时插数据********************
        // ignore_user_abort(); // run script in background
        // set_time_limit(0); // run script forever
        // $interval = 2; // do every 15 minutes…
        // do {
        //     file_put_contents('log.txt',"1\r\n",FILE_APPEND);
        //     sleep($interval); // wait 15 minutes
        // } while (true);
//  function GetIpLookup($ip = ''){   
//     if(empty($ip)){   
//        return '请输入IP地址'; 
//     }   
//     $res = @file_get_contents('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=' . $ip);   
//     if(empty($res)){ return false; }   
//     $jsonMatches = array();   
//     preg_match('#\{.+?\}#', $res, $jsonMatches);   
//     if(!isset($jsonMatches[0])){ return false; }   
//     $json = json_decode($jsonMatches[0], true);   
//     if(isset($json['ret']) && $json['ret'] == 1){   
//         $json['ip'] = $ip;   
//         unset($json['ret']);   
//     }else{   
//         return false;   
//     }   
//     return $json;   
// }

// $arr=GetIpLookup('119.2.31.28');

// var_dump($arr); 
//********************************二维码***********
// $yourname = "www.zxhzlh.cn";
// $date = "09 Dec 2013";
// $pos = "2nd";
// $image = imagecreatefrompng('logo.png');
// imagealphablending($image, true);
// $red = imagecolorallocate($image, 150,0, 0);
// imagefttext($image, 30, 0, 40, 154, $red, './simsun.ttf', $yourname);
// $filename = 'certificate_aadarsh.png';
// ImagePng($image, $filename);
// imagedestroy($image);
//*******************************************获取图片属性******************
// function MyImg($imgfile) {
//   $size = GetImageSize($imgfile);
//   print_r($size);
//   echo "<img src=".$imgfile."/".$size[3].">";
// }
// MyImg("http://read.html5.qq.com/image?src=forum&q=5&r=0&imgflag=7&imageUrl=http://mmbiz.qpic.cn/mmbiz/nnl8eN7icb4dM4ib62gFo5WmsMNPhNAuGJRznd2Peppciaia6YxxvqLBzo9gzpJkicsMfx52oT44dZ7jcIwZVOMkQUQ/640?wx_fmt=png");
/*$str='<div class="tideTable"><p><span class="sss">何艳春</span></p></div><div class="aaaa"><p><span class="sss">小狗</span></p></div>';
function get_tag_data($html,$tag,$attr,$value){
$regex = "/<$tag.*?$attr=\".*?$value.*?\".*?>(.*?)<\/$tag>/is";
preg_match_all($regex,$html,$matches,PREG_PATTERN_ORDER);
return $matches[1];
}
$result = get_tag_data($str,"div","class","");
for ($i=0; $i <count($result) ; $i++) { 
	$aaa[]=preg_replace("/<(\/?span.*?)>/si","",$result[$i]);
}
print_r($aaa);*/
//********************************mysql使用事务批量插入******************************
// $link=@mysql_connect('hui.com','root','');
// mysql_select_db('xiangmu');
// mysql_query('set names utf8');
// echo date('H:i:s');
// mysql_query('BEGIN');
// $params = 50;
// for($i=0;$i<200000;$i++){
//     $sql="insert into cha (goods_id) values (".$params.")";
//     mysql_query($sql);
//   if($i%10000==0){
// 	mysql_query('COMMIT');
// 	mysql_query('BEGIN');
//    }
// }
// mysql_query('COMMIT');
// echo date('H:i:s');
// echo date('H:i:s');
// $sql="insert into cha (goods_id,goods_name) values";
// for($i=0;$i<10000;$i++){
// $sql.="(50,'可惜不是你，陪我到最后哈哈哈哈哈哈哈'),";
// }
// $sql = substr($sql,0,strlen($sql)-1);
// mysql_query($sql);
// echo date('H:i:s');
//********************************* mysql分表  预先建立100个表  通过用户的id计算用户属于哪张表*************

//思路：建立一张总表   只用来存储用户的id 然后根据用户插入返回的id 用hash计算该id属于哪一张表   然后在插入
// function get_hash_table($table,$userid) {
//  $str = crc32($userid);
//  if($str<0){
//   $hash = "0".substr(abs($str), 0, 1);
//  }else{
//   $hash = substr($str, 0, 2);
//  }
//  return $table."_".$hash;
// }   

// echo get_hash_table('message' , 'user18991');     //结果为message_10
// echo get_hash_table('message' , 'user34523');    //结果为message_13
// function get_table($table,$userid) {

// $hash=$userid%4;
// echo $hash;
//  return $table."_".$hash;
// }   

// echo get_table('message' , 5);     //结果为message_10
// echo get_table('message' , 17);    //结果为message_13
// $max=100;
// $max <=100 ? $max=1 : $max=2;
// echo $max;
//***************************
//  $arr=array('name'=>'zxh');
// $json = json_encode($arr);
// var_dump(json_decode($json,true));
// var_dump(json_decode($json, true));
echo 'sss';
echo 'aaaa';