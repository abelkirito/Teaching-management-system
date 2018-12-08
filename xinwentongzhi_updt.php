<?php 
session_start();
$id=@$_GET["id"];
$_SESSION['note'] = $id;
include_once 'ConnectDb.php';
include_once 'sinaEditor.class.php';
extract($_POST);
extract($_GET);
$editor=new sinaEditor('gently_editor');
$editor->Value='';
$editor->BasePath='.';
$editor->Height=460;
$editor->Width=650;
$editor->AutoSave=false;
$ndate =date("Y-m-d");
@$addnew=@$_POST["addnew"];
if ($addnew=="1" )
{
  $biaoti=$_POST["biaoti"];$leibie=$_POST["leibie"];$neirong=$_POST["neirong"];$dianjilv=$_POST["dianjilv"];$tianjiaren=$_POST["tianjiaren"];
  $sql="update xinwentongzhi set biaoti='$biaoti',leibie='$leibie',neirong='$neirong',dianjilv='$dianjilv',tianjiaren='$tianjiaren' where id= ".$id;
  $conn = new ConnectDb();
  $res = $conn->Connect($sql);
  if($res){
    echo "<script>javascript:alert('修改成功!');</script>";
  }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改新闻通知</title><link rel="stylesheet" href="css.css" type="text/css"><script language="javascript" src="js/Calendar.js"></script>
<link rel="stylesheet" type="text/css" href="./webuploader/webuploader.css">
    <script type="text/javascript" src="./webuploader/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="./webuploader/webuploader.js"></script>
</head>
<script language="javascript">
function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
}
</script>
<body>
<p>修改新闻通知： 当前日期： <?php echo $ndate; ?></p>
<?php
  $sql="select * from xinwentongzhi where id=".$id;
  $conn = new ConnectDb();
  $result = $conn->Connect($sql);
  $res=$result->fetch(PDO::FETCH_ASSOC);
if($res['id'])
{
$editor->Value=$res['neirong'];
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="white" style="border-collapse:collapse"> 
      <tr><td>标题：</td><td><input name='biaoti' type='text' id='biaoti' size='50' value='<?php echo $res['biaoti'];?>' /></td></tr><tr><td>类别：</td><td><input name='leibie' type='text' id='leibie' value='<?php echo $res['leibie'];?>' /></td></tr><tr><td>内容：</td><td><textarea name="neirong" cols="50" rows="10" > <?php echo $res['neirong'];?> </textarea></td></tr><tr><td>附件：</td>
      <td>
        <div id="uploader-demo">
              <!--用来存放item-->
              <div id="fileList" class="uploader-list"></div>
              <div id="filePicker">选择图片</div>
            </div>      
      </td>
      </tr><tr><td>点击率：</td><td><input name='dianjilv' type='text' id='dianjilv' value='<?php echo $res['dianjilv'];?>' /></td></tr><tr><td>添加人：</td><td><input name='tianjiaren' type='text' id='tianjiaren' value='<?php echo $res['tianjiaren'];?>' /></td></tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="修改" />
      <input type="reset" name="Submit2" value="重置" /></td>
    </tr>
  </table>
</form>
<?php
  }
?>
<script>
        var $ = jQuery,
            $list = $('#fileList'),
            // 浼樺寲retina, 鍦╮etina涓嬭繖涓€兼槸2
            ratio = window.devicePixelRatio || 1,

            // 缂╃暐鍥惧ぇ灏�
            thumbnailWidth = 100 * ratio,
            thumbnailHeight = 100 * ratio,

            // Web Uploader瀹炰緥
            uploader;
        var uploader = WebUploader.create({

            // 选完文件后，是否自动上传。
            auto: true,

            // swf文件路径
            swf: 'http://localhost:80/system/webuploader/Uploader.swf',

            // 文件接收服务端。
            server: 'http://localhost:80/system/upload3.php',

            // 选择文件的按钮。可选。
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick: '#filePicker',

            // 只允许选择图片文件。
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/*'
            }
        });

        uploader.on( 'fileQueued', function( file ) {
            var $li = $(
                '<div id="' + file.id + '" class="file-item thumbnail">' +
                '<img>' +
                '</div>'
                ),
                $img = $li.find('img');


            // $list为容器jQuery实例
            $list.append( $li );

            // 创建缩略图
            // 如果为非图片文件，可以不用调用此方法。
            // thumbnailWidth x thumbnailHeight 为 100 x 100
            uploader.makeThumb( file, function( error, src ) {
                if ( error ) {
                    $img.replaceWith('<span>不能预览</span>');
                    return;
                }

                $img.attr( 'src', src );
            }, thumbnailWidth, thumbnailHeight );
        });

        uploader.on( 'uploadProgress', function( file, percentage ) {
            var $li = $( '#'+file.id ),
                $percent = $li.find('.progress span');

            // 避免重复创建
            if ( !$percent.length ) {
                $percent = $('<p class="progress"><span></span></p>')
                    .appendTo( $li )
                    .find('span');
            }

            $percent.css( 'width', percentage * 100 + '%' );
        });

        // 文件上传成功，给item添加成功class, 用样式标记上传成功。
        uploader.on( 'uploadSuccess', function( file, response ) {
            
             
        });

        // 文件上传失败，显示上传出错。
        uploader.on( 'uploadError', function( file ) {
            var $li = $( '#'+file.id ),
                $error = $li.find('div.error');

            // 避免重复创建
            if ( !$error.length ) {
                $error = $('<div class="error"></div>').appendTo( $li );
            }

            $error.text('上传失败');
        });

        // 完成上传完了，成功或者失败，先删除进度条。
        uploader.on( 'uploadComplete', function( file ) {
            $( '#'+file.id ).find('.progress').remove();
        });
    </script>
</body>
</html>

