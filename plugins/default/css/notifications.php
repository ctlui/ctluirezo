/**
 * Open Source Social Network
 * 
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.org>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence 
 */
.ossn-notifications-all li{
padding: 10px;
border-bottom: 1px solid #ddd;
display: block !important;
background : rgba(0, 0, 0, 0) radial-gradient(#d3d8e8, white) repeat scroll 0 0;
min-height: 15px;
}
.ossn-notifications-all li:hover{
background : rgba(0, 0, 0, 0) radial-gradient(white, #d3d8e8) repeat scroll 0 0;
border: 1px solid #2f4959;
}
.ossn-notification-icon-comment, .ossn-notification-icon-tag, .ossn-notification-icon-like, .ossn-notification-icon-like-post {
background: url('<?php echo ossn_theme_url(); ?>images/ossn_sprite.png') no-repeat;	
}
.ossn-notification-icon-comment {
background-position: -50px -5px;
width:18px;
height:18px;
position:absolute;
}

.ossn-notification-icon-tag {
background-position: -25px -101px;
width:18px;
height:18px;
position:absolute;
}
.ossn-notification-icon-like {
background-position: -5px -34px;
width:18px;
height:18px;
position:absolute;
}
.ossn-notification-icon-like-post {
background-position: -5px -34px;
width:18px;
height:18px;
position:absolute;
}
.ossn-notifications-all .data{
position: absolute;
margin-left: 23px;
margin-top: 1px;
}
.friends-added-text {
margin-right:10px;
}
.ossn-notification-unviewed {
background:#EEEEEE;
}
.ossn-no-notification {
padding: 21px;
text-align: center;
font-size: 12px;
font-weight: bold;
color:#ccc;
}

.notification-friends li{
display:block !important;
border-bottom: 1px solid #eee;
}
notification-friends .user{
font-size: 13px;
font-weight: bold;
}
.notification-friends .image {
width:50px;
height:50px;
display:inline-table;
border : 1px solid #2f4959;
border-radius : 5px;
}
.notification-friends .image img{
border-radius : 5px;
}
.ossn-notifications-friends-inner {
background : rgba(0, 0, 0, 0) radial-gradient(#d3d8e8, white) repeat scroll 0 0;
padding: 6px;
border : 1px solid #2f4959;
}
.ossn-notifications-friends-inner form{
display:inline-table;
}
.ossn-notification-page li img {
display:none;
}
.ossn-notif-hide {
display:none;
}    
.ossn-notification-mark-read {
  float: right;
  font-weight: normal;
  color : #fff;
}
.ossn-notification-mark-read:hover {
	text-decoration:underline;
}