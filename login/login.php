<!--<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
        <%@ taglib uri="http://java.sun.com/jsp/jstl/sql" prefix="sql" %>
        <%@ page import="java.io.*,java.util.*" %>-->
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Placement Portal | Company Login</title>
    	<link rel="stylesheet" href="/login/css/style.css">
  </head>

  <body >

    <div style="margin-top: -3%; height: 100%;" class="wrapper">
	<div class="container">
		<div style="text-align: center;">
<img src="/images/aceLogo.jpg" style="height: 80px; width: 70px;"> <br>
<span style="color: #ffff4d; font-size: xx-large;"><strong>AIKTC
<br>Company Login
</strong></span>
</div>
		<form  method="post" action="<%=request.getContextPath() %>/Company"">
			<input type="hidden" name="task" value="login-form">
			<input type="text" name="email" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<br>
			<span style="color: yellow; font-size: large;"><c:out value="${alert }" /></span>
			<input  type="submit" value="LOGIN" id="login-button" />
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li><li></li><li></li><li></li>
		<li></li><li></li><li></li><li></li>
		<li></li><li></li><li></li><li></li>
		<li></li><li></li><li></li><li></li>
		<li></li><li></li><li></li><li></li>
		<li></li><li></li><li></li><li></li>
		<li></li><li></li><li></li><li></li>
		<li></li><li></li><li></li><li></li>
		<li></li><li></li>
		<li></li><li></li>
		<li></li><li></li>
		<li></li><li></li>
		
	</ul>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="/login/js/index.js"></script>
 
  </body>
</html>
