<?php
/**
 * The template for displaying the footer
 *
 */
 
?>
        </div><!-- #main -->
    </div><!-- #page -->
    
    <footer id="gk-footer" role="contentinfo">
        <?php if (is_active_sidebar('bottom')) : ?>
        <div id="gk-bottom" role="complementary">
            <div class="widget-area">
                <?php dynamic_sidebar('bottom'); ?>
            </div>
        </div>
        <?php endif; ?>
        
<div id="skills">
<?php
    if (is_home()) {
        $args = array('post_type'=>'skill', 'posts_per_page'=>100);
        $loop = new WP_Query($args);
        $count = 0;
        while ($loop->have_posts()) : $loop->the_post();
            $class = $count % 2 == 0 ? "even" : "odd";
            echo "<span class='skill " . $class . "'>";
            the_title($after=" ");
            echo "</span>";
            $count++;
        endwhile;
    }
?>
</div>


<!-- links -->
<div class="container object-non-visible">
    <h4 id="contact" class="title text-center">Contato</h4>
    <div class="row">
        <div class="col-sm-12 text-center">
            <div class="footer-content">
                <ul class="list-icons">
                    <li><a href="tel:01298156-8438"><i class="fa fa-phone pr-10"></i> 012 98156-8438</a></li>
                    <li><a href="mailto:arildo.o.s@outlook.com"><i class="fa fa-envelope-o pr-10"></i> arildo.o.s@outlook.com</a></li>
                </ul>
                <ul class="social-links">
                    <li class="facebook"><a href="https://www.facebook.com/arildo.oliveirasilva" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li class="linkedin"><a href="http://br.linkedin.com/in/arildooliveira" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li class="github"><a href="https://github.com/arildoosilva" target="_blank"><i class="fa fa-github"></i></a></li>
                    <li class="googleplus"><a href="https://plus.google.com/u/0/116955822820036055829" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="credits">
    <p>Desenvolvido com WordPress.</p>
</div>

    </footer><!-- end of #gk-footer -->
    
    <?php wp_footer(); ?>
</body>
</html>
