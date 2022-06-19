<html>
     <head>
          <title>For My Friend</title>
		  <script type="text/javascript">
		         flag=1
				 function f1()
				 {
				    alert("Sadar Ngab?")
				 }
				 function f()
				 {
				    if(flag==1)
					{
					     Bn.style.top=400
						 Bn.style.left=300
						 flag=2
					}
					else if(flag==2)
					{
					     Bn.style.top=400
						 Bn.style.left=50
						 flag=3
					}
                    else if(flag==3)
					{
					     Bn.style.top=370
						 Bn.style.left=166
						 flag=1
					}					
				 }
		  </script> 		 
     </head>
	         <body>
			 <h1>For My Friend</h1>
			 <h1 style="#">Are You Dumb?</h1>
			 <div id="By" style="position:absolute; left:64px; top:370px; width:210px; height:210px;">
			 <input type="button" value="YES" onClick="f1()" />
			 </div>
			 <div id="Bn" style="position:absolute; left:166px; top:370px; width:210px; height:210px;">
			 <input type="button" value="NO" onMouseOver="f()" />
			 </div>
	         </body>
</html>
