<?php
if(isset($args['name'])){
  $repeaterFieldName = $args['name'];
}else{
  $repeaterFieldName = 'faq';
}
if (have_rows($repeaterFieldName)) :
  while (have_rows($repeaterFieldName)) : the_row();
?>
<div class="m-accordion__item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
  <div class="m-accordion__heading">
    <div class="m-accordion__number">Q</div>
    <div class="m-accordion__text" itemprop="name"><?php the_sub_field('question'); ?></div>
  </div>
  <div class="m-accordion__texts" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><span itemprop="text"><?php the_sub_field('answer'); ?></span></div>		
</div>
<?php
  endwhile;else : endif;
?>