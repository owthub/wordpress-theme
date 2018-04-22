<?php get_header() ?>
<h3>404 Page</h3>
<div class="container">
    <div class="row">
        <div class="alert alert-danger">
            Page Not Found<br/><br/>
            <a href="<?php echo home_url('/') ?>" class="btn btn-info">Go to Homepage</a>
        </div>
    </div>
</div>


<?php get_footer() ?>