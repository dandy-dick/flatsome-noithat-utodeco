<?php 

  function smx_header_contact_btn( $attrs ) {

    $args = shortcode_atts( array( 'tel' => '0905.692.314' ) , $attrs );

    return '
    <a href="tel:'.$args['tel'].'" class="anchor-0 d-flex align-items-center">
      <img src="'.SMX_THEME_URI.'/assets/icons/telephone.png'.'" class="me-8" alt="" style="display:block;height: 42px">
      <div class="d-flex flex-column">
        <span class="fw-bold fs-14 text-black ">Hotline</span>
        <span class="fs-18 text-black">0905.692.314</span>
      </div>
    </a>
    ';
  }
  add_shortcode('smx_header_contact_btn', 'smx_header_contact_btn');

  function uto_sidebar_categories_dropdown( $attrs ) {

    $args = shortcode_atts( array(
      'taxonomy' => 'category'
    ), $attrs );

    return uto_output_sidebar_categories_dropdown( $args['taxonomy'] );
  }
  add_shortcode( 'uto_sidebar_categories_dropdown', 'uto_sidebar_categories_dropdown' );


  function uto_popular_tags( $attrs ) {

    $args = shortcode_atts( array(
      'taxonomy' => 'post_tag'
    ), $attrs );

    return '<div class="d-flex flex-wrap row-gap-6 col-gap-6">'.uto_output_popular_tag_items( $args['taxonomy'] ).'</div>';
  }
  add_shortcode( 'uto_popular_tags', 'uto_popular_tags' );


  function uto_contact_form() {

    return '
    <div class="contact-form">
      <form action="" method="post" class="p-16 m-16 p-40-md m-40-md">
        <input type="hidden" name="contact-form-sumitted" value="submitted">
        <label class="d-none"> Tên của bạn: </label>
        <input placeholder="Tên của bạn" value="" type="text" name="sender-name" class="">
        <span class="text-danger"></span>
        <label class="d-none"> Email: </label>
        <input placeholder="Email" value="" type="text" name="sender-email" class="">
        <span class="text-danger"></span>
        <label class="d-none"> Số điện thoại: </label>
        <input placeholder="Số điện thoại" value="" type="text" name="phone-number" class="">
        <span class="text-danger"></span>
        <label class="d-none"> Lời nhắn: </label>
        <textarea placeholder="Lời nhắn của bạn" name="content" rows="3" class=""></textarea>
        <span class="text-danger"></span>
        <button type="submit" class="btn"> Gửi </button>
      </form>
    </div>
    ';
  }
  add_shortcode('uto_contact_form','uto_contact_form');


?>