<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}



.bg-image {
  /* The image used */
  background-image: url("istockphoto.jpg");
  
  /* Add the blur effect */
  filter: blur(5px);
  -webkit-filter: blur(3px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rg(0,0,0); /* Fallback color */
  background-color: rba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: red;
  font-weight: bold;
  border: ;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
</style>
</head>
<body>

<div class="bg-image"></div>

<div class="bg-text">
  <h2>On Road</h2>
  <h1 style="font-size:90px">Haulage Trucks </h1>
  <p>Breakdown Maintanance And Assistance</p>
</div>

</body>
</html>
