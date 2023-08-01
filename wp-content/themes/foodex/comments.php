<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>

  <?php if ( have_comments() ) : ?>
      <h4 class="comment-title">
          <?php comments_number( esc_html__('0 Comments', 'foodex'), esc_html__('1 Comment', 'foodex'), esc_html__('% Comments', 'foodex') ); ?>
      </h4>
      <!-- section subtitle end -->
      <!-- divider start -->
      <div class="divider-l"></div>
      <!-- divider end -->
      <!-- blog comments start -->
      <div class="blog-comments">
          <section class="comments">
              <?php wp_list_comments('callback=foodex_theme_comment'); ?> 
          </section>
      </div>
      <!-- blog comments end -->
      <div class="divider-l"></div>
      <?php
          if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
      ?>
      <div class="pagination_area">
           <nav>
                <ul class="pagination">
                    <li> <?php paginate_comments_links( 
                    array(
                    'prev_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-left"></i>', 'foodex' ),ENT_QUOTES),
                    'next_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-right"></i>', 'foodex' ),ENT_QUOTES),
                    ));  ?>
                    </li>
                </ul>
           </nav>
      </div>
    <?php endif; ?>
    <!-- END PAGINATION --> 
    <?php endif; ?>  
    <section class="comments">
        <div class="container container-fix">
            <div class="extra-margin-all post-spacing">
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="post-spacing-3">
                        <div>                
                        <?php
                          if ( is_singular() ) wp_enqueue_script( "comment-reply" );
                              $aria_req = ( $req ? " aria-required='true'" : '' );
                              $comment_args = array(
                                'id_form' => 'form',        
                                'class_form' => 'comment-form',                         
                                'title_reply'=> esc_html__( 'Leave a comment', 'foodex' ),
                                'fields' => apply_filters( 'comment_form_default_fields', array(
                                    'author' =>   ' <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <input type="text" class="requiredField name" name="author" id="name" placeholder="'.esc_attr__('Name', 'foodex').'">
                                                    </div>',

                                    'email' =>    ' <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <input id="email" class="requiredField email" placeholder="'.esc_attr__('Email', 'foodex').'" name="email" type="email">
                                                    </div>',

                                ) ),   
                                'comment_field' => '<div class="make-space">
                                                    <textarea id="comment" class="requiredField message" name="comment" '.$aria_req.' placeholder="'.esc_attr__('Write a comment...', 'foodex').'" required="required" data-error="Please,leave us a message."></textarea>
                                                    </div>',                
                                'label_submit' => esc_html__( 'Post a comment', 'foodex' ),
                                'comment_notes_before' => '',
                                'comment_notes_after' => '',               
                              )
                        ?>
                        
                        <?php if ( comments_open() ) : ?>
                          <?php comment_form($comment_args); ?>
                        <?php endif; ?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>