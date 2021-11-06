<?php 


  // Archives: Categories
  function uto_output_sidebar_categories_dropdown( string $term_name = 'category') {

    $categories = get_terms( $term_name );

    
    $html = ' <ul class="ul-0 mt-16 mb-0 accordions sidebar-categories-dropdown">';
    
    // Render Categories Menu & Sub Menu
    foreach( $categories as $cat ) {
      
      if ($cat->parent == 0)
        $html .= uto_recursive_output_categories_menu_item($categories, $cat );
    }

    $html .= '</ul>';

    return $html;
  }

    // recursive function to output menu & sub menu
    function uto_recursive_output_categories_menu_item( $categories, $cat ): string {

      
      $hasChild = false;
      foreach( $categories as $category ) {
        if ( $category->parent == $cat->term_id ) {
          $hasChild = true;
          break;
        }
      }
      
       
      $html = '';
      
      if ( $hasChild == false) {
        $html .= '
          <li class="categories__item d-flex"> 
            <a href="'. get_category_link($cat->term_id).'" class="anchor-0">'. $cat->name .'</a> 
          </li> 
        ';
      }
      else {
        //  Output Self: Open
        $html = $html . '
        <li class="categories__item accordion-item">
          <div class="accordion-header d-flex align-items-center">
            <a href="'. get_category_link( $cat->term_id ).'" class="anchor-0">'. $cat->name .'</a>
            <button class="btn m-0 ms-auto" data-bs-toggle="collapse" data-bs-target="#categories__'.$cat->term_id.'">
              <i class="ri-arrow-down-s-fill"></i>
            </button>
          </div>
          <div id="categories__'.$cat->term_id.'" class="accordion-collapse collapse">
            <ul class="ul-0 d-flex flex-column pb-10">
        ';

        foreach( $categories as $category ) {
          if ($category->parent == $cat->term_id )
            $html .= uto_recursive_output_categories_menu_item($categories, $category, $html );
        }

        // Output Self: Close
        $html .= '
            </ul>
          </div>
        </li>
        ';
      }

      return $html;
      
    }


  // Archives: Popular Tags
  function uto_output_popular_tag_items( string $term_name = 'post_tag' ) {

    $tags = get_terms( $term_name );
    // sort tags by count
    usort($tags, function ($t1, $t2) {
      return $t2->count <=> $t1->count;
    });

    // output first 20 tags
    $html = '';
    $i = 1;
    foreach( $tags as $tag ) {
      if ($i == 20)
        return $html;
      $i += 1;
      $html .= '<a href="'.get_term_link( $tag->term_id, $term_name ).'" class="anchor-0 post-tag">' .$tag->name. '</a>';
    }

    return $html;
  }

?>