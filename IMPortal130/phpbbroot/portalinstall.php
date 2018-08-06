<?php

$sql = array (
  0 => 'DROP TABLE IF EXISTS phpbb_block_position',
  1 => 'CREATE TABLE phpbb_block_position (
  bpid int(10) NOT NULL auto_increment,
  pkey varchar(30) NOT NULL default \'\',
  bposition char(1) NOT NULL default \'\',
  layout int(10) NOT NULL default \'1\',
  PRIMARY KEY  (bpid)
)',
  2 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES (1, \'header\', \'@\', 0)',
  3 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES (2, \'footer\', \'*\', 0)',
  4 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES (22, \'right\', \'r\', 1)',
  5 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES (21, \'center\', \'c\', 1)',
  6 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES (5, \'center\', \'c\', 2)',
  7 => 'INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES (24, \'center\', \'c\', 3)',
  8 => 'DROP TABLE IF EXISTS phpbb_block_variable',
  9 => 'CREATE TABLE phpbb_block_variable (
  bvid int(10) NOT NULL auto_increment,
  label varchar(30) NOT NULL default \'\',
  sub_label varchar(255) default NULL,
  config_name varchar(30) NOT NULL default \'\',
  field_options varchar(255) default NULL,
  field_values varchar(255) default NULL,
  `type` tinyint(1) NOT NULL default \'0\',
  block varchar(255) default NULL,
  PRIMARY KEY  (config_name),
  KEY bvid (bvid)
)',
  10 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (1, \'Number of news on portal\', \'\', \'md_num_news\', \'\', \'\', 1, \'forum\')',
  11 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (2, \'Length of news\', \'Number of characters displayed\', \'md_news_length\', \'\', \'\', 1, \'forum\')',
  12 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (3, \'Poll Bar Length\', \'decrease/increase the value for 1 vote bar length\', \'md_poll_bar_length\', \'\', \'\', 1, \'poll\')',
  13 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (4, \'News Forum ID(s)\', \'comma delimited\', \'md_news_forum_id\', \'\', \'\', 1, \'forum\')',
  14 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (5, \'Poll Forum ID(s)\', \'comma delimited\', \'md_poll_forum_id\', \'\', \'\', 1, \'poll\')',
  15 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (6, \'Number of recent topics\', \'number of topics displayed\', \'md_num_recent_topics\', \'\', \'\', 1, \'recent_topics\')',
  16 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (7, \'Approve MOD installed?\', \'tick if Approve MOD is installed\', \'md_approve_mod_installed\', \'\', \'\', 4, \'recent_topics\')',
  17 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (8, \'Recent Topics Style\', \'choose static display or scrolling display\', \'md_recent_topics_style\', \'Scroll,Static\', \'1,0\', 3, \'recent_topics\')',
  18 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (9, \'Search option text\', \'Text displayed as the default option\', \'md_search_option_text\', \'\', \'\', 1, \'search\')',
  19 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (10, \'Header width\', \'Width of forum-wide left column in pixels\', \'header_width\', \'\', \'\', 1, \'@Portal Config\')',
  20 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (11, \'Footer width\', \'Width of forum-wide right column in pixels\', \'footer_width\', \'\', \'\', 1, \'@Portal Config\')',
  21 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (12, \'Cache File Locking\', \'can avoid cache corruption under bad circumstances\', \'md_cache_file_locking\', \'\', \'\', 4, \'@Portal Config\')',
  22 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (13, \'Cache Write Control\', \'detect some corrupt cache files\', \'md_cache_write_control\', \'\', \'\', 4, \'@Portal Config\')',
  23 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (14, \'Cache Read Control\', \'a control key is embeded in cache file\', \'md_cache_read_control\', \'\', \'\', 4, \'@Portal Config\')',
  24 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (15, \'Cache Read Control Type\', \'Type of read control (only if read control is enabled)\', \'md_cache_read_type\', \'md5 hash control, crc32 hash control, length only test\', \'md5,crc32,strlen\', 2, \'@Portal Config\')',
  25 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (16, \'Cache File Name Protection\', \'\', \'md_cache_filename_protect\', \'\', \'\', 4, \'@Portal Config\')',
  26 => 'INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (17, \'Cache Automatic Serialization\', \'Enable / disable automatic serialization\', \'md_cache_serialize\', \'\', \'\', 4, \'@Portal Config\')',
  27 => 'DROP TABLE IF EXISTS phpbb_blocks',
  28 => 'CREATE TABLE phpbb_blocks (
  bid int(10) NOT NULL auto_increment,
  title varchar(60) NOT NULL default \'\',
  title_image VARCHAR(100) NOT NULL default \'\',
  content text NOT NULL,
  bposition char(1) NOT NULL default \'\',
  weight int(10) NOT NULL default \'1\',
  active tinyint(1) NOT NULL default \'1\',
  blockfile varchar(255) NOT NULL default \'\',
  view tinyint(1) NOT NULL default \'0\',
  layout int(10) NOT NULL default \'1\',
  `cache` tinyint(1) NOT NULL default \'0\',
  cache_time int(10) NOT NULL default \'0\',
  block_bbcode_uid varchar(10) default NULL,
  `type` tinyint(1) NOT NULL default \'1\',
  border tinyint(1) NOT NULL default \'1\',
  titlebar tinyint(1) NOT NULL default \'1\',
  openclose tinyint(1) NOT NULL default \'1\',
  background tinyint(1) NOT NULL default \'1\',
  `local` tinyint(1) NOT NULL default \'0\',
  groups tinytext NOT NULL,
  PRIMARY KEY  (bid)
)',
  29 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (1, \'Board Navigation\', \'<table width="100%" cellpadding="0" cellspacing="1" border="0">\\r\\n<tr>\\r\\n<td align="left"><span class="genmed" style="line-height: 150%">\\r\\n<a href="portal.php">Home</a><br />\\r\\n<a href="index.php">Forum</a><br />\\r\\n<a href="memberlist.php">Memberlist</a><br />\\r\\n<a href="faq.php">FAQ</a><br />\\r\\n<a href="search.php">Search</a><br />\\r\\n</span></td>\\r\\n</tr>\\r\\n</table>\', \'@\', 1, 1, \'\', 0, 0, 0, 0, \'\', 0, 1, 1, 0, 1, 0, \'\')',
  30 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (2, \'Statistics\', \'\', \'r\', 3, 1, \'blocks_imp_statistics\', 0, 1, 1, 43200, \'\', 1, 1, 1, 1, 1, 0, \'5\')',
  31 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (3, \'Links\', \'<table width="100%" cellpadding="0" cellspacing="1" border="0">\\r\\n<tr>\\r\\n<td class="row1" align="center"><a href="http://phpbbintegramod.sourceforge.net" target="_blank" class="gen">IntegraMOD</a></td>\\r\\n</tr>\\r\\n</table>\', \'r\', 2, 1, \'\', 0, 1, 0, 0, \'\', 0, 1, 1, 1, 1, 0, \'\')',
  32 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (4, \'Welcome to IM Portal\', \'<table cellspacing="0" cellpadding="0" border="0" width="100%">\\r\\n<tr>\\r\\n<td align="center"><span class="gen">\\r\\nWelcome to IM Portal<br /><br />For questions, comments and suggestions, please visit <a href="http://www.integramod.com">IntegraMOD</a>\\r\\n</span>\\r\\n</td>\\r\\n</tr>\\r\\n</table>\', \'c\', 2, 1, \'\', 0, 1, 0, 0, \'\', 0, 1, 1, 1, 1, 0, \'\')',
  33 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (5, \'News\', \'\', \'c\', 3, 1, \'blocks_imp_forum\', 0, 1, 0, 0, \'\', 1, 1, 1, 1, 1, 0, \'\')',
  34 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (6, \'User Block\', \'\', \'@\', 2, 1, \'blocks_imp_user_block\', 0, 0, 0, 0, \'\', 1, 1, 1, 1, 1, 0, \'\')',
  35 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (7, \'Who is Online\', \'\', \'@\', 3, 1, \'blocks_imp_online_users\', 0, 0, 1, 300, \'\', 1, 1, 1, 1, 1, 0, \'\')',
  36 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (8, \'Poll\', \'hkghk\', \'r\', 4, 1, \'blocks_imp_poll\', 0, 1, 0, 0, \'\', 0, 1, 1, 1, 1, 0, \'\')',
  37 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (9, \'Recent Topics\', \'\', \'r\', 1, 1, \'blocks_imp_recent_topics\', 0, 1, 1, 300, \'\', 1, 1, 1, 1, 1, 0, \'\')',
  38 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (10, \'Search\', \'\', \'@\', 4, 1, \'blocks_imp_search\', 0, 0, 1, 1000000000, \'\', 1, 1, 1, 1, 1, 0, \'\')',
  39 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (11, \'sample block\', \'[size=12:81ef439b94][b:81ef439b94][color=red:81ef439b94]This is just a sample block[/color:81ef439b94][/b:81ef439b94] showing the capabilities of [b:81ef439b94][color=green:81ef439b94]IM Portal[/color:81ef439b94][/b:81ef439b94] with the use of BBCodes.[/size:81ef439b94] \\r\\n\\r\\n :lol:  8)  :o  :( \\r\\n[quote:81ef439b94]This version of IM Portal uses a multi-page feature to create more than one page for your portal.  Try visiting this address: [b:81ef439b94]http://www.myforum.com/portal.php?page=2[/b:81ef439b94]. Replace www.myforum.com with the correct location[/quote:81ef439b94]The block below (Welcome to IM Portal) is an example of a block using HTML.\', \'c\', 1, 1, \'\', 0, 1, 0, 0, \'81ef439b94\', 1, 1, 1, 1, 1, 0, \'\')',
  40 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (12, \'Sample 1\', \'This page shows an example of the multi-page feature of IM Portal.  This page also displays the forum-wide blocks.\\r\\n\\r\\n[code:1:82bdfbd9b5]Try to visit&#58; http&#58;//www.myforum.com/portal.php?page=3[/code:1:82bdfbd9b5]\', \'c\', 1, 1, \'\', 0, 2, 0, 0, \'82bdfbd9b5\', 1, 1, 1, 1, 1, 0, \'\')',
  41 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (13, \'Sample 6\', \'This block also shows the [b:0c6a883c90][color=orange:0c6a883c90]multi-page feature of IM Portal[/color:0c6a883c90][/b:0c6a883c90].  But this time, it does not display the forum-wide blocks.\\r\\n\\r\\nYou can now proceed to the [b:0c6a883c90][color=blue:0c6a883c90]ACP[/color:0c6a883c90][/b:0c6a883c90] and delete the sample layouts/pages in the layout management page.\', \'c\', 1, 1, \'\', 0, 3, 0, 0, \'0c6a883c90\', 1, 1, 1, 1, 1, 0, \'\')',
  42 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (14, \'News\', \'\', \'c\', 4, 1, \'blocks_imp_forum\', 0, 3, 0, 0, \'\', 0, 1, 1, 1, 1, 0, \'\')',
  43 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (15, \'Sample 2\', \'This is the new feature of IM Portal which enables a block with the following options:[list:2377d30f6a][*:2377d30f6a]with or without titlebar\\r\\n[*:2377d30f6a]with or without border\\r\\n[*:2377d30f6a]with or without background[/list:u:2377d30f6a]\\r\\nThis block is without a titlebar, border and background\', \'c\', 2, 1, \'\', 0, 2, 0, 0, \'2377d30f6a\', 1, 0, 0, 0, 0, 0, \'\')',
  44 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (16, \'Sample 3\', \'Without titlebar only  :o\', \'c\', 3, 1, \'\', 0, 2, 0, 0, \'7e13fbbacc\', 1, 1, 0, 1, 1, 0, \'\')',
  45 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (17, \'Sample 4\', \'Without background only  :wink:\', \'c\', 4, 1, \'\', 0, 2, 0, 0, \'5b8176554c\', 1, 1, 1, 1, 0, 0, \'\')',
  46 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (18, \'Sample 5\', \'Without border  :arrow:  :idea:  :arrow:\', \'c\', 5, 1, \'\', 0, 2, 0, 0, \'ed31156971\', 1, 0, 1, 1, 1, 0, \'\')',
  47 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (19, \'Sample 7\', \'Take note that pages and blocks can have different permissions.  There are 2 kinds of permissions to set, per user level and per usergroups.  It is allowed to mix permissions but it is wise to set the user level to registered when usergroups are used (e.g. making a page only accessible for a specific usergroup)  :wink:\', \'c\', 2, 1, \'\', 0, 3, 0, 0, \'16703bc74c\', 1, 1, 0, 1, 0, 0, \'\')',
  48 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (20, \'Sample 8\', \'To support localization for IM Portal, titlebars can also be localized so titles being displayed, instead of being retrieved from the database will be retrieved from the language files.  This only applies for those blocks which has a language file.  :shock:  8)\', \'c\', 3, 1, \'\', 0, 3, 0, 0, \'48d2dd24ac\', 1, 0, 1, 1, 0, 0, \'\')',
  49 => 'INSERT INTO phpbb_blocks (bid, title, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (21, \'Sample 9\', \'This is a sample block with the open/close button feature switched off\\r\\n\\r\\n :D  8)  8)  :lol:  :wink:\', \'c\', 5, 1, \'\', 0, 3, 0, 0, \'edaa61b06b\', 1, 1, 1, 0, 1, 0, \'\')',
  50 => 'DROP TABLE IF EXISTS phpbb_layout',
  51 => 'CREATE TABLE phpbb_layout (
  lid int(10) unsigned NOT NULL auto_increment,
  name varchar(100) NOT NULL default \'\',
  template varchar(100) NOT NULL default \'\',
  forum_wide tinyint(1) NOT NULL default \'1\',
  page_collapse tinyint(1) NOT NULL default \'0\',
  view tinyint(1) NOT NULL default \'0\',
  groups tinytext NOT NULL,
  pagetitle varchar(100) NOT NULL default \'Home\',
  PRIMARY KEY  (lid)
)',
  52 => 'INSERT INTO phpbb_layout (lid, name, template, forum_wide, page_collapse, view, groups, pagetitle) VALUES (1, \'IM Portal Default\', \'portal_body.tpl\', 1, 0, 0,\'\', \'IM Portal Default\')',
  53 => 'INSERT INTO phpbb_layout (lid, name, template, forum_wide, page_collapse, view, groups, pagetitle) VALUES (2, \'Sample 1\', \'layout1.tpl\', 1, 0, 0,\'\', \'Sample 1\')',
  54 => 'INSERT INTO phpbb_layout (lid, name, template, forum_wide, page_collapse, view, groups, pagetitle) VALUES (3, \'Sample 2\', \'layout1.tpl\', 0, 0, 0,\'\', \'Sample 2\')',
  55 => 'DROP TABLE IF EXISTS phpbb_portal_config',
  56 => 'CREATE TABLE phpbb_portal_config (
  id int(10) unsigned NOT NULL auto_increment,
  config_name varchar(255) NOT NULL default \'\',
  config_value varchar(255) NOT NULL default \'\',
  PRIMARY KEY  (id)
)',
  57 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (1, \'default_portal\', \'1\')',
  58 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (2, \'portal_header\', \'1\')',
  59 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (3, \'portal_tail\', \'0\')',
  60 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (4, \'cache_enabled\', \'1\')',
  61 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (5, \'md_news_length\', \'250\')',
  62 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (6, \'md_news_forum_id\', \'1\')',
  63 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (7, \'md_num_news\', \'5\')',
  64 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (8, \'md_search_option_text\', \'IM Portal\')',
  65 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (9, \'md_num_recent_topics\', \'10\')',
  66 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (10, \'md_approve_mod_installed\', \'0\')',
  67 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (11, \'md_recent_topics_style\', \'1\')',
  68 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (12, \'md_poll_bar_length\', \'40\')',
  69 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (13, \'md_poll_forum_id\', \'1\')',
  70 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (14, \'header_width\', \'150\')',
  71 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (15, \'footer_width\', \'150\')',
  72 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (16, \'md_cache_file_locking\', \'1\')',
  73 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (17, \'md_cache_write_control\', \'1\')',
  74 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (18, \'md_cache_read_control\', \'1\')',
  75 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (19, \'md_cache_read_type\', \'md5\')',
  76 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (20, \'md_cache_filename_protect\', \'0\')',
  77 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (21, \'md_cache_serialize\', \'1\')',
  78 => 'INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (22, \'collapse_layout\', \'1\')',
);

@set_time_limit(0);
if(!@file_exists('config.php')) die('config.php not found. make sure you have uploaded file to your forum directory.');
include('config.php');
$connection = mysqli_connect($dbhost, $dbuser, $dbpasswd) or die("Cannot connect");
/*if(!$connection) die('Cannot connect: ' . mysqli_connect_error($connection));*/
$res = mysqli_select_db($connection, $dbname) or die("cannot select DB");
/*if(!$res) die('Cannot select database "' . $dbname . '": ' . @mysqli_error());*/
for($i=0; $i<count($sql); $i++)
{
 if($table_prefix !== 'phpbb_') $sql[$i] = preg_replace('/phpbb_/', $table_prefix, $sql[$i]);
 $res = mysqli_query($connection, $sql[$i]);
 if(!$res) { echo 'error in query ', ($i + 1), ': ', mysqli_error(), '<br />'; }
}
echo 'done (', count($sql), ' queries).';

?>
