<SCRIPT LANGUAGE="JavaScript">
        <!--
		var on=new Array;
			on[0]=0;
			on[1]=0;
			on[2]=0;
			on[3]=0;
			on[4]=0;
  
			
		function menu_down(n,hauteur,delay){
			var sur=on[n-1];
			obj=document.getElementById("menu").getElementsByTagName("li")[n-1];
			taille=obj.offsetHeight;
			
			if(taille<hauteur){
			obj.style.height=(taille+2)+"px";
			if(sur==1){compte=setTimeout('menu_down('+n+','+hauteur+','+delay+')',delay);}
			}
			else{
			obj.style.height=hauteur+"px";
			}
		}
		
		function menu_up(n,hauteur,delay){
			var sur=on[n-1];
			obj=document.getElementById("menu").getElementsByTagName("li")[n-1];
			taille=obj.offsetHeight;
			
			if(taille>hauteur){
			obj.style.height=(taille-2)+"px";
			if(sur==0){compte=setTimeout('menu_up('+n+','+hauteur+','+delay+')',delay);}			
			}
			else{
			obj.style.height=hauteur+"px";
			}
			
		}
		
	
		
		
		
	      
     //-->
	</SCRIPT>