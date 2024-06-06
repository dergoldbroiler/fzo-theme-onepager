
<div class="container p-0">

    <div class="row">

        


                <?php   
       
                    $count = 3;
                    for($i=1; $i<=$count; $i++):
                        $headline = "";
                        $content = "";

                        if(isset($args['headline'.$i])):
                            $headline = $args['headline'.$i];
                        endif;  
                        
                        
                        if(isset($args['content'.$i])):

                            if(isset($args['contenttype'.$i]) && $args['contenttype'.$i] == "list"):
                                $contentitems = explode("#",$args['content'.$i]);

                                $content = "<ul class='circle ms-0 ps-3'>";
                                foreach($contentitems as $item):
                                    $content .= "<li>".$item."</li>";
                                endforeach;
                                $content .= "</ul>";
                            else:
                                $content = $args['content'.$i];
                            endif;
                        endif;  
                ?>        
<div class="col-12 col-lg-4 single-post-parent mb-3">
            
            <div class="single-post bg-white p-5 d-flex flex-column justify-content-start h-100 mb-5">
          
                <h3 class="my-4"><?= $headline ?></h3>
                <div class="mb-1">    
                    <?= $content ?>
                </div>
                </div> 

</div>

                <?php endfor; ?>
           

    </div>
</div>
   
   




