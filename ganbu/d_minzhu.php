<?php
session_start();
include("./chk_admin.php");
include("../mysql_connect.php");
include("../function.php");
$userid=$_SESSION[login_name];
$ganbuid=$_SESSION[login_mid];
if($ganbuid==$id)
{
echo "<script>alert('���ܸ��Լ����');history.back();</script>";
	exit;
}
$sql="select * from minzhu_cheping where wid='$id' and userid='$userid' and utype='�ɲ�'";
$r=getfirst($sql);
if(!empty($r))
	{
echo "<script>alert('���Ѿ��������');history.back();</script>";
	exit;
}
$sql="select * from workers where id=$id";
	$data=getfirst($sql);
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

<form id="form1" name="form1" method="post" action="minzhu_save.php?act=save&wid=<?=$id?>">
<table width="96%"  border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#aec3de">

 <tr align="center" bgcolor="#F2FDFF">
          <td   class="optiontitle">

      Ԥ������������</td>
        </tr>
		</table>
        <table width="500"  border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#aec3de">

 <tr align="center" bgcolor="#F2FDFF">
          <td width="22%" align="right" >�ɲ�����</td>
          <td width="39%" align="left" ><?=$data[wname]?></td>
          <td width="39%" colspan="2" rowspan="4" align="center" ><img src="../userpic/<?=$data[pic]?>" width="120" height="120"></td>
          </tr>
		 <tr align="center" bgcolor="#F2FDFF">
   <td align="right" >�Ա�</td>
   <td align="left" ><?=$data[sex]?></td>
   </tr>

  <tr align="center" bgcolor="#F2FDFF">
   <td align="right" >����</td>
   <td align="left" ><?=get_name($data[bumen],"bumen")?></td>
   </tr>


 <tr align="center" bgcolor="#F2FDFF">
   <td align="right" >����ְ��</td>
   <td align="left" ><?=$data[zhiwu]?></td>
   </tr>



 		</table><br>
    <table width="95%"  border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#aec3de">

 <tr align="center" bgcolor="#F2FDFF">
          <td width="8%"   class="optiontitle">���</td>
          <td width="40%"   class="optiontitle">������Ŀ</td>
          <td width="52%"   class="optiontitle">�������</td>
        </tr>
        <?php
		$sql="select * from minzhu";
		$res=mysql_query($sql);
		$i=0;

		while($d=mysql_fetch_array($res))
		{
			$i++;
		?>
 <tr align="center" bgcolor="#F2FDFF">
   <td   class="optiontitle">&nbsp;<?=$i?></td>
   <td   class="optiontitle"><?=$d[name]?></td>
   <td   class="optiontitle">     <input type="radio" name="xuan[<?=$i?>]" id="radio" value="10" />&nbsp;
10��
            <input type="radio" name="xuan[<?=$i?>]" id="radio2" value="9" />

   9��       <input type="radio" name="xuan[<?=$i?>]" id="radio3" value="8" />

       8��       <input type="radio" name="xuan[<?=$i?>]" id="radio3" value="7" />

      7��
     </label></td>
 </tr><input type='hidden' name='mid[]' value='<?=$d[id]?>' />
<?
		}


?>
		</table>
        <table width="96%"  border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#aec3de">
        <tr align="center" bgcolor="#F2FDFF">
          <td   class="optiontitle"><input type="submit" name="button" id="button" value="�ύ����" /></td>
        </tr>
		</table>
        <p align="center"><a href="javascript:window.close()">�ر�</a></p>
<input type='hidden' name='num' value='<?=$i?>' />
</form>