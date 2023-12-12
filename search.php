<?php
/**
 * Modèle de recherche
 */
?>

<?php
get_header();
?>
<main class="site__main">
   <?php get_template_part('vagues-variantes/vaguesGeneral')?> 
   <?php get_template_part('vagues-variantes/vaguesHautPiedPage'); ?>
   <section class="recherche__section">
      <h2>Recherche</h2>
     
      <h6>Retrouver ici tout ce que vous cherchez</h6>
      <?php  get_search_form(); ?> 
  
      <?php
      $search_query = get_search_query();
      $categories = get_categories(array(
        'name__like' => $search_query,
        'hide_empty' => true,
      ));

      if (!empty($categories)):
         foreach($categories as $category): 
            $category_link = get_category_link($category->term_id); // Get the link of the category
         ?>
         <article>
            <h5><a href="<?php echo $category_link; ?>"> <?php echo $category->name; ?></a></h5>
         </article>
         <?php endforeach; ?>
      <?php endif; ?>
   </section>
</main>
<?php
get_footer();