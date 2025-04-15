<nav class="main-nav float-right d-none d-lg-block">














					<ul>
					<?php
					if(isset($_SESSION['login']))
					{
						?>
						<li class="active"><a href="index.php">Home</a></li>
		 <li><a href="createevent.php">Create Event</a></li>
		 <li><a href="view_event.php">View Event</a></li>
  <li><a href="services.php">Services</a></li>
		        
		<li><a href="contact.php">About Us</a></li>
						<li><a href="logout.php">Logout</a></li>
		 				
						<?php
						
					}
					else
					{
						?>
			<li><a href="login.php">Login</a></li>
          <li><a href="register.php">Register</a></li>
        				
						<?php
						
					}
					?>
						
          		</ul>
				</nav>