// 时间
const sj=document.querySelector('.left_dahl span')
console.log('123');
sj.innerText=`${new Date}`
setInterval(() =>{
    sj.innerText=`${new Date}`
},1000)
// 点击切换焦点
const dj=document.querySelector('.left_dahl')


// 内容节点
const nr=document.querySelector('.right_button')
const nr2=document.querySelector('.right_button2')
const from=document.querySelector('form')
dj.addEventListener('click',(e)=>
{
	
  
    if(e.target.tagName=='DIV'&& e.target.className!='left_dahl'){
        if( document.querySelector('.yslan'))document.querySelector('.yslan').classList.remove('yslan')
        
        e.target.classList.add('yslan')
        // 首页内容
        if(e.target.className=='sy yslan')
        {
            nr2.style.display = 'none'
           nr.style.display = 'block'
           from.style.display='block'
			        // 管理内容PHP
       
        }
		 if(e.target.className=='gl yslan')
        {
          nr.style.display = 'none'
          nr2.style.display = 'block'
          from.style.display='none'
         
        }
    }

})
const nra=document.querySelector('.nr')
const nraone=document.querySelector('.nrgb')
const ck=document.querySelectorAll('.ck')

for(let i=0;i<ck.length;i++)
{
  ck[i].addEventListener('click',function(e){
    nra.style.display = 'block'
    nra.innerText=this.innerText
    setTimeout(()=>{
      console.log('1');
      const a=document.createElement('div')
      a.classList.add('nrgb')
      a.innerHTML='X'
      nra.appendChild(a)
      document.querySelector('.nrgb').addEventListener('click',()=>{
        nra.innerText=''
        nra.style.display='none'
        console.log('1');
      })
     
    })
    
    
    
    
    })
}
// 发送请求
// 退出登录
document.querySelector('.tuichu').addEventListener('click',()=>{
 
 var result = confirm("是否退出?");
if (result == true) {
  localStorage.clear()
 
   location.href='../Dltest/index.php'
} else {
   
}
 
  
}
)
