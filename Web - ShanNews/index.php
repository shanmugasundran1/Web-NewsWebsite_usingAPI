<!DOCTYPE html>
<html>

<title></title>

<head>
<link href ="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@@,400;1,500&display=swap"rel="stylesheet">

<style>
body
{
          font-family :'Roboto',sans-serif;
}
.ticker-wrapper{
		position:relative;
		max-width:800px;
		margin:auto;
		padding-top :200px;
	 }
	 
     .bigHeading{
		display :block;
		position:absolute;
		font-style :italic;
		font-size :40px;
		background:#e60000;
		color:#ffff;
		text-transform :uppercase;
		padding:15px;
		letter-spacing :3px;
		font-weight:700;
		z-index:2;
	 
	 }
	 
	.bigpadding::after{
	}
	
	.bigpadding::before{
		content:'';
		 width:0;
		 position:absolute;
		 border-width:78px;
		 border-style:solid;
		 top:0;
		 x-index:-1
	   }
	   
	 .bigHeading::before{
		border-color:#e60000 transparent transparent transparent;
		right: -78px
	   }
	   
	.bigHeading::after{
		border-color:##e60000 transparent transparent #e60000 transparent;
		left: -78px
	   }
	   
	.text-update{
		height :70px;
		background :#004ffff;
		overflow:hidden;
		position:relative;
		color:#ffff;
		text-transform :uppercase;
		letter-spacing :1px;
		font size:25px;
	    font-weight:500;
	    display:flex;
	    align-items:center;
	    left:12px;
	   }
	   
	.text-update p{
	   position:absolute;
	   width: 150%
	   margin:0;
	   font-weight:700;
	   text-align:left;
	   transform : translateX(100%);
	   aniation:moving 25s linear infinite
	   }
	   
	   @keyframes moving{
	   0%{
	       transform:translateX(100%);
		   }
		   
	   0%{
	       transform:translateX(-100%);
		   }
		 }
</style>

</head>

   <div class="ticker-wrapper">
     <div class ="bigHeading"> Breaking </div>
       <div class ="text-update">
         <p>

                menaga murugiah is good in sleeping,no use for styaing iin this country
         </p>
		</div>
	 </div>

</body>
</html>