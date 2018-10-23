<div id = "loginpage" class="container-fluid">
	
	<div class="row">
    	<div class="col">
    	</div>
    	<div class="col">
    	  	<div class="card container">
    	  		
    	  		<h2 id="title">Sign up.</h2>

    	  		<form action="stumble/insert" method="post">
				  <fieldset>
				   <div class="form-group">
				      <label for="InputName">Name.</label>
				      <input type="name" name="first_name" class="form-control" id="InputName" aria-describedby="nameHelp" placeholder="Enter your name">
				      <small id="namelHelp" class="form-text text-muted">We'll need your name.</small>
				    </div>
				    <div class="form-group">
				      <label for="InputEmail1">Email address.</label>
				      <input type="email" name="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				    </div>
				    <div id="passwordpart" class="form-group">
				      <label for="exampleInputPassword1">Password.</label>
				      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				      <small id="passwordHelp" class="form-text text-muted">Set a secure password.</small>
				    </div>
				  
					<!-- <input type="submit" value="Add Records"> -->
				    <!-- <button action="/stumble/insert" type="submit" value="Add Records" id="submitBtn" class="btn btn-primary">Continue.</button> -->
				  </fieldset>
				</form>
				<a class="navbar-brand" href="/stumble/posts"> <button type="submit" value="Add Records" id="submitBtn" class="btn btn-primary">Continue.</button></a>
				<!-- <a class="navbar-brand" href="/stumble/login"><button class="btn btn-primary" >Login.</button></a> -->
    	  	</div>
    	</div>
  </div>

</div>