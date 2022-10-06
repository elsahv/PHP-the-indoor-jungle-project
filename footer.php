 <?php wp_footer(); ?>


 <!-- ASIDE WIDGET-->
 <div class="d-sm-flex my-5 border border-2 border-dark">
     <div class="bg-primary CTA p-5" id="page-sidebar">
         <?php if (is_active_sidebar('page-sidebar')) : ?>
             <?php dynamic_sidebar('page-sidebar'); ?>
         <?php endif; ?>
     </div>
     <div class="col bg-danger">logo</div>
 </div>



 <footer>
     <div class="footer-container">
         <span>The Indoor Jungle Project -Copyright @2022</span>
     </div>
 </footer>

 </body>

 </html>