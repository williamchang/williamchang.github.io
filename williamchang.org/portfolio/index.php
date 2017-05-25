<!DOCTYPE html>

<!-- XHTML5 Mobile-First Responsive Boilerplate, Designed By William Chang, Created 2016-07-27, Modified 2017-05-23 -->

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<title>Software Development Engineer Portfolio of William Chang</title>
	<meta name="description" content="The portfolio of Software Engineer William Chang contains projects, programming source codes (C, C++, C#, VB, Java, PHP, JavaScript, SQL), and screenshots." />
	<meta name="keywords" content="development, portfolio, resume, cv, curriculum vitae, job, work, career, research, architect, programmer, developer, software engineer, program manager, computer, projects, technologies, applications, programming, evangelist, it, information technology" />
	<meta name="author" content="William Chang" />

	<link rel="shortcut icon" href="/favicon.ico" />
	<link rel="apple-touch-icon" href="/apple-touch-icon-256x256.png" />

<!-- BEGIN: Styles -->
	<style>
/*! normalize.css v7.0.0 | MIT License | github.com/necolas/normalize.css */
html{line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,footer,header,nav,section{display:block}h1{font-size:2em;margin:.67em 0}figcaption,figure,main{display:block}figure{margin:1em 40px}hr{box-sizing:content-box;height:0;overflow:visible}pre{font-family:monospace,monospace;font-size:1em}a{background-color:transparent;-webkit-text-decoration-skip:objects}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:inherit}b,strong{font-weight:bolder}code,kbd,samp{font-family:monospace,monospace;font-size:1em}dfn{font-style:italic}mark{background-color:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}audio,video{display:inline-block}audio:not([controls]){display:none;height:0}img{border-style:none}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0}button,input{overflow:visible}button,select{text-transform:none}[type=reset],[type=submit],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:1px dotted ButtonText}fieldset{padding:.35em .75em .625em}legend{box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal}progress{display:inline-block;vertical-align:baseline}textarea{overflow:auto}[type=checkbox],[type=radio]{box-sizing:border-box;padding:0}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}details,menu{display:block}summary{display:list-item}canvas{display:inline-block}template{display:none}[hidden]{display:none}
	</style>
<!-- END: Styles -->

<!-- BEGIN: Page Specific Styles -->
	<style>
/* General Rules */
body {font-family:Verdana, Arial, Helvetica, sans-serif;font-size:14px;color:#000;}
h1 {color:#3c475b;font-weight:bold;}
h2 {color:#3c475b;font-weight:bold;}
h3 {color:#3c475b;font-weight:bold;}
h4 {color:#3c475b;font-weight:normal;text-transform:uppercase;font-family:Tahoma, Helvetica, sans-serif;}
p {margin:0 0 16px 0;}
ul {margin:0 20px 16px 20px;padding-left:20px;list-style-type:disc;}
ul ul {margin:0 0 0 30px;list-style-type:circle;}
ul ul ul {list-style-type:square;}
ol {margin:0 0 16px 30px;list-style-type:decimal;}
ol ol {margin:0 0 0 30px;}
strong {font-weight:bold;}

/* Basic Classes */
.bold {font-weight:bold;}
.italic {font-style:italic;}
.underline {text-decoration:underline;}
.strikethrough {text-decoration:line-through;}
.center {text-align:center;}
.hide {display:none;}
.list_heading {margin-bottom:4px;}
.word_break {word-break:break-all;}

/* Links */
a {color:#524cc3;}
a:link, a:visited {text-decoration:none;color:#524cc3;}
a:hover, a:active {text-decoration:underline;color:#524cc3;}
h1 a {color:#3c475b;}
h1 a:link, h1 a:visited {text-decoration:none;color:#3c475b;}
h1 a:hover, h1 a:active {text-decoration:none;color:#000;}
h3 a {color:#3c475b;}
h3 a:link, h3 a:visited {text-decoration:none;color:#3c475b;}
h3 a:hover, h3 a:active {text-decoration:none;color:#000;}
.a-light {color:#ddd;}
.a-light a:link, .a-light a:visited {text-decoration:none;color:#ddd;}
.a-light a:hover, .a-light a:active {text-decoration:underline;color:#ddd;}

/* Collapsible */
details {}
details summary {display:block;padding:16px 0 16px 0;border-top:solid 1px #d6d6d6;font-size:17px;font-weight:bold;color:#3c475b;cursor:pointer;}
details summary:focus {outline-style:none;}
details summary::-webkit-details-marker {display:none;}
details summary:before {content:'+';float:right;width:25px;height:25px;margin:-2px 0 0 10px;border-radius:4px;background-color:#c0c0c0;text-align:center;font-size:20px;font-weight:bold;color:#fff;}
details summary span {display:block;margin-top:6px;font-size:10px;font-weight:normal;}
details:first-of-type summary {border-top:0;}
details[open] summary:before {content:'\2013';}

/* Icons */
.navigation_home {background-image:url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgUFVCTElDICctLy9XM0MvL0RURCBTVkcgMS4xLy9FTicgJ2h0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCc+PHN2ZyBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MCA1MCIgaGVpZ2h0PSI1MHB4IiBpZD0iTGF5ZXJfMSIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgNTAgNTAiIHdpZHRoPSI1MHB4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48cmVjdCBmaWxsPSJub25lIiBoZWlnaHQ9IjUwIiB3aWR0aD0iNTAiLz48cG9seWxpbmUgZmlsbD0ibm9uZSIgcG9pbnRzPSI0NCwyMSA0NCw0OSA2LDQ5IDYsMjEiIHN0cm9rZT0iIzgwODA4MCIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS13aWR0aD0iMiIvPjxwb2x5bGluZSBmaWxsPSJub25lIiBwb2ludHM9IjE5LDQ5IDE5LDI4IDMxLDI4IDMxLDQ5ICIgc3Ryb2tlPSIjODA4MDgwIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLXdpZHRoPSIyIi8+PHBvbHlnb24gcG9pbnRzPSIzNSw1IDM1LDguMDE2IDM3LDEwLjA5NCAzNyw3IDM5LDcgMzksMTIuMjAzIDQxLDE0LjI2NiA0MSw1IiBmaWxsPSIjODA4MDgwIi8+PHBvbHlsaW5lIGZpbGw9Im5vbmUiIHBvaW50cz0iMS4xMSwyNS45NDIgMjUsMS4wNTMgNDguODksMjUuOTQzIiBzdHJva2U9IiM4MDgwODAiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2Utd2lkdGg9IjIiLz48L3N2Zz4=');}
.navigation_intro {background-image:url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgUFVCTElDICctLy9XM0MvL0RURCBTVkcgMS4xLy9FTicgJ2h0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCc+PHN2ZyBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MCA1MCIgaGVpZ2h0PSI1MHB4IiBpZD0iTGF5ZXJfMSIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgNTAgNTAiIHdpZHRoPSI1MHB4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48Y2lyY2xlIGN4PSIyNSIgY3k9IjI1IiBmaWxsPSJub25lIiByPSIyNCIgc3Ryb2tlPSIjYzBjMGMwIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLXdpZHRoPSIyIi8+PHJlY3QgZmlsbD0ibm9uZSIgaGVpZ2h0PSI1MCIgd2lkdGg9IjUwIi8+PHBhdGggZD0iTTI5LjkzMywzNS41MjhjLTAuMTQ2LTEuNjEyLTAuMDktMi43MzctMC4wOS00LjIxYzAuNzMtMC4zODMsMi4wMzgtMi44MjUsMi4yNTktNC44ODhjMC41NzQtMC4wNDcsMS40NzktMC42MDcsMS43NDQtMi44MTggYzAuMTQzLTEuMTg3LTAuNDI1LTEuODU1LTAuNzcxLTIuMDY1YzAuOTM0LTIuODA5LDIuODc0LTExLjQ5OS0zLjU4OC0xMi4zOTdjLTAuNjY1LTEuMTY4LTIuMzY4LTEuNzU5LTQuNTgxLTEuNzU5IGMtOC44NTQsMC4xNjMtOS45MjIsNi42ODYtNy45ODEsMTQuMTU2Yy0wLjM0NSwwLjIxLTAuOTEzLDAuODc4LTAuNzcxLDIuMDY1YzAuMjY2LDIuMjExLDEuMTcsMi43NzEsMS43NDQsMi44MTggYzAuMjIsMi4wNjIsMS41OCw0LjUwNSwyLjMxMiw0Ljg4OGMwLDEuNDczLDAuMDU1LDIuNTk4LTAuMDkxLDQuMjFjLTEuMjYxLDMuMzktNy43MzcsMy42NTUtMTEuNDczLDYuOTI0IGMzLjkwNiwzLjkzMywxMC4yMzYsNi43NDYsMTYuOTE2LDYuNzQ2czE0LjUzMi01LjI3NCwxNS44MzktNi43MTNDMzcuNjg4LDM5LjE4NiwzMS4xOTcsMzguOTMsMjkuOTMzLDM1LjUyOHoiIGZpbGw9IiNjMGMwYzAiLz48L3N2Zz4=');}
.navigation_featured {background-image:url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgUFVCTElDICctLy9XM0MvL0RURCBTVkcgMS4xLy9FTicgJ2h0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCc+PHN2ZyBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MCA1MCIgaGVpZ2h0PSI1MHB4IiBpZD0iTGF5ZXJfMSIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgNTAgNTAiIHdpZHRoPSI1MHB4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48cmVjdCBmaWxsPSJub25lIiBoZWlnaHQ9IjUwIiB3aWR0aD0iNTAiLz48cG9seWdvbiBmaWxsPSJub25lIiBwb2ludHM9IjI1LDMuNTUzIDMwLjY5NSwxOC4zMjEgNDYuNSwxOS4xNzMgMzQuMjE0LDI5LjE1MiAzOC4yODcsNDQuNDQ3IDI1LDM1Ljg0OCAxMS43MTIsNDQuNDQ3IDE1Ljc4NiwyOS4xNTIgMy41LDE5LjE3MyAxOS4zMDUsMTguMzIxIiBzdHJva2U9IiNjMGMwYzAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLXdpZHRoPSIyIi8+PC9zdmc+');}
.navigation_resume {background-image:url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjAiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNTAgNTAiIGZpbGw9IiNmYWxzZSI+PHBhdGggZD0iTSA3IDIgTCA3IDMgTCA3IDQ3IEwgNyA0OCBMIDggNDggTCA0MiA0OCBMIDQzIDQ4IEwgNDMgNDcgTCA0MyAxNSBMIDQzIDE0LjU5Mzc1IEwgNDIuNzE4NzUgMTQuMjgxMjUgTCAzMC43MTg3NSAyLjI4MTI1IEwgMzAuNDA2MjUgMiBMIDMwIDIgTCA4IDIgTCA3IDIgeiBNIDkgNCBMIDI5IDQgTCAyOSAxNSBMIDI5IDE2IEwgMzAgMTYgTCA0MSAxNiBMIDQxIDQ2IEwgOSA0NiBMIDkgNCB6IE0gMzEgNS40Mzc1IEwgMzkuNTYyNSAxNCBMIDMxIDE0IEwgMzEgNS40Mzc1IHogTSAxNSAyMiBMIDE1IDI0IEwgMzUgMjQgTCAzNSAyMiBMIDE1IDIyIHogTSAxNSAyOCBMIDE1IDMwIEwgMzEgMzAgTCAzMSAyOCBMIDE1IDI4IHogTSAxNSAzNCBMIDE1IDM2IEwgMzUgMzYgTCAzNSAzNCBMIDE1IDM0IHoiIGZpbGw9IiNjMGMwYzAiPjwvcGF0aD48L3N2Zz4=');}
.navigation_connect {background-image:url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgUFVCTElDICctLy9XM0MvL0RURCBTVkcgMS4xLy9FTicgJ2h0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCc+PHN2ZyBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MCA1MCIgaGVpZ2h0PSI1MHB4IiBpZD0iTGF5ZXJfMSIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgNTAgNTAiIHdpZHRoPSI1MHB4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48cmVjdCBmaWxsPSJub25lIiBoZWlnaHQ9IjUwIiB3aWR0aD0iNTAiLz48cGF0aCBkPSJNMzAuMjE3LDM1LjI1MmMwLDAsNC4wNDktMi4zMTgsNS4xMDktMi44NzUgYzEuMDU3LTAuNTU5LDIuMTUyLTAuNywyLjgxNy0wLjI5NGMxLjAwNywwLjYxNiw5LjQ2Myw2LjI0MSwxMC4xNzUsNi43MzljMC43MTIsMC40OTksMS4wNTUsMS45MjQsMC4wNzYsMy4zMiBjLTAuOTc1LDEuMzk2LTUuNDczLDYuOTE2LTcuMzc5LDYuODU3Yy0xLjkwOS0wLjA2Mi05Ljg0Ni0wLjIzNi0yNC44MTMtMTUuMjA3QzEuMjM4LDE4LjgyNiwxLjA2MSwxMC44ODcsMSw4Ljk3OCBDMC45MzksNy4wNyw2LjQ1OSwyLjU3MSw3Ljg1NSwxLjU5NWMxLjM5OC0wLjk3NSwyLjgyNS0wLjYwOCwzLjMyMSwwLjA3OGMwLjU2NCwwLjc4MSw2LjEyNCw5LjIxLDYuNzM2LDEwLjE3NiBjMC40MTksMC42NiwwLjI2NSwxLjc2MS0wLjI5NCwyLjgxOWMtMC41NTYsMS4wNi0yLjg3NCw1LjEwOS0yLjg3NCw1LjEwOXMxLjYzNCwyLjc4Nyw3LjE2LDguMzEyIEMyNy40MzEsMzMuNjE1LDMwLjIxNywzNS4yNTIsMzAuMjE3LDM1LjI1MnoiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2MwYzBjMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2Utd2lkdGg9IjIiLz48L3N2Zz4=');}

/* Console */
#console {position:fixed;z-index:2000;top:20%;left:20%;min-width:160px;min-height:120px;width:60%;height:30%;border:solid 4px #f00;background-color:#fff;opacity:0.9;overflow:scroll;}
#console .log {display:block;padding:4px;border-top:solid 1px #f00;}
#console .log:first-child {border-top:0;}
#console .log.template {display:none;}

/* Browser Safe Mode */
.main_avatar {display:none;}
.navigation_primary ul li {background-position:-100% -100%;}
.slider .prev {display:none;}
.slider .next {display:none;}
.badges ul {margin:0;padding:0;list-style:none;}

/* Browser Upgrade Prompt */
.browserupgrade {margin:0.2em 0;background:#ccc;color:#000;padding:0.2em 0;}

/* Extra small devices (portrait phones, less than 544px), Small devices (landscape phones, less than 768px), Medium devices (tablets, less than 992px) */
@media (max-width:991px) {
	/* General Rules */
	body {}
	#main_frame {background:url("http://williamchang.org/portfolio/images/body_bg.jpg") #280b05 repeat-x scroll 0 0;}
	#main_frame > #main_frame_inner {}

	#main_frame #region_header {padding:20px 0;}
	#main_frame #region_header .main_title_superscript {display:block;text-align:center;font-size:12px;}
	#main_frame #region_header .main_heading {margin:0;text-align:center;}
	#main_frame #region_header .main_heading .main_link {display:block;}
	#main_frame #region_header .main_heading .main_link .main_avatar {display:inline;width:100px;height:100px;margin:20px 0 10px 0;border-radius:50%;}
	#main_frame #region_header .main_heading .main_link .main_title {display:block;}
	#main_frame #region_middle {margin:0;padding-top:2px;border-top-right-radius:10px;border-top-left-radius:10px;background-color:#fff;font-size:16px;}
	#main_frame #region_footer {margin-top:-20px;padding:10px 0 60px 0;background-color:#fff;}

	h1, h2, h3, h4, h5, h6, summary, p, .main_title_superscript {margin-right:10px;margin-left:10px;}
	h1, h2, h3, h4, h5, h6 {text-align:center;}
	.main_title_superscript {color:#ccc;}
	.main_title_superscript a:link, .main_title_superscript a:visited {text-decoration:none;color:#ccc;}
	.main_title_superscript a:hover, .main_title_superscript a:active {text-decoration:underline;color:#ccc;}
	.main_heading {color:#fff;}
	.main_heading a:link, .main_heading a:visited {text-decoration:none;color:#fff;}
	.main_heading a:hover, .main_heading a:active {text-decoration:none;color:#fff;}
	section:last-of-type {min-height:1000px;}

	/* Simple Touch Tab Bar */
	#tabbar {position:fixed;z-index:1000;width:100%;height:41px;overflow:hidden;background-color:#f7f7f7;}
	#tabbar.tabbar_hide {}
	#tabbar.tabbar_show {}
	#tabbar ul {display:table;table-layout:fixed;width:100%;height:100%;margin:0;padding:0;list-style:none;}
	#tabbar ul li {display:table-cell;background-repeat:no-repeat;background-position:50% 20%;background-size:20px 20px;filter:brightness(0.7);}
	#tabbar ul li a {display:block;height:40px;text-align:center;line-height:60px;font-size:10px;}
	#tabbar a:link, #tabbar a:visited {text-decoration:none;color:#c0c0c0;}
	#tabbar a:hover, #tabbar a:active {text-decoration:none;color:#c0c0c0;}

	/* Simple Touch Slider */
	.slider {display:block;z-index:0;height:240px;margin-bottom:16px;padding:10px 0 10px 10px;background-color:#555;overflow-x:scroll;overflow-y:hidden;-webkit-overflow-scrolling:touch;white-space:nowrap;}
	.slider .slides {}
	.slider .slides figure {position:relative;display:inline-block;width:320px;height:240px;margin:0 10px 0 0;background-color:#000;border-radius:6px;text-align:center;overflow:hidden;}
	.slider .slides figure a {}
	.slider .slides figure img {vertical-align:top;}
	.slider .slides figure figcaption {position:absolute;bottom:20px;width:318px;text-align:center;text-shadow:0 0 5px rgba(0,0,0,1);color:#fff;}
	.slider .prev {display:none;}
	.slider .next {display:none;}

	/* Viewer */
	#viewer_resume {display:none;margin:0 0 16px 0;}

	/* Footer */
	.credit {margin:10px 0;font-size:10px;color:#666;}
	.credit a:link, .credit a:visited {text-decoration:none;color:#666;}
	.credit a:hover, .credit a:active {text-decoration:underline;color:#aaa;}
	.badges ul {margin:0;padding:0;width:100%;list-style:none;}
	.badges ul li {display:inline;}
}

/* All portrait, Extra small devices, Small devices, Medium devices */
@media (max-width:991px) and (orientation:portrait) {
	/* Simple Touch Tab Bar */
	#tabbar {position:fixed;bottom:0;left:0;transition:bottom 0.1s;}
	#tabbar.tabbar_hide {bottom:-41px;}
	#tabbar.tabbar_show {bottom:0;}
	#tabbar ul {border-top:solid 1px #bbb;}
}

/* All landscape, Extra small devices, Small devices, Medium devices */
@media (max-width:991px) and (orientation:landscape) {
	#main_frame #region_header {margin-top:40px;}
	/* Simple Touch Tab Bar */
	#tabbar {position:fixed;top:0;left:0;transition:top 0.1s;}
	#tabbar.tabbar_hide {top:-41px;}
	#tabbar.tabbar_show {top:0;}
	#tabbar ul {border-bottom:solid 1px #bbb;}
}

/* Extra extra small devices (portrait phones, less than 321px) */
/*@media (max-width:320px) {
	#main_frame #region_header .main_title_superscript {display:none;width:180px;top:0;}
	#main_frame #region_header .main_heading .main_link .main_title {margin-top:40px;}
}*/

/* Medium devices (tablets, less than 992px) */
@media (min-width:768px) and (max-width:991px) {
	html {-ms-overflow-style:-ms-autohiding-scrollbar;}
	#tabbar {transition:none;}
	#tabbar.tabbar_hide {display:block;}
	#tabbar.tabbar_show {}
}

/* Large devices (desktops, 992px and up) */
@media (min-width:992px) {
	/* General Rules */
	body {background:url("http://williamchang.org/portfolio/images/body_bg.jpg") #280b05 repeat-x fixed 0 0;}
	#main_frame {width:800px;margin:0 auto;padding:60px 0 30px 0;overflow:hidden;}
	#main_frame > #main_frame_inner {}
	#main_frame .region_column1 {position:fixed;width:160px;overflow:hidden;}
	#main_frame .region_column1 > .region_column1_inner {}
	#main_frame .region_column2 {float:right;width:640px;overflow:hidden;}
	#main_frame .region_column2 > .region_column2_inner {}

	#main_frame .region_column1 #region_header {color:#000;}
	#main_frame .region_column1 #region_header .main_title_superscript {margin:0 10px 0 20px;font-size:9px;color:#fff;}
	#main_frame .region_column1 #region_header .main_heading {margin-bottom:12px;}
	#main_frame .region_column1 #region_header .main_heading .main_link {}
	#main_frame .region_column1 #region_header .main_heading .main_link .main_avatar {display:inline;width:100px;height:100px;border-radius:50%;}
	#main_frame .region_column1 #region_header .main_heading .main_link .main_title {font-size:14px;color:#fff;}
	#main_frame .region_column2 #region_middle {padding:10px 0 10px 0;border-radius:10px;background:#fff;}
	#main_frame .region_column2 #region_footer {display:block;clear:both;}

	h1, h2, h3, h4, h5, h6, summary, p {margin-right:20px;margin-left:20px;}
	.main_title_superscript {color:#fff;}
	.main_title_superscript a:link, .main_title_superscript a:visited {text-decoration:none;color:#ccc;}
	.main_title_superscript a:hover, .main_title_superscript a:active {text-decoration:underline;color:#ccc;}

	/* Primary Navigation */
	.navigation_primary {}
	.navigation_primary ul {margin-left:0;padding-left:20px;list-style:none;}
	.navigation_primary ul li {padding:8px 0 8px 30px;background-repeat:no-repeat;background-position:0 50%;background-size:20px 20px;filter:brightness(2);}
	.navigation_primary a:link, .navigation_primary a:visited {text-decoration:none;color:#c0c0c0;}
	.navigation_primary a:hover, .navigation_primary a:active {text-decoration:underline;color:#c0c0c0;}

	/* Simple Click Slider */
	.slider {position:relative;display:block;height:240px;margin:0 0 16px 0;padding:10px 0;background-color:#efefef;overflow:hidden;white-space:nowrap;}
	.slider .slides {position:absolute;width:10000px;height:240px;}
	.slider .slides figure {position:relative;float:left;width:320px;height:240px;margin:0 0 0 160px;transition:0.5s ease-in-out;background-color:#000;border-radius:6px;text-align:center;overflow:hidden;}
	.slider .slides figure a {}
	.slider .slides figure img {vertical-align:top;}
	.slider .slides figure figcaption {position:absolute;bottom:20px;width:318px;text-align:center;text-shadow:0 0 5px rgba(0,0,0,1);color:#fff;}
	.slider .prev {position:absolute;display:block;top:0;left:0;width:25%;height:100%;}
	.slider .prev span {position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);font-size:40px;font-weight:bold;color:#ccc;}
	.slider .next {position:absolute;display:block;top:0;right:0;width:25%;height:100%;}
	.slider .next span {position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);font-size:40px;font-weight:bold;color:#ccc;}
	.slider a:focus {outline-style:none;}

	/* Viewer */
	#viewer_resume {display:block;margin:0 0 16px 0;}

	/* Footer */
	.credit {margin:10px 0;font-size:9px;color:#aaa;}
	.credit a:link, .credit a:visited {text-decoration:none;color:#aaa;}
	.credit a:hover, .credit a:active {text-decoration:underline;color:#eee;}
	.badges ul {margin:0;padding:0;width:100%;list-style:none;}
	.badges ul li {display:inline;}
}

	</style>
<!-- END: Page Specific Styles -->

<!--[if lt IE 9]>
	<script>
/* HTML5 Shiv for Microsoft Internet Explorer */
document.createElement('header');
document.createElement('nav');
document.createElement('main');
document.createElement('section');
document.createElement('details');
document.createElement('summary');
document.createElement('figure');
document.createElement('figcaption');
document.createElement('footer');
	</script>
<![endif]-->

</head>
<body>
	<div id="main_frame"><div id="main_frame_inner">

		<!--[if lte IE 9]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
		<![endif]-->
		<div id="console" class="hide">
			<div class="log template">Test Console Log</div>
		</div>

		<div class="region_column1"><div class="region_column1_inner">

<!-- BEGIN: Region Header -->
			<header id="region_header">
				<div class="main_title_superscript">Following my role models <a href="https://en.wikipedia.org/wiki/John_Resig">John Resig</a>, <a href="https://en.wikipedia.org/wiki/John_Carmack">John Carmack</a>, &amp; <a href="https://www.hanselman.com">Scott Hanselman</a></div>
				<h1 class="main_heading"><a class="main_link" href="http://williamchang.org/portfolio/"><img class="main_avatar" src="http://williamchang.org/portfolio/images/avatar.jpg" alt=""><span class="main_title">William Chang</span></a></h1>
			</header>
<!-- END: Region Header -->

			<nav id="tabbar" class="navigation_primary"><ul>
				<li class="navigation_intro"><a href="#section_intro">Intro</a></li>
				<li class="navigation_featured"><a href="#section_featured">Featured</a></li>
				<li class="navigation_resume"><a href="#section_resume">Resume</a></li>
				<li class="navigation_connect"><a href="#section_connect">Connect</a></li>
			</ul></nav>

		</div></div>
		<div class="region_column2"><div class="region_column2_inner">

<!-- BEGIN: Region Middle -->
			<main id="region_middle">
				<section id="section_intro">
					<h2>Development Portfolio</h2>
					<p>Hi, I'm a Full-Stack Software Development Engineer, Architect, IT Team Leader, <a href="https://en.wikipedia.org/wiki/DevOps">DevOps</a>, Programming Tutor, and Best Practice Enforcer. The following principles I embrace are <a href="https://en.wikipedia.org/wiki/KISS_principle">KISS</a> (Keep It Simple, Stupid), <a href="https://en.wikipedia.org/wiki/You_aren%27t_gonna_need_it">YAGNI</a> (You Aren't Gonna Need It), <a href="https://en.wikipedia.org/wiki/Component-based_software_engineering">Component-Based Development</a> (CBD), and <a href="https://en.wikipedia.org/wiki/Service-oriented_architecture">Service-Oriented Architecture</a> (SOA). I have a passion for creating and enhancing anything technology related. My motivation in development is to help end-users achieve their objectives and to empower them to excel.</p>
					<h4>Specialities</h4>
					<p>I have extensive experience in many fields of technology, but the work I am most passionate about are related to developing full-stack web applications, creating mobile apps, designing user experiences, IT <a href="https://en.wikipedia.org/wiki/Release_management">release management</a>, and managing <a href="https://en.wikipedia.org/wiki/Cross-functional_team">various teams</a>. The CMS (<a href="https://en.wikipedia.org/wiki/Content_management_system">Content Management System</a>) is another field of technology I have many years of experience. The popular CMS I work with mostly are <a href="https://en.wikipedia.org/wiki/WordPress">WordPress</a>, <a href="https://en.wikipedia.org/wiki/Drupal">Drupal</a>, <a href="https://en.wikipedia.org/wiki/Umbraco">Umbraco</a>, and <a href="https://www.sitecore.net/">Sitecore</a>. My specialization in CMS development is migrating content from old systems, integrating services (eg <a href="https://en.wikipedia.org/wiki/Web_analytics">Analytics</a>, <a href="https://en.wikipedia.org/wiki/Coveo">Coveo</a>, <a href="https://en.wikipedia.org/wiki/Apache_Lucene">Lucene</a>, <a href="https://en.wikipedia.org/wiki/Apache_Solr">Solr</a>), and architecting multiple sites. IT Infrastructure is another specialty that I lead as DevOps establishing strategies from source control branching to release management, creating environments (DEV, QA, STAGE, PROD) to be deployed sequentially, and automating the process of software delivery (aka <a href="https://en.wikipedia.org/wiki/Continuous_delivery">Continuous Delivery</a>).</p>
					<h4>More About Me</h4>
					<p>I'm a minimalist always seeking for efficiency and optimization. I read a lot of technology and science news. I don't sleep much because I love learning new technologies. From experience at work, I practice stakeholder consultant, managing teams, training developers, enforcing standard practices, creating automation tools, developing applications, software engineering, and user interface engineering. During my spare time, I enjoy doing technology research and prototyping experimental technologies for the future.</p>
				</section>
				<section id="section_featured">
					<h2>Featured</h2>
					<p>The list below is a long history of projects between my hobbies and jobs. The most recent projects are on the top and the oldest projects are at the bottom of the list.</p>
					<details open="open">
						<summary>Enterprise Apps, SeaWorld Parks &amp; Entertainment <span>Sitecore Certified, ASP.NET MVC C#, MS SQL, JavaScript</span></summary>
						<p>An enterprise system composed of many applications (eg sitecore, ecommerce, resellers), services (eg reservations, payments), and data (eg accounts, products, orders) all working together in unison. I started as a full-stack developer and then taking on many roles as a Sitecore Architect, IT Team Leader, and DevOps. For many years, I developed many enterprise applications for the company, implemented many features, and automated the infrastructure for the IT department. My colleagues recognized me as their production problem solver (digging through layers of code and data to find the cause) and their CMS expert for all Sitecore projects.</p>
						<div class="slider">
							<div class="slides">
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_seaworld_buschgardens_ecommerce1.png" alt="Ecommerce"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_seaworld_ecommerce1.png" alt="Ecommerce"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_seaworld_ecommerce2.png" alt="Ecommerce"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_seaworld_ecommerce3.png" alt="Ecommerce"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_seaworld_hispanic1.png" alt="Sitecore CMS"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_seaworld_hispanic2.png" alt="Sitecore CMS"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_seaworld_hispanic3.png" alt="Sitecore CMS"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_seaworld_hispanic4.png" alt="Sitecore CMS"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_seaworld_parkevents1.png" alt="Sitecore Park Events"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_seaworld_parkhours1.png" alt="Sitecore Park Hours"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_seaworld_parkshows1.png" alt="Sitecore Park Shows"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_seaworld_parkshows2.png" alt="Sitecore Park Shows"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_hos_contestmedia1.png" alt="Sitecore CMS"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_hos_contestmedia2.png" alt="Sitecore CMS"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_hos_contesttwitter1.png" alt="Sitecore CMS"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_hos_contesttwitter2.png" alt="Sitecore CMS"></a></figure>
							</div>
							<a href="javascript:;" class="prev"><span>&lt;</span></a>
							<a href="javascript:;" class="next"><span>&gt;</span></a>
						</div>
					</details>
					<details>
						<summary>SubmittalCheck, Elite Technical <span>ASP.NET MVC C#, MS SQL, JavaScript</span></summary>
						<p>This project started in 2008 using two emerging technologies, ASP.NET MVC and NHibernate ORM (Object-Relational Mapping). I developed an innovative web application called &quot;SubmittalCheck&quot;, a digital handshake or authorization service that guarantees that all submitted candidates have been informed regarding pertinent job details and have expressly authorized the presenting staffing vendor to represent their interest in pursuing each job position. The candidates are also empowered to authorize their resume submittals and validate their staffing agency relationship.</p>
						<div class="slider">
							<div class="slides">
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_elitetechnical_submittalcheck1.png" alt="Homepage"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_elitetechnical_submittalcheck2.png" alt="Submittal Management"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_elitetechnical1.png" alt="Corporate Homepage"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_elitetechnical2.png" alt="Corporate Homepage"></a></figure>
							</div>
							<a href="javascript:;" class="prev"><span>&lt;</span></a>
							<a href="javascript:;" class="next"><span>&gt;</span></a>
						</div>
					</details>
					<details>
						<summary>Apple iPhone App <span>Objective-C, C++, OpenGL ES, Physics 2D</span></summary>
						<p>One of my hobby projects I do on my spare time. I created a console (CLI, command line interface) to quickly experiment features and a game using OpenGL ES 1.1 and Box2D physics engine for collision, bounce, and friction. This project is a prototype, by creating a simple application that explore the possibilities on Apple iPhone.</p>
						<p class="italic bold">Review My <a href="https://github.com/williamchang/creativecrew-native-mobile-ios-sandbox">Source Code</a></p>
						<div class="slider">
							<div class="slides">
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/appleiphone_sandbox4.png" alt="Game Development"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/appleiphone_sandbox5.png" alt="Physics Debugging"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/appleiphone_sandbox2.png" alt="Console"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/appleiphone_sandbox3.png" alt="Title Screen"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/appleiphone_sandbox1.png" alt="Branding"></a></figure>
							</div>
							<a href="javascript:;" class="prev"><span>&lt;</span></a>
							<a href="javascript:;" class="next"><span>&gt;</span></a>
						</div>
					</details>
					<details>
						<summary>Google Android App <span>Java</span></summary>
						<p>One of my hobby projects I do on my spare time is creating a simple prototype application that explore the possibilities on Google Android. I created a console (CLI, command line interface) to quickly experiment features and a 2D graphics simulation by side scrolling a level using tiles. The tiles are cutouts from a single image for graphics performance and conserving memory. The tiles are used as building blocks to construct a seamless world.</p>
						<p class="italic bold">Review My <a href="https://github.com/williamchang/creativecrew-native-mobile-android-sandbox">Source Code</a></p>
						<div class="slider">
							<div class="slides">
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/googleandroid_sandbox3.png" alt="2D Tiles Side Scrolling"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/googleandroid_sandbox2.png" alt="Console"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/googleandroid_sandbox1.png" alt="Branding"></a></figure>
							</div>
							<a href="javascript:;" class="prev"><span>&lt;</span></a>
							<a href="javascript:;" class="next"><span>&gt;</span></a>
						</div>
					</details>
					<details>
						<summary>JavaScript Components and Helpers, jQuery Plugins</summary>
						<p>The following JavaScript components and helper functions I created and reused to meet the needs of many web applications.</p>
						<p class="list_heading">Demos and Documentations</p>
						<ul>
							<li><a href="http://williamchang.org/portfolio/demos/diehard_collapsible/">Collapsible Component</a></li>
							<li><a href="http://williamchang.org/portfolio/demos/diehard_tabs/">Tabs Component</a></li>
							<li><a href="http://williamchang.org/portfolio/demos/diehard_aspnetvalidationhighlighter/">Validation Highlighter Component for ASP.NET Web Forms</a></li>
						</ul>
						<p class="list_heading">Source Codes</p>
						<ul>
							<li><a href="https://github.com/williamchang/pushboard/blob/master/src/main/webapp/_assets/js/jquery.wcBoardGame.js">Push Board Game (WebSocket, Java EE, Maven, SQLite, Apache Tomcat Embed)</a></li>
							<li><a href="http://williamchang.org/portfolio/demos/diehard_collapsible/diehard_collapsible.js">Collapsible Component (jQuery Plugin)</a></li>
							<li><a href="http://williamchang.org/portfolio/demos/diehard_tabs/diehard_tabs.js">Tabs Component (jQuery Plugin)</a></li>
							<li><a href="http://williamchang.org/portfolio/demos/diehard_aspnetvalidationhighlighter/wc_aspnetvalidationhighlighter.js">Validation Highlighter Component (jQuery Plugin)</a></li>
							<li><a href="https://github.com/williamchang/creativecrew-web-aspnet-foundation_aspnet_webforms/blob/master/js/diehard_text_editor.js">Rich Text Editor On-demand Loader Component (TinyMCE)</a></li>
							<li><a href="https://github.com/williamchang/creativecrew-web-aspnet-foundation_aspnet_webforms/blob/master/js/diehard_gallery_image.js">Image Gallery Component (jQuery Plugin)</a></li>
							<li><a href="https://github.com/williamchang/creativecrew-web-aspnet-foundation_aspnet_webforms/blob/master/css/base/main.js">Helper Functions (Vanilla JavaScript)</a></li>
						</ul>
					</details>
					<details>
						<summary>Domain Generator <span>PHP, MySQL, jQuery</span></summary>
						<p>A hobby project I created to learn about Single-Page Application (SPA), which is mostly moving the business logic layer to the client-side. All communications (HTTP, request and response protocols) to the database is by AJAX and JSON to the server-side, as a Web Service API (Application Program Interface).</p>
						<p class="italic bold">Review My <a href="https://github.com/williamchang/creativecrew-web-php-domaingenerator">Source Code</a> and <a href="http://williamchang.org/domaingenerator/">Demo</a></p>
					</details>
					<details>
						<summary>SCINET, Seminole County Government Florida <span>ASP.NET VB, MS SQL, YUI JavaScript, Ext JS</span></summary>
						<p>A large project started in June 2003 that I helped developed with the goal of analyzing government business process, providing recommendations for process improvement, and software development to support the process changes. Since then analysis and refinement of hundreds of processes has taken place along with the supporting software development saving Seminole County millions of dollars in efficiency improvements annually.</p>
						<div class="slider">
							<div class="slides">
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_scinet1.png" alt="Parcel Viewer"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_scinet2.png" alt="Desktop User Interface"></a></figure>
							</div>
							<a href="javascript:;" class="prev"><span>&lt;</span></a>
							<a href="javascript:;" class="next"><span>&gt;</span></a>
						</div>
					</details>
					<details>
						<summary>FINDER, Florida Law Enforcement <span>ASP.NET C#, MS SQL</span></summary>
						<p>A large project started in 2002 that I helped developed with a team. The first version of FINDER (Florida Integrated Network for Data Exchange and Retrieval) was installed in October 2003 connecting five law enforcement agencies in a federated peer-to-peer data sharing system and now has users from nearly every major law enforcement agency in the state of Florida. This application provides searching capability of hundreds of data sources and has provided a key role in solving hundreds of crimes.</p>
						<div class="slider">
							<div class="slides">
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_finder1.png" alt="Portal"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_finder2.png" alt="Search Form"></a></figure>
							</div>
							<a href="javascript:;" class="prev"><span>&lt;</span></a>
							<a href="javascript:;" class="next"><span>&gt;</span></a>
						</div>
					</details>
					<details>
						<summary>Program Assessment, UCF OEAS <span>ASP.NET VB, MS SQL, YUI JavaScript</span></summary>
						<p>A web application designed to streamline and improve the assessment process at University of Central Florida (UCF). It includes complex state-based workflow and implements some software advances such as non-programmatic interface control and automated video-based embedded training.</p>
						<div class="slider">
							<div class="slides">
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_ucf_assessment1.png" alt="Homepage and Login"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_ucf_assessment2.png" alt="User Welcome Page"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_ucf_assessment3.png" alt="Help System"></a></figure>
							</div>
							<a href="javascript:;" class="prev"><span>&lt;</span></a>
							<a href="javascript:;" class="next"><span>&gt;</span></a>
						</div>
					</details>
					<details>
						<summary>Waste Assessment, Brevard County Government Florida <span>ASP.NET VB, MS SQL, jQuery</span></summary>
						<p>A web application that manages all aspects of determining the solid waste non-ad valorem assessment for all residentials and commercial properties based on different assessment types. This process is accomplished to provide the tax collector's office with solid waste non-ad valorem assessments that become part of the annual property tax bills.</p>
						<div class="slider">
							<div class="slides">
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_brevardcountyflorida1.png" alt="Login"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_brevardcountyflorida2.png" alt="Search Form"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_brevardcountyflorida3.png" alt="Data Results"></a></figure>
							</div>
							<a href="javascript:;" class="prev"><span>&lt;</span></a>
							<a href="javascript:;" class="next"><span>&gt;</span></a>
						</div>
					</details>
					<details>
						<summary>US Y-STR Database <span>ASP.NET VB, MS SQL, jQuery</span></summary>
						<p>A small project assigned to me to develop the front-end and the server-side code for the web forms. This NIJ funded project is a web application that searches an existing database of Y chromosome haplotypes.</p>
						<div class="slider">
							<div class="slides">
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_us_y-str1.png" alt="Search Form"></a></figure>
							</div>
							<a href="javascript:;" class="prev"><span>&lt;</span></a>
							<a href="javascript:;" class="next"><span>&gt;</span></a>
						</div>
					</details>
					<details>
						<summary>Tournament Management, UCF CECS Diversity <span>ASP.NET VB, MS SQL, YUI JavaScript</span></summary>
						<p>A &quot;one person team&quot; taking on a medium size project, I was assigned to rapidly develop a web application to manage tournaments (aka tournament management system). Everything was designed and architected by me, from the backend (SQL database schema and ASP.NET Web Forms) to the frontend (HTML, CSS, JavaScript). This application features user management, competition registration (events, teams, volunteers, judges), scoring, ranking, and surveying.</p>
						<div class="slider">
							<div class="slides">
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_ucf_cecs_diversity1.png" alt="Homepage"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_ucf_cecs_diversity2.png" alt="Google Maps Integration"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_ucf_cecs_diversity3.png" alt="User Account Registration"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_ucf_cecs_diversity4.png" alt="Team Registration"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_ucf_cecs_diversity5.png" alt="Add Team"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_ucf_cecs_diversity6.png" alt="Control Panel"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_ucf_cecs_diversity7.png" alt="Event Management"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_ucf_cecs_diversity8.png" alt="Scoreboard"></a></figure>
							</div>
							<a href="javascript:;" class="prev"><span>&lt;</span></a>
							<a href="javascript:;" class="next"><span>&gt;</span></a>
						</div>
					</details>
					<details>
						<summary>Knightverse, Charlotte County Government Florida <span>ASP.NET C#, MS SQL, jQuery</span></summary>
						<p>Before any major web-based word processors emerged like Google Docs and Microsoft Word Online, this project I developed is a web application that allows users to collaborate and create documents. The sharing feature has ability to assign privileges to read, comment, and modify documents. The original vision for Knightverse came from the planning department of Charlotte County Florida. They were looking for a new way to produce web-based documents versus traditional ways for their operation.</p>
						<div class="slider">
							<div class="slides">
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_knightverse1.png" alt="Homepage"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_knightverse2.png" alt="Login"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_knightverse3.png" alt="Document View Mode"></a></figure>
							</div>
							<a href="javascript:;" class="prev"><span>&lt;</span></a>
							<a href="javascript:;" class="next"><span>&gt;</span></a>
						</div>
					</details>
					<details>
						<summary>Content Management, UCF CECS Engineering Technology <span>ASP.NET C#, MS SQL, jQuery</span></summary>
						<p>Before any popular content management systems (CMS) emerged for ASP.NET 2.0, I was assigned to develop a web application to empower professors to manage content and files easily. I architect the application for professors to privately control their own set of pages and blogs using a friendly rich text editor and to quickly attach files using AJAX.</p>
						<div class="slider">
							<div class="slides">
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_ucf_ent1.png" alt="Published Content"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_ucf_ent2.png" alt="Edit User"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_ucf_ent3.png" alt="Content Types Management"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_ucf_ent4.png" alt="Edit Page"></a></figure>
							</div>
							<a href="javascript:;" class="prev"><span>&lt;</span></a>
							<a href="javascript:;" class="next"><span>&gt;</span></a>
						</div>
					</details>
					<details>
						<summary>Foodosaurus, Wackadoo's Grub &amp; Brew <span>ASP.NET C#, MS SQL, jQuery</span></summary>
						<p>A proof-of-concept (POC) that I rapidly developed with the restaurant owner funding the project, it is to explore the possibility of a potential product or service to be successful. This web application features searching menu items in all restaurants, calling out favorites, and managing menus for restaurants.</p>
						<div class="slider">
							<div class="slides">
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_foodosaurus1.png" alt="Restaurant Menu Editor"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_foodosaurus2.png" alt="Restaurant Menu Editor"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_foodosaurus3.png" alt="Homepage"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/web_aspnet_foodosaurus4.png" alt="User Dashboard"></a></figure>
							</div>
							<a href="javascript:;" class="prev"><span>&lt;</span></a>
							<a href="javascript:;" class="next"><span>&gt;</span></a>
						</div>
					</details>
					<details>
						<summary>Swing GUI and Java ME <span>Java, Swing, Windows Mobile</span></summary>
						<p>A collection of small hobby projects I created for exploring, experimenting, and prototyping Java on desktop using GUI Swing and on mobile using Windows Mobile. The projects use Eclipse IDE (Integrated Development Environment).</p>
						<p class="italic bold">Review My <a href="http://williamchang.org/portfolio/files/java_sandbox_20091203.zip">Source Code</a></p>
					</details>
					<details>
						<summary>Game Engine <span>C++, OpenGL, DirectX, Physics 3D</span></summary>
						<p>An old project started in 2004 for my organization called Creative Crew (was known as, Developers Club) at University of Central Florida (UCF). I developed a game engine called &quot;Discovery&quot; using OGRE, a object-oriented graphics rendering engine, seamlessly using OpenGL and DirectX on multiple operating systems: Microsoft Windows, Linux, and Apple Mac OS X. The following physics engines have been replaced multiple times because of operating system compatibility issues or licensing issues: Newton Game Dynamics, NVIDIA PhysX, and Bullet.</p>
						<ul>
							<li><a href="https://github.com/williamchang/creativecrew-native-desktop-discover">Review Source Code</a></li>
							<li><a href="https://www.youtube.com/watch?v=yn5SnbdeE6U">Video of Early Development 1</a></li>
							<li><a href="https://www.youtube.com/watch?v=wpiOgCotHu8">Video of Early Development 2</a></li>
							<li><a href="https://www.youtube.com/watch?v=RR0lIdaMSys">Video of Level Created using Autodesk Maya</a></li>
							<li><a href="https://www.youtube.com/watch?v=T17DW68Fb3k">Video of 3D Mouse Picker and Physics Demonstrations</a></li>
						</ul>
						</details>
					<details>
						<summary>Level Design for Quake 3 Weapons Factory Arena <span>QERadiant, GtkRadiant</span></summary>
						<p>A very old hobby project I done during my teenage years, I was a level designer (aka mapper) for a game mod called Weapons Factory Arena (WFA) for Quake 3 Arena (Q3). The level editor tool I used was QERadiant and later switched to GtkRadiant, with a better lightmap &quot;.bsp&quot; compiler called &quot;ydnar Q3Map&quot;. I renamed the file types below from &quot;.pk3&quot; to &quot;.zip&quot; for your convenience. The &quot;.pk3&quot; file type is simply an archive file used by the Quake 3 engine. Unfortunately, the source maps were lost or misplaced.</p>
						<p class="italic bold">Available for download: <a href="http://williamchang.org/portfolio/files/map-gensurf-wfa.zip">Gensurf</a>, <a href="http://williamchang.org/portfolio/files/map-cancer-wfa.zip">Classic Cancer</a>, <a href="http://williamchang.org/portfolio/files/map-cbases3-wfa.zip">C-Bases</a></p>
						<div class="slider">
							<div class="slides">
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/desktop_quake3_wfa_gensurf1.png" alt="Gensurf"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/desktop_quake3_wfa_cancer1.png" alt="Classic Cancer"></a></figure>
								<figure><a href="javascript:;"><img src="http://dummyimage.com/320x240/000/fff.png" data-src="http://williamchang.org/portfolio/image.php?mw=320&mh=240&img=gallery/desktop_quake3_wfa_cbases1.png" alt="C-Bases"></a></figure>
							</div>
							<a href="javascript:;" class="prev"><span>&lt;</span></a>
							<a href="javascript:;" class="next"><span>&gt;</span></a>
						</div>
					</details>
				</section>
				<section id="section_resume">
					<h2>Resume</h2>
					<p>I'm looking to join a great team where I can work on a variety of projects, be a team leader and collaborate with members, and continue to expand my knowledge and hone my skills.</p>
					<ul>
						<li><a href="http://williamchang.org/portfolio/docs/resume_generic.pdf">Adobe PDF</a></li>
						<li><a href="http://williamchang.org/portfolio/docs/resume_generic.txt">Text Document TXT</a></li>
					</ul>
					<div id="viewer_resume"></div>
					<p>I believe in &quot;Jack of All Trades, Master of Many&quot; is possible because of the fundamentals are similar between technologies. The following tools and skills I acquired during my professional career as a full-stack developer.</p>
					<p class="list_heading">Front-End Web Development Tools &amp; Skills</p>
					<ul>
						<li>HTML, CSS, JavaScript, JSON</li>
						<li>Responsive Web Design (RWD), Canvas, WebSocket, and DOM (Document Object Model)</li>
						<li>jQuery, AngularJS, Bootstrap, YUI, Ext JS, Microsoft Ajax Library</li>
						<li>Google Chrome DevTools (Debug JavaScript, CSS, DOM, HTTP)</li>
						<li>Adobe Photoshop and Illustrator</li>
					</ul>
					<p class="list_heading">.NET Development Tools &amp; Skills</p>
					<ul>
						<li>C#, Visual Basic (VB)</li>
						<li>MVC, Web API, Web Forms, ASMX, WCF aka SVC, Class Library, Console</li>
						<li>Sitecore, Umbraco, Sitefinity</li>
						<li>Stored Procedure, ADO.NET (DataSet and DataTable), Entity Framework, NHibernate ORM</li>
						<li>Microsoft SQL Server (MSSQL)</li>
						<li>PowerShell, MSBuild, TFS (Team Founderation Server)</li>
						<li>Microsoft Visual Studio</li>
						<li>Microsoft IIS</li>
					</ul>
					<p class="list_heading">Java Development Tools &amp; Skills</p>
					<ul>
						<li>Java EE (Servlet and JSP), Swing GUI, Console</li>
						<li>JDBC (Java Database Connectivity) and JPA (Java Persistence API)</li>
						<li>MySQL and SQLite</li>
						<li>Maven</li>
						<li>Eclipse IDE and Netbeans</li>
						<li>Apache Tomcat</li>
					</ul>
					<p class="list_heading">PHP Development Tools &amp; Skills</p>
					<ul>
						<li>WordPress and Drupal</li>
						<li>MySQL and SQLite</li>
						<li>Eclipse IDE PDT (PHP Development Tools)</li>
						<li>Linux Apache and Microsoft IIS 7+</li>
					</ul>
					<p class="list_heading">General Development Tools &amp; Skills</p>
					<ul>
						<li>Repository Pattern for DAL (Data Access Layer)</li>
						<li>Git, SVN (Subversion and TortoiseSVN), Microsoft Visual SourceSafe (VSS), CVS</li>
						<li>Notepad++, Sublime Text, Beyond Compare</li>
						<li>WebService Studio and Wizdler (Debug SOAP)</li>
						<li>Postman (Debug REST)</li>
					</ul>
				</section>
				<section id="section_connect">
					<h2>Connect</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas massa purus, facilisis ut justo vel, gravida porta diam. Quisque non sem turpis. Proin odio erat, ullamcorper sit amet porttitor id, convallis a nisi. Praesent a efficitur dolor. Ut dignissim arcu blandit nibh blandit faucibus. Maecenas sit amet risus eget ipsum gravida pulvinar. In ultricies quam quis justo bibendum finibus. Integer convallis mi sit amet erat tincidunt, in pharetra nulla tincidunt.</p>
					<ul class="word_break">
						<li>Email: <a href="mailto:business@williamchang.org">business@williamchang.org</a></li>
						<li>LinkedIn: <a href="https://www.linkedin.com/in/william-chang-11971020">https://www.linkedin.com/in/william-chang-11971020</a></li>
						<li>GitHub: <a href="https://github.com/williamchang">https://github.com/williamchang</a></li>
					</ul>
					<p>This responsive website has been designed, developed, and maintained by William Chang. It's built to be self-contained with minimal dependencies, embedded into a single file, and optimised for fast page load.</p>
				</section>
			</main>
<!-- END: Region Middle -->

<!-- BEGIN: Region Footer -->
			<footer id="region_footer">
				<div class="credit center">Designed by <a href="http://www.babybluebox.com/" title="DieHard">William Chang</a></div>
				<div class="badges center"><ul>
					<li><a href="http://validator.w3.org/check?uri=referer" title="W3C XHTML5 Compliant"><img src="http://www.creativecrew.org/images/valid_xhtml50_80x15.png" alt="W3C XHTML5 Compliant" title="W3C XHTML5 Compliant" height="15" width="80"/></a></li>
					<li><a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3" title="W3C CSS3 Compliant"><img src="http://www.creativecrew.org/images/valid_css30_80x15.png" alt="W3C CSS3 Compliant" title="W3C CSS3 Compliant" height="15" width="80"/></a></li>
					<li><a href="http://vanilla-js.com" title="Vanilla JS Compliant"><img src="http://www.creativecrew.org/images/valid_vanillajs_80x15.png" alt="Vanilla JS Compliant" title="Vanilla JS Compliant" height="15" width="80"/></a></li>
				</ul></div>
			</footer>
<!-- END: Region Footer -->

		</div></div>

	</div></div>

<!-- BEGIN: Scripts -->
	<script>
/*(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='//www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-277206-7','auto');ga('send','pageview');*/
	</script>
<!-- END: Scripts -->

<!-- BEGIN: Page Specific Scripts -->
	<script>
/* Plain Old JavaScript Supporting ECMAScript 5 */

var globalLargestViewportHeight = window.innerHeight;
var globalInitialLoadEventTime = 0;
var globalPreviousVerticalScroll = 0;

function createViewer() {
	var eleViewer = document.getElementById('viewer_resume');

	if(eleViewer != null) {
		eleViewer.innerHTML = '<iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/14705431/content?start_page=1&view_mode=slideshow&access_key=key-hx1espkt2uma4sktdlp&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_37951" width="100%" height="600" frameborder="0"></iframe>';
	}
}

function prepend(eleParent, strHtml) {
	var eleDiv = document.createElement('div');
	eleDiv.innerHTML = strHtml;
	var eleSelected = document.querySelector(eleParent || 'body');
	eleSelected.insertBefore(eleDiv.firstChild, eleSelected.childNodes[0]);
}

function append(eleParent, strHtml) {
	var eleDiv = document.createElement('div');
	eleDiv.innerHTML = strHtml;
	document.querySelector(eleParent || 'body').appendChild(eleDiv.firstChild);
}

function getOrientation() {
	if(window.innerWidth > window.innerHeight) {
		return 'landscape';
	} else {
		return 'portrait';
	}
}

function getVerticalScroll() {
	return (window.pageYOffset || document.documentElement.scrollTop) - (document.documentElement.clientTop || 0);
}

function loadLazyImages(eleImages) {
	if(eleImages != null) {
		for(var numIndex = 0;numIndex < eleImages.length;numIndex += 1) {
			var strImageDataSrc = eleImages[numIndex].getAttribute('data-src');

			if(strImageDataSrc != null && strImageDataSrc.length > 0) {
				eleImages[numIndex].setAttribute('src', strImageDataSrc);
				eleImages[numIndex].removeAttribute('data-src');
			}
		}
	}
}

document.addEventListener('DOMContentLoaded', function(e) {
	// Browser loaded document object model.

	if(window.matchMedia('(min-width:992px)').matches) {
		createViewer();
	}

	if(getOrientation() == 'landscape' && window.location.hash.length != 0) {
		var eleBar = document.getElementById('tabbar');

		globalPreviousVerticalScroll = getVerticalScroll();
		if(globalPreviousVerticalScroll > eleBar.offsetHeight) {
			eleBar.classList.add('tabbar_hide');
			eleBar.classList.remove('tabbar_show');
		}
	}
});

window.addEventListener('load', function(e) {
	// Browser loaded document object model and all resources.

	if(window.innerHeight < globalLargestViewportHeight) {
		globalLargestViewportHeight = window.innerHeight;
	}
	globalInitialLoadEventTime = Date.now();
});

window.addEventListener('resize', function(e) {
	var numViewportHeight = window.innerHeight;
	var strOrientation = getOrientation();
	var eleBar = document.getElementById('tabbar');
	var numLogDateNow = Date.now();

	if(strOrientation == 'landscape' && (Date.now() - globalInitialLoadEventTime) <= 500) {
		globalLargestViewportHeight = numViewportHeight;
	}

	if(globalLargestViewportHeight == numViewportHeight) {
		// Show components.
		eleBar.classList.remove('tabbar_hide');
		eleBar.classList.add('tabbar_show');
	} else {
		// Hide components.
		eleBar.classList.add('tabbar_hide');
		eleBar.classList.remove('tabbar_show');
	}
});

window.addEventListener('orientationchange', function(e) {
	window.location.reload();
});

window.addEventListener('scroll', function(e) {
	if(getOrientation() == 'landscape') {
		var eleBar = document.getElementById('tabbar');

		if(getVerticalScroll() < (globalPreviousVerticalScroll - 10)) {
			if(eleBar.classList.contains('tabbar_hide')) {
				// Show components.
				eleBar.classList.remove('tabbar_hide');
				eleBar.classList.add('tabbar_show');
			}
			eleBar.classList.remove('tabbar_clicked');
		}
		if(eleBar.classList.contains('tabbar_clicked')) {
			globalPreviousVerticalScroll = getVerticalScroll();
		}
	}
});

var eleTabActions = document.querySelectorAll('#tabbar a');
for(var numIndex = 0;numIndex < eleTabActions.length;numIndex += 1) {
	eleTabActions[numIndex].addEventListener('click', function(e) {
		var eleThis = this;
		var eleBar = eleThis.parentNode.parentNode.parentNode;

		if(getOrientation() == 'landscape') {
			eleBar.classList.add('tabbar_clicked');
			// Hide components.
			eleBar.classList.add('tabbar_hide');
			eleBar.classList.remove('tabbar_show');
		}
	});
}

var eleCollapsibleHeader = document.querySelectorAll('details summary');
for(var numIndex = 0;numIndex < eleCollapsibleHeader.length;numIndex += 1) {
	// Or document.querySelectorAll('details:not([open]) summary');
	var eleDetailsContainer = eleCollapsibleHeader[numIndex].parentNode;

	if(eleDetailsContainer.hasAttribute('open')) {
		loadLazyImages(eleDetailsContainer.querySelectorAll('img'))
	} else {
		eleCollapsibleHeader[numIndex].addEventListener('click', function(e) {
			loadLazyImages(this.parentNode.querySelectorAll('img'))
		});
	}
}

var eleSliderSlides = document.querySelectorAll('.slider .slides figure');
for(var numIndex = 0;numIndex < eleSliderSlides.length;numIndex += 1) {
	var eleSlide = eleSliderSlides[numIndex];
	var eleSlideAnchor = eleSlide.querySelector('a');
	var eleSlideImage = eleSlide.querySelector('img');
	var eleSlideCaption = eleSlide.querySelector('figcaption');

	if(eleSlideImage != null && eleSlideCaption == null) {
		var strSlideImageAlt = eleSlideImage.getAttribute('alt');

		if(strSlideImageAlt != null && strSlideImageAlt.length > 0) {
			var eleSlideFigcaption = document.createElement('figcaption');
			var nodeSlideFigcaption = document.createTextNode(strSlideImageAlt);

			eleSlideFigcaption.appendChild(nodeSlideFigcaption);
			eleSlide.appendChild(eleSlideFigcaption);
		}
	}

	if(eleSlideImage != null && eleSlideAnchor != null) {
		var strSlideAnchorHref = eleSlideAnchor.getAttribute('href');
		var strSlideImageSrc = eleSlideImage.getAttribute('src');

		if(strSlideImageSrc != null && strSlideImageSrc.length > 0 && strSlideAnchorHref != null && strSlideAnchorHref == 'javascript:;') {
			var numImageRelativeUrlIndex = strSlideImageSrc.lastIndexOf('img=');

			if(numImageRelativeUrlIndex > -1) {
				var strImageRelativeUrl = strSlideImageSrc.slice(numImageRelativeUrlIndex + 4);

				eleSlideAnchor.setAttribute('href', 'http://williamchang.org/portfolio/' + strImageRelativeUrl);
			}
		}
		eleSlideAnchor.setAttribute('tabindex', '-1');
	}
}

var eleSliderPrevActions = document.querySelectorAll('.slider .prev');
for(var numIndex = 0;numIndex < eleSliderPrevActions.length;numIndex += 1) {
	eleSliderPrevActions[numIndex].addEventListener('click', function(e) {
		var eleThis = this;
		var eleSlider = eleThis.parentNode;
		var eleSlides = eleSlider.querySelectorAll('.slides figure');
		var numTranslateStep = 150;
		var numTranslateX = numTranslateStep;
		var strTranslateX = eleSlider.getAttribute('data-translatex');

		if(strTranslateX != null) {
			numTranslateX = parseInt(strTranslateX, 10);
			numTranslateX += numTranslateStep;
		}
		if(eleSlides.length > 1 && numTranslateX <= 0) {
			for(var numIndex = 0;numIndex < eleSlides.length;numIndex += 1) {
				eleSlides[numIndex].style.transform = 'translateX(' + numTranslateX + '%)';
			}
			eleSlider.setAttribute('data-translatex', numTranslateX);
		}
	});
}

var eleSliderNextActions = document.querySelectorAll('.slider .next');
for(var numIndex = 0;numIndex < eleSliderNextActions.length;numIndex += 1) {
	eleSliderNextActions[numIndex].addEventListener('click', function(e) {
		var eleThis = this;
		var eleSlider = eleThis.parentNode;
		var eleSlides = eleSlider.querySelectorAll('.slides figure');
		var numTranslateStep = -150;
		var numTranslateX = numTranslateStep;
		var strTranslateX = eleSlider.getAttribute('data-translatex');

		if(strTranslateX != null) {
			numTranslateX = parseInt(strTranslateX, 10);
			numTranslateX += numTranslateStep;
		}
		if(eleSlides.length > 1 && numTranslateX > (numTranslateStep * eleSlides.length)) {
			for(var numIndex = 0;numIndex < eleSlides.length;numIndex += 1) {
				eleSlides[numIndex].style.transform = 'translateX(' + numTranslateX + '%)';
			}
			eleSlider.setAttribute('data-translatex', numTranslateX);
		}
	});
}

	</script>
<!-- END: Page Specific Scripts -->
</body>
</html>
