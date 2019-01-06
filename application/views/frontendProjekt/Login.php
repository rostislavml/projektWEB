<div class="container">
    <div class="row">
        <div class="row main col-sm-offset-3 col-sm-6">
            <div class="form-login">
             <div class="panel-heading">
              <div class="panel-title text-center">
                <h1 class="title">Login</h1>
                <hr />
              </div>
             </div> 
            <?php
             echo $this->session->message;
             echo form_open('loginFinish');
            ?>
            <input name="username" type='text' id="userName" class="form-control input-sm chat-input" placeholder="Email" />
            <input name="password" type='password' id="userPassword" class="form-control input-sm chat-input" placeholder="Password" />
            <div class="wrapper">
                <button class="btn btn-primary" type="submit">
                    Submit
                </button>
            </div>
            </form>
            </div>
        </div>
    </div>
</div>
