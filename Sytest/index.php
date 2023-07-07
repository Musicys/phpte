<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut Icon" type="image/x-icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
   
    <title>原神咨询管理系统首页</title>
</head>
<body>

   
    <!-- 左边导航栏 -->
    <div class="left_dahl">
       <span></span>
        <div class="sy yslan">管理首页</div>
        <div class="gl">数据检测</div>
    </div>

    <!-- 中间导航栏 -->
    <div class="right_dahl">

     <!-- 头 -->
    <div class="right_top">
      <div class="right_top_right">
        <span>导航</span>
      </div>
      <div class="right_top_left">
        <ul>
            <li>Music</li>
            <li class='tuichu'>退出</li>
        </ul>
      </div>
    </div>

    <div class="right_button2">
  


    <div class="Synr">
            <!-- 头 -->
            <div class="synrtop">
            
              <div class="topnr">
                <b><span>总销量额</span></b>
                <br>
                <h2>0</h2>
                <hr>
                <span>今日销量：0</span>
              
              </div>
              <div class="topnr">
                <b><span>总访数量</span></b>
                <br>
                <h2>0</h2>
                <hr>
                <span>今日销量：0</span>
              
              </div>
              <div class="topnr">
                <b><span>总收藏量</span></b>
                <br>
                <h2>0</h2>
                <hr>
                <span>今日销量：0</span>
              
              </div>
             <div class="topnr">
                <b><span>总支付量</span></b>
                <br>
                <h2>0</h2>
                <hr>
                <span>今日销量：0</span>
              
              </div>
            
            </div>
            <!-- 中 -->
            <div class="synrbody">
              <div class="sybodyleft">
                <div class="wtop"><h1>数据监测值</h1></div>
                <h3>未开放</h3>
              </div>
              <div class="sybodyrig">
                <div class="wtop"><h1>数据监测图</h1></div>
                <h3>未开放</h3>
              </div>
            </div>
            <!-- 尾 -->
            <div class="synrbutton">
              <div>
                <div class="wtop"><h3>今日投稿</h3></div>
                <div class="wbout">
                  <div><h4>本日投稿数</h4> <br><h1>13</h1></div>
                <div><h4>汇总确定投稿数</h4> <br><h1>6</h1></div>
                  <div><h4>累计金额</h4> <br><h1>6.4</h1></div>
                </div>
              </div>
              <div>
                <div class="wtop"><h3>本月投稿数量</h3></div>
                <div class="wbout">
                 <div><h4>投稿人数</h4> <br><h1>130</h1></div>
                  <div><h4>本月投稿数</h4> <br><h1>112</h1></div>
                 <div><h4>累计金额</h4> <br><h1>64.8</h1></div>
                </div>
              </div>
              <div>
                <div class="wtop"><h3>快捷入口</h3></div>
                <div class="wboutrig">
                  <div class="any anys"> <b>投稿管理</b></div>
                  <div class="any"> <b>消息管理</b> </div>
                
                  <div class="any"> <b>内容管理</b> </div>
                </div>
              </div>
            </div>
            </div>



    </div>

    <form action="" method='post' name='tj'>
 <!-- 内容 -->
    <div class="right_button">
    <!--  -->
    <script> console.log('黎旺'); </script>

    

    <div class='nr'> </div>
             <!-- 管理 -->
         <div class="glym">
            <!-- 增删改 -->
            <div class="gl_top">
                <!-- 头 -->
                <div class="cpsstop">
               
             
                    <div class='ssbox'><label ><span>搜索</span><input type="search" name="cazhao" id="cz"></label>

                     <input type="submit" value="确定"></div>
                </div>
                <!-- 尾 -->
                <div class="cpssbut">

                <input type="submit" class="cpssbutsc" value='-' name='remove' ></input>
                第<input type="number"  name='ys' value='<?php 
                 $ys=1;
                if(!empty($_POST['add'])){
                  $ys=$_POST['ys'];

                  $ys+=1;
                  echo $ys;
                
                }
                else if(!empty($_POST['remove'])){

                  $ys=$_POST['ys'];
                  if($ys>1)
                  {
                    $ys-=1;
                  }
                
                  echo $ys;
                
                }
                else{
                  echo $ys;
                  
                }
               
                ?>' readonly class='yescalss'/>页
                <input type="submit" class="cpssbuttj" value='+' name='add'></input>
                <input type="submit" class='cpssbuttj' value='添加数据' name='addsj' style='width:100px'>
                    

                </div>
            </div>
            <div class="gl_but">
         
                    
            <table id='ones' style=' height: 10px;  width: 100%;  overflow-y: auto;' >
                    <tr>
                        <th></th><th>id</th><th>时间</th><th >标题</th><th colspan="3">内容</th><th>操作</th>
                    </tr>
                    
                    <?php
                        
                        // 连接数据库
    $conn = new mysqli('localhost','root', '123', 'yspr');
    // 检查连接是否成功
    if ($conn->connect_error) {
        die("数据库连接失败: " . $conn->connect_error);
    }
    
    $ks=($ys-1)*15;
   
     



    if(!empty($_POST['cazhao']))
    {
      $sql = "select * from yspr where type like '%{$_POST['cazhao']}%' or id like '{$_POST['cazhao']}' or nr  like '%{$_POST['cazhao']}%'  ORDER BY  data DESC LIMIT {$ks},15;";
    }
    else{
        // SQL 查询语句
  
      $sql = "SELECT * FROM  yspr  ORDER BY  data DESC LIMIT  {$ks},15;";
    }
   

   
  
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // 输出每行数据
        
        while($row = $result->fetch_assoc()) {
       
            // echo " <td style='width: 30px;'><input type='checkbox'></td>"."<td> " . $row["id"]. "</td>" ."<td> " . $row["type"]. "</td>" . "<td> " . $row["nr"]. "</td>" ;
            echo " <tr><td style='width: 30px;'>
            <input type='checkbox'></td>
            <td style='width: 400px;'>{$row["id"]}</td>
            <td>{$row["data"]}</td>
            <td>{$row["type"]}</td> 
            <td colspan='3'class='ck'>{$row["nr"]}</td>
            <td> <div class='but' >
            <input type='submit' name='sc{$row["id"]}' value='删除'></input> 
            <input type='submit' name='bj{$row["id"]}' value='编辑'></input></div></td></tr>";





            // 删除功能
        if(!empty($_POST['sc'.$row['id']]))
        {
          $sql = "DELETE FROM yspr WHERE id={$row['id']}";

          if ($conn->query($sql) === TRUE) {
           echo "<script>alert('删除成功')</script>";
          } else {
            echo "Error deleting record: " . $conn->error;
          }
        }
       

       
        

        // 编辑功能
       
        if(!empty($_POST['bj'.$row['id']]))
        {
         echo " <div class='bj'>
          <input type='hidden' name='id' value='".$row['id']."' style='position: absolute;'>
         <input type='text' name='bt' placeholder='标题' required value='{$row["type"]}'>
         <textarea name='nr' rows='10' cols='80'  placeholder='内容' required >{$row["nr"]}</textarea>
        

        <div><input type='submit' name='xgqd{$row["id"]}' value='确定修改' ><input type='submit' name='qxxg' value='取消修改' ></div> 
         
       </div>";
          

        }
  
        if(!empty($_POST['xgqd'.$row['id']]))
        {
         
   
       // echo $_POST['bt'].$_POST['nr'].$_POST['id'];
         // UPDATE yspr SET  type='你好啊', nr='测试' WHERE id = 1;
         $sql = "UPDATE yspr SET  type='{$_POST['bt']}', nr='{$_POST['nr']}' WHERE id = {$_POST['id']};";
         $conn->query($sql);
          echo '<script>
          location.href="./index.php"
          </script>';
      
      
   
        }
        // 添加功能
        
        if(!empty($_POST['addsj']))
        {
          
          
         echo '<script> location.href="./tjsj.php"</script>';
        }
      
      

              
    
         



     
      }      
    
    } else {
       
    }
    

    
                        
                        
                        ?>
                   
                   
                 
                </table>
            </div>
           
    </div>

        
    </div>
    </form>
    </div>



    
</body>
<script src="./js/index.js"></script>
<script>
	
    // 判断是否有登录权限
    if(localStorage.getItem('usname')=='root' && localStorage.getItem('usmm')=='123456')
    {
       
        setTimeout( ()=>{
            // 五分钟清除缓存权限
         localStorage.clear()
        },1000*60*5)
 
       
    }
   else{
    alert('无权访问')
       location.href='../Dltest/index.php'

   }

  

 
console.log(`
开发人员：
技术总监：21软件技术一班 2021053130117 黎旺
ui设及技术：21软件技术一班 2021053130116 雷步初
ht页面css：21软件技术一班 20210533130115 金紫平
`);


   
</script>
<style>
  @media (max-width:900px)
  {
    body{
    height: 100vh;
    min-width: 628px;

       }
  }
 
</style>
</html>
