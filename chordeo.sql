-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2011 at 11:29 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chordeo`
--

-- --------------------------------------------------------

--
-- Table structure for table `ch_article`
--

CREATE TABLE IF NOT EXISTS `ch_article` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `publish_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ch_article`
--

INSERT INTO `ch_article` (`id`, `title`, `content`, `publish_date`) VALUES
(1, 'how to use', '<p>\n	&nbsp;</p>\n<p style="line-height: 1.5em; margin-bottom: 15px; ">\n	This sample shows how to automatically replace all&nbsp;<code style="line-height: 1.5em; font-family: monospace, monospace; font-size: 1em; ">&lt;textarea&gt;</code>&nbsp;elements of a given class with a CKEditor instance.</p>\n<p style="line-height: 1.5em; margin-bottom: 15px; ">\n	To replace a&nbsp;<code style="line-height: 1.5em; font-family: monospace, monospace; font-size: 1em; ">&lt;textarea&gt;</code>&nbsp;element, simply assign it the&nbsp;<code style="line-height: 1.5em; font-family: monospace, monospace; font-size: 1em; ">ckeditor</code>&nbsp;class, as in the code below:</p>\n<pre class="samples" style="line-height: 1.5em; font-family: monospace, monospace; font-size: 1em; margin-bottom: 15px; background-color: rgb(247, 247, 247); border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-top-color: rgb(215, 215, 215); border-right-color: rgb(215, 215, 215); border-bottom-color: rgb(215, 215, 215); border-left-color: rgb(215, 215, 215); overflow-x: auto; overflow-y: auto; padding-top: 0.25em; padding-right: 0.25em; padding-bottom: 0.25em; padding-left: 0.25em; ">\n&lt;textarea <strong style="line-height: 1.5em; ">class=&quot;ckeditor</strong>&quot; name=&quot;editor1&quot;&gt;&lt;/textarea&gt;</pre>\n<p style="line-height: 1.5em; margin-bottom: 15px; ">\n	Note that other&nbsp;<code style="line-height: 1.5em; font-family: monospace, monospace; font-size: 1em; ">&lt;textarea&gt;</code>&nbsp;attributes (like&nbsp;<code style="line-height: 1.5em; font-family: monospace, monospace; font-size: 1em; ">id</code>&nbsp;or&nbsp;<code style="line-height: 1.5em; font-family: monospace, monospace; font-size: 1em; ">name</code>) need to be adjusted to your document.</p>\n', '2011-10-26 04:36:23'),
(2, 'Tes', '<p>\n	&nbsp;</p>\n<div align="left">\n	<div class="success" style="color: rgb(0, 0, 0); background-color: rgb(240, 255, 240); margin-top: 0.3em; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; border-top-width: 2px; border-right-width: 2px; border-bottom-width: 2px; border-left-width: 2px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-color: initial; padding-top: 0.1em; padding-right: 0.1em; padding-bottom: 0.1em; padding-left: 36px; border-top-color: rgb(0, 255, 0); border-right-color: rgb(0, 255, 0); border-bottom-color: rgb(0, 255, 0); border-left-color: rgb(0, 255, 0); background-image: url(http://localhost/phpmyadmin/themes/original/img/s_success.png); background-position: 10px 50%; background-repeat: no-repeat no-repeat; ">\n		Showing rows 0 - 0 (1 total, Query took 0.0005 sec)</div>\n	<code class="sql" style="font-family: monospace; display: block; padding-top: 0.3em; padding-right: 0.3em; padding-bottom: 0.3em; padding-left: 0.3em; margin-top: 0px; margin-bottom: 0px; border-right-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-right-style: solid; border-left-style: solid; border-right-width: 1px; border-left-width: 1px; border-top-width: 0px; border-top-style: initial; border-top-color: initial; border-bottom-width: 0px; border-bottom-style: initial; border-bottom-color: initial; max-height: 10em; overflow-x: auto; overflow-y: auto; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(229, 229, 229); background-position: initial initial; background-repeat: initial initial; "><span class="syntax" style="font-size: 9px; "><span class="syntax_alpha syntax_alpha_reservedWord" style="color: rgb(153, 0, 153); text-transform: uppercase; font-weight: bold; ">SELECT</span>&nbsp;<span class="syntax_punct" style="color: fuchsia; ">*</span>&nbsp;<br />\n	<span class="syntax_alpha syntax_alpha_reservedWord" style="color: rgb(153, 0, 153); text-transform: uppercase; font-weight: bold; ">FROM</span>&nbsp;<span class="syntax_quote syntax_quote_backtick" style="color: rgb(0, 128, 0); white-space: pre; ">`ch_article`</span>&nbsp;<br />\n	<span class="syntax_alpha syntax_alpha_reservedWord" style="color: rgb(153, 0, 153); text-transform: uppercase; font-weight: bold; ">LIMIT</span>&nbsp;<span class="syntax_digit syntax_digit_integer" style="color: teal; ">0</span>&nbsp;<span class="syntax_punct syntax_punct_listsep" style="color: fuchsia; ">,</span>&nbsp;<span class="syntax_digit syntax_digit_integer" style="color: teal; ">30</span></span></code>\n	<div class="tools" style="border-top-width: 0px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: initial; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-top-color: initial; border-right-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); padding-top: 0.2em; padding-right: 0.2em; padding-bottom: 0.2em; padding-left: 0.2em; margin-top: 0px; margin-bottom: 0.5em; text-align: right; float: none; clear: both; color: rgb(0, 0, 0); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(211, 220, 227); ">\n		<form action="http://localhost/phpmyadmin/sql.php" method="post" style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; display: inline; ">\n			<input id="profiling" name="profiling" style="font-size: 1em; vertical-align: middle; " type="checkbox" /><label for="profiling">Profiling</label></form>\n		[&nbsp;<a href="http://localhost/phpmyadmin/tbl_sql.php?db=chordeo&amp;table=ch_article&amp;sql_query=SELECT+%2A+FROM+%60ch_article%60&amp;show_query=1&amp;token=2e5e78bf4c466e975fe06d6a73e2453d#querybox" style="text-decoration: none; color: rgb(0, 0, 255); ">Edit</a>&nbsp;] [&nbsp;<a href="http://localhost/phpmyadmin/import.php?db=chordeo&amp;table=ch_article&amp;sql_query=EXPLAIN+SELECT+%2A+FROM+%60ch_article%60&amp;token=2e5e78bf4c466e975fe06d6a73e2453d" style="text-decoration: none; color: rgb(0, 0, 255); ">Explain SQL</a>&nbsp;] [&nbsp;<a href="http://localhost/phpmyadmin/import.php?db=chordeo&amp;table=ch_article&amp;sql_query=SELECT+%2A+FROM+%60ch_article%60&amp;show_query=1&amp;show_as_php=1&amp;token=2e5e78bf4c466e975fe06d6a73e2453d" style="text-decoration: none; color: rgb(0, 0, 255); ">Create PHP Code</a>&nbsp;] [&nbsp;<a href="http://localhost/phpmyadmin/import.php?db=chordeo&amp;table=ch_article&amp;sql_query=SELECT+%2A+FROM+%60ch_article%60&amp;show_query=1&amp;token=2e5e78bf4c466e975fe06d6a73e2453d" style="text-decoration: none; color: rgb(0, 0, 255); ">Refresh</a>&nbsp;]</div>\n</div>\n<br />\n<table border="0" cellpadding="2" cellspacing="0">\n	<tbody>\n		<tr>\n			<td style="padding-top: 0.1em; padding-right: 0.5em; padding-bottom: 0.1em; padding-left: 0.5em; margin-top: 0.1em; margin-right: 0.1em; margin-bottom: 0.1em; margin-left: 0.1em; vertical-align: top; ">\n				&nbsp;&nbsp;&nbsp;</td>\n			<td align="center" style="padding-top: 0.1em; padding-right: 0.5em; padding-bottom: 0.1em; padding-left: 0.5em; margin-top: 0.1em; margin-right: 0.1em; margin-bottom: 0.1em; margin-left: 0.1em; vertical-align: top; ">\n				<form action="http://localhost/phpmyadmin/sql.php" method="post" style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; display: inline; ">\n					<input name="navig" style="font-size: 1em; vertical-align: middle; " type="submit" value="Show :" />&nbsp;<input class="textfield" name="session_max_rows" size="3" style="font-size: 1em; vertical-align: middle; " type="text" value="30" />&nbsp;row(s) starting from record #&nbsp;<input class="textfield" name="pos" size="6" style="font-size: 1em; vertical-align: middle; " type="text" value="0" />&nbsp;<br />\n					in&nbsp;<select name="disp_direction" style="font-size: 1em; vertical-align: middle; ">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<option selected="selected" value="horizontal">horizontal</option>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<option value="horizontalflipped">horizontal (rotated headers)</option>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<option value="vertical">vertical</option>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</select>&nbsp;mode and repeat headers after&nbsp;<input class="textfield" name="repeat_cells" size="3" style="font-size: 1em; vertical-align: middle; " type="text" value="100" />&nbsp;cells</form>\n			</td>\n			<td style="padding-top: 0.1em; padding-right: 0.5em; padding-bottom: 0.1em; padding-left: 0.5em; margin-top: 0.1em; margin-right: 0.1em; margin-bottom: 0.1em; margin-left: 0.1em; vertical-align: top; ">\n				&nbsp;&nbsp;&nbsp;</td>\n		</tr>\n	</tbody>\n</table>\n<form action="http://localhost/phpmyadmin/sql.php" id="displayOptionsForm" method="post" name="displayOptionsForm" style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; display: inline; ">\n	<br />\n	<span id="slider_status_displayoptions">+&nbsp;</span><a href="" id="toggle_displayoptions" style="text-decoration: none; color: rgb(0, 0, 255); ">Options</a>\n	<div style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; position: static; overflow-x: hidden; overflow-y: hidden; height: 0px; ">\n		<div id="displayoptions" style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; margin-top: 0px; display: block; ">\n			<fieldset style="margin-top: 1em; border-top-color: rgb(0, 0, 0); border-right-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; padding-top: 0.5em; padding-right: 0.5em; padding-bottom: 0.5em; padding-left: 0.5em; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(229, 229, 229); background-position: initial initial; background-repeat: initial initial; ">\n				<div class="formelement" style="float: left; margin-right: 0.5em; white-space: normal; ">\n					<input checked="checked" id="display_text_P" name="display_text" style="font-size: 1em; vertical-align: middle; " type="radio" value="P" /><br />\n					<input id="display_text_F" name="display_text" style="font-size: 1em; vertical-align: middle; " type="radio" value="F" /></div>\n				<div class="formelement" style="float: left; margin-right: 0.5em; white-space: normal; ">\n					<input checked="checked" id="display_binary" name="display_binary" style="font-size: 1em; vertical-align: middle; " type="checkbox" /><br />\n					<input id="display_blob" name="display_blob" style="font-size: 1em; vertical-align: middle; " type="checkbox" /></div>\n				<div class="formelement" style="float: left; margin-right: 0.5em; white-space: normal; ">\n					<input id="hide_transformation" name="hide_transformation" style="font-size: 1em; vertical-align: middle; " type="checkbox" /></div>\n				<div class="clearfloat" style="clear: both; ">\n					&nbsp;</div>\n			</fieldset>\n			<fieldset class="tblFooters" style="margin-top: 0px; border-top-color: initial; border-right-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-top-style: initial; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-top-width: 0px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; padding-top: 0.5em; padding-right: 0.5em; padding-bottom: 0.5em; padding-left: 0.5em; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(211, 220, 227); color: rgb(0, 0, 0); margin-bottom: 0.5em; text-align: right; float: none; clear: both; ">\n				<input style="font-size: 1em; vertical-align: middle; " type="submit" value="Go" /></fieldset>\n		</div>\n	</div>\n</form>\n<form action="http://localhost/phpmyadmin/tbl_row_action.php" id="rowsDeleteForm" method="post" name="rowsDeleteForm" style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; display: inline; ">\n	<table class="data" id="table_results">\n		<thead>\n			<tr>\n				<th colspan="3" style="font-weight: bold; color: rgb(0, 0, 0); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(211, 220, 227); padding-top: 0.1em; padding-right: 0.5em; padding-bottom: 0.1em; padding-left: 0.5em; margin-top: 0.1em; margin-right: 0.1em; margin-bottom: 0.1em; margin-left: 0.1em; vertical-align: top; background-position: initial initial; background-repeat: initial initial; ">\n					&nbsp;</th>\n				<th style="font-weight: bold; color: rgb(0, 0, 0); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(211, 220, 227); padding-top: 0.1em; padding-right: 0.5em; padding-bottom: 0.1em; padding-left: 0.5em; margin-top: 0.1em; margin-right: 0.1em; margin-bottom: 0.1em; margin-left: 0.1em; vertical-align: top; background-position: initial initial; background-repeat: initial initial; ">\n					id</th>\n				<th style="font-weight: bold; color: rgb(0, 0, 0); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(211, 220, 227); padding-top: 0.1em; padding-right: 0.5em; padding-bottom: 0.1em; padding-left: 0.5em; margin-top: 0.1em; margin-right: 0.1em; margin-bottom: 0.1em; margin-left: 0.1em; vertical-align: top; background-position: initial initial; background-repeat: initial initial; ">\n					title</th>\n				<th style="font-weight: bold; color: rgb(0, 0, 0); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(211, 220, 227); padding-top: 0.1em; padding-right: 0.5em; padding-bottom: 0.1em; padding-left: 0.5em; margin-top: 0.1em; margin-right: 0.1em; margin-bottom: 0.1em; margin-left: 0.1em; vertical-align: top; background-position: initial initial; background-repeat: initial initial; ">\n					content</th>\n				<th style="font-weight: bold; color: rgb(0, 0, 0); background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(211, 220, 227); padding-top: 0.1em; padding-right: 0.5em; padding-bottom: 0.1em; padding-left: 0.5em; margin-top: 0.1em; margin-right: 0.1em; margin-bottom: 0.1em; margin-left: 0.1em; vertical-align: top; background-position: initial initial; background-repeat: initial initial; ">\n					publish_date</th>\n			</tr>\n		</thead>\n		<tbody>\n			<tr class="odd" style="background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(229, 229, 229); text-align: left; background-position: initial initial; background-repeat: initial initial; ">\n				<td align="center" style="padding-top: 0.1em; padding-right: 0.5em; padding-bottom: 0.1em; padding-left: 0.5em; margin-top: 0.1em; margin-right: 0.1em; margin-bottom: 0.1em; margin-left: 0.1em; vertical-align: top; ">\n					<input id="id_rows_to_delete0" name="rows_to_delete[%60ch_article%60.%60id%60+%3D+1]" style="font-size: 1em; vertical-align: middle; " type="checkbox" value="DELETE FROM `chordeo`.`ch_article` WHERE `ch_article`.`id` = 1" /></td>\n				<td align="center" style="padding-top: 0.1em; padding-right: 0.5em; padding-bottom: 0.1em; padding-left: 0.5em; margin-top: 0.1em; margin-right: 0.1em; margin-bottom: 0.1em; margin-left: 0.1em; vertical-align: top; ">\n					<a href="http://localhost/phpmyadmin/tbl_change.php?db=chordeo&amp;table=ch_article&amp;primary_key=%60ch_article%60.%60id%60+%3D+1&amp;clause_is_unique=1&amp;sql_query=SELECT+%2A+FROM+%60ch_article%60&amp;goto=sql.php&amp;token=2e5e78bf4c466e975fe06d6a73e2453d" style="text-decoration: none; color: rgb(0, 0, 255); "><img alt="Edit" class="icon" height="16" src="http://localhost/phpmyadmin/themes/original/img/b_edit.png" style="vertical-align: middle; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; margin-right: 0px; margin-left: 0px; margin-top: 0px; margin-bottom: 0px; " title="Edit" width="16" /></a></td>\n				<td align="center" style="padding-top: 0.1em; padding-right: 0.5em; padding-bottom: 0.1em; padding-left: 0.5em; margin-top: 0.1em; margin-right: 0.1em; margin-bottom: 0.1em; margin-left: 0.1em; vertical-align: top; ">\n					<a href="http://localhost/phpmyadmin/sql.php?db=chordeo&amp;table=ch_article&amp;sql_query=DELETE+FROM+%60chordeo%60.%60ch_article%60+WHERE+%60ch_article%60.%60id%60+%3D+1&amp;zero_rows=The+row+has+been+deleted&amp;goto=sql.php%3Fdb%3Dchordeo%26table%3Dch_article%26sql_query%3DSELECT%2B%252A%2BFROM%2B%2560ch_article%2560%26zero_rows%3DThe%2Brow%2Bhas%2Bbeen%2Bdeleted%26goto%3Dtbl_structure.php%26token%3D2e5e78bf4c466e975fe06d6a73e2453d&amp;token=2e5e78bf4c466e975fe06d6a73e2453d" style="text-decoration: none; color: rgb(0, 0, 255); "><img alt="Delete" class="icon" height="16" src="http://localhost/phpmyadmin/themes/original/img/b_drop.png" style="vertical-align: middle; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; margin-right: 0px; margin-left: 0px; margin-top: 0px; margin-bottom: 0px; " title="Delete" width="16" /></a></td>\n				<td align="right" class="nowrap" style="padding-top: 0.1em; padding-right: 0.5em; padding-bottom: 0.1em; padding-left: 0.5em; margin-top: 0.1em; margin-right: 0.1em; margin-bottom: 0.1em; margin-left: 0.1em; vertical-align: top; ">\n					1</td>\n				<td style="padding-top: 0.1em; padding-right: 0.5em; padding-bottom: 0.1em; padding-left: 0.5em; margin-top: 0.1em; margin-right: 0.1em; margin-bottom: 0.1em; margin-left: 0.1em; vertical-align: top; ">\n					how to use</td>\n				<td style="padding-top: 0.1em; padding-right: 0.5em; padding-bottom: 0.1em; padding-left: 0.5em; margin-top: 0.1em; margin-right: 0.1em; margin-bottom: 0.1em; margin-left: 0.1em; vertical-align: top; ">\n					&lt;p&gt;<br />\n					&nbsp;&nbsp;&nbsp;&amp;nbsp;&lt;/p&gt;<br />\n					&lt;p style=&quot;line-height: 1.5em; marg...</td>\n				<td align="right" class="nowrap" style="padding-top: 0.1em; padding-right: 0.5em; padding-bottom: 0.1em; padding-left: 0.5em; margin-top: 0.1em; margin-right: 0.1em; margin-bottom: 0.1em; margin-left: 0.1em; vertical-align: top; ">\n					2011-10-26 04:36:23</td>\n			</tr>\n		</tbody>\n	</table>\n	<img alt="With selected:" class="selectallarrow" height="22" src="http://localhost/phpmyadmin/themes/original/img/arrow_ltr.png" style="vertical-align: middle; margin-right: 0.3em; margin-left: 0.6em; " width="38" />&nbsp;<a href="http://localhost/phpmyadmin/sql.php?db=chordeo&amp;table=ch_article&amp;sql_query=SELECT+%2A+FROM+%60ch_article%60&amp;goto=tbl_structure.php&amp;checkall=1&amp;token=2e5e78bf4c466e975fe06d6a73e2453d" style="text-decoration: none; color: rgb(0, 0, 255); ">Check All</a>&nbsp;/&nbsp;<a href="http://localhost/phpmyadmin/sql.php?db=chordeo&amp;table=ch_article&amp;sql_query=SELECT+%2A+FROM+%60ch_article%60&amp;goto=tbl_structure.php&amp;token=2e5e78bf4c466e975fe06d6a73e2453d" style="text-decoration: none; color: rgb(0, 0, 255); ">Uncheck All</a>&nbsp;<i>With selected:</i>&nbsp;<button class="mult_submit" name="submit_mult" style="display: inline; vertical-align: middle; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-width: initial; border-color: initial; background-color: transparent; " title="Change" type="submit" value="Change"><img alt="Change" class="icon" height="16" src="http://localhost/phpmyadmin/themes/original/img/b_edit.png" style="vertical-align: middle; margin-right: 0.3em; margin-left: 0.3em; " title="Change" width="16" /></button>&nbsp;<button class="mult_submit" name="submit_mult" style="display: inline; vertical-align: middle; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-width: initial; border-color: initial; background-color: transparent; " title="Delete" type="submit" value="Delete"><img alt="Delete" class="icon" height="16" src="http://localhost/phpmyadmin/themes/original/img/b_drop.png" style="vertical-align: middle; margin-right: 0.3em; margin-left: 0.3em; " title="Delete" width="16" /></button>&nbsp;<button class="mult_submit" name="submit_mult" style="display: inline; vertical-align: middle; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-width: initial; border-color: initial; background-color: transparent; " title="Export" type="submit" value="Export"><img alt="Export" class="icon" height="16" src="http://localhost/phpmyadmin/themes/original/img/b_tblexport.png" style="vertical-align: middle; margin-right: 0.3em; margin-left: 0.3em; " title="Export" width="16" /></button></form>\n<br />\n<table border="0" cellpadding="2" cellspacing="0">\n	<tbody>\n		<tr>\n			<td style="padding-top: 0.1em; padding-right: 0.5em; padding-bottom: 0.1em; padding-left: 0.5em; margin-top: 0.1em; margin-right: 0.1em; margin-bottom: 0.1em; margin-left: 0.1em; vertical-align: top; ">\n				&nbsp;&nbsp;&nbsp;</td>\n			<td align="center" style="padding-top: 0.1em; padding-right: 0.5em; padding-bottom: 0.1em; padding-left: 0.5em; margin-top: 0.1em; margin-right: 0.1em; margin-bottom: 0.1em; margin-left: 0.1em; vertical-align: top; ">\n				<form action="http://localhost/phpmyadmin/sql.php" method="post" style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; display: inline; ">\n					<input name="navig" style="font-size: 1em; vertical-align: middle; " type="submit" value="Show :" />&nbsp;<input class="textfield" name="session_max_rows" size="3" style="font-size: 1em; vertical-align: middle; " type="text" value="30" />&nbsp;row(s) starting from record #&nbsp;<input class="textfield" name="pos" size="6" style="font-size: 1em; vertical-align: middle; " type="text" value="0" />&nbsp;<br />\n					in&nbsp;<select name="disp_direction" style="font-size: 1em; vertical-align: middle; ">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<option selected="selected" value="horizontal">horizontal</option>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<option value="horizontalflipped">horizontal (rotated headers)</option>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<option value="vertical">vertical</option>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</select>&nbsp;mode and repeat headers after&nbsp;<input class="textfield" name="repeat_cells" size="3" style="font-size: 1em; vertical-align: middle; " type="text" value="100" />&nbsp;cells</form>\n			</td>\n			<td style="padding-top: 0.1em; padding-right: 0.5em; padding-bottom: 0.1em; padding-left: 0.5em; margin-top: 0.1em; margin-right: 0.1em; margin-bottom: 0.1em; margin-left: 0.1em; vertical-align: top; ">\n				&nbsp;&nbsp;&nbsp;<br />\n				&nbsp;</td>\n		</tr>\n	</tbody>\n</table>\n<p>\n	&nbsp;</p>\n', '2011-10-26 04:42:46'),
(3, 'wow', '<p>\n	Tes</p>\n<ol>\n	<li>\n		aianodig</li>\n	<li>\n		asdgasd</li>\n</ol>\n<ul>\n	<li>\n		asdgasdg</li>\n	<li>\n		asdgasdghas</li>\n</ul>\n<p>\n	&trade;asdg</p>\n<blockquote>\n	<p>\n		asdgasdgasdgasd<span style="background-color:lime;">adgasdg</span></p>\n</blockquote>\n', '2011-10-26 04:45:34');

-- --------------------------------------------------------

--
-- Table structure for table `ch_categories`
--

CREATE TABLE IF NOT EXISTS `ch_categories` (
  `cat_id` int(5) NOT NULL AUTO_INCREMENT,
  `category` varchar(20) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ch_categories`
--

INSERT INTO `ch_categories` (`cat_id`, `category`) VALUES
(1, 'Design'),
(2, 'Engineering'),
(3, 'Social');

-- --------------------------------------------------------

--
-- Table structure for table `ch_donations`
--

CREATE TABLE IF NOT EXISTS `ch_donations` (
  `donation_id` int(5) NOT NULL AUTO_INCREMENT,
  `amount` varchar(50) NOT NULL,
  `time` date NOT NULL,
  `reward_status` varchar(30) NOT NULL,
  `donation_status` varchar(30) NOT NULL DEFAULT 'pending',
  `bank_transfer` varchar(10) NOT NULL,
  `user_id` int(5) NOT NULL,
  `project_id` int(3) NOT NULL,
  PRIMARY KEY (`donation_id`),
  KEY `fk_ch_donations_ch_user1` (`user_id`),
  KEY `fk_ch_donations_ch_project1` (`project_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ch_donations`
--

INSERT INTO `ch_donations` (`donation_id`, `amount`, `time`, `reward_status`, `donation_status`, `bank_transfer`, `user_id`, `project_id`) VALUES
(1, '200000', '2011-10-23', 'pending', 'pending', '', 3, 1),
(2, '50000000', '2011-10-23', 'pending', 'true', '', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ch_email`
--

CREATE TABLE IF NOT EXISTS `ch_email` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  `dates` date NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `ch_email`
--

INSERT INTO `ch_email` (`id`, `email`, `dates`, `ip_address`) VALUES
(10, 'irham.nurhalim3@comlabs.itb.ac.id', '2011-08-18', ''),
(11, 'admin@chordeo.com', '2011-08-18', '::1'),
(12, 'admin@comlabs.itb.ac.id', '2011-08-18', '::1'),
(13, 'irham.nurhalim@gmail.com', '2011-08-18', '::1'),
(14, 'nurhalim@comlabs.itb.ac.id', '2011-08-18', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `ch_project`
--

CREATE TABLE IF NOT EXISTS `ch_project` (
  `project_id` int(3) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(100) NOT NULL,
  `pending_summary` text NOT NULL,
  `project_location` varchar(100) NOT NULL,
  `project_detail` text NOT NULL,
  `category` varchar(20) NOT NULL,
  `amount_funding` int(10) NOT NULL,
  `funding_duration` int(10) NOT NULL,
  `project_reward` varchar(30) NOT NULL,
  `funding_status` varchar(30) NOT NULL,
  `project_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `project_status` varchar(20) NOT NULL,
  `project_image` varchar(45) DEFAULT NULL,
  `project_video` varchar(45) DEFAULT NULL,
  `project_home` text,
  `project_update` text,
  `project_user_id` int(5) NOT NULL,
  `featured` int(1) NOT NULL,
  PRIMARY KEY (`project_id`),
  KEY `fk_ch_project_ch_user` (`project_user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ch_project`
--

INSERT INTO `ch_project` (`project_id`, `project_name`, `pending_summary`, `project_location`, `project_detail`, `category`, `amount_funding`, `funding_duration`, `project_reward`, `funding_status`, `project_time`, `project_status`, `project_image`, `project_video`, `project_home`, `project_update`, `project_user_id`, `featured`) VALUES
(1, 'Replace public space lighting with energy saving LED', 'Pending detail', 'Bandung', 'Most public space nowadays use flourescent lamp that takes about 30 watt/lamp. An LED lamp only takes about 10 watt and has a longer lifespan. This makes LED a solution to more sustainable environment. Therefore, the initial cost to replace flourescent to LED is not cheap. Here, we need your help.', 'engineering', 100000000, 90, '', '47', '2011-11-09 12:25:25', 'pending', 'box_image.png', 'locNEna0of4', '<p>I was at the station on my way home when I overheard the conversation between the\r\nmanager of the City Station and a person that seems to be an electrician. The manager \r\nwas quite upset because of the operational cost of the lighting there, which was suprisingly\r\nexpensive. Hearing that, I suddenly remembered that there is a technology that couldsolve \r\nthat problem. A technology called LED lamp, which uses much less power than common \r\nflourescent lamp and much more sustainable too.</p>\r\n		<center><img src="assets/images/activity_image1.png"></center>\r\n		<p>(Above picture) This Phillips LED light bulb only consumes 2 Watt. Ten times less power \r\nthan ordinary light bulb.  \r\nWe need your help to raise IDR 100.000.000,- to replace the lightning in City Station to \r\nLED. In return, we have several reward we will give you as our sign of gratitude (please \r\nlook at the right side of this page for details).\r\n\r\nHopefully, this could inspire other public places to do the same. Thank you for your help!</p>', NULL, 1, 1),
(2, 'Replace public space lighting with energy saving LED 2', 'Pending', 'Jakarta', 'Most public space nowadays use flourescent lamp that takes about 30 watt/lamp. An LED lamp only takes about 10 watt and has a longer lifespan. This makes LED a solution to more sustainable environment. Therefore, the initial cost to replace flourescent to LED is not cheap. Here, we need your help.', 'social', 50000000, 90, '', '70', '2011-11-09 12:25:25', 'true', 'box_image.png', '-tHoh2ilSQs', '<p>I was at the station on my way home when I overheard the conversation between the\r\nmanager of the City Station and a person that seems to be an electrician. The manager \r\nwas quite upset because of the operational cost of the lighting there, which was suprisingly\r\nexpensive. Hearing that, I suddenly remembered that there is a technology that couldsolve \r\nthat problem. A technology called LED lamp, which uses much less power than common \r\nflourescent lamp and much more sustainable too.</p>\r\n		<center><img src="assets/images/activity_image1.png"></center>\r\n		<p>(Above picture) This Phillips LED light bulb only consumes 2 Watt. Ten times less power \r\nthan ordinary light bulb.  \r\nWe need your help to raise IDR 100.000.000,- to replace the lightning in City Station to \r\nLED. In return, we have several reward we will give you as our sign of gratitude (please \r\nlook at the right side of this page for details).\r\n\r\nHopefully, this could inspire other public places to do the same. Thank you for your help!</p>', NULL, 2, 1),
(3, 'Replace public space lighting with energy saving LED', 'Pending detail', 'Bandung', 'Most public space nowadays use flourescent lamp that takes about 30 watt/lamp. An LED lamp only takes about 10 watt and has a longer lifespan. This makes LED a solution to more sustainable environment. Therefore, the initial cost to replace flourescent to LED is not cheap. Here, we need your help.', 'art', 100000000, 90, '', '47', '2011-11-09 12:25:25', 'true', 'box_image.png', '-tHoh2ilSQs', '<p>I was at the station on my way home when I overheard the conversation between the\r\nmanager of the City Station and a person that seems to be an electrician. The manager \r\nwas quite upset because of the operational cost of the lighting there, which was suprisingly\r\nexpensive. Hearing that, I suddenly remembered that there is a technology that couldsolve \r\nthat problem. A technology called LED lamp, which uses much less power than common \r\nflourescent lamp and much more sustainable too.</p>\r\n		<center><img src="assets/images/activity_image1.png"></center>\r\n		<p>(Above picture) This Phillips LED light bulb only consumes 2 Watt. Ten times less power \r\nthan ordinary light bulb.  \r\nWe need your help to raise IDR 100.000.000,- to replace the lightning in City Station to \r\nLED. In return, we have several reward we will give you as our sign of gratitude (please \r\nlook at the right side of this page for details).\r\n\r\nHopefully, this could inspire other public places to do the same. Thank you for your help!</p>', NULL, 1, 1),
(4, '', '', '', '', '', 0, 0, '', '', '2011-11-09 12:26:27', '', NULL, NULL, NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ch_projectcomment`
--

CREATE TABLE IF NOT EXISTS `ch_projectcomment` (
  `id` int(5) NOT NULL,
  `project_id` int(5) NOT NULL,
  `userid_comment` int(5) NOT NULL,
  `title_comment` varchar(100) NOT NULL,
  `content_comment` text NOT NULL,
  `timedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ch_projectcomment`
--

INSERT INTO `ch_projectcomment` (`id`, `project_id`, `userid_comment`, `title_comment`, `content_comment`, `timedate`) VALUES
(1, 1, 1, 'Comment', 'Ini commentar .. comment', '2011-11-04 11:01:04'),
(2, 1, 2, 'Komentar 2', 'Ini commentar .. comment', '2011-11-04 11:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `ch_projectreward`
--

CREATE TABLE IF NOT EXISTS `ch_projectreward` (
  `project_id` int(2) NOT NULL,
  `reward_1` text NOT NULL,
  `reward_2` text NOT NULL,
  `reward_3` text NOT NULL,
  `reward_4` text NOT NULL,
  `reward_5` text NOT NULL,
  `count_1` int(3) DEFAULT '0',
  `count_2` int(3) DEFAULT '0',
  `count_3` int(3) DEFAULT '0',
  `count_4` int(3) DEFAULT '0',
  `count_5` int(3) DEFAULT '0',
  PRIMARY KEY (`project_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ch_projectreward`
--

INSERT INTO `ch_projectreward` (`project_id`, `reward_1`, `reward_2`, `reward_3`, `reward_4`, `reward_5`, `count_1`, `count_2`, `count_3`, `count_4`, `count_5`) VALUES
(1, 'Your name will be mentioned as a donators in our website .', 'Your name will be mentioned as a donators in our website .', 'You will get a Phillips LED light bulb and your name will be written in the monument for this project. ', 'You''ll get two Phillips LED light bulb, your name will be written in the monument of the project. And we will invite you to the reopening of the station as a VIP. ', 'You''ll get two Phillips LED light bulb, your name will be written in the monument of the project. And we will invite you to the reopening of the station as a VIP. Plus an award given by The Minister of Transportation.\r\n', 4, 1, 20, 5, 6),
(2, 'Your name will be mentioned as a donators in our website .', 'You''ll get our thankyou e-mail. ', 'You''ll get two Phillips LED light bulb, your name will be written in the monument of the project. And we will invite you to the reopening of the station as a VIP. ', 'You''ll get two Phillips LED light bulb, your name will be written in the monument of the project. And we will invite you to the reopening of the station as a VIP. Plus an award given by The Minister of Transportation.\r\n', 'You will get a Phillips LED light bulb and your name will be written in the monument for this project. ', 1, 5, 12, 16, 73);

-- --------------------------------------------------------

--
-- Table structure for table `ch_projectupdate`
--

CREATE TABLE IF NOT EXISTS `ch_projectupdate` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_title` varchar(200) NOT NULL,
  `update_content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ch_projectupdate`
--

INSERT INTO `ch_projectupdate` (`id`, `project_id`, `datetime`, `update_title`, `update_content`) VALUES
(1, 1, '2011-11-04 10:01:38', 'How to update', 'Update content'),
(2, 2, '2011-11-09 12:57:00', 'tes', '<p>\n	tes</p>\n'),
(3, 2, '2011-11-09 12:58:47', 'asdgas', '<p>\n	adfgdafg</p>\n'),
(4, 2, '2011-11-09 12:59:16', 'DONATE IDR 1.000.000,- OR MORE ', '<p>\n	You&#39;ll get two Phillips LED light bulb, your name will be written in the monument of the project. And we will invite you to the reopening of the station as a VIP. Plus an award given by The Minister of Transportation.</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `ch_sessions`
--

CREATE TABLE IF NOT EXISTS `ch_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ch_sessions`
--


-- --------------------------------------------------------

--
-- Table structure for table `ch_user`
--

CREATE TABLE IF NOT EXISTS `ch_user` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `avatar` varchar(100) DEFAULT 'profile.png',
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `bio` text,
  `website` varchar(30) NOT NULL,
  `location` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ch_user`
--

INSERT INTO `ch_user` (`user_id`, `avatar`, `username`, `email`, `name`, `bio`, `website`, `location`, `password`, `type`) VALUES
(1, 'profile.png', 'nicholas', 'nicholas@gmail.com', 'Nicholas Putra', 'Nicola Tesla is a cool boy. A really cool guy.', '', 'Bandung', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'user'),
(2, 'profile.png', 'abang', 'abang@gmail.com', 'Abang Gajah', 'Abang tea mantap', '', 'Garut', '09d7559f4aafa49c8bca374142a7eb0602909ed4', 'user'),
(3, 'profile.png', 'richad.branson', 'richard.branson@gmail.com', 'Richard Branson', 'Richard', '', 'Surabaya', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `ch_websetting`
--

CREATE TABLE IF NOT EXISTS `ch_websetting` (
  `site_url` varchar(50) NOT NULL,
  `maintenance` int(1) NOT NULL,
  `type` varchar(12) NOT NULL,
  `about_chordeo` text NOT NULL,
  `contact_us` text NOT NULL,
  `faq_help` text NOT NULL,
  `policy` text NOT NULL,
  `term_of_use` text NOT NULL,
  `facebook` varchar(45) NOT NULL,
  `twitter` varchar(45) NOT NULL,
  `video` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ch_websetting`
--

INSERT INTO `ch_websetting` (`site_url`, `maintenance`, `type`, `about_chordeo`, `contact_us`, `faq_help`, `policy`, `term_of_use`, `facebook`, `twitter`, `video`) VALUES
('localhost/chordeo', 0, '', '<p> Our main goal in Chordeo is to help people in the developing world reach a better quality of life. In order to do that, we connect people with ideas and innovations, but no resources to carry them out with, with people who are itching to help and contribute for a better society. </p>\r\n<p>We are basically a funding service. Our target is to be the catalyst for social change in the developing world. We are currently a team of five people based in Bandung, West Java, Indonesia. Through our service, we want to create a community of innovators and doers as well as a community of givers. We believe that change done in this fashion, or what we call &ldquo;People Powered Change&rdquo;, is the best way to improve the quality of life in the developing world. </p>\r\n<p>We can&rsquo;t wait to hear about all your brilliant ideas. So, we encourage you to start sharing your ideas and projects as well as support others in their ventures. Together, we can change the world for the better!</p>\r\n', '<p>T : twitter.com/chordeo</p>\r\n<p>F : facebook.com/chordeo</p>\r\n<p>B : blog.chordeo.com</p>\r\n<p>E : support@chordeo.com</p>\r\n', '<ol>\r\n  <li><strong>Apa itu Chordeo?</strong></li>\r\n</ol>\r\n<p>Chordeo ada sebuah platform pendanaan massal atau <em>crowdfunding</em> untuk proyek-proyek maupun ide-ide kreatif, inovatif, dan berdampak positif bagi perkembangan Indonesia. Kita dibentuk untuk mendukung kegiatan artis, musisi, cineas, atlet, entrepreneur, inovator, insinyur, software developers, mahasiswa, dan semua orang yang memiliki ide atau proyek yang dapat berkontribusi dalam membangun dan memajukan Indonesia.</p>\r\n<ol start="2">\r\n  <li><strong>Apa itu Crowdfunding?</strong></li>\r\n</ol>\r\n<p>Crowdfunding adalah sebuah usaha kolaborasi dimana orang-orang mengumpulkan dana bersama-sama, biasanya lewat internet, untuk mendukung usaha yang diajukan oleh seseorang, sekelompok orang, atau sebuah organisasi.</p>\r\n<ol start="3">\r\n  <li><strong>Bagaimana Chordeo Bekerja?</strong></li>\r\n</ol>\r\n<p>Chordeo memungkinkan seseorang, sekelompok orang, atau sebuah organisasi untuk mengumpulkan dana demi mengsukseskan proyek atau ide yang sedang dikerjakan. Setiap proyek memiliki sebuah target pendanaan (jumlah dana yang dibutuhkan), waktu pendanaan (dari 1 – 90 hari), dan hadiah-hadiah yang harus diberikan ke para pendukung proyek. Semua ini ditentukan oleh pemilik proyek. Di masa pendanaan ini, pemiliki proyek menyebarkan idenya ke seluruh penggemar, teman, keluarga, sponsor, dan lainnya untuk menjadi pendukungnya. Selengkapnya dapat dilihat pada <strong>flowchart chordeo***</strong>!</p>\r\n<p><strong>*** link ke pdf flowchart chordeo</strong></p>\r\n<ol start="4">\r\n  <li><strong>Apa yang terjadi ketika sebuah proyek mencapai batas waktu pendanaan?</strong></li>\r\n</ol>\r\n<p>Ada 2 skenario yang dapat terjadi ketika sebuah proyek mencapai batas waktu pendanaan.</p>\r\n<ul>\r\n  <li>Pendanaan Sukses</li>\r\n</ul>\r\n<p>Pendanaan sukses ketika target pendanaan tercapai pada saat waktu pendanaan habis. Setelah itu, dana yang terkumpul diberikan langsung kepada pemilik proyek. Pemilik proyek bertanggung jawab untuk menyelesaikan proyeknya dan memberikan hadiah kepada para pendukungnya sesuai dengan tawarannya di awal proyek.</p>\r\n<ul>\r\n  <li>Pendanaan Gagal</li>\r\n</ul>\r\n<p>Pendanaan gagal ketika target pendanaan tidak tercapai pada saat waktu pendanaan habis. Semua dana yang terkumpul dikembalikan seluruhnya kepada para pendukungnya.</p>\r\n<ol start="5">\r\n  <li><strong>Apa itu &ldquo;All or Nothing&rdquo;?</strong></li>\r\n</ol>\r\n<p>Semua proyek Chordeo bersifat <em>All or Nothing</em>. Artinya, jika target pendanaan tidak tercapai pada saat waktu pendanaan habis, tidak ada dana yang berpindah tangan. Semua dana yang telah terkumpul dikembalikan kepada para pendukung proyek tersebut.</p>\r\n<ol start="6">\r\n  <li><strong>Apakah Chordeo mengambil biaya untuk jasanya?</strong></li>\r\n</ol>\r\n<p>Semua biaya berlaku hanya untuk proyek-proyek yang sukses.<br>\r\nRincian biaya sebagai berikut:</p>\r\n<ol start="7">\r\n  <li><strong>Nunggu kesepakatan dengan jasa keuangan</strong></li>\r\n</ol>\r\n<p>Membuat proyek gratis. Menjadi pendukung proyek juga gratis.</p>\r\n<ol start="8">\r\n  <li><strong>Proyek-proyek yang dikerjakan jadi milik siapa?</strong></li>\r\n</ol>\r\n<p>Semua proyek 100% milik pembuat proyek. Ini termasuk Hak Kekayaan Intelektual (HAKI)</p>\r\n<ol start="9">\r\n  <li><strong>Apa peran <em>Hadiah </em>atau <em>Reward</em> di jasa Chordeo?</strong></li>\r\n</ol>\r\n<p>Hadiah diadakan untuk menarik orang-orang untuk menjadi pendukung sebuah proyek. Pembuat proyek dapat membuat berbagai jenis hadiah untuk jumlah dukungan dana yang berbeda. Contohnya, seorang pendukung yang memberikan dukungan Rp 10.000 mendapat hadiah ucapan terima kasih lewat email sedangkan pendukung yang memberikan dukungan Rp 20.000 mendapat sebuah gantungan kunci. Selain itu, jumlah hadiah yang diberikan juga dapat dibatasi. Contohnya, hadiah gantungan kunci tadi hanya berlaku untuk 50 orang pendukung. </p>\r\n<ol start="10">\r\n  <li><strong>Apa saja yang dapat menjadi hadiah?</strong></li>\r\n</ol>\r\n<p>Buat hadiah proyek kalian semenarik mungkin tapi pastikan bahwa kalian mampu untuk memberikan hadiah tersebut kepada para pendukung proyek kalian.</p>\r\n<ol start="11">\r\n  <li><strong>Siapa yang tanggung jawab untuk mengirim hadiah-hadiah?</strong></li>\r\n</ol>\r\n<p>Pemilik proyek bertanggung jawab penuh atas pengiriman hadiah-hadiah yang ditentukan. Chordeo hanya menyediakan platform untuk memfasilitasi fitur hadiah tersebut.</p>\r\n<ol start="12">\r\n  <li><strong>Apa itu target pendanaan dan waktu pendanaan?</strong></li>\r\n</ol>\r\n<p>Target pendanaan adalah jumlah dana yang dibutuhkan untuk menyelesaikan sebuah proyek. Waktu pendanaan adalah batas waktu yang diberikan untuk mengumpulkan dana untuk suatu proyek. Waktu pendanaan dibatasi maksimal 90 hari.</p>\r\n<ol start="13">\r\n  <li><strong>Apa yang bisa menjadi proyek?</strong></li>\r\n</ol>\r\n<p>Lihat <strong>project guidelines </strong>untuk mengetahui ide apa saja yang dapat menjadi proyek di Chordeo</p>\r\n<p>***link ke <strong>project guidelines</strong></p>\r\n<ol start="14">\r\n  <li><strong>Siapa saja yang dapat mendukung sebuah proyek?</strong></li>\r\n</ol>\r\n<p>Siapapun dapat mendukung proyek kalian, bahkan mereka yang tinggal di luar Indonesia. Mereka hanya perlu register menjadi pengguna Chordeo.</p>\r\n<ol start="15">\r\n  <li><strong>Apakah sebuah proyek dapat diedit setelah proyek dimulai?</strong></li>\r\n</ol>\r\n<p>Informasi tentang sebuah proyek dapat diubah oleh pemilik proyek. Namun, judul proyek, waktu dan target pendanaan, serta hadiah-hadiah yang sudah dipilih oleh para pendukung tidak dapat diubah.</p>\r\n<ol start="16">\r\n  <li><strong>Apakah sebuah proyek dapat mengumpulkan dana lebih dari target pendanaannya?</strong></li>\r\n</ol>\r\n<p>Tentu saja, dukungan terhadap sebuah proyek berakhir hanya ketika waktu pendanaan berakhir.</p>\r\n<ol start="17">\r\n  <li><strong>Apa sih <em>Project Updates</em>?</strong></li>\r\n</ol>\r\n<p>Project Updates adalah sebuah fitur Chordeo yang digunakan oleh pemilik proyek untuk menceritakan progress proyek yang sedang dikerjakan kepada para pendukungnya.</p>\r\n<ol start="18">\r\n  <li><strong>Media apa saja yang dapat digunakan untuk informasi dan updates proyek?</strong></li>\r\n</ol>\r\n<p>Media yang digunakan untuk informasi atau updates proyek termasuk teks, gambar, maupun video.</p>\r\n<ol start="19">\r\n  <li><strong>Bolehkah saya menyebarkan proyek saya lewat social media?</strong></li>\r\n</ol>\r\n<p>Tentu saja, sebarkan proyekmu seluas dan sekreatif mungkin untuk  mendapatkan dukungan sebanyak-banyaknya. Social media tentu saja dapat mempercepat proses ini. Chordeo juga menyediakan widget proyek untuk website social media ternama.</p>\r\n', '<h2>Chordeo.com Privacy Policy</h2>\r\n<p>We respect your right to privacy. We will not give your name or personal information to third parties. All your transaction information is secured. Since transactions are made through direct transfers to Chordeo accounts, no passwords of any kind are necessary. Only your account and conformation numbers are needed, which, for security purposes will also be kept secured. Chordeo reserves the right to update this privacy policy at anytime. Updates to our privacy policy will be sent to the email address that you have provided us or posted on the website.</p>\r\n<h3>E-mail</h3>\r\n<p>E-mail will be the main method of communication between Chordeo and its users, both Project Creators and Supporters. We will keep these emails to a minimum. We will send you email relating to your personal transactions. We will also send e-mail when there are news or updates to the site. Project Creators receive the email addresses of their Supporters when the funding time is over.</p>\r\n<h3>Security &amp; Voluntary Disclosure</h3>\r\n<p>Chordeo uses <em>cookies</em> to help (anonymously) recognize you as a repeat visitor and to track traffic patterns on our site. We use this information to make Chordeo more user-friendly. Chordeo may obtain IP <em>addresses</em> from users. We will use this information to monitor and prevent fraud, diagnose problems, and estimate demographic information.</p>\r\n<p>We use a variety of security measures, including encryption and authentication tools, to maintain the confidentiality of your personal information. Your personal information is stored behind firewalls and is only accessible by a limited number of Chordeo staff who are trained to keep information confidential. When you place orders we use a secure server. All information you supply is transmitted via Secure Socket Layer (SSL) technology. However, no data transmission over the public Internet can be guaranteed to be 100% secure.</p>\r\n<p>Any personal information or content that you voluntarily disclose in public areas becomes publicly available and can be collected and used by other users. Exercise caution before disclosing your personal information via these public venues.</p>\r\n<h3>Project Creators</h3>\r\n<p>Chordeo Project Creators agree to not abuse other users'' personal information. Abuse is defined as using personal information for any purpose other than those explicitly specified in the project, or is not related to fulfilling delivery of a product or service explicitly specified in the project. Chordeo Project Creators never receive another users'' account information.</p>\r\n<h3>Rights and Responsibilities</h3>\r\n<p>We reserve the right to disclose your personal information as required by law and when we believe that disclosure is necessary to protect our rights, or in the good-faith belief that such action is necessary to comply with local and national laws (stated in U.U. Republik Indonesia).</p>\r\n<p>To modify or delete any or all of the personal information you have provided to us, please log in and update your profile.</p>\r\n<p>People under 18 are not permitted to use Chordeo on their own, and so this privacy policy makes no provision for their use of the site<em>.</em> <br>\r\n  If you have questions or suggestions you can contact us at: <a href="mailto:support@chordeo.com">support@chordeo.com</a></p>\r\n\r\n\r\n<h2>Kebijakan Privasi Chordeo.com</h2>\r\n<p>Kami menghargai hak privasi Anda. Kami tidak akan memberikan nama atau informasi personal lainnya kepada pihak ketiga. Semua informasi transaksi Anda terlindungi (<em>secured</em>). Karena transfer-transfer dilakukan melalui transfer langsung ke akun-akun Chordeo, tidak ada password personal yang dibutuhkan dalam kegiatan transfer. Hanya nomor akun dan konfirmasi transfer saja yang dibutuhkan dan informasi tersebut akan Kami jaga rahasia untuk keamanan informasi pengguna. Chordeo memiliki hak untuk memperbarui kebijakan privasi kapanpun dirasakan perlu dilakukan perubahan. Setiap perubahan yang dilakukan terhadap kebijakan privasi akan dikirimkan ke alamat email yang telah disertakan sebagai syarat pembuatan akun Chordeo.com.</p>\r\n<h3>E-mail</h3>\r\n<p>E-mail akan menjadi metode komunikasi utama antara Chordeo dan pengguna-penggunanya, baik Pemilik Proyek maupun Pendukung-pendukungnya. Kami akan menjaga jumlah e-mail ke masing-masing pengguna seminimal mungkin. Kami akan mengirim e-mail terkait transaksi-transaksi Anda. Kami akan mengirim pengumuman terkait pelayanan Chordeo pada saat terjadi perubahan atau <em>update</em>. Pemilik Proyek akan menerima alamat email Pendukung-pendukungnya pada saat masa pendanaan berakhir. </p>\r\n<h3>Keamanan &amp; Pengungkapan Sukarela</h3>\r\n<p>Chordeo menggunakan <em>cookies</em> untuk membantu (secara acak) mengidentifikasi Anda sebagai seorang pengunjung rutin dan untuk menganalisis pola <em>traffic </em>data di situs Kami. Kami menggunakan informasi ini untuk membuat situs Chordeo lebih <em>user-friendly.</em> Chordeo dapat melihat alamat IP dari pengguna-penggunanya. Kami akan menggunakan informasi ini untuk mengamati dan mencegah penipuan, mendiagnosa masalah-masalah teknis, dan memperkirakan data demografis pengguna. </p>\r\n<p>Kami menggunakan beberapa fitur keamanan, termasuk enkripsi dan alat pembuktian keaslian (<em>authentication tools)</em>. Informasi personal Anda dijaga oleh <em>firewall</em> dan hanya dapat diakses oleh staff-staff Chordeo yang diwajibkan untuk menjaga kerahasiaan informasi tersebut. Ketika Anda melakukan pemesanan atau transaksi, digunakan sebuah <em>secure server</em>. Transaksi tersebut dilakukan melalui teknologi Secure Socket Layer (SSL). <br>\r\n  Namun, transmisi melalui Internet secara umum tidak dapat dipastikan 100% aman. Kami di Chordeo berusaha untuk membuat transaksi Anda di situs seaman mungkin. Kami juga berusaha untuk selalu meningkatkan keamanan informasi Anda di Chordeo.com.</p>\r\n<p>Semua informasi personal yang disertakan secara sukarela di bagian publik dari Chordeo.com terbuka kepada publik dan dapat diambil oleh pengguna-pengguna lain secara sukarela. Berhati-hatilah pada saat menyertakan informasi-informasi personal di bagian-bagian publik tersebut. </p>\r\n<h3><strong>Pemilik Proyek</strong></h3>\r\n<p>Pemilik Proyek di Chordeo setuju untuk tidak menyalahgunakan informasi personal dari pengguna-pengguna lain. Penyalahgunaan didefinisikan sebagai penggunaan informasi personal untuk tujuan selain yang tertera pada proyek yang bersangkutan, atau tidak berhubungan dengan pengiriman produk atau servis yang tertera pada proyek. Pemilik Proyek di Chordeo tidak pernah menerima informasi akun pengguna lainnya. </p>\r\n<h3>Hak dan Kewajiban</h3>\r\n<p>Chordeo memiliki hak untuk mengungkapkan informasi personal pengguna sesuai dengan Undang-Undang dan ketika pengungkapan informasi dirasa perlu untuk menjaga hak Kami, atau dengan maksud baik hal tersebut dibutuhkan sesuai dengan Undang-Undang yang berlaku, baik secara lokal maupun nasional (sesuai dengan U.U. Republik Indonesia).</p>\r\n<p>Untuk mengganti atau menghapus informasi personal yang telah diberikan, log in dan lakukan perubahan terhadap profil Anda. </p>\r\n<p>Pengguna berusia kurang dari 18 tahun tidak diperbolehkan menggunakan Chordeo sendiri, dan kebijakan privasi tidak mengandung pengecualian untuk penggunaan situs oleh pengguna berusia kurang dari 18 tahun tersebut. <br>\r\n  Jika Anda punya pertanyaan atau saran, hubungi Kami di: <a href="mailto:support@chordeo.com">support@chordeo.com</a></p>\r\n', '<p>Term of Use</p>', 'http://www.facebook.com/chordeo', 'http://www.twitter.com/chordeo', 'AZvgs5PLUA0');
