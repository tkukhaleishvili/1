<?php
  // if (! empty( $_GET))var_dump( $_GET );
   if (! empty( $_POST))var_dump( $_POST );
?>
<h2>Contact</h2>
<form name="contact" method="POST" action="process.php">
    <div>
        <label for="name">Name:</label> <input type="text" name="name" placeholder="Your Name" />
    </div>
    <div>
        <label for="name">Email:</label> <input type="text" name="email" placeholder="Your Email" />
    </div>
    <div class="mb-3">
    <label for="Password">Password:</label> <input type="password" name="password" placeholder="Your Password"  />

  </div>
    
    <div>
    	 </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>