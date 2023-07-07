<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut Icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="./css/index.css">
    <title>原神咨询平台</title>
</head>
<style>


</style>
<body>
    <form action="" method="post">

    <!-- 导航  首页 分享音乐 人物故事大全 个人信息 -->
    <div class="boxtop">
        <span class="tou" style="padding-left: 20px;">原询平台</span>
    <div><strong class="sy">首页</strong></div>
    <div><strong class="fl">分类</strong></div>
    <div><strong class="bq">标签</strong></div>
    <div><strong class="da">动漫</strong></div>
    <div><strong class="xx">学习</strong></div>
    <div><strong class="js">日记</strong></div>
    <div><strong class="gr">个人中心</strong></div>
 
<input type="text" placeholder="查找文章" name='wz'>
 <span class="chaz">
    <input type="submit" name="ss" value="查找" class="cz">
 </span>
  
    <div class="user" style="float: right; margin-right: 50px; ">Music</div>
    <span class="yhtx" style="float: right; ">
</div>

<!-- 内容



-->
<!-- <div class="a">
    <div class="b">
        <div class="c"></div>
        <div class="d"></div>
        <div class="e"></div> 
        <div class="f"></div>
        <div class="g"></div>
    </div>
</div> -->
<!-- 内容 -->
<div class="box">
    <div class="nr l">
        <div class="ssnr">
        
       <?php
    //    输出查询记录  7条
                        // 连接数据库
    $conn = new mysqli('localhost','root', '123', 'yspr');
    // 检查连接是否成功
    if ($conn->connect_error) {
        die("数据库连接失败: " . $conn->connect_error);
    }
    if(!empty($_POST['ss']))
    {
      $sql = "select * from yspr where type like '%{$_POST['wz']}%'  or nr  like '%{$_POST['wz']}%'  ORDER BY  data DESC LIMIT 7";
    }
    else{
        // SQL 查询语句
  
      $sql = "SELECT * FROM  yspr  ORDER BY  data DESC LIMIT  7;";
    }

    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // 输出每行数据
        
        while($row = $result->fetch_assoc()) {
       
            // echo " <td style='width: 30px;'><input type='checkbox'></td>"."<td> " . $row["id"]. "</td>" ."<td> " . $row["type"]. "</td>" . "<td> " . $row["nr"]. "</td>" ;
            echo " <span><strong style='background: none;'>**{$row["type"]}**</strong> 内容：{$row["nr"]}</span>";
        }
      
    }
    else{
        echo '无结果';
    }
       ?>
        </div>
    </div>
    <div class="nrzs" >
    搜索结果.....
    </div>
<div>

</div>
</div>
<!-- 轮播图 -->
    <!-- 

        
     -->
     <div class="bodybot">
        <span style='    color: #ccc;'>标题:.........欢迎留言</span>
        <br>
        <span  style='    color: #ccc;'>评语：我是个人练习生XXX喜欢Ctr</span>
        </div>
     

    </form>
</body>
</html>

<style>
    body{
        background: url("./imgs/5.png") no-repeat;
    background-size: 100% 100%;
    }
</style>
<script>
    
console.log(`
开发人员：
技术总监：21软件技术一班 2021053130117 黎旺
ui设置：21软件技术一班 2021053130116 雷步初
页数css：21软件技术一班 20210533130115 金紫平
`);


const nr=  document.querySelector('.nrzs')
document.querySelector('.ssnr').addEventListener('click', function(e){
console.log(e.target.tagName);
if(e.target.tagName=='SPAN')
{
    nr.innerText = e.target.innerText
    console.log(e.target.innerText);
}
})
// 

</script>