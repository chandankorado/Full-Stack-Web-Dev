<html>
  <body>
    <h2>Converting a string into Date object</h2>
	<p id = "demo"></p>
	<script>
	  const text = '{"name":"john","birth":1986-12-14,"city":"new work"}'
	  const obj = JSON.parse(text);
	  obj.birth = new Date(obj.birth);
	  
	  document.getElementById("demo").innerHTML = obj.name+","+obj.birth;
	</script>
  </body>
</html>