<?
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD id=Head1><TITLE>导航</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<STYLE type=text/css>BODY {
	PADDING-RIGHT: 0px; PADDING-LEFT: 0px; PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-TOP: 0px; BACKGROUND-COLOR: #2a8dc8
}
BODY {
	FONT-SIZE: 14px COLOR: #003366; FONT-FAMILY: Verdana
}
TD {
	FONT-SIZE: 14px COLOR: #003366; FONT-FAMILY: Verdana
}
DIV {
	FONT-SIZE: 14px COLOR: #003366; FONT-FAMILY: Verdana
}
P {
	FONT-SIZE: 14px COLOR: #003366; FONT-FAMILY: Verdana
}
.mainMenu {
	FONT-WEIGHT: bold; FONT-SIZE: 14px; CURSOR: hand; COLOR: #000000
}
A.style2:link {
	PADDING-LEFT: 4px; COLOR: #0055bb; TEXT-DECORATION: none
}
A.style2:visited {
	PADDING-LEFT: 4px; COLOR: #0055bb; TEXT-DECORATION: none
}
A.style2:hover {
	PADDING-LEFT: 4px; COLOR: #ff0000; TEXT-DECORATION: none
}
A.active {
	PADDING-LEFT: 4px; COLOR: #ff0000; TEXT-DECORATION: none
}
.span {
	COLOR: #ff0000
}
</STYLE>

<SCRIPT language=javascript>
		function MenuDisplay(obj)
		{
		    for(var i=1;i<=5;i++)
		    {
		        document.getElementById('table_'+i).style.display='none';
				document.getElementById('table_'+i+'Span').innerText='＋';
		    }
			if(document.getElementById(obj).style.display=='none')
			{
				document.getElementById(obj).style.display='block';
				document.getElementById(obj+'Span').innerText='－';
			}
			else
			{
				document.getElementById(obj).style.display='none';
				document.getElementById(obj+'Span').innerText='＋';
			}
		}
    </SCRIPT>

<META content="MSHTML 6.00.2900.3492" name=GENERATOR></HEAD>
<BODY>
<FORM id=form1 name=form1 action=YHMenu.aspx method=post>
<TABLE cellSpacing=0 cellPadding=0 width=210 align=center border=0>
  <TBODY>
  <TR>
    <TD width=15><IMG src="images/new_005.jpg" border=0></TD>
    <TD align=middle width=180 background=images/new_006.jpg
      height=35><B>管理员－功能菜单</B> </TD>
    <TD width=15><IMG src="images/new_007.jpg"
border=0></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width=210 align=center border=0>
  <TBODY>
  <TR>
    <TD width=15 background=images/new_008.jpg></TD>
    <TD vAlign=top width=180 bgColor=#ffffff>
      <TABLE cellSpacing=0 cellPadding=3 width=165 align=center border=0>
        <TBODY>

        <TR>
          <TD class=mainMenu onClick="MenuDisplay('table_1');"><SPAN
            class=span id=table_1Span>＋</SPAN>干部信息管理 </TD></TR>
        <TR>
          <TD>
            <TABLE id=table_1 style="DISPLAY: none" cellSpacing=0 cellPadding=2
            width=155 align=center border=0>
              <TBODY>

              <TR>
                <TD class=menuSmall><A class=style2
                  href="workers.php"
                  target=dmMain>－ 干部信息管理</A></TD></TR>
              <TR>
                <TD class=menuSmall><A class=style2
                  href="workersAdd.php"
                  target=dmMain>－ 添加干部信息</A></TD></TR>




				</TBODY></TABLE></TD></TR>
        <TR>
          <TD background=images/new_027.jpg height=1></TD></TR>
        <TR>
          <TD class=mainMenu onClick="MenuDisplay('table_2');"><SPAN
            class=span id=table_2Span>＋</SPAN> 部门管理</TD></TR>
        <TR>
          <TD>
            <TABLE id=table_2 style="DISPLAY: none" cellSpacing=0 cellPadding=2
            width=155 align=center border=0>
              <TBODY>

              <TR>
                <TD class=menuSmall><A class=style2
                  href="bumen_add.php"
                  target=dmMain>－ 添加部门</A></TD></TR>
              <TR>
                <TD class=menuSmall><A class=style2
                  href="bumen.php"
                  target=dmMain>－ 部门管理</A></TD></TR>

         </TBODY></TABLE></TD></TR>
        <TR>
          <TD background=images/new_027.jpg height=1></TD></TR>
        <TR>
          <TD class=mainMenu onClick="MenuDisplay('table_3');"><SPAN
            class=span id=table_3Span>＋</SPAN>表格设计</TD></TR>
        <TR>
          <TD>
            <TABLE id=table_3 style="DISPLAY: none" cellSpacing=0 cellPadding=2
            width=155 align=center border=0>
              <TBODY>

              <TR>
                <TD class=menuSmall><A class=style2
                  href="minzhu_list.php"
                  target=dmMain>－ 制作民主测评表</A></TD></TR>

				  <TR>
                <TD class=menuSmall><A class=style2
                  href="zhizuo_minyi.php" target=dmMain>－
                  制作民意调查表</A></TD></TR>






					</TBODY></TABLE></TD></TR>
        <TR>
          <TD background=images/new_027.jpg height=1></TD></TR>
        <TR>
          <TD class=mainMenu onClick="MenuDisplay('table_4');"><SPAN
            class=span id=table_4Span>＋</SPAN>表格基础数据设置</TD></TR>
        <TR>
          <TD>
            <TABLE id=table_4 style="DISPLAY: none" cellSpacing=0 cellPadding=2
            width=155 align=center border=0>
              <TBODY>

              <TR>
                <TD class=menuSmall><A class=style2
                  href="minyi_add.php"
                  target=dmMain>－ 添加民意调查</A></TD></TR>
              <TR>
                <TD class=menuSmall><A class=style2
                  href="minyi.php"
                  target=dmMain>－ 民意调查排管理</A></TD></TR>

				<TR>
                <TD class=menuSmall><A class=style2
                  href="minzhu_add.php"
                  target=dmMain>－ 添加民主测评</A></TD></TR>
<TR>
                <TD class=menuSmall><A class=style2
                  href="minzhu.php"
                  target=dmMain>－ 管理民主测评</A></TD></TR>
            </TBODY></TABLE></TD></TR>
        <TR>
          <TD background=images/new_027.jpg height=1></TD></TR>
		  <TR>
          <TD background=images/new_027.jpg height=1></TD></TR>
        <TR>
          <TD class=mainMenu onClick="MenuDisplay('table_5');"><SPAN
            class=span id=table_4Span>＋</SPAN>测评结果模块</TD></TR>
        <TR>
          <TD>
            <TABLE id=table_5 style="DISPLAY: none" cellSpacing=0 cellPadding=2
            width=155 align=center border=0>
              <TBODY>

              <TR>
                <TD class=menuSmall><A class=style2
                  href="huizong.php"
                  target=dmMain>－ 民主得分汇总</A></TD></TR>
<TR>
                <TD class=menuSmall><A class=style2
                  href="minyi_huizong.php"
                  target=dmMain>－ 民意得分汇总</A></TD></TR>



            </TBODY></TABLE></TD></TR>
        <TR>
          <TD background=images/new_027.jpg height=1></TD></TR>
        <TR>
          <TD class=mainMenu onClick="MenuDisplay('table_6');"><SPAN
            class=span id=table_5Span>＋</SPAN> 系统设置</TD></TR>
        <TR>
          <TD>
            <TABLE id=table_6  cellSpacing=0 cellPadding=2
            width=155 align=center border=0>
              <TBODY>

              <TR>
                <TD class=menuSmall><A class=style2
                  href="admin.php"
                  target=dmMain>－ 管理员管理</A></TD></TR>
              <TR>
                <TD class=menuSmall><A class=style2
                  href="admin_add.php"
                  target=dmMain>－ 添加管理员</A></TD></TR>
 <TR>
                <TD class=menuSmall><A class=style2
                  href="cunmin.php"
                  target=dmMain>－村民注册管理</A></TD></TR>



				   <TR>
                <TD class=menuSmall><A class=style2
                  href="../logout.php"
                  target=dmMain>－ 退出系统</A></TD></TR>
				  </TBODY></TABLE></TD></TR>
        <TR>
          <TD background=images/new_027.jpg height=1></TD></TR>
        <TR>
          </TR>

            </TBODY></TABLE></TD>
    <TD width=15 background=images/new_009.jpg></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width=210 align=center border=0>
  <TBODY>
  <TR>
    <TD width=15><IMG src="images/new_010.jpg" border=0></TD>
    <TD align=middle width=180 background=images/new_011.jpg
    height=15></TD>
    <TD width=15><IMG src="images/new_012.jpg"
border=0></TD></TR></TBODY></TABLE></FORM></BODY></HTML>
