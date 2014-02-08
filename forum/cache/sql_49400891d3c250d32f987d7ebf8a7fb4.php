<?php exit; ?>
1391846903
SELECT s.style_id, c.theme_id, c.theme_data, c.theme_path, c.theme_name, c.theme_mtime, i.*, t.template_path FROM phpbb_styles s, phpbb_styles_template t, phpbb_styles_theme c, phpbb_styles_imageset i WHERE s.style_id = 4 AND t.template_id = s.template_id AND c.theme_id = s.theme_id AND i.imageset_id = s.imageset_id
71209
a:1:{i:0;a:11:{s:8:"style_id";s:1:"4";s:8:"theme_id";s:1:"4";s:10:"theme_data";s:70825:"/*  phpBB3 Style Sheet
    --------------------------------------------------------------
	Style name:			prosilver (the default phpBB 3.0.x style)
	Based on style:		
	Original author:	Tom Beddard ( http://www.subblue.com/ )
	Modified by:		phpBB Group ( https://www.phpbb.com/ )
    --------------------------------------------------------------
*/

/* General Markup Styles
---------------------------------------- */
* {
  /* Reset browsers default margin, padding and font sizes */
  margin: 0;
  padding: 0; }

header, section, footer, aside, nav, article, hgroup {
  display: block; }

body {
  /* Text-Sizing with ems: http://www.clagnut.com/blog/348/ */
  font-family: Verdana, Helvetica, Arial, sans-serif;
  color: #828282;
  /*font-size: 62.5%;			 This sets the default font size to be equivalent to 10px */
  font-size: 10px;
  overflow: hidden; }

body, html {
  width: 100%;
  height: 100%; }

h1 {
  /* Forum name */
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  margin-right: 200px;
  color: #FFFFFF;
  margin-top: 15px;
  font-weight: bold;
  font-size: 2em; }

h2 {
  /* Forum header titles */
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  font-weight: normal;
  color: #3f3f3f;
  font-size: 2em;
  margin: 0.8em 0 0.2em 0; }

h2.solo {
  margin-bottom: 1em; }

h3 {
  /* Sub-headers (also used as post headers, but defined later) */
  font-family: Arial, Helvetica, sans-serif;
  font-weight: bold;
  text-transform: uppercase;
  border-bottom: 1px solid #CCCCCC;
  margin-bottom: 3px;
  padding-bottom: 2px;
  font-size: 1.05em;
  color: #989898;
  margin-top: 20px; }

h4 {
  /* Forum and topic list titles */
  font-family: "Trebuchet MS", Verdana, Helvetica, Arial, Sans-serif;
  font-size: 1.3em; }

p {
  line-height: 1.3em;
  font-size: 1.1em;
  margin-bottom: 1.5em; }

img {
  border-width: 0; }

hr {
  /* Also see tweaks.css */
  border: 0 none #FFFFFF;
  border-top: 1px solid #CCCCCC;
  height: 0;
  margin: 5px 0;
  display: block;
  clear: both; }

hr.dashed {
  margin: 10px 0; }

hr.divider {
  display: none; }

hr.separator {
  border: none; }

p.right {
  text-align: right; }

/* Main blocks
---------------------------------------- */
body > header {
  width: 100%;
  min-width: 860px;
  height: 40px;
  background: #fff;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  -webkit-text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
  -moz-text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
  -o-text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
  border-bottom: 2px solid #333333;
  position: absolute;
  top: 0;
  overflow: hidden;
  font-size: 1.2em; }

#wrapper2 {
  margin-left: calc(100% * 0.1);
  margin-left: -webkit-calc(100% * 0.1);
  margin-left: -moz-calc(100% * 0.1);
  float: left; }

#simple-wrap {
  width: 100%;
  height: 100%;
  overflow: auto; }
  #simple-wrap > div {
    padding: 6px 10px; }

#even-bigger-wrapper {
  width: 100%;
  height: calc(100% - 42px);
  margin-top: 42px;
  float: left;
  overflow: auto; }

#big-wrapper {
  width: 100%;
  height: 100%;
  min-width: 850px; }

#wrapper {
  width: 80%;
  padding-top: 20px;
  min-height: calc(100% - 80px);
  margin: 0 auto; }

#page-body {
  margin: 4px 0;
  clear: both; }

#big-wrapper > footer {
  width: 80%;
  margin: 0 auto;
  clear: both;
  border-top: 1px solid #333333;
  padding: 10px 0;
  min-height: 19px;
  max-height: 19px;
  text-align: center; }

.simple-copyright {
  text-align: center; }

#page-footer {
  clear: both; }

#page-footer h3 {
  margin-top: 20px; }

/* Top bar
--------------------------------------------- */
.site-logo {
  width: 30px;
  height: 30px;
  padding: 5px 5px 5px 0;
  display: inline-block;
  vertical-align: top; }

.menu {
  list-style: none;
  display: inline-block;
  vertical-align: top;
  padding-left: 0; }
  .menu li {
    display: inline-block; }
  .menu a {
    display: inline-block;
    line-height: 40px;
    padding: 0 10px;
    color: inherit; }
  .menu a:hover {
    cursor: pointer;
    background-color: #333333;
    color: #fff; }

.username {
  width: 250px;
  height: 40px;
  float: right;
  text-align: center;
  font-weight: bold; }
  .username div {
    height: 40px;
    max-width: 250px;
    margin: 0 auto;
    display: inline-block;
    padding: 0 5px; }
  .username div:hover {
    cursor: pointer;
    background-color: #333333;
    color: #fff; }
  .username div:hover span {
    text-decoration: underline; }
  .username span {
    line-height: 40px;
    vertical-align: top;
    padding-right: 5px; }
  .username img {
    image-rendering: optimizeSpeed;
    image-rendering: -moz-crisp-edges;
    image-rendering: -webkit-optimize-contrast;
    image-rendering: -o-crisp-edges;
    image-rendering: optimize-contrast;
    -ms-interpolation-mode: nearest-neighbor;
    width: 30px;
    height: 30px;
    padding: 5px; }

/* User sidebar
--------------------------------------------- */
#usr-nav {
  width: 250px;
  height: calc(100% - 42px);
  z-index: 100;
  overflow: auto;
  position: fixed;
  display: none;
  right: -250px;
  top: 42px;
  background: #4f4f4f;
  -webkit-box-shadow: -1px 0 1px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: -1px 0 1px rgba(0, 0, 0, 0.1);
  -o-box-shadow: -1px 0 1px rgba(0, 0, 0, 0.1);
  box-shadow: -1px 0 1px rgba(0, 0, 0, 0.1);
  color: #c9c9c9;
  line-height: 1.3em; }

#usr-nav hr {
  width: 100%;
  border: 0;
  height: 1px; }

.sep {
  background-color: #333333;
  -webkit-box-shadow: 0 1px 1px rgba(255, 255, 255, 0.05);
  -moz-box-shadow: 0 1px 1px rgba(255, 255, 255, 0.05);
  -o-box-shadow: 0 1px 1px rgba(255, 255, 255, 0.05);
  box-shadow: 0 1px 1px rgba(255, 255, 255, 0.05); }

#usr-nav-wrap {
  padding: 0 10px; }

.usr-nav-section {
  padding: 10px 0;
  width: 100%; }
  .usr-nav-section h3 {
    color: #e0e0e0;
    text-align: center;
    border: none;
    margin: 0;
    padding: 0; }
  .usr-nav-section ul {
    list-style: none;
    padding: 10px 0 0 0;
    text-align: left; }
  .usr-nav-section table {
    border-collapse: collapse;
    margin: 10px 0 0 0; }
  .usr-nav-section tr, .usr-nav-section table, .usr-nav-section tbody {
    width: 100%; }
  .usr-nav-section td {
    width: 50%; }
  .usr-nav-section a:link, .usr-nav-section a:visited, .usr-nav-section a:hover, .usr-nav-section a:active {
    color: #c9c9c9; }

.more {
  text-align: center;
  padding-top: 10px; }

.down-img {
  width: 7px;
  height: 7px; }

/* Page header
--------------------------------------------- */
.breadcrumbs {
  float: left;
  color: #333333;
  font-size: 0.9em;
  padding-bottom: 20px; }

.search-box {
  float: right;
  padding-bottom: 20px; }
  .search-box a {
    float: right; }

/* Postform (?)
--------------------------------------------- */
#postform {
  margin-top: 20px; }

/* Search box
--------------------------------------------- */
#search-box #keywords {
  width: 95px;
  background-color: #FFF; }

#search-box li {
  text-align: right;
  margin-top: 4px; }

#search-box img {
  vertical-align: middle;
  margin-right: 3px; }

/* Site description and logo */
#site-description {
  float: left;
  width: 70%; }

#site-description h1 {
  margin-right: 0; }

/* Round cornered boxes and backgrounds
---------------------------------------- */
.forumbg {
  margin-bottom: 4px;
  clear: both; }

.panel {
  margin-bottom: 4px; }

.post {
  margin-bottom: 10px;
  background-repeat: no-repeat;
  background-position: 100% 0; }

.post:target .content {
  color: #000000; }

.rowbg {
  margin: 5px 5px 2px 5px; }

.ucprowbg {
  background-color: #e2e2e2; }

.fieldsbg {
  background-color: #eaeaea; }

/* Horizontal lists
----------------------------------------*/
ul.linklist {
  display: block;
  margin: 0; }

ul.linklist li {
  display: block;
  list-style-type: none;
  float: left;
  width: auto;
  margin-right: 5px;
  font-size: 1.1em;
  line-height: 2.2em; }

ul.linklist li.rightside, p.rightside {
  float: right;
  margin-right: 0;
  margin-left: 5px;
  text-align: right; }

ul.navlinks {
  padding-bottom: 1px;
  margin-bottom: 1px; }

ul.leftside {
  float: left;
  margin-left: 0;
  margin-right: 5px;
  text-align: left; }

ul.rightside {
  float: right;
  margin-left: 5px;
  margin-right: -5px;
  text-align: right; }

/* Table styles
----------------------------------------*/
table.table1 {
  /* See tweaks.css */
  border-collapse: collapse; }

#ucp-main table.table1 {
  padding: 2px; }

table.table1 thead th {
  font-weight: normal;
  text-transform: uppercase;
  color: #FFFFFF;
  line-height: 1.3em;
  font-size: 1em;
  padding: 0 0 4px 3px; }

table.table1 thead th span {
  padding-left: 7px; }

table.table1 tbody tr:hover, table.table1 tbody tr.hover {
  background-color: #f6f6f6;
  color: #000; }

table.table1 td {
  color: #6a6a6a;
  font-size: 1.1em; }

table.table1 tbody td {
  padding: 5px;
  border-top: 1px solid #FAFAFA;
  border-bottom: 1px solid #FAFAFA; }

table.table1 tbody th {
  padding: 5px;
  border-bottom: 1px solid #000000;
  text-align: left;
  color: #333333;
  background-color: #FFFFFF; }

/* Specific column styles */
table.table1 .name {
  text-align: left; }

table.table1 .posts {
  text-align: center !important;
  width: 7%; }

table.table1 .joined {
  text-align: left;
  width: 15%; }

table.table1 .active {
  text-align: left;
  width: 15%; }

table.table1 .mark {
  text-align: center;
  width: 7%; }

table.table1 .info {
  text-align: left;
  width: 30%; }

table.table1 .info div {
  width: 100%;
  white-space: normal;
  overflow: hidden; }

table.table1 .autocol {
  line-height: 2em;
  white-space: nowrap; }

table.table1 thead .autocol {
  padding-left: 1em; }

table.table1 span.rank-img {
  float: right;
  width: auto; }

table.info td {
  padding: 3px; }

table.info tbody th {
  padding: 3px;
  text-align: right;
  vertical-align: top;
  color: #000000;
  font-weight: normal; }

.forumbg table.table1 {
  margin: 0; }

.forumbg-table > .inner {
  margin: 0 -1px; }

.forumbg-table > .inner > span.corners-top {
  margin: 0 -4px -1px -4px; }

.forumbg-table > .inner > span.corners-bottom {
  margin: -1px -4px 0 -4px; }

/* Misc layout styles
---------------------------------------- */
/* column[1-2] styles are containers for two column layouts 
   Also see tweaks.css */
.column1 {
  float: left;
  clear: left;
  width: 49%; }

.column2 {
  float: right;
  clear: right;
  width: 49%; }

/* General classes for placing floating blocks */
.left-box {
  float: left;
  width: auto;
  text-align: left; }

.right-box {
  float: right;
  width: auto;
  text-align: right; }

dl.details {
  /*font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;*/
  font-size: 1.1em;
  margin: 10px 0; }

dl.details dt {
  float: left;
  clear: left;
  width: 30%;
  text-align: right;
  color: #000000;
  display: block; }

dl.details dd {
  margin-left: 0;
  padding-left: 5px;
  margin-bottom: 5px;
  color: #828282;
  float: left;
  width: 65%; }

/* Pagination
---------------------------------------- */
.pagination {
  height: 1%;
  /* IE tweak (holly hack) */
  width: auto;
  text-align: right;
  margin-top: 5px;
  float: right; }

.pagination span.page-sep {
  display: none; }

li.pagination {
  margin-top: 0; }

.pagination strong, .pagination b {
  font-weight: normal; }

.pagination span strong {
  padding: 0 2px;
  margin: 0 2px;
  font-weight: normal;
  color: #FFFFFF;
  background-color: #bfbfbf;
  border: 1px solid #bfbfbf;
  font-size: 0.9em; }

.pagination span a, .pagination span a:link, .pagination span a:visited, .pagination span a:active {
  font-weight: normal;
  text-decoration: none;
  color: #747474;
  margin: 0 2px;
  padding: 0 2px;
  background-color: #eeeeee;
  border: 1px solid #bababa;
  font-size: 0.9em;
  line-height: 1.5em; }

.pagination span a:hover {
  border-color: #d2d2d2;
  background-color: #d2d2d2;
  color: #FFF;
  text-decoration: none; }

.pagination img {
  vertical-align: middle; }

/* Pagination in viewforum for multipage topics */
.row .pagination {
  display: block;
  float: right;
  width: auto;
  margin-top: 0;
  padding: 1px 0 1px 15px;
  font-size: 0.9em;
  background: none 0 50% no-repeat; }

/* Miscellaneous styles
---------------------------------------- */
#forum-permissions {
  float: right;
  width: auto;
  padding-left: 5px;
  margin-left: 5px;
  margin-top: 10px;
  text-align: right; }

.small {
  font-size: 0.9em !important; }

.titlespace {
  margin-bottom: 15px; }

.headerspace {
  margin-top: 20px; }

.error {
  color: #bcbcbc;
  font-weight: bold;
  font-size: 1em; }

.reported {
  background-color: #f7f7f7; }

li.reported:hover {
  background-color: #ececec; }

div.rules {
  background-color: #ececec;
  color: #bcbcbc;
  padding: 0 10px;
  margin: 10px 0;
  font-size: 1.1em; }

div.rules ul, div.rules ol {
  margin-left: 20px; }

p.rules {
  background-color: #ececec;
  background-image: none;
  padding: 5px; }

p.rules img {
  vertical-align: middle;
  padding-top: 5px; }

p.rules a {
  vertical-align: middle;
  clear: both; }

#top {
  position: absolute;
  top: -20px; }

.clear {
  display: block;
  clear: both;
  font-size: 1px;
  line-height: 1px;
  background: transparent; }
/* Link Styles
---------------------------------------- */

/* General */

a {
	text-decoration: none;
}
	
a:hover {
	text-decoration: underline;
}

/* Links adjustment to correctly display an order of rtl/ltr mixed content */
a {
	direction: ltr;
	unicode-bidi: embed;
}

/* Coloured usernames */
.username-coloured {
	font-weight: bold;
	display: inline !important;
	padding: 0 !important;
}

/* Links on gradient backgrounds */
#search-box a:link, .navbg a:link, .forumbg .header a:link, .forabg .header a:link, th a:link {
	color: #FFFFFF;
	text-decoration: none;
}

#search-box a:visited, .navbg a:visited, .forumbg .header a:visited, .forabg .header a:visited, th a:visited {
	color: #FFFFFF;
	text-decoration: none;
}

#search-box a:hover, .navbg a:hover, .forumbg .header a:hover, .forabg .header a:hover, th a:hover {
	color: #ffffff;
	text-decoration: underline;
}

#search-box a:active, .navbg a:active, .forumbg .header a:active, .forabg .header a:active, th a:active {
	color: #ffffff;
	text-decoration: none;
}

/* Links for forum/topic lists */
a.forumtitle {
	font-family: "Trebuchet MS", Helvetica, Arial, Sans-serif;
	font-size: 1.2em;
	font-weight: bold;
	color: #898989;
	text-decoration: none;
}

a.forumtitle:hover {
	color: #bcbcbc;
	text-decoration: underline;
}

a.forumtitle:active {
	color: #898989;
}

a.topictitle {
	font-family: "Trebuchet MS", Helvetica, Arial, Sans-serif;
	font-size: 1.2em;
	font-weight: bold;
}

/* Post body links */
.postlink {
	text-decoration: none;
	color: #d2d2d2;
	border-bottom: 1px solid #d2d2d2;
	padding-bottom: 0;
}

.postlink:active {
	color: #d2d2d2;
}

.postlink:hover {
	background-color: #f6f6f6;
	text-decoration: none;
	color: #404040;
}

.signature a, .signature a:visited, .signature a:hover, .signature a:active {
	border: none;
	text-decoration: underline;
	background-color: transparent;
}

/* Profile links */
.postprofile a:link, .postprofile a:visited, .postprofile dt.author a {
	font-weight: bold;
	text-decoration: none;
}

.postprofile a:hover, .postprofile dt.author a:hover {
	text-decoration: underline;
}

/* CSS spec requires a:link, a:visited, a:hover and a:active rules to be specified in this order. */
/* See http://www.phpbb.com/bugs/phpbb3/59685 */
.postprofile a:active {
	font-weight: bold;
	text-decoration: none;
}


/* Profile searchresults */	
.search .postprofile a {
	text-decoration: none; 
	font-weight: normal;
}

.search .postprofile a:hover {
	text-decoration: underline; 
}

/* Back to top of page */
.back2top {
	clear: both;
	height: 11px;
	text-align: right;
}

a.top {
	background: none no-repeat top left;
	text-decoration: none;
	width: {IMG_ICON_BACK_TOP_WIDTH}px;
	height: {IMG_ICON_BACK_TOP_HEIGHT}px;
	display: block;
	float: right;
	overflow: hidden;
	letter-spacing: 1000px;
	text-indent: 11px;
}

a.top2 {
	background: none no-repeat 0 50%;
	text-decoration: none;
	padding-left: 15px;
}

/* Arrow links  */
a.up		{ background: none no-repeat left center; }
a.down		{ background: none no-repeat right center; }
a.left		{ background: none no-repeat 3px 60%; }
a.right		{ background: none no-repeat 95% 60%; }

a.up, a.up:link, a.up:active, a.up:visited {
	padding-left: 10px;
	text-decoration: none;
	border-bottom-width: 0;
}

a.up:hover {
	background-position: left top;
	background-color: transparent;
}

a.down, a.down:link, a.down:active, a.down:visited {
	padding-right: 10px;
}

a.down:hover {
	background-position: right bottom;
	text-decoration: none;
}

a.left, a.left:active, a.left:visited {
	padding-left: 12px;
}

a.left:hover {
	background-position: 0 60%;
}

a.right, a.right:active, a.right:visited {
	padding-right: 12px;
}

a.right:hover {
	background-position: 100% 60%;
}

/* invisible skip link, used for accessibility  */
.skiplink {
	position: absolute;
	left: -999px;
	width: 990px;
}

/* Feed icon in forumlist_body.html */
a.feed-icon-forum {
	float: right;
	margin: 3px;
}
/* Content Styles
---------------------------------------- */
ul.topiclist {
  display: block;
  list-style-type: none;
  margin: 0; }

ul.topiclist li {
  display: block;
  list-style-type: none;
  color: #777777;
  margin: 0;
  border-bottom: 1px solid #777777; }

ul.topiclist dl {
  position: relative; }

ul.topiclist li.row dl {
  padding: 2px 0; }

ul.topiclist dt {
  display: block;
  float: left;
  width: 50%;
  font-size: 1.1em;
  padding-left: 5px;
  padding-right: 5px; }

ul.topiclist dd {
  display: block;
  float: left;
  padding: 4px 0; }

ul.topiclist dfn {
  /* Labels for post/view counts */
  position: absolute;
  left: -999px;
  width: 990px; }

ul.topiclist li.row dt a.subforum {
  background-image: none;
  background-position: 0 50%;
  background-repeat: no-repeat;
  position: relative;
  white-space: nowrap;
  padding: 0 0 0 12px; }

.forum-image {
  float: left;
  padding-top: 5px;
  margin-right: 5px; }

li.row strong {
  font-weight: normal;
  color: #000000; }

li.header dt, li.header dd {
  line-height: 1em;
  border-left-width: 0;
  margin: 2px 0 4px 0;
  color: #FFFFFF;
  padding-top: 2px;
  padding-bottom: 2px;
  font-size: 1em;
  font-family: Arial, Helvetica, sans-serif;
  text-transform: uppercase; }

li.header dt {
  font-weight: bold; }

li.header dd {
  margin-left: 1px; }

li.header dl.icon {
  min-height: 0; }

li.header dl.icon dt {
  /* Tweak for headers alignment when folder icon used */
  padding-left: 0;
  padding-right: 50px; }

/* Forum list column styles */
dl.icon {
  min-height: 35px;
  background-position: 10px 50%;
  /* Position of folder icon */
  background-repeat: no-repeat; }

dl.icon dt {
  padding-left: 45px;
  /* Space for folder icon */
  background-repeat: no-repeat;
  background-position: 5px 95%;
  /* Position of topic icon */ }

dd.posts, dd.topics, dd.views {
  width: 8%;
  text-align: center;
  line-height: 2.2em;
  font-size: 1.2em; }

/* List in forum description */
dl.icon dt ol,
dl.icon dt ul {
  list-style-position: inside;
  margin-left: 1em; }

dl.icon dt li {
  display: list-item;
  list-style-type: inherit; }

dd.lastpost {
  width: 25%;
  font-size: 1.1em; }

dd.redirect {
  font-size: 1.1em;
  line-height: 2.5em; }

dd.moderation {
  font-size: 1.1em; }

dd.lastpost span, ul.topiclist dd.searchby span, ul.topiclist dd.info span, ul.topiclist dd.time span, dd.redirect span, dd.moderation span {
  display: block;
  padding-left: 5px; }

dd.time {
  width: auto;
  line-height: 200%;
  font-size: 1.1em; }

dd.extra {
  width: 12%;
  line-height: 200%;
  text-align: center;
  font-size: 1.1em; }

dd.mark {
  float: right !important;
  width: 9%;
  text-align: center;
  line-height: 200%;
  font-size: 1.2em; }

dd.info {
  width: 30%; }

dd.option {
  width: 15%;
  line-height: 200%;
  text-align: center;
  font-size: 1.1em; }

dd.searchby {
  width: 47%;
  font-size: 1.1em;
  line-height: 1em; }

ul.topiclist dd.searchextra {
  margin-left: 5px;
  padding: 0.2em 0;
  font-size: 1.1em;
  color: #333333;
  border-left: none;
  clear: both;
  width: 98%;
  overflow: hidden; }

/* Container for post/reply buttons and pagination */
.topic-actions {
  margin-bottom: 3px;
  font-size: 1.1em;
  height: 28px;
  min-height: 28px; }

div[class].topic-actions {
  height: auto; }

/* Post body styles
----------------------------------------*/
.postbody {
  padding: 0;
  line-height: 1.48em;
  color: #333333;
  width: 76%;
  float: left;
  clear: both; }

.postbody .ignore {
  font-size: 1.1em; }

.postbody h3.first {
  /* The first post on the page uses this */
  font-size: 1.7em; }

.postbody h3 {
  /* Postbody requires a different h3 format - so change it here */
  font-size: 1.5em;
  padding: 2px 0 0 0;
  margin: 0 0 0.3em 0 !important;
  text-transform: none;
  font-family: "Trebuchet MS", Verdana, Helvetica, Arial, sans-serif;
  line-height: 125%; }

.postbody h3 img {
  /* Also see tweaks.css */
  vertical-align: bottom; }

.postbody .content {
  font-size: 1.3em; }

.search .postbody {
  width: 68%; }

/* Topic review panel
----------------------------------------*/
#review {
  margin-bottom: 5px; }

#topicreview {
  padding-right: 5px;
  overflow: auto;
  height: 300px; }

#topicreview .postbody {
  width: auto;
  float: none;
  margin: 0;
  height: auto; }

#topicreview .post {
  height: auto; }

#topicreview h2 {
  border-bottom-width: 0; }

.post-ignore .postbody {
  display: none; }

/* MCP Post details
----------------------------------------*/
#post_details {
  /* This will only work in IE7+, plus the others */
  overflow: auto;
  max-height: 300px; }

#expand {
  clear: both; }

/* Content container styles
----------------------------------------*/
.content {
  min-height: 3em;
  overflow: hidden;
  line-height: 1.4em;
  font-family: "Lucida Grande", "Trebuchet MS", Verdana, Helvetica, Arial, sans-serif;
  font-size: 1em;
  color: #333333;
  padding-bottom: 1px; }

.content h2, .panel h2 {
  font-weight: bold;
  color: #989898;
  border-bottom: 1px solid #CCCCCC;
  font-size: 1.6em;
  margin-top: 20px;
  margin-bottom: 20px; }

.panel h3 {
  margin: 0.5em 0; }

.panel p {
  font-size: 1.2em;
  margin-bottom: 20px;
  line-height: 1.4em; }

.content p {
  font-family: "Lucida Grande", "Trebuchet MS", Verdana, Helvetica, Arial, sans-serif;
  font-size: 1.2em;
  margin-bottom: 1em;
  line-height: 1.4em; }

dl.faq {
  font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
  font-size: 1.1em;
  margin-top: 1em;
  margin-bottom: 2em;
  line-height: 1.4em; }

dl.faq dt {
  font-weight: bold;
  color: #333333; }

.content dl.faq {
  font-size: 1.2em;
  margin-bottom: 0.5em; }

.content li {
  list-style-type: inherit; }

.content ul, .content ol {
  margin-bottom: 1em;
  margin-left: 3em; }

.posthilit {
  background-color: #f3f3f3;
  color: #BCBCBC;
  padding: 0 2px 1px 2px; }

.announce, .unreadpost {
  /* Highlight the announcements & unread posts box */
  border-left-color: #BCBCBC;
  border-right-color: #BCBCBC; }

/* Post author */
p.author {
  margin: 0 15em 0.6em 0;
  padding: 0 0 5px 0;
  font-family: Verdana, Helvetica, Arial, sans-serif;
  font-size: 1em;
  line-height: 1.2em; }

/* Post signature */
.signature {
  margin-top: 1.5em;
  padding-top: 0.2em;
  font-size: 1.1em;
  border-top: 1px solid #CCCCCC;
  clear: left;
  line-height: 140%;
  overflow: hidden;
  width: 100%; }

dd .signature {
  margin: 0;
  padding: 0;
  clear: none;
  border: none; }

.signature li {
  list-style-type: inherit; }

.signature ul, .signature ol {
  margin-bottom: 1em;
  margin-left: 3em; }

/* Post noticies */
.notice {
  font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
  width: auto;
  margin-top: 1.5em;
  padding-top: 0.2em;
  font-size: 1em;
  border-top: 1px dashed #CCCCCC;
  clear: left;
  line-height: 130%; }

/* Jump to post link for now */
ul.searchresults {
  list-style: none;
  text-align: right;
  clear: both; }

/* BB Code styles
----------------------------------------*/
/* Quote block */
blockquote {
  background: #ebebeb none 6px 8px no-repeat;
  border: 1px solid #dbdbdb;
  font-size: 0.95em;
  margin: 0.5em 1px 0 25px;
  overflow: hidden;
  padding: 5px; }

blockquote blockquote {
  /* Nested quotes */
  background-color: #bababa;
  font-size: 1em;
  margin: 0.5em 1px 0 15px; }

blockquote blockquote blockquote {
  /* Nested quotes */
  background-color: #e4e4e4; }

blockquote cite {
  /* Username/source of quoter */
  font-style: normal;
  font-weight: bold;
  margin-left: 20px;
  display: block;
  font-size: 0.9em; }

blockquote cite cite {
  font-size: 1em; }

blockquote.uncited {
  padding-top: 25px; }

/* Code block */
dl.codebox {
  padding: 3px;
  background-color: #FFFFFF;
  border: 1px solid #d8d8d8;
  font-size: 1em; }

dl.codebox dt {
  text-transform: uppercase;
  border-bottom: 1px solid #CCCCCC;
  margin-bottom: 3px;
  font-size: 0.8em;
  font-weight: bold;
  display: block; }

blockquote dl.codebox {
  margin-left: 0; }

dl.codebox code {
  /* Also see tweaks.css */
  overflow: auto;
  display: block;
  height: auto;
  max-height: 200px;
  white-space: normal;
  padding-top: 5px;
  font: 0.9em Monaco, "Andale Mono","Courier New", Courier, mono;
  line-height: 1.3em;
  color: #8b8b8b;
  margin: 2px 0; }

.syntaxbg {
  color: #FFFFFF; }

.syntaxcomment {
  color: #000000; }

.syntaxdefault {
  color: #bcbcbc; }

.syntaxhtml {
  color: #000000; }

.syntaxkeyword {
  color: #585858; }

.syntaxstring {
  color: #a7a7a7; }

/* Attachments
----------------------------------------*/
.attachbox {
  float: left;
  width: auto;
  margin: 5px 5px 5px 0;
  padding: 6px;
  background-color: #FFFFFF;
  border: 1px dashed #d8d8d8;
  clear: left; }

.pm-message .attachbox {
  background-color: #f3f3f3; }

.attachbox dt {
  font-family: Arial, Helvetica, sans-serif;
  text-transform: uppercase; }

.attachbox dd {
  margin-top: 4px;
  padding-top: 4px;
  clear: left;
  border-top: 1px solid #d8d8d8; }

.attachbox dd dd {
  border: none; }

.attachbox p {
  line-height: 110%;
  color: #666666;
  font-weight: normal;
  clear: left; }

.attachbox p.stats {
  line-height: 110%;
  color: #666666;
  font-weight: normal;
  clear: left; }

.attach-image {
  margin: 3px 0;
  width: 100%;
  max-height: 350px;
  overflow: auto; }

.attach-image img {
  border: 1px solid #999999;
  /*	cursor: move; */
  cursor: default; }

/* Inline image thumbnails */
div.inline-attachment dl.thumbnail, div.inline-attachment dl.file {
  display: block;
  margin-bottom: 4px; }

div.inline-attachment p {
  font-size: 100%; }

dl.file {
  font-family: Verdana, Arial, Helvetica, sans-serif;
  display: block; }

dl.file dt {
  text-transform: none;
  margin: 0;
  padding: 0;
  font-weight: bold;
  font-family: Verdana, Arial, Helvetica, sans-serif; }

dl.file dd {
  color: #666666;
  margin: 0;
  padding: 0; }

dl.thumbnail img {
  padding: 3px;
  border: 1px solid #666666;
  background-color: #FFF; }

dl.thumbnail dd {
  color: #666666;
  font-style: italic;
  font-family: Verdana, Arial, Helvetica, sans-serif; }

.attachbox dl.thumbnail dd {
  font-size: 100%; }

dl.thumbnail dt a:hover {
  background-color: #EEEEEE; }

dl.thumbnail dt a:hover img {
  border: 1px solid #d2d2d2; }

/* Post poll styles
----------------------------------------*/
fieldset.polls {
  font-family: "Trebuchet MS", Verdana, Helvetica, Arial, sans-serif; }

fieldset.polls dl {
  margin-top: 5px;
  border-top: 1px solid #e2e2e2;
  padding: 5px 0 0 0;
  line-height: 120%;
  color: #666666; }

fieldset.polls dl.voted {
  font-weight: bold;
  color: #000000; }

fieldset.polls dt {
  text-align: left;
  float: left;
  display: block;
  width: 30%;
  border-right: none;
  padding: 0;
  margin: 0;
  font-size: 1.1em; }

fieldset.polls dd {
  float: left;
  width: 10%;
  border-left: none;
  padding: 0 5px;
  margin-left: 0;
  font-size: 1.1em; }

fieldset.polls dd.resultbar {
  width: 50%; }

fieldset.polls dd input {
  margin: 2px 0; }

fieldset.polls dd div {
  text-align: right;
  font-family: Arial, Helvetica, sans-serif;
  color: #FFFFFF;
  font-weight: bold;
  padding: 0 2px;
  overflow: visible;
  min-width: 2%; }

.pollbar1 {
  background-color: #aaaaaa;
  border-bottom: 1px solid #747474;
  border-right: 1px solid #747474; }

.pollbar2 {
  background-color: #bebebe;
  border-bottom: 1px solid #8c8c8c;
  border-right: 1px solid #8c8c8c; }

.pollbar3 {
  background-color: #D1D1D1;
  border-bottom: 1px solid #aaaaaa;
  border-right: 1px solid #aaaaaa; }

.pollbar4 {
  background-color: #e4e4e4;
  border-bottom: 1px solid #bebebe;
  border-right: 1px solid #bebebe; }

.pollbar5 {
  background-color: #f8f8f8;
  border-bottom: 1px solid #D1D1D1;
  border-right: 1px solid #D1D1D1; }

/* Poster profile block
----------------------------------------*/
.postprofile {
  /* Also see tweaks.css */
  margin: 5px 0 10px 0;
  min-height: 80px;
  color: #666666;
  border-left: 1px solid #FFFFFF;
  width: 22%;
  float: right;
  display: inline; }

.pm .postprofile {
  border-left: 1px solid #DDDDDD; }

.postprofile dd, .postprofile dt {
  line-height: 1.2em;
  margin-left: 8px; }

.postprofile strong {
  font-weight: normal;
  color: #000000; }

.avatar {
  border: none;
  margin-bottom: 3px; }

.online {
  background-image: none;
  background-position: 100% 0;
  background-repeat: no-repeat; }

/* Poster profile used by search*/
.search .postprofile {
  width: 30%; }

/* pm list in compose message if mass pm is enabled */
dl.pmlist dt {
  width: 60% !important; }

dl.pmlist dt textarea {
  width: 95%; }

dl.pmlist dd {
  margin-left: 61% !important;
  margin-bottom: 2px; }
/* Button Styles
---------------------------------------- */

/* Rollover buttons
   Based on: http://wellstyled.com/css-nopreload-rollovers.html
----------------------------------------*/
.buttons {
	float: left;
	width: auto;
	height: auto;
}

/* Rollover state */
.buttons div {
	float: left;
	margin: 0 5px 0 0;
	background-position: 0 100%;
}

/* Rolloff state */
.buttons div a {
	display: block;
	width: 100%;
	height: 100%;
	background-position: 0 0;
	position: relative;
	overflow: hidden;
}

/* Hide <a> text and hide off-state image when rolling over (prevents flicker in IE) */
/*.buttons div span		{ display: none; }*/
/*.buttons div a:hover	{ background-image: none; }*/
.buttons div span			{ position: absolute; width: 100%; height: 100%; cursor: pointer;}
.buttons div a:hover span	{ background-position: 0 100%; }

/* Big button images */
.reply-icon span	{ background: transparent none 0 0 no-repeat; }
.post-icon span		{ background: transparent none 0 0 no-repeat; }
.locked-icon span	{ background: transparent none 0 0 no-repeat; }
.pmreply-icon span	{ background: none 0 0 no-repeat; }
.newpm-icon span 	{ background: none 0 0 no-repeat; }
.forwardpm-icon span 	{ background: none 0 0 no-repeat; }

/* Set big button dimensions */
.buttons div.reply-icon		{ width: {IMG_BUTTON_TOPIC_REPLY_WIDTH}px; height: {IMG_BUTTON_TOPIC_REPLY_HEIGHT}px; }
.buttons div.post-icon		{ width: {IMG_BUTTON_TOPIC_NEW_WIDTH}px; height: {IMG_BUTTON_TOPIC_NEW_HEIGHT}px; }
.buttons div.locked-icon	{ width: {IMG_BUTTON_TOPIC_LOCKED_WIDTH}px; height: {IMG_BUTTON_TOPIC_LOCKED_HEIGHT}px; }
.buttons div.pmreply-icon	{ width: {IMG_BUTTON_PM_REPLY_WIDTH}px; height: {IMG_BUTTON_PM_REPLY_HEIGHT}px; }
.buttons div.newpm-icon		{ width: {IMG_BUTTON_PM_NEW_WIDTH}px; height: {IMG_BUTTON_PM_NEW_HEIGHT}px; }
.buttons div.forwardpm-icon	{ width: {IMG_BUTTON_PM_FORWARD_WIDTH}px; height: {IMG_BUTTON_PM_FORWARD_HEIGHT}px; }

/* Sub-header (navigation bar)
--------------------------------------------- */
a.print, a.sendemail, a.fontsize {
	display: block;
	overflow: hidden;
	height: 18px;
	text-indent: -5000px;
	text-align: left;
	background-repeat: no-repeat;
}

a.print {
	background-image: none;
	width: 22px;
}

a.sendemail {
	background-image: none;
	width: 22px;
}

a.fontsize {
	background-image: none;
	background-position: 0 -1px;
	width: 29px;
}

a.fontsize:hover {
	background-position: 0 -20px;
	text-decoration: none;
}

/* Icon images
---------------------------------------- */
.sitehome, .icon-faq, .icon-members, .icon-home, .icon-ucp, .icon-register, .icon-logout,
.icon-bookmark, .icon-bump, .icon-subscribe, .icon-unsubscribe, .icon-pages, .icon-search {
	background-position: 0 50%;
	background-repeat: no-repeat;
	background-image: none;
	padding: 1px 0 0 17px;
}

/* Poster profile icons
----------------------------------------*/
ul.profile-icons {
	padding-top: 10px;
	list-style: none;
}

/* Rollover state */
ul.profile-icons li {
	float: left;
	margin: 0 6px 3px 0;
	background-position: 0 100%;
}

/* Rolloff state */
ul.profile-icons li a {
	display: block;
	width: 100%;
	height: 100%;
	background-position: 0 0;
}

/* Hide <a> text and hide off-state image when rolling over (prevents flicker in IE) */
ul.profile-icons li span { display:none; }
ul.profile-icons li a:hover { background: none; }

/* Positioning of moderator icons */
.postbody ul.profile-icons {
	float: right;
	width: auto;
	padding: 0;
}

.postbody ul.profile-icons li {
	margin: 0 3px;
}

/* Profile & navigation icons */
.email-icon, .email-icon a		{ background: none top left no-repeat; }
.aim-icon, .aim-icon a			{ background: none top left no-repeat; }
.yahoo-icon, .yahoo-icon a		{ background: none top left no-repeat; }
.web-icon, .web-icon a			{ background: none top left no-repeat; }
.msnm-icon, .msnm-icon a			{ background: none top left no-repeat; }
.icq-icon, .icq-icon a			{ background: none top left no-repeat; }
.jabber-icon, .jabber-icon a		{ background: none top left no-repeat; }
.pm-icon, .pm-icon a				{ background: none top left no-repeat; }
.quote-icon, .quote-icon a		{ background: none top left no-repeat; }

/* Moderator icons */
.report-icon, .report-icon a		{ background: none top left no-repeat; }
.warn-icon, .warn-icon a			{ background: none top left no-repeat; }
.edit-icon, .edit-icon a			{ background: none top left no-repeat; }
.delete-icon, .delete-icon a		{ background: none top left no-repeat; }
.info-icon, .info-icon a			{ background: none top left no-repeat; }

/* Set profile icon dimensions */
ul.profile-icons li.email-icon		{ width: {IMG_ICON_CONTACT_EMAIL_WIDTH}px; height: {IMG_ICON_CONTACT_EMAIL_HEIGHT}px; }
ul.profile-icons li.aim-icon	{ width: {IMG_ICON_CONTACT_AIM_WIDTH}px; height: {IMG_ICON_CONTACT_AIM_HEIGHT}px; }
ul.profile-icons li.yahoo-icon	{ width: {IMG_ICON_CONTACT_YAHOO_WIDTH}px; height: {IMG_ICON_CONTACT_YAHOO_HEIGHT}px; }
ul.profile-icons li.web-icon	{ width: {IMG_ICON_CONTACT_WWW_WIDTH}px; height: {IMG_ICON_CONTACT_WWW_HEIGHT}px; }
ul.profile-icons li.msnm-icon	{ width: {IMG_ICON_CONTACT_MSNM_WIDTH}px; height: {IMG_ICON_CONTACT_MSNM_HEIGHT}px; }
ul.profile-icons li.icq-icon	{ width: {IMG_ICON_CONTACT_ICQ_WIDTH}px; height: {IMG_ICON_CONTACT_ICQ_HEIGHT}px; }
ul.profile-icons li.jabber-icon	{ width: {IMG_ICON_CONTACT_JABBER_WIDTH}px; height: {IMG_ICON_CONTACT_JABBER_HEIGHT}px; }
ul.profile-icons li.pm-icon		{ width: {IMG_ICON_CONTACT_PM_WIDTH}px; height: {IMG_ICON_CONTACT_PM_HEIGHT}px; }
ul.profile-icons li.quote-icon	{ width: {IMG_ICON_POST_QUOTE_WIDTH}px; height: {IMG_ICON_POST_QUOTE_HEIGHT}px; }
ul.profile-icons li.report-icon	{ width: {IMG_ICON_POST_REPORT_WIDTH}px; height: {IMG_ICON_POST_REPORT_HEIGHT}px; }
ul.profile-icons li.edit-icon	{ width: {IMG_ICON_POST_EDIT_WIDTH}px; height: {IMG_ICON_POST_EDIT_HEIGHT}px; }
ul.profile-icons li.delete-icon	{ width: {IMG_ICON_POST_DELETE_WIDTH}px; height: {IMG_ICON_POST_DELETE_HEIGHT}px; }
ul.profile-icons li.info-icon	{ width: {IMG_ICON_POST_INFO_WIDTH}px; height: {IMG_ICON_POST_INFO_HEIGHT}px; }
ul.profile-icons li.warn-icon	{ width: {IMG_ICON_USER_WARN_WIDTH}px; height: {IMG_ICON_USER_WARN_HEIGHT}px; }

/* Fix profile icon default margins */
ul.profile-icons li.edit-icon	{ margin: 0 0 0 3px; }
ul.profile-icons li.quote-icon	{ margin: 0 0 0 10px; }
ul.profile-icons li.info-icon, ul.profile-icons li.report-icon	{ margin: 0 3px 0 0; }
/* Control Panel Styles
---------------------------------------- */


/* Main CP box
----------------------------------------*/
#cp-menu {
	float:left;
	width: 19%;
	margin-top: 1em;
	margin-bottom: 5px;
}

#cp-main {
	float: left;
	width: 81%;
}

#cp-main .content {
	padding: 0;
}

#cp-main .panel p {
	font-size: 1.1em;
}

#cp-main .panel ol {
	margin-left: 2em;
	font-size: 1.1em;
}

#cp-main .panel li.row {
	border-bottom: 1px solid #cbcbcb;
}

ul.cplist {
	margin-bottom: 5px;
}

ul.cplist.usergroups
{
	margin-bottom: 20px;
}

#cp-main .panel li.header dd, #cp-main .panel li.header dt {
	margin-bottom: 2px;
}

#cp-main table.table1 {
	margin-bottom: 1em;
}

#cp-main table.table1 thead th {
	color: #333333;
	font-weight: bold;
	border-bottom: 1px solid #333333;
	padding: 5px;
}

#cp-main table.table1 tbody th {
	font-style: italic;
	background-color: transparent !important;
	border-bottom: none;
}

#cp-main .pagination {
	float: right;
	width: auto;
	padding-top: 1px;
}

#cp-main .postbody p {
	font-size: 1.1em;
}

#cp-main .pm-message {
	border: 1px solid #e2e2e2;
	margin: 10px 0;
	background-color: #FFFFFF;
	width: auto;
	float: none;
}

.pm-message h2 {
	padding-bottom: 5px;
}

#cp-main .postbody h3, #cp-main .box2 h3 {
	margin-top: 0;
}

#cp-main .buttons {
	margin-left: 0;
}

#cp-main ul.linklist {
	margin: 0;
}

/* MCP Specific tweaks */
.mcp-main .postbody {
	width: 100%;
}

.tabs-container h2 {
	float: left;
	margin-bottom: 0px;
}

.tabs-container #minitabs {
	float: right;
	margin-top: 19px;
}

.tabs-container:after {
	display: block;
	clear: both;
	content: '';
}

/* CP tabbed menu
----------------------------------------*/
#tabs {
	line-height: normal;
	margin: 20px 0 10px 0;
	min-width: 570px;
	border-bottom: 1px solid #9f9f9f;
}

#tabs ul {
	margin:0;
	margin-left: 5px;
	padding: 0;
	list-style: none;
}

#tabs li {
	display: inline;
	margin: 0;
	padding: 0;
	font-size: 1em;
	font-weight: bold;
}

#tabs a {
	float: left;
	background: none no-repeat 0% -35px;
	margin: 1px 1px 0 0;
	padding: 0 0 0 5px;
	text-decoration: none;
	position: relative;
	cursor: pointer;
	border: 1px solid #f9f9f9;
	border-bottom: none;
}

#tabs a span {
	float: left;
	display: block;
	background: none no-repeat 100% -35px;
	padding: 6px 10px 6px 5px;
	color: #828282;
	white-space: nowrap;
}

#tabs a:hover span {
	color: #bcbcbc;
}

#tabs .activetab a {
	margin-top: 0;
}

#tabs .activetab a span {
	padding-top: 7px;
	color: #333333;
}

#tabs .activetab a:hover span {
	color: #000000;
}

/* Mini tabbed menu used in MCP
----------------------------------------*/
#minitabs {
	line-height: normal;
	margin: -20px 7px 0 0;
}

#minitabs ul {
	margin:0;
	padding: 0;
	list-style: none;
}

#minitabs li {
	display: block;
	float: right;
	padding: 4px 10px 4px 10px;
	font-size: 1em;
	font-weight: bold;
	background-color: #f2f2f2;
	margin-left: 2px;
	border: 1px solid #333333;
}

#minitabs a {
}

#minitabs a:hover {
	text-decoration: none;
}

#minitabs li.activetab {
	background-color: #F9F9F9;
}

#minitabs li.activetab a, #minitabs li.activetab a:hover {
	color: #333333;
}

/* UCP navigation menu
----------------------------------------*/
/* Container for sub-navigation list */
#navigation {
	width: 100%;
	padding-top: 36px;
}

#navigation ul {
	list-style:none;
}

/* Default list state */
#navigation li {
	margin: 1px 0;
	padding: 0;
	font-weight: bold;
	display: inline;
}

/* Link styles for the sub-section links */
#navigation a {
	display: block;
	padding: 3px 5px;
	margin: 1px 0;
	text-decoration: none;
	font-weight: bold;
	color: #333;
	background: #cfcfcf none repeat-y 100% 0;
}

#navigation a:hover {
	text-decoration: none;
	background-color: #c6c6c6;
	color: #bcbcbc;
	background-image: none;
}

#navigation #active-subsection a {
	display: block;
	color: #d3d3d3;
	background-color: #F9F9F9;
	background-image: none;
}

/* Preferences pane layout
----------------------------------------*/
#cp-main h2 {
	border-bottom: none;
	padding: 0;
	margin-left: 10px;
}

#cp-main > form > h2 {
	margin-left: 0;
}

#cp-main > * {
	padding: 0 10px;
}

#cp-main span.corners-top, #cp-menu span.corners-top {
	background-image: none;
}

#cp-main span.corners-top span, #cp-menu span.corners-top span {
	background-image: none;
}

#cp-main span.corners-bottom, #cp-menu span.corners-bottom {
	background-image: none;
}

#cp-main span.corners-bottom span, #cp-menu span.corners-bottom span {
	background-image: none;
}

/* Topicreview */
#cp-main .panel #topicreview span.corners-top, #cp-menu .panel #topicreview span.corners-top {
	background-image: none;
}

#cp-main .panel #topicreview span.corners-top span, #cp-menu .panel #topicreview span.corners-top span {
	background-image: none;
}

#cp-main .panel #topicreview span.corners-bottom, #cp-menu .panel #topicreview span.corners-bottom {
	background-image: none;
}

#cp-main .panel #topicreview span.corners-bottom span, #cp-menu .panel #topicreview span.corners-bottom span {
	background-image: none;
}

/* Friends list */
.cp-mini {
	padding: 0 5px;
	margin: 10px 15px 10px 5px;
}

.cp-mini span.corners-top, .cp-mini span.corners-bottom {
	margin: 0 -5px;
}

dl.mini dt {
	font-weight: bold;
	color: #676767;
	border-bottom: 1px solid #676767;
	margin-bottom: 5px;
}

dl.mini dd {
	padding-top: 4px;
}

.friend-online {
	font-weight: bold;
}

.friend-offline {
	font-style: italic;
}

/* PM Styles
----------------------------------------*/
#pm-menu {
	line-height: 2.5em;
}

/* PM panel adjustments */
.reply-all a.left {
	background-position: 3px 60%;
}

.reply-all a.left:hover {
	background-position: 0px 60%;
}

.reply-all {
	font-size: 11px;
	padding-top: 5px;
}

/* PM Message history */
.current {
	color: #999999;
}

/* Defined rules list for PM options */
ol.def-rules {
	padding-left: 0;
}

ol.def-rules li {
	line-height: 180%;
	padding: 1px;
}

/* PM marking colours */

.pmlist li.pm_message_reported_colour, .pm_message_reported_colour {
	border-left-color: #bcbcbc;
	border-right-color: #bcbcbc;
}

.pmlist li.pm_marked_colour, .pm_marked_colour {
	padding: 0;
	border: solid 3px #ffffff;
	border-width: 0 5px 0 0;
}

.pmlist li.pm_replied_colour, .pm_replied_colour {
	padding: 0;
	border: solid 3px #c2c2c2;
	border-width: 0 5px 0 0;
}

.pmlist li.pm_friend_colour, .pm_friend_colour {
	padding: 0;
	border: solid 3px #bdbdbd;
	border-width: 0 5px 0 0;
}

.pmlist li.pm_foe_colour, .pm_foe_colour {
	padding: 0;
	border: solid 3px #000000;
	border-width: 0 5px 0 0;
}

.pm-legend {
	border-left-width: 10px;
	border-left-style: solid;
	border-right-width: 0;
	margin-bottom: 3px;
	padding-left: 3px;
}

/* Avatar gallery */
#gallery label {
	position: relative;
	float: left;
	margin: 10px;
	padding: 5px;
	width: auto;
	background: #FFFFFF;
	border: 1px solid #CCC;
	text-align: center;
}

#gallery label:hover {
	background-color: #EEE;
}
/* Form Styles
---------------------------------------- */
/* General form styles
----------------------------------------*/
fieldset {
  border-width: 0;
  font-family: Verdana, Helvetica, Arial, sans-serif;
  font-size: 1.1em; }

input {
  font-weight: normal;
  cursor: pointer;
  vertical-align: middle;
  padding: 0 3px;
  font-size: 1em;
  font-family: Verdana, Helvetica, Arial, sans-serif; }

select {
  font-family: Verdana, Helvetica, Arial, sans-serif;
  font-weight: normal;
  cursor: pointer;
  vertical-align: middle;
  border: 1px solid #666666;
  padding: 1px;
  background-color: #FAFAFA;
  font-size: 1em; }

option {
  padding-right: 1em; }

option.disabled-option {
  color: graytext; }

textarea {
  font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
  width: 60%;
  padding: 2px;
  font-size: 1em;
  line-height: 1.4em; }

label {
  cursor: default;
  padding-right: 5px;
  color: #676767; }

label input {
  vertical-align: middle; }

label img {
  vertical-align: middle; }

input:focus,
select:focus,
textarea:focus,
button:focus {
  outline: none; }

input[type="text"], input[type="password"], textarea {
  border: 1px solid #dbdbdb;
  padding: 2px; }

input[type="text"]:focus, input[type="password"]:focus, textarea:focus {
  border: 1px solid #333333;
  color: inherit; }

button, input[type="button"], input[type="submit"], input[type="reset"] {
  background-color: #fff;
  border: 1px solid #333333;
  padding: 2px; }

button:hover, input[type="button"]:hover {
  border: none;
  padding: 3px;
  background: #333333;
  color: #fff;
  cursor: pointer; }

/* Definition list layout for forms
---------------------------------------- */
fieldset dl {
  padding: 4px 0; }

fieldset dt {
  float: left;
  width: 40%;
  text-align: left;
  display: block; }

fieldset dd {
  margin-left: 41%;
  vertical-align: top;
  margin-bottom: 3px; }

/* Specific layout 1 */
fieldset.fields1 dt {
  width: 15em;
  border-right-width: 0; }

fieldset.fields1 dd {
  margin-left: 15em;
  border-left-width: 0; }

fieldset.fields1 {
  background-color: transparent; }

fieldset.fields1 div {
  margin-bottom: 3px; }

/* Set it back to 0px for the reCaptcha divs: PHPBB3-9587 */
fieldset.fields1 #recaptcha_widget_div div {
  margin-bottom: 0; }

/* Specific layout 2 */
fieldset.fields2 dt {
  width: 15em;
  border-right-width: 0; }

fieldset.fields2 dd {
  margin-left: 16em;
  border-left-width: 0; }

/* Form elements */
dt label {
  font-weight: bold;
  text-align: left; }

dd label {
  white-space: nowrap;
  color: #333; }

dd input, dd textarea {
  margin-right: 3px; }

dd select {
  width: auto; }

dd textarea {
  width: 85%; }

/* Hover effects */
fieldset dl:hover dt label {
  color: #000000; }

fieldset.fields2 dl:hover dt label {
  color: inherit; }

#timezone {
  width: 95%; }

* html #timezone {
  width: 50%; }

/* Quick-login on index page */
fieldset.quick-login {
  margin-top: 5px; }

fieldset.quick-login input {
  width: auto; }

fieldset.quick-login input.inputbox {
  width: 15%;
  vertical-align: middle;
  margin-right: 5px;
  background-color: #f3f3f3; }

fieldset.quick-login label {
  white-space: nowrap;
  padding-right: 2px; }

/* Display options on viewtopic/viewforum pages  */
fieldset.display-options {
  text-align: center;
  margin: 3px 0 5px 0; }

fieldset.display-options label {
  white-space: nowrap;
  padding-right: 2px; }

fieldset.display-options a {
  margin-top: 3px; }

/* Display actions for ucp and mcp pages */
fieldset.display-actions {
  text-align: right;
  line-height: 2em;
  white-space: nowrap;
  padding-right: 1em; }

fieldset.display-actions label {
  white-space: nowrap;
  padding-right: 2px; }

fieldset.sort-options {
  line-height: 2em; }

/* MCP forum selection*/
fieldset.forum-selection {
  margin: 5px 0 3px 0;
  float: right; }

fieldset.forum-selection2 {
  margin: 13px 0 3px 0;
  float: right; }

/* Jumpbox */
fieldset.jumpbox {
  text-align: right;
  margin-top: 15px;
  height: 2.5em; }

fieldset.quickmod {
  width: 50%;
  float: right;
  text-align: right;
  height: 2.5em; }

/* Submit button fieldset */
fieldset.submit-buttons {
  text-align: center;
  vertical-align: middle;
  margin: 5px 0; }

fieldset.submit-buttons input {
  vertical-align: middle;
  padding-top: 3px;
  padding-bottom: 3px; }

/* Posting page styles
----------------------------------------*/
/* Buttons used in the editor */
#format-buttons {
  margin: 15px 0 2px 0; }

#format-buttons input, #format-buttons select {
  vertical-align: middle; }

/* Main message box */
#message-box {
  width: 80%; }

#message-box textarea {
  font-family: "Trebuchet MS", Verdana, Helvetica, Arial, sans-serif;
  width: 450px;
  height: 270px;
  min-width: 100%;
  max-width: 100%;
  font-size: 1.2em; }

/* Emoticons panel */
#smiley-box {
  width: 18%;
  float: right; }

#smiley-box img {
  margin: 3px; }

/* Input field styles
---------------------------------------- */
input.inputbox {
  width: 85%; }

input.medium {
  width: 50%; }

input.narrow {
  width: 25%; }

input.tiny {
  width: 125px; }

textarea.inputbox {
  width: 85%; }

.autowidth {
  width: auto !important; }

/* Form button styles
---------------------------------------- */
input.button1, input.button2 {
  font-size: 1em; }

a.button1, input.button1, input.button3, a.button2, input.button2 {
  width: auto !important;
  font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif; }

a.button1, input.button1 {
  font-weight: bold; }

input.button3 {
  padding: 0;
  margin: 0;
  line-height: 5px;
  height: 12px;
  background-image: none;
  font-variant: small-caps; }

/* Alternative button */
/* <a> button in the style of the form buttons */
a.button1, a.button1:link, a.button1:visited, a.button1:active, a.button2, a.button2:link, a.button2:visited, a.button2:active {
  text-decoration: none;
  color: #000000;
  padding: 2px 8px;
  line-height: 250%;
  vertical-align: text-bottom;
  background-position: 0 1px; }

input.disabled {
  font-weight: normal;
  color: #666666; }

/* Topic and forum Search */
.search-box2 {
  margin-top: 3px;
  margin-left: 5px;
  float: left; }

input.search {
  background-image: none;
  background-repeat: no-repeat;
  background-position: left 1px;
  padding-left: 17px; }

.full {
  width: 95%; }

.medium {
  width: 50%; }

.narrow {
  width: 25%; }

.tiny {
  width: 10%; }
/* Style Sheet Tweaks

These style definitions are mainly IE specific 
tweaks required due to its poor CSS support.
-------------------------------------------------*/

* html table, * html select, * html input { font-size: 100%; }
* html hr { margin: 0; }
* html span.corners-top, * html span.corners-bottom { background-image: url("{T_THEME_PATH}/images/corners_left.gif"); }
* html span.corners-top span, * html span.corners-bottom span { background-image: url("{T_THEME_PATH}/images/corners_right.gif"); }

table.table1 {
	width: 99%;		/* IE < 6 browsers */
	/* Tantek hack */
	voice-family: "\"}\"";
	voice-family: inherit;
	width: 100%;
}
html>body table.table1 { width: 100%; }	/* Reset 100% for opera */

* html ul.topiclist li { position: relative; }
* html .postbody h3 img { vertical-align: middle; }

/* Form styles */
html>body dd label input { vertical-align: text-bottom; }	/* Align checkboxes/radio buttons nicely */

* html input.button1, * html input.button2 {
	padding-bottom: 0;
	margin-bottom: 1px;
}

/* Misc layout styles */
* html .column1, * html .column2 { width: 45%; }

/* Nice method for clearing floated blocks without having to insert any extra markup (like spacer above)
   From http://www.positioniseverything.net/easyclearing.html 
#tabs:after, #minitabs:after, .post:after, .navbar:after, fieldset dl:after, ul.topiclist dl:after, ul.linklist:after, dl.polls:after {
	content: "."; 
	display: block; 
	height: 0; 
	clear: both; 
	visibility: hidden;
}*/

.clearfix, #tabs, #minitabs, fieldset dl, ul.topiclist dl, dl.polls {
	height: 1%;
	overflow: hidden;
}

/* viewtopic fix */
* html .post {
	height: 25%;
	overflow: hidden;
}

/* navbar fix */
* html .clearfix, * html .navbar, ul.linklist {
	height: 4%;
	overflow: hidden;
}

/* Simple fix so forum and topic lists always have a min-height set, even in IE6
	From http://www.dustindiaz.com/min-height-fast-hack */
dl.icon {
	min-height: 35px;
	height: auto !important;
	height: 35px;
}

* html li.row dl.icon dt {
	height: 35px;
	overflow: visible;
}

* html #search-box {
	width: 25%;
}

/* Correctly clear floating for details on profile view */
*:first-child+html dl.details dd {
	margin-left: 30%;
	float: none;
}

* html dl.details dd {
	margin-left: 30%;
	float: none;
}

/* Headerbar height fix for IE7 and below */
* html #site-description p {
	margin-bottom: 1.0em;
}

*:first-child+html #site-description p {
	margin-bottom: 1.0em;
}

/* #minitabs fix for IE */
.tabs-container {
	zoom: 1;
}

#minitabs {
	white-space: nowrap;
	*min-width: 50%;
}
/*  	
--------------------------------------------------------------
Colours and backgrounds for common.css
-------------------------------------------------------------- */
html, body {
  color: #000;
  background: #f0f0f0; }

h1 {
  color: #FFFFFF; }

h2 {
  color: #088a08; }

h3 {
  border-bottom-color: #088a08;
  color: #088a08; }

hr {
  border-color: #088a08;
  border-top-color: #088a08; }

/* Main blocks
--------------------------------------------- */
body > header {
  border-bottom-color: #088a08; }

#big-wrapper > footer {
  border-top-color: #088a08; }

/* Top bar
--------------------------------------------- */
.menu a:hover {
  background-color: #088a08;
  color: #fff; }

.username div:hover {
  background-color: #088a08; }

/* User sidebar
--------------------------------------------- */
#usr-nav {
  color: #c9c9c9; }

.usr-nav-section h3 {
  color: #e0e0e0; }
.usr-nav-section a:link, .usr-nav-section a:visited, .usr-nav-section a:hover, .usr-nav-section a:active {
  color: #c9c9c9; }

.sep {
  background-color: #088a08; }

/* Page header
--------------------------------------------- */
.breadcrumbs {
  color: #088a08; }

/* Search box
--------------------------------------------- */
#search-box {
  color: #FFFFFF; }

#search-box #keywords {
  background-color: #FFF; }

#search-box input {
  border-color: #0075B0; }

/* Round cornered boxes and backgrounds
---------------------------------------- */
.headerbar {
  background-color: #12A3EB;
  background-image: url("{T_THEME_PATH}/images/bg_header.gif");
  color: #FFFFFF; }

.post:target .content {
  color: #000000; }

.ucprowbg {
  background-color: #DCDEE2; }

.fieldsbg {
  background-color: #E7E8EA; }

span.corners-top {
  background-image: url("{T_THEME_PATH}/images/corners_left.png"); }

span.corners-top span {
  background-image: url("{T_THEME_PATH}/images/corners_right.png"); }

span.corners-bottom {
  background-image: url("{T_THEME_PATH}/images/corners_left.png"); }

span.corners-bottom span {
  background-image: url("{T_THEME_PATH}/images/corners_right.png"); }

/* Table styles
----------------------------------------*/
table.table1 thead th {
  color: #088a08; }

table.table1 tbody tr:hover, table.table1 tbody tr.hover {
  background-color: #CFE1F6;
  color: #000; }

table.table1 td {
  color: #333333; }

table.table1 tbody td {
  border-color: #088a08; }

table.table1 tbody th {
  border-bottom-color: #000000;
  color: #333333;
  background-color: #FFFFFF; }

table.info tbody th {
  color: #000000; }

/* Misc layout styles
---------------------------------------- */
dl.details dt {
  color: #000000; }

dl.details dd {
  color: #333333; }

.sep {
  color: #1198D9; }

/* Pagination
---------------------------------------- */
.pagination span strong {
  color: #FFFFFF;
  background-color: #088a08;
  border-color: #088a08; }

.pagination span a, .pagination span a:link, .pagination span a:visited {
  color: #088a08;
  border-color: #088a08; }

.pagination span a:hover {
  border-color: #088a08;
  background-color: #088a08;
  color: #FFF; }

.pagination span a:active {
  color: #088a08;
  background: none;
  border-color: #088a08; }

/* Pagination in viewforum for multipage topics */
.row .pagination {
  background-image: url("{T_THEME_PATH}/images/icon_pages.gif"); }

.error {
  color: #BC2A4D; }

.reported {
  background-color: #F7ECEF; }

li.reported:hover {
  background-color: #ECD5D8 !important; }

.sticky, .announce {
  /* you can add a background for stickies and announcements*/ }

div.rules {
  background-color: #ECD5D8;
  color: #BC2A4D; }

p.rules {
  background-color: #ECD5D8;
  background-image: none; }

/*  	
--------------------------------------------------------------
Colours and backgrounds for links.css
-------------------------------------------------------------- */
a:link {
  color: #088a08; }

a:visited {
  color: #088a08; }

a:hover {
  color: #088a08; }

a:active {
  color: #088a08; }

/* Links on gradient backgrounds */
#search-box a:link, .navbg a:link, .forumbg .header a:link, .forabg .header a:link, th a:link {
  color: #088a08; }

#search-box a:visited, .navbg a:visited, .forumbg .header a:visited, .forabg .header a:visited, th a:visited {
  color: #088a08; }

#search-box a:hover, .navbg a:hover, .forumbg .header a:hover, .forabg .header a:hover, th a:hover {
  color: #088a08; }

#search-box a:active, .navbg a:active, .forumbg .header a:active, .forabg .header a:active, th a:active {
  color: #088a08; }

/* Links for forum/topic lists */
a.forumtitle {
  color: #088a08; }

a.forumtitle:hover {
  color: #088a08; }

a.forumtitle:active {
  color: #088a08; }

a.topictitle {
  color: #088a08; }

/* Post body links */
.postlink {
  color: #368AD2;
  border-bottom-color: #368AD2; }

.postlink:visited {
  color: #5D8FBD;
  border-bottom-color: #5D8FBD; }

.postlink:active {
  color: #368AD2; }

.postlink:hover {
  background-color: #D0E4F6;
  color: #0D4473; }

.signature a, .signature a:visited, .signature a:hover, .signature a:active {
  background-color: transparent; }

/* Back to top of page */
a.top {
  background-image: url("{IMG_ICON_BACK_TOP_SRC}"); }

a.top2 {
  background-image: url("{IMG_ICON_BACK_TOP_SRC}"); }

/* Arrow links  */
a.up {
  background-image: url("{T_THEME_PATH}/images/arrow_up.gif"); }

a.down {
  background-image: url("{T_THEME_PATH}/images/arrow_down.gif"); }

a.left {
  background-image: url("{T_THEME_PATH}/images/arrow_left.gif"); }

a.right {
  background-image: url("{T_THEME_PATH}/images/arrow_right.gif"); }

a.up:hover {
  background-color: transparent; }

/*  	
--------------------------------------------------------------
Colours and backgrounds for content.css
-------------------------------------------------------------- */
ul.topiclist li {
  color: #000;
  border-bottom-color: #088a08; }

ul.topiclist li.row dt a.subforum.read {
  background-image: url("{IMG_SUBFORUM_READ_SRC}"); }

ul.topiclist li.row dt a.subforum.unread {
  background-image: url("{IMG_SUBFORUM_UNREAD_SRC}"); }

li.row strong {
  color: #000000; }

li.row:hover {
  background-color: #F6F4D0; }

li.row:hover dd {
  border-left-color: #CCCCCC; }

.rtl li.row:hover dd {
  border-right-color: #CCCCCC;
  border-left-color: transparent; }

li.header dt, li.header dd {
  color: #088a08; }

/* Forum list column styles */
ul.topiclist dd.searchextra {
  color: #333333; }

/* Post body styles
----------------------------------------*/
.postbody {
  color: #333333; }

/* Content container styles
----------------------------------------*/
.content {
  color: #333333; }

.content h2, .panel h2 {
  color: #088a08;
  border-bottom-color: #088a08; }

dl.faq dt {
  color: #333333; }

.posthilit {
  background-color: #F3BFCC;
  color: #BC2A4D; }

/* Post signature */
.signature {
  border-top-color: #CCCCCC; }

/* Post noticies */
.notice {
  border-top-color: #CCCCCC; }

/* BB Code styles
----------------------------------------*/
/* Quote block */
blockquote {
  background-color: #EBEADD;
  background-image: url("{T_THEME_PATH}/images/quote.gif");
  border-color: #DBDBCE; }

.rtl blockquote {
  background-image: url("{T_THEME_PATH}/images/quote_rtl.gif"); }

blockquote blockquote {
  /* Nested quotes */
  background-color: #EFEED9; }

blockquote blockquote blockquote {
  /* Nested quotes */
  background-color: #EBEADD; }

/* Code block */
dl.codebox {
  background-color: #FFFFFF;
  border-color: #C9D2D8; }

dl.codebox dt {
  border-bottom-color: #CCCCCC; }

dl.codebox code {
  color: #2E8B57; }

.syntaxbg {
  color: #FFFFFF; }

.syntaxcomment {
  color: #FF8000; }

.syntaxdefault {
  color: #0000BB; }

.syntaxhtml {
  color: #000000; }

.syntaxkeyword {
  color: #007700; }

.syntaxstring {
  color: #DD0000; }

/* Attachments
----------------------------------------*/
.attachbox {
  background-color: #FFFFFF;
  border-color: #C9D2D8; }

.pm-message .attachbox {
  background-color: #F2F3F3; }

.attachbox dd {
  border-top-color: #C9D2D8; }

.attachbox p {
  color: #666666; }

.attachbox p.stats {
  color: #666666; }

.attach-image img {
  border-color: #999999; }

/* Inline image thumbnails */
dl.file dd {
  color: #666666; }

dl.thumbnail img {
  border-color: #666666;
  background-color: #FFFFFF; }

dl.thumbnail dd {
  color: #666666; }

dl.thumbnail dt a:hover {
  background-color: #EEEEEE; }

dl.thumbnail dt a:hover img {
  border-color: #368AD2; }

/* Post poll styles
----------------------------------------*/
fieldset.polls dl {
  border-top-color: #DCDEE2;
  color: #666666; }

fieldset.polls dl.voted {
  color: #000000; }

fieldset.polls dd div {
  color: #FFFFFF; }

.rtl .pollbar1, .rtl .pollbar2, .rtl .pollbar3, .rtl .pollbar4, .rtl .pollbar5 {
  border-right-color: transparent; }

.pollbar1 {
  background-color: #AA2346;
  border-bottom-color: #74162C;
  border-right-color: #74162C; }

.rtl .pollbar1 {
  border-left-color: #74162C; }

.pollbar2 {
  background-color: #BE1E4A;
  border-bottom-color: #8C1C38;
  border-right-color: #8C1C38; }

.rtl .pollbar2 {
  border-left-color: #8C1C38; }

.pollbar3 {
  background-color: #D11A4E;
  border-bottom-color: #AA2346;
  border-right-color: #AA2346; }

.rtl .pollbar3 {
  border-left-color: #AA2346; }

.pollbar4 {
  background-color: #E41653;
  border-bottom-color: #BE1E4A;
  border-right-color: #BE1E4A; }

.rtl .pollbar4 {
  border-left-color: #BE1E4A; }

.pollbar5 {
  background-color: #F81157;
  border-bottom-color: #D11A4E;
  border-right-color: #D11A4E; }

.rtl .pollbar5 {
  border-left-color: #D11A4E; }

/* Poster profile block
----------------------------------------*/
.postprofile {
  color: #666666;
  border-left-color: #088a08; }

.rtl .postprofile {
  border-right-color: #FFFFFF;
  border-left-color: transparent; }

.pm .postprofile {
  border-left-color: #088a08; }

.rtl .pm .postprofile {
  border-right-color: #DDDDDD;
  border-left-color: transparent; }

.postprofile strong {
  color: #000000; }

.online {
  background-image: url("{IMG_ICON_USER_ONLINE_SRC}"); }

/*  	
--------------------------------------------------------------
Colours and backgrounds for buttons.css
-------------------------------------------------------------- */
/* Big button images */
.reply-icon span {
  background-image: url("{IMG_BUTTON_TOPIC_REPLY_SRC}"); }

.post-icon span {
  background-image: url("{IMG_BUTTON_TOPIC_NEW_SRC}"); }

.locked-icon span {
  background-image: url("{IMG_BUTTON_TOPIC_LOCKED_SRC}"); }

.pmreply-icon span {
  background-image: url("{IMG_BUTTON_PM_REPLY_SRC}"); }

.newpm-icon span {
  background-image: url("{IMG_BUTTON_PM_NEW_SRC}"); }

.forwardpm-icon span {
  background-image: url("{IMG_BUTTON_PM_FORWARD_SRC}"); }

a.print {
  background-image: url("{T_THEME_PATH}/images/icon_print.gif"); }

a.sendemail {
  background-image: url("{T_THEME_PATH}/images/icon_sendemail.gif"); }

a.fontsize {
  background-image: url("{T_THEME_PATH}/images/icon_fontsize.gif"); }

/* Icon images
---------------------------------------- */
.sitehome {
  background-image: url("{T_THEME_PATH}/images/icon_home.gif"); }

.icon-faq {
  background-image: url("{T_THEME_PATH}/images/icon_faq.gif"); }

.icon-members {
  background-image: url("{T_THEME_PATH}/images/icon_members.gif"); }

.icon-home {
  background-image: url("{T_THEME_PATH}/images/icon_home.gif"); }

.icon-ucp {
  background-image: url("{T_THEME_PATH}/images/icon_ucp.gif"); }

.icon-register {
  background-image: url("{T_THEME_PATH}/images/icon_register.gif"); }

.icon-logout {
  background-image: url("{T_THEME_PATH}/images/icon_logout.gif"); }

.icon-bookmark {
  background-image: url("{T_THEME_PATH}/images/icon_bookmark.gif"); }

.icon-bump {
  background-image: url("{T_THEME_PATH}/images/icon_bump.gif"); }

.icon-subscribe {
  background-image: url("{T_THEME_PATH}/images/icon_subscribe.gif"); }

.icon-unsubscribe {
  background-image: url("{T_THEME_PATH}/images/icon_unsubscribe.gif"); }

.icon-pages {
  background-image: url("{T_THEME_PATH}/images/icon_pages.gif"); }

.icon-search {
  background-image: url("{T_THEME_PATH}/images/icon_search.gif"); }

/* Profile & navigation icons */
.email-icon, .email-icon a {
  background-image: url("{IMG_ICON_CONTACT_EMAIL_SRC}"); }

.aim-icon, .aim-icon a {
  background-image: url("{IMG_ICON_CONTACT_AIM_SRC}"); }

.yahoo-icon, .yahoo-icon a {
  background-image: url("{IMG_ICON_CONTACT_YAHOO_SRC}"); }

.web-icon, .web-icon a {
  background-image: url("{IMG_ICON_CONTACT_WWW_SRC}"); }

.msnm-icon, .msnm-icon a {
  background-image: url("{IMG_ICON_CONTACT_MSNM_SRC}"); }

.icq-icon, .icq-icon a {
  background-image: url("{IMG_ICON_CONTACT_ICQ_SRC}"); }

.jabber-icon, .jabber-icon a {
  background-image: url("{IMG_ICON_CONTACT_JABBER_SRC}"); }

.pm-icon, .pm-icon a {
  background-image: url("{IMG_ICON_CONTACT_PM_SRC}"); }

.quote-icon, .quote-icon a {
  background-image: url("{IMG_ICON_POST_QUOTE_SRC}"); }

/* Moderator icons */
.report-icon, .report-icon a {
  background-image: url("{IMG_ICON_POST_REPORT_SRC}"); }

.edit-icon, .edit-icon a {
  background-image: url("{IMG_ICON_POST_EDIT_SRC}"); }

.delete-icon, .delete-icon a {
  background-image: url("{IMG_ICON_POST_DELETE_SRC}"); }

.info-icon, .info-icon a {
  background-image: url("{IMG_ICON_POST_INFO_SRC}"); }

.warn-icon, .warn-icon a {
  background-image: url("{IMG_ICON_USER_WARN_SRC}"); }

/* Need updated warn icon */
/*  	
--------------------------------------------------------------
Colours and backgrounds for cp.css
-------------------------------------------------------------- */
/* Main CP box
----------------------------------------*/
#cp-main .panel li.row {
  border-bottom-color: #088a08;
  /*border-top-color: #F9F9F9;*/ }

#cp-main table.table1 thead th {
  color: #088a08;
  border-bottom-color: #088a08; }

#cp-main .pm-message {
  border-color: #DBDEE2;
  background-color: #FFFFFF; }

/* CP tabbed menu
----------------------------------------*/
#tabs {
  border-bottom-color: #088a08; }

#tabs a {
  background: #fff;
  border-color: #088a08; }

#tabs a span {
  color: #088a08; }

#tabs a:hover {
  background: #088a08; }

#tabs a:hover span {
  color: #fff; }

#tabs .activetab a {
  background: #088a08; }

#tabs .activetab a span {
  color: #fff; }

#tabs .activetab a:hover span {
  color: #fff; }

/* Mini tabbed menu used in MCP
----------------------------------------*/
#minitabs li {
  background-color: #fff;
  border-color: #088a08; }

#minitabs li a {
  color: #088a08; }

#minitabs li.activetab {
  background-color: #088a08; }

#minitabs li:hover {
  background-color: #088a08; }

#minitabs li:hover a {
  color: #fff; }

#minitabs li.activetab a, #minitabs li.activetab a:hover {
  color: #333333;
  color: #fff; }

/* UCP navigation menu
----------------------------------------*/
/* Link styles for the sub-section links */
#navigation a {
  color: #333333;
  background: none; }

#navigation hr {
  border-color: #088a08; }

#navigation a:hover {
  background-color: #088a08;
  color: #fff; }

#navigation #active-subsection a {
  color: #fff;
  background-color: #088a08; }

/* Preferences pane layout
----------------------------------------*/
#cp-main span.corners-top, #cp-menu span.corners-top {
  background-image: url("{T_THEME_PATH}/images/corners_left2.gif"); }

#cp-main span.corners-top span, #cp-menu span.corners-top span {
  background-image: url("{T_THEME_PATH}/images/corners_right2.gif"); }

#cp-main span.corners-bottom, #cp-menu span.corners-bottom {
  background-image: url("{T_THEME_PATH}/images/corners_left2.gif"); }

#cp-main span.corners-bottom span, #cp-menu span.corners-bottom span {
  background-image: url("{T_THEME_PATH}/images/corners_right2.gif"); }

/* Topicreview */
#cp-main .panel #topicreview span.corners-top, #cp-menu .panel #topicreview span.corners-top {
  background-image: url("{T_THEME_PATH}/images/corners_left.gif"); }

#cp-main .panel #topicreview span.corners-top span, #cp-menu .panel #topicreview span.corners-top span {
  background-image: url("{T_THEME_PATH}/images/corners_right.gif"); }

#cp-main .panel #topicreview span.corners-bottom, #cp-menu .panel #topicreview span.corners-bottom {
  background-image: url("{T_THEME_PATH}/images/corners_left.gif"); }

#cp-main .panel #topicreview span.corners-bottom span, #cp-menu .panel #topicreview span.corners-bottom span {
  background-image: url("{T_THEME_PATH}/images/corners_right.gif"); }

/* Friends list */
dl.mini dt {
  color: #088a08;
  border-color: #088a08; }

/* PM Styles
----------------------------------------*/
/* PM Message history */
.current {
  color: #088a08 !important; }

/* PM marking colours */
.pmlist li.pm_message_reported_colour, .pm_message_reported_colour {
  border-left-color: #BC2A4D;
  border-right-color: #BC2A4D; }

.pmlist li.pm_marked_colour, .pm_marked_colour {
  border-color: #FF6600; }

.pmlist li.pm_replied_colour, .pm_replied_colour {
  border-color: #A9B8C2; }

.pmlist li.pm_friend_colour, .pm_friend_colour {
  border-color: #5D8FBD; }

.pmlist li.pm_foe_colour, .pm_foe_colour {
  border-color: #000000; }

/* Avatar gallery */
#gallery label {
  background-color: #FFFFFF;
  border-color: #CCC; }

#gallery label:hover {
  background-color: #EEE; }

/*  	
--------------------------------------------------------------
Colours and backgrounds for forms.css
-------------------------------------------------------------- */
/* General form styles
----------------------------------------*/
select {
  border-color: #dbdbdb;
  background-color: #fff;
  color: #000; }

select:focus {
  border-color: #088a08; }

label {
  color: #333333; }

option.disabled-option {
  color: graytext; }

input, button, textarea {
  color: #088a08; }

input[type="text"]:focus, input[type="password"]:focus, textarea:focus {
  border-color: #088a08;
  color: inherit; }

button, input[type="button"], input[type="submit"], input[type="reset"] {
  background-color: #fff;
  border-color: #088a08; }

button:hover, input[type="button"]:hover {
  background-color: #088a08;
  color: #fff; }

/* Definition list layout for forms
---------------------------------------- */
dd label {
  color: #333; }

/* Hover effects */
fieldset dl:hover dt label {
  color: #088a08; }

fieldset.fields2 dl:hover dt label {
  color: inherit; }

/* Quick-login on index page */
fieldset.quick-login input.inputbox {
  background-color: #F2F3F3; }

/* Form button styles
---------------------------------------- */
input.button3 {
  background-image: none; }

/* <a> button in the style of the form buttons */
a.button1, a.button1:link, a.button1:visited, a.button1:active, a.button2, a.button2:link, a.button2:visited, a.button2:active {
  color: #000000; }

input.search {
  background-image: url("{T_THEME_PATH}/images/icon_textbox_search.gif"); }

input.disabled {
  color: #666666; }
";s:10:"theme_path";s:7:"fractal";s:10:"theme_name";s:7:"fractal";s:11:"theme_mtime";s:10:"1388697550";s:11:"imageset_id";s:1:"4";s:13:"imageset_name";s:7:"fractal";s:18:"imageset_copyright";s:25:"&copy; Tomasz Kuczak 2013";s:13:"imageset_path";s:7:"fractal";s:13:"template_path";s:7:"fractal";}}