<!DOCTYPE html>
<html >
<head>
    <canvas id="background"></canvas>
    <meta charset="UTF-8">
    <title>原神资讯后台管理/登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut Icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="./css/login.css">
 
 
</head>
<body>

   
    <form action="../Sytest/index.php" method="get" >
        <div id="wrap">
            <div class="nr">
            <img src="./img/头像.webp" class="logo" alt="">
            <p>
                <label for="use-name" >账号</label>
                <input type="text" id="use-name" name="usname" placeholder="请输入用户名" required> 
                <!-- <span class="tips" onplay="0" >请输入正确用户名</span> -->
            </p>

            <p>
                <label for="password">密码</label>
                <input type="password" id="password" placeholder="请输入密码" name="usmm" required>
                <!-- <span class="tips">请输入正确用密码</span> -->
            </p>
    
            <div>
                <input type="submit" id="but" value="登录"> 
        </div>
        </div>
    </form>
    <script src="./js/樱花.js"></script>
    <script>
        // 偷个懒,不建议吧
        // 验证密码 这里不写数据库验证了，用javalocalhost使用假写
        const use=document.querySelector('#use-name')
        const usemm=document.querySelector('#password')
        document.querySelector('#but').addEventListener('click',function (e){
           if(!(use.value&&usemm.value)){ return }
        else{
            if(use.value=='root'&& usemm.value=='123456'){
                alert('登录成功,欢迎您 root')

                localStorage.setItem('usname','root')
                localStorage.setItem('usmm','123456')
                return 
            }
            
            alert('密码错误')
            e.preventDefault()
           
            }
        })
        console.log(`
开发人员：
技术总监：21软件技术一班 2021053130117 黎旺
ui设置：21软件技术一班 2021053130116 雷步初
页数css：21软件技术一班 20210533130115 金紫平
`);
        console.log('密码：root','账号：123456');
    </script>
</body>

   
</html>
<!-- 


 -->