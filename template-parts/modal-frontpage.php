<div class="modal fade" id="contactModalHP" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="    border: none;
    position: relative;
    top: 0px;
    z-index: 999;
    left: -20px;
    height: 1px;
    padding: 0;
    padding-top: 20px;
">
 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 4 ) ); ?>
      </div>
     
    </div>
  </div>
</div>


<script>
jQuery(document).ready(function($) {
    $('#contactModalHP').modal('show');
});
    </script>