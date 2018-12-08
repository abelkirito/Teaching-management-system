 <?php

if($_SESSION['username']!="")
{
?>
<table width="94%" height="103" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>用户名:</td>
                      <td> <?php echo $_SESSION["username"];?></td>
                    </tr>
                    <tr>
                      <td>权限:</td>
                      <td> <?php echo $_SESSION["cx"];?></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><img src="qtimages/4.gif" width="68" height="24" onclick="javascript:location.href='logout.php';" style="cursor:hand"  /> <img src="qtimages/5.gif" width="68" height="24" style="cursor:hand" onclick="javascript:location.href='main.php';" /></td>
                    </tr>
</table>
 <?php
}
else
{
?>
<table width="94%" height="103" border="0" align="center" cellpadding="0" cellspacing="0"><form name="form_log" method="post" action="userlog_post.php">
                    <tr>
                      <td>用户名:</td>
                      <td><input name="username" type="text" id="username" size="18"></td>
                    </tr>
                    <tr>
                      <td>密码:</td>
                      <td><input name="pwd1" type="password" id="pwd1" size="18"></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><input type="image" name="imageField" src="qtimages/1.gif">
                        <img src="qtimages/2.gif" width="68" height="24" onClick="javascript:form_log.reset();"></td>
                    </tr> </form>
</table>
 <?php
}
?>

