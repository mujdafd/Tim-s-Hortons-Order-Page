
<?php
error_reporting(0);
session_start();


$nocoffee=$_POST['nucoffee'];
$sizeee=$_POST['sizee'];
$nocream=$_POST['nucream'];
$nosugar=$_POST['nusugar'];



$coffeeprice=$nocoffee*1.50;
$tax=1.50*.13;
$total=$coffeeprice+$tax;






?>

<!DOCTYPE html>
	<html lang="en">
		
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
			<title>Project </title>
		</head>
		
		<body>
<header class="header">
  <div class="container">
    <nav class="f">

    </nav>
    <a class="logo">
    <img src="logo/clipart3516884.png"   class="logoimg">


    </a>
    <div class="new">
      
    </div>
  </div>
</header>
      
          <div class="content">
          <img alt="content" class="content_design" src="image/dalma-mall-website-banner-1400x500px_en.jpg">
        </div>

        <section class="text-gray-700 body-font">
        <div class="container mx-auto flex px-0 py-24 items-center justify-center flex-col">
           
       
        
  <video class="lg:w-2/6 md:w-3/6 w-5/6 mb-2 object-cover object-center rounded" alt="hero" width="720" height="340" autoplay loop >
  <source src="video/Cup Of Coffee On Top Of Coffee Beans.mp4" type="video/mp4">

</video> 
         
               
                

           
    
  
    <div  class="text-center lg:w-2/3 w-full ">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Thanks For Your Order </h1>

        <div class=" p-2 flex justify-center">
                            <div class="p-2 w-1/2">  
            <label class="">Number Of Coffee(s) :</label>
        </div>
                <div class="p-1 w-1/2">        
          <input value="<?php echo($nocoffee);?>" name="nucoffee" class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" required placeholder="Number" type="text">
        </div>
    
       </div>

            <div class=" p-2 flex justify-center">



                  <div class="p-2 w-1/2">  
            <label class="">Tax  :</label>
        </div>
                <div class="p-1 w-1/2">        
          <input value="<?php echo($tax);?>" name="nucoffee" class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" required placeholder="Number" type="text">
        </div>
       </div>



      <div class=" p-2 flex justify-center">



                  <div class="p-2 w-1/2">  
            <label class="">Total Bill  :</label>
        </div>
                <div class="p-1 w-1/2">        
          <input value="<?php echo("$");echo($total);?>" name="nucoffee" class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" required placeholder="Number" type="text">
        </div>
       </div>
       
 
        <div class="p-3 flex justify-center">
       <a href="index.html">
        <button  class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Go Back</button></a>

      </div>
    </div>
  </div>
</section>





</body>
</html>



