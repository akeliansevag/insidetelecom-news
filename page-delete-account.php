<?php get_header(); ?>
<style>
    .steps {
        background-color: black;
        color: white;
        border-radius: 5px;
        display: inline-block;
        text-align: center;
        padding: 3px 4px;
        margin-bottom: 20px;
    }
</style>
<div class="main-container container mt-5" id="main-container">

    <!-- Content -->
    <div class="row">

        <!-- Posts -->
        <div class="col-lg-6 blog__content mb-72">
            <h1 class="page-title">Delete Account</h1>
            <div class="page-container overflow-hidden">
                <h2>We regret to see you delete your account!</h2>
                <p>You are about to delete your Inside Telecom account!</p>
                <p>If you have a problem using the app, deleting your account will delete all your account information.</p>
                <div class="row mt-5">
                    <div class="col-sm-6">
                        <div class="mb-5">
                            <div class="steps">Step 1</div>
                            <img class="d-block" src="<?= get_template_directory_uri() ?>/img/screenshot1.jpg" alt="Screenshot 1">
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="steps">Step 2</div>
                        <img class="d-block" src="<?= get_template_directory_uri() ?>/img/screenshot2.jpg" alt="Screenshot 2">
                    </div>
                </div>
            </div>
        </div> <!-- end posts -->

    </div> <!-- end content -->
</div> <!-- end main container -->

<?php get_footer(); ?>