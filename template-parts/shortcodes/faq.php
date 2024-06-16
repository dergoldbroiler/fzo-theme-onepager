<style>
.faq-element{
    padding: 26px 40px 25px 50px;
  box-shadow: 0 33px 36px 0 rgba(93, 108, 123, 0.08);
  background-color: rgb(255, 255, 255);transition: all 0.3s;
  cursor: pointer;
}
.faq-element img.minus{
    display:none;transition: all 0.3s;
}
.faq-element img.plus{
    display:block;transition: all 0.3s;
}
.faq-element.active img.plus{
    display:none;
}

.faq-element.active img.minus{
    display:block;
}
.faq-answer{
    max-height: 1px;
    overflow: hidden;
    height: auto;transition: all 0.3s;
}
.faq-answer.active{
    max-height: 400px;
    overflow: hidden;
    height: auto;
    transition: all 0.5s;
    padding-top:30px;
}
.faq-answer p{
    width:60%;
  font-size: 15px;

  line-height: 1.6;

  color: rgb(6, 43, 77);
}
@media(max-width:992px) {
    .faq-answer p{
    width:90%;
 
}
}
</style>
<div class="container pb-5">
    <div class="row">
        <div class="col-12">
                 <?php
                for($i=1; $i<=10; $i++):

                    $question = get_field('frage_'.$i,'options')['frage'];
                    $answer = get_field('frage_'.$i,'options')['antwort'];
                    if($question){
                        
                    
                    ?>
                    <div class="faq-element my-4">
                        <div class="faq-question d-flex justify-content-between">
                            <h3 class="fs23"><?= $question ?></h3>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/plus.svg" class="plus" />
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/minus.svg" class="minus" />
                        </div>
                        <div class="faq-answer">
                            <p >
                             <?= $answer ?>
                            </p> 
                        </div>
                    </div>    
                    <?php
                    }
                endfor;    
                ?>
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function($){
        $('.faq-element').click(function(){
            $(this).toggleClass('active');
            $(this).find('.faq-answer').toggleClass('active');
        });
    });
</script>