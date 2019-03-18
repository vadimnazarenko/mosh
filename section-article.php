<style>
    .container .posts .posts-container #content{
        width: 70%;
        display: inline-block;
    }
    .content-right-sidebar{
        width: 30%;
        display: inline-block;
        float: right;
        margin-top: 73px;
        padding-left: 20px;
        box-sizing: border-box;
    }
    article .entry-content{
        width: 100%;
        max-width: 800px;
    }
    .categories{
        list-style: none;
        font-family: 'Museo Sans W01', helvetica, arial, sans-serif;
        font-size: 1.5em;
        font-weight: 800;
        color: #1D1B1B;
        line-height: 1.2em;
        text-align: left;
    }
    .connect-with-us-title{
        font-family: 'Museo Sans W01', helvetica, arial, sans-serif;
        font-size: 1.5em;
        font-weight: 800;
        color: #1D1B1B;
        line-height: 1.2em;
        text-align: left;
    }
    .social-icons-parent .social-icons{
        list-style-type: none;
    }
    .social-icons-parent ul.social-icons li{
        float: left;
    }
    .social-icons-parent ul.social-icons li a{
        color: #60656f;
        line-height: 20px;
        display: inline-block;
        border: 0;
        padding: 0 16px 0 0;
        font-size: 30px;
    }
    .social-icons-parent ul.social-icons li a .fa-twitter{
        color: #469bfc;
    }
    .social-icons-parent ul.social-icons li a .fa-twitter:hover{
        color: #41495b;
    }

    .social-icons-parent ul.social-icons li a .fa-facebook-square{
        color: #3c5a86;
    }
    .social-icons-parent ul.social-icons li a .fa-facebook-square:hover{
        color: #41495b;
    }

    .social-icons-parent ul.social-icons li a .fa-youtube-play{
        color: #b1161f;
    }
    .social-icons-parent ul.social-icons li a .fa-youtube-play:hover{
        color: #41495b;
    }

    .social-icons-parent ul.social-icons li a .fa-linkedin-square{
        color: #127cb4;
    }
    .social-icons-parent ul.social-icons li a .fa-linkedin-square:hover{
        color: #41495b;
    }
    .categories .cat-item{
        list-style: none;
    }
    .categories .cat-item a{
        display: block;
        font-size: 16px;
        color: #60656f;
        border-bottom: 1px solid #f1f5fc;
        padding: 11px 0;
        line-height: 20px;
        font-family: 'open sans', helvetica, sans-serif;
        font-weight: 400;
    }
    .categories .cat-item:hover a{
        color: #0d82df;
    }
    .categories ul{
        padding-left: 0;
    }
</style>
  <div class="posts">
     
        
    <div class="posts-container">
      <div id="content" class="inner">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="entry-content">

          <div class="meta">
            <div class="date">
              <time><?php the_time('F jS, Y')?></time>
            </div>
            
            <span class="comments"><a href="<?php the_permalink(); ?>#disqus_thread">Comments</a></span>  
          </div>

          <h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>


           		 <?php if ( is_home() || is_category() || is_archive() || is_front_page() || is_search() || is_tag() ) {
                     the_excerpt();
                 }
                 else {
                     the_content();
                 }?>

   <?php the_tags(); ?>
          
      </div>
      </article>

      <?php endwhile; ?>

      <?php comments_template(); ?>

      <div class="pagination">
           <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
           <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
      </div>
      
      <?php else : ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>

      </div>
      <div class="content-right-sidebar">
          <img src="http://u506.black.elastictech.org/mosh/img-1.png" style="border-radius: 10px; max-width: 100%; display: block; margin: 0px auto;">
          <?php get_search_form(); ?>
          <?php wp_list_categories(); ?>

          <h3>Popular Posts</h3>
          <ul>
              <?php $popular = new WP_Query(array('posts_per_page'=>7, 'meta_key'=>'popular_posts', 'orderby'=>'meta_value_num', 'order'=>'DESC'));
              while ($popular->have_posts()) : $popular->the_post(); ?>
                  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
              <?php endwhile; wp_reset_postdata(); ?>
          </ul>
          <div class="connect-with-us-title">
              Connect With Us
          </div>
          <div class="social-icons-parent">
              <ul class="social-icons">
                  <li class="twitter">
                      <a href="https://twitter.com/moshhamedani" title="Mosh on Twitter" target="_blank">
                          <i class="fa fa-twitter"></i>
                      </a>
                  </li>
                  <li class="facebook">
                      <a href="https://www.facebook.com/programmingwithmosh/" title="Mosh on Facebook" target="_blank">
                          <i class="fa fa-facebook-square"></i>
                      </a>
                  </li>
                  <li class="youtube"><a href="https://www.youtube.com/user/programmingwithmosh" title="Mosh on YouTube" target="_blank">
                          <i class="fa fa-youtube-play"></i>
                      </a>
                  </li>
                  <li class="linkedin">
                      <a href="https://www.linkedin.com/in/mosh-hamedani/" title="Mosh on LinkedIn" target="_blank">
                          <i class="fa fa-linkedin-square"></i>
                      </a>
                  </li>
              </ul>
          </div>

      </div>
    </div><!-- .posts-container --> 

    <footer id="footer" class="inner"><p>
    Copyright &copy; 2015 - Programming with Mosh -
    <span class="credit">Powered by <a href="http://wordpress.org">Wordpress</a></span>
    </p>

    Design credit: <a href="http://shashankmehta.in/archive/2012/greyshade.html">Shashank Mehta + One Month Rails</a></footer>


  </div><!-- .posts --> 

  
  