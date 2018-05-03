<?php
header("HTTP/1.1 200 OK");
header("Content-Type: text/html");
include("../pagefragments/header.html");
?>
        <div class="container">
		<div class="row">
				<div class="col s12 m6 offset-m8">
                    <div class="card white darken-1">
                        <div class="card-content blue-text">
                            <span class="card-title">Sign Up</span>
                            <hr>
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
										<div class="input-field col s6 m6">
                                            <i class="material-icons waves-light prefix">person</i>
                                            <input id="icon_prefix" type="text" class="validate">
                                            <label for="icon_prefix">First Name</label>
                                        </div>
										<div class="input-field col s6 m6">
                                            <i class="material-icons waves-light prefix">perm_identity</i>
                                            <input id="icon_prefix" type="text" class="validate">
                                            <label for="icon_prefix">Last Name</label>
                                        </div>
                                        <div class="input-field col s12 m12">
                                            <i class="material-icons waves-light prefix">account_circle</i>
                                            <input id="icon_prefix" type="text" class="validate">
                                            <label for="icon_prefix">Username</label>
                                        </div>
                                        <div class="input-field col s12 m12">
                                            <i class="material-icons waves-light prefix">email</i>
                                            <input id="icon_prefix" type="email" class="validate">
                                            <label for="icon_prefix">Email</label>
                                        </div>
                                        <div class="input-field col s12 m12">
                                            <i class="material-icons waves-light prefix">security</i>
                                            <input id="icon_prefix" type="password" class="validate">
                                            <label for="icon_prefix">Password</label>
                                        </div> 
                                        <div class="input-field col s12 m12">
                                            <i class="material-icons waves-light prefix">lock</i>
                                            <input id="icon_prefix" type="password" class="validate">
                                            <label for="icon_prefix">Confirm Password</label>
                                        </div>
										<div class="col s12 m12">
										 <form action="#">
											<div class="file-field input-field col s12 m12">
											  <div class="btn">
												<span>File</span>
												<input type="file" multiple>
											  </div>
											  <div class="file-path-wrapper col s12 m9">
												<input class="file-path validate" type="text" placeholder="Upload profile image">
											  </div>
											</div>
										 </form>
										 </div>
										<div class="col s12 m6 offset-m4">
                                            <button class="btn waves-effect waves-light" type="submit" name="action">Sign me up!</button> 
                                        </div>									
                                    </div>
                                </form>
                            </div>        
                        </div>
                    </div>
                </div>
            </div>
		</div>
<?php
include("../pagefragments/footer.html");
