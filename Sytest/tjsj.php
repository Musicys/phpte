<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加数据</title>
    <link rel="shortcut Icon" type="image/x-icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
<form action="" method='POST'>
<div class='bj'>
          <input type='hidden' name='id' value='' style='position: absolute;'>
         <input type='text' name='bt' placeholder='标题' required value='派蒙'>
         <textarea name='nr' rows='10' cols='80'  placeholder='内容' required >派蒙的小故事：....</textarea>
        

        <div><input type='submit' name='qdtj' value='确定添加' ><input type='submit' name='qxtj' value='取消添加' ></div> 
       </div>
       </form>
       <?php
       
       $conn = new mysqli('localhost','root', '123', 'yspr');
       
       if ($conn->connect_error) {
        die("数据库连接失败: " . $conn->connect_error);
            }
            if(!empty($_POST['qdtj']))
            {
                $sql = "insert into yspr(type,nr) value ('{$_POST['bt']}','{$_POST['nr']}');";
                
                 if ($conn->query($sql) === TRUE) {
                    echo "<script>
                    alert('添加成功')
                    location.href='./index.php'
                    </script>";
                   } else {
                     echo "Error deleting record: " . $conn->error;
                   }
            }
            if(!empty($_POST['qxtj']))
            {
                echo "<script>
                
                location.href='./index.php'
                </script>";
            }
       ?>

</body>
</html>
<script>
    console.log(`
开发人员：
技术总监：21软件技术一班 2021053130117 黎旺
ui设置：21软件技术一班 2021053130116 雷步初
页数css：21软件技术一班 20210533130115 金紫平
`);

</script>