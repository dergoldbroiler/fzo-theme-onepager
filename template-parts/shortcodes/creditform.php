<?php
    $formid = 3;
    if (isset($args['formid'])) {
        $formid = $args['formid'];
    }
?>
    <!-- Kreditformular -->
    <div class="container-fluid w-100 rowmargin m80">
        <div class="container p-5" id="credit">   
            <div class="row">
                <div class="col-12">
                    <div class="orange-after mb-5 pb-5">
                        <h2 class="">Sie sind an einer Finanzierung interessiert?</h2>
                        <p>Wir melden uns mit einem individuellen Angebot bei Ihnen!</p>
                    </div>
                        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => $formid ) ); ?>
                </div>
            </div>
        </div>    
    </div>
