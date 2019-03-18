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
    .categories, .general-list{
        list-style: none;
        font-family: 'Museo Sans W01', helvetica, arial, sans-serif;
        font-size: 1.5em;
        font-weight: 800;
        color: #1D1B1B;
        line-height: 1.2em;
        text-align: left;
        margin-bottom: 20px;
    }
    .categories .cat-item, .general-list li{
        list-style: none;
    }
    .categories .cat-item a, .general-list li a{
        display: block;
        font-size: 16px;
        color: #60656f;
        border-bottom: 1px solid #f1f5fc;
        padding: 11px 0;
        line-height: 20px;
        font-family: 'open sans', helvetica, sans-serif;
        font-weight: 400;
    }
    .categories .cat-item:hover a, .general-list li:hover a{
        color: #0d82df;
    }
    .categories ul, ul.general-list{
        padding-left: 0;
    }
    @media screen and (max-width: 1000px){
        .content-right-sidebar{
            display: none;
        }
        .container .posts .posts-container #content {
            width: 100%;
        }
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
          <ul class="general-list">
              <?php $popular = new WP_Query(array('posts_per_page'=>7, 'meta_key'=>'popular_posts', 'orderby'=>'meta_value_num', 'order'=>'DESC'));
              while ($popular->have_posts()) : $popular->the_post(); ?>
                  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
              <?php endwhile; wp_reset_postdata(); ?>
          </ul>
          <?php load_template(locate_template('link-to-social.php')); ?>

      </div>
    </div><!-- .posts-container --> 

    <footer id="footer" class="inner"><p>
    Copyright &copy; 2015 - Programming with Mosh -
    <span class="credit">Powered by <a href="http://wordpress.org">Wordpress</a></span>
    </p>

    Design credit: <a href="http://shashankmehta.in/archive/2012/greyshade.html">Shashank Mehta + One Month Rails</a></footer>


  </div><!-- .posts --> 

  
  