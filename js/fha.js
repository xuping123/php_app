
// function GetDateStr(AddDayCount){
// 	var dd = new Date();
// 	dd.setDate(dd.getDate()+AddDayCount);
// 	var y = dd.getFullYear();
// 	var m = dd.getMonth()+1;
// 	var d = dd.getDate();
// 	return y+"-"+m+"-"+d;
// }

// var i=0;
// for(i=0;i<22;i++){
// 	document.write(GetDateStr(-1));	
// 	var rand1=parseInt(Math.random()*22+1);	
// 	quotes=new Array 
// 	quotes[1]=' 北京的' 
// 	quotes[2]=' 上海的'
// 	quotes[3]=' 天津的'
// 	quotes[4]=' 湖南的'
// 	quotes[5]=' 湖北的'
// 	quotes[6]=' 湖北的'
// 	quotes[7]=' 广东的'
// 	quotes[8]=' 广西的'
// 	quotes[9]=' 重庆的'
// 	quotes[10]=' 四川的'
// 	quotes[11]=' 山东的'
// 	quotes[12]=' 河南的'
// 	quotes[13]=' 河北的'
// 	quotes[14]=' 山西的'
// 	quotes[15]=' 贵州的'
// 	quotes[16]=' 黑龙江的'
// 	quotes[17]=' 福建的'
// 	quotes[18]=' 浙江的'
// 	quotes[19]=' 江苏的'
// 	quotes[20]=' 江西的'
// 	quotes[21]=' 海南的'
// 	quotes[22]=' 陕西的'
// 	var quote=quotes[rand1]
// 	document.write(quote)	
// 	var rand1=parseInt(Math.random()*22+1);	
// 	quotes=new Array
// 	quotes[1]='张小姐'
// 	quotes[2]='刘先生'
// 	quotes[3]='周先生'
// 	quotes[4]='吴小姐'
// 	quotes[5]='朱先生'
// 	quotes[6]='陈小姐'
// 	quotes[7]='田先生'
// 	quotes[8]='钟先生'
// 	quotes[9]='马小姐'
// 	quotes[10]='韩小姐'
// 	quotes[11]='顾先生'
// 	quotes[12]='王小姐'
// 	quotes[13]='李先生'
// 	quotes[14]='卢小姐'
// 	quotes[15]='崔小姐'
// 	quotes[16]='段先生'
// 	quotes[17]='胡小姐'
// 	quotes[18]='潘先生'
// 	quotes[19]='陈小姐'
// 	quotes[20]='林先生'
// 	quotes[21]='代先生'
// 	quotes[22]='苏小姐'	
// 	var quote=quotes[rand1]
// 	document.write(quote)
// 	var rand1=parseInt(Math.random()*5+1)
// 	quotes=new Array
// 	quotes[1]='（13'+parseInt(Math.random()*10)+ '****'+ parseInt(Math.random()*10)+ parseInt(Math.random()*10)+parseInt(Math.random()*10)+parseInt(Math.random()*10)+'）' 
// 	quotes[2]='（15'+parseInt(Math.random()*10)+ '****'+ parseInt(Math.random()*10)+ parseInt(Math.random()*10)+parseInt(Math.random()*10)+parseInt(Math.random()*10)+'）' 
// 	quotes[3]='（13'+parseInt(Math.random()*10)+ '****'+ parseInt(Math.random()*10)+ parseInt(Math.random()*10)+parseInt(Math.random()*10)+parseInt(Math.random()*10)+'）' 
// 	quotes[4]='（18'+parseInt(Math.random()*10)+ '****'+ parseInt(Math.random()*10)+ parseInt(Math.random()*10)+parseInt(Math.random()*10)+parseInt(Math.random()*10)+'）' 
// 	quotes[5]='（13'+parseInt(Math.random()*10)+ '****'+ parseInt(Math.random()*10)+ parseInt(Math.random()*10)+parseInt(Math.random()*10)+parseInt(Math.random()*10)+'）' 
// 	var quote=quotes[rand1]
// 	document.write(quote)
// 	document.write('<br>')
// /*产品*/
//         var randnot=parseInt(Math.random()*randnotnum+1)

// 	var quote=notchanpin[randnot]
// 	document.write(quote)
// 	document.write('<br>');
// }

// // 飞鸽ORDER

    $.ajax({
        url: "./select.php",
        type:"post",
        dataType:"json",
        success:function(data){
            if(data){
            	$.each(data, function(index, item){  
				    document.write(item.addtime)	
				    document.write(item.province+'的'+item.name+'('+item.mob+')')
				    document.write('<br>')
				    var randnot=parseInt(Math.random()*randnotnum+1)
				    var quote=notchanpin[randnot]
					document.write(quote)
				    document.write('<br>');
				});  
            }
        }
    });