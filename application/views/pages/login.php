<div id = "loginpage" class="container-fluid">
	
	<div class="row">
    	<div class="col">
    	</div>
    	<div class="col">
    	  	<div class="card container">
    	  		
    	  		<h2 id="title">Sign in.</h2>

    	  		<form action="/stumble/loaduser" method="post">
				  <fieldset>
				    <div class="form-group">
				      <label for="InputEmail1">Email address.</label>
				      <input type="email" name="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				    </div>
				    <div id="passwordpart" class="form-group">
				      <label for="exampleInputPassword1">Password.</label>
				      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				    </div>
				

				  
				  </fieldset>
				</form>
				 <a class="navbar-brand" href="/stumble/posts"> <button type="submit" value="Add Records" id="submitBtn" class="btn btn-primary">Continue.</button></a>
				<!-- <a class="navbar-brand" href="/stumble/signup"><button id="submitBtn" class="btn btn-primary" >Sign up.</button></a> -->

    	  	</div>
    	</div>
  </div>

</div>