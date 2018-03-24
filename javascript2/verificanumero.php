<html>
	<head>
		<script type="text/javascript" src="verificanumero.js"></script>
		<style type="text/css">
			#n1{
				width: 200px;
				height: 200px;
				border: 1px solid #000;
				font-size: 100px;
				float: left;
				line-height: 200px;
				text-align: center;
				margin-right: 10px;
				background-color: #CCC123;
			}
			#n2{
				width: 200px;
				height: 200px;
				border: 1px solid #000;
				float: left;
				font-size: 100px;
				line-height: 200px;
				text-align: center;
				margin-right: 10px;
				background-color: #AAA056;
			}
			button{
				width: 410px;
				height: 40px;
				margin-top: 10px;
				font-size: 20px;
			}

		</style>
	</head>
	<body onload="resetar( )">
		<div id="n1">0</div>
		<input type="text" id="n2">
		<div style="clear:both"></div>
		<button onclick="verificaNumero( )">Verificar</button>
	</body>
</html>