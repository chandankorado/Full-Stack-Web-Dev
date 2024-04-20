<html>
  <body>
    <h2>Creating an Object from JSON String</h2>
	<p id = "demo"></p>
	<script>
	  const txt = '{"name":"john","age":30,"city":"new work"}'
	  const obj = JSON.parse(txt)
	  
	  document.getElementById("demo").innerHTML = obj.name+","+obj.age;
	</script>
  </body>
</html>