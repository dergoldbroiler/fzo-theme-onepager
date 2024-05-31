<?php
    $formid = 5;
    if (isset($args['formid'])) {
        $formid = $args['formid'];
    }
?>
    <!-- Kontaktformular -->
    <div class="container-fluid w-100 rowmargin m80">
        <div class="container p-0" id="contactform">   
           
                    <div class="orange-after mb-5 pb-5">
                        <h2 class="">Kontakt aufnehmen</h2>
                    </div>
                        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => $formid ) ); ?>
                
        </div>    
    </div>
