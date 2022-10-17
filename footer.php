<?php wp_footer(); ?>


<!-- ASIDE WIDGET-->
<div class="d-sm-flex my-5 border border-2 border-dark">
    <div class="bg-primary CTA p-5" id="page-sidebar">
        <?php if (is_active_sidebar('page-sidebar')) : ?>
            <?php dynamic_sidebar('page-sidebar'); ?>
        <?php endif; ?>
    </div>

    <div class="col bg-danger">
        <div class="p-5">
            <h2>Subscribe for post updates</h2>
            <p>I also maintain a weekly newsletter about my other development and blogging projects, including post updates from the Indoor Jungle Project. Sign up for updates sent straight to your inbox</p>
            <p>Not interested in yet another email newsletter? You can also read it for free
                <a target="_blank" href="https://elsahovey.com/newsletter" rel="noreferrer" style="color: #621708">
                    here
                </a>
            </p>
        </div>
    </div>
</div>



<footer>
    <div class="footer-container">
        <span>The Indoor Jungle Project -Copyright @2022</span>
    </div>
</footer>

</body>

</html>