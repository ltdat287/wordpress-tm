<?php 
    while( have_posts() ) : the_post();
 ?>

<div class="news-search">
    <input type="text" name="s" class="form-control form-true" id="search_form" placeholder="Tìm kiếm ...">
    <i class="fa fa-search" aria-hidden="true"></i>
    <input type="hidden" value="1" name="sentence" />
    <input type="hidden" value="<?php echo get_post_type( $post ); ?>" name="post_type" />
</div>

<?php endwhile; ?>

<script type="text/javascript">
    (function($) {
        $('#search_form').keypress(function(e) {
            if (e.which == 13) {
                var search = $('#search_form').val();

                alert($('input[name="post_type"]').val());
            }
        });
    })(jQuery);
</script>