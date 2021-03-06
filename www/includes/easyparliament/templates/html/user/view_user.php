<div class="full-page legacy-page static-page"> <div class="full-page__row"> <div class="panel">        <div class="stripe-side">
            <div class="main">
				<h1>User details</h1>
                <div class="row">
                <span class="label">Name</span>
                <span class="formw"><?= _htmlentities($name) ?></span>
                </div>

                <div class="row">
                <span class="label">Website</span>
                <span class="formw"><?= $website == '' ? 'none' : '<a rel="nofollow" href="' . _htmlentities($website) . '">'. _htmlentities($website) . '</a>' ?></span>
                </div>

                <div class="row">
                <span class="label">Status</span>
                <span class="formw"><?= _htmlentities($status) ?></span>
                </div>
                <div class="row">
                <span class="label">Joined</span>
                <span class="formw"><?= _htmlentities($registrationtime) ?></span>
                </div>
            </div> <!-- end .main -->
            <div class="sidebar">

            </div> <!-- end .sidebar -->
            <div class="break"></div>
        </div> <!-- end .stripe-* -->

        <div class="stripe-side">
            <div class="sidebar">

        			&nbsp;
            </div> <!-- end .sidebar -->
            <div class="break"></div>
        </div>
      </div>
    </div>
</div>
