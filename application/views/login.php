<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/mainstyle.css">        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row heading">Worker Portal</div>
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="#" class="active" id="login-form-link">Login</a>
                        </div>                        
                    </div>                    
                    <code><?php echo $this->session->userdata('message').$this->session->flashdata('error'); $this->session->unset_userdata('message');?></code>                    
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form" action="login" method="post" role="form" style="display: block;">
                                <div class="form-group">
                                    <input type="text" name="login_name" id="login_name" tabindex="1" class="form-control" maxlength="10" placeholder="User Name" value="<?php echo set_value('login_name') ?>" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group text-center">
                                    <!--<input type="checkbox" tabindex="3" class="" name="remember" id="remember">-->
                                    <!--<label for="remember"> Remember Me</label>-->
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                        </div>
                                    </div>
                                </div>                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
