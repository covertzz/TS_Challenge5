

<p>
    <body>	
    	<h2>Enter your email to enter the SPACE portal</h2>
    	<form method='post' action=''>
        	<div class="form-group"> 
        		<input placeholder="(user@space.edu)" name="email" size=50></input> <button class="btn btn-default" type="submit" name='submit'>Submit Button</button>
       		</div> 
	</form>
    </body>
<h2>
<?php
include('vendor/twig/lib/Twig/Autoloader.php');
if (isset($_POST['email'])) {
    $email=$_POST['email'];

    Twig_Autoloader::register();
    try {
        $loader = new Twig_Loader_String();
        $twig = new Twig_Environment($loader);

        $result= $twig->render("Thank you {$email}. You will be notified soon.");
        echo $result;

    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

?>
</h2>
</p>
