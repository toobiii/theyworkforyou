<div class="full-page legacy-page static-page">
   <div class="full-page__row"> <div class="panel">
      <div class="stripe-side">
         <div class="main">

        <?php if (isset($error)) { ?>
            <p>There was an error logging you in with Facebook. You can either try again or login using your email</p>

            <p><?= $error ?></p>

				<h1>Sign in</h1>

                <p>Not yet a member? <a href="/user/?pg=join">Join now</a>!</p>

                <form method="post" action="/user/login/">


                <div class="row">
                <span class="label"><label for="email">Email address:</label></span>
                <span class="formw"><input type="text" name="email" id="email" value="" maxlength="100" size="30" class="form"></span>
                </div>

                <div class="row">
                <span class="label"><label for="password">Password:</label></span>
                <span class="formw"><input type="password" name="password" id="password" maxlength="30" size="20" class="form"></span>
                </div>

                <div class="row">
                <span class="label">&nbsp;</span>
                <span class="formw"><input type="checkbox" name="remember" id="remember" value="true" checked> <label for="remember">Remember login details.*</label></span>
                </div>

                <div class="row">
                <span class="label">&nbsp;</span>
                <span class="formw"><input type="submit" value="Login" class="submit"> <small><a href="/user/password/">Forgotten your password?</a></small></span>
                </div>

                <div class="row">
                <small></small>
                </div>

                <input type="hidden" name="submitted" value="true">
                </form>

                <a href="<?= $fb_login_url ?>">Log in with Facebook!</a>            </div> <!-- end .main -->
        <?php } else { ?>

            // ASK FOR POSTCODE
        <?php } ?>
            <div class="sidebar">

                        <div class="block" id="help">
                    <h4>Why do I need to sign in?</h4>
                    <div class="blockbody">
<p>You don't need to sign-in to browse or search the site. We only ask you to register and log-in if you want to add annotations or contribute to the glossary.</p>
                    </div>
                </div> <!-- end .block -->

            </div> <!-- end .sidebar -->
            <div class="break"></div>
        </div> <!-- end .stripe-* -->

</div></div></div>
