<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<div class="row">
  <div class="col-md-12">
    <div class="col-md-10">
      <h3></h3>
    </div>
    <div class="col-md-2">
      <a href="<?php echo resource_path("admin_types","index");?>" class="btn btn-primary pull-right">List of admin Types</a>
    </div>
  </div>
</div>
</section>
    <!-- Main content -->
    <section class="content">
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><?= $this->page_title ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
        <div class="box-header with-border share-url">
        <div class="box-body">
          <label id="certified">Branch Banking</label>
          <a class="btn btn-info publish-url" style="text-decoration: none;">Published</a>
        </div>
        </div>
        <div class="box-header with-border share-url">
        <div class="box-body">
        <label id="certified">Wealth</label>
          <a class="btn btn-info publish-url" style="text-decoration: none;">Published</a>
        </div>
        </div>



        <div class="box-header with-border">
        <div class="box-body">
        <a class="btn btn-info share-link-btn" data-text="Share">
        Share
        </a>
        <div class="row"></div>
       <input type="text" class="form-control share-inp" value="123" />
        </div>
        </div>
         <div class="box-header with-border">
        <div class="box-body">
        <a class="btn btn-info share-link-btn" data-text="Share">
        Share
        </a>
        <div class="row"></div>
        <input type="text" class="form-control share-inp" value="345" />
        </div>
        </div>
        <div class="new">
            <div>
                <div>
                    <a class="btn btn-info test" data-id="123">Test</a>
                    <a class="btn btn-info test" data-id="123">Test</a>
                    <a class="btn btn-info test" data-id="123">Test</a>
                </div>
            </div>
        </div>

        <br/><br/>
        <div class="new">
            <div>
                <div>
                    <a class="btn btn-info test" data-id="456">Test</a>
                    <a class="btn btn-info test" data-id="456">Test</a>
                    <a class="btn btn-info test" data-id="456">Test</a>
                </div>
            </div>
        </div>

    </section>
</div>
<form action="<?= site_url(ADMIN_PATH.'/admin_types/ajax_sub') ?>" class= "form-horizontal" id= "certified_details_form" method="post">
<input type="hidden" class="form-control" id="certificateData" name="certified_details" />
</form>
<script type="text/javascript">
  jQuery(document).ready(function() {
    $('.test').on('click', function() {
        var testThis = $(this).attr('data-id');
        var testDiv = $(this).parents('.new').find('*').removeAttr('data-id');
        console.log(testDiv);
    });



         $('.publish-url').on('click', function() {
            $(this).closest('.share-url').slideToggle('slow');
            /*$('#certified_details_form').submit(function(){
            });*/
         });
/*         $('.share-btn').on('click', function(){
          if($(this).data('text') != "Share")
          {
            $(this).data('text', 'Share');
            $(this).text('Share');
          }
          else
          {
             $(this).data('text', 'Hide');
             $(this).html('Hide');
          }
          $(this).next('label').toggleClass('hidden');
         });*/

  /* Copy share Link to Clipboard */
     $('.share-link-btn').on('click', function() {
         var urlBox = $(this).siblings('.share-inp');
         var sharedUrl = urlBox.val();
         Clipboard.copy(sharedUrl);
         urlBox.select();
     });
     window.Clipboard = (function(window, document, navigator) {
         var textArea,
             copy;
 
         function isOS() {
             return navigator.userAgent.match(/ipad|iphone/i);
         }
 
         function createTextArea(text) {
             textArea = document.createElement('textArea');
             textArea.value = text;
             document.body.appendChild(textArea);
         }
 
         function selectText() {
             var range,
                 selection;
 
             if (isOS()) {
                 range = document.createRange();
                 range.selectNodeContents(textArea);
                 selection = window.getSelection();
                 selection.removeAllRanges();
                 selection.addRange(range);
                 textArea.setSelectionRange(0, 999999);
             } else {
                 textArea.select();
             }
         }
 
         function copyToClipboard() {
             document.execCommand('copy');
             document.body.removeChild(textArea);
         }
 
         copy = function(text) {
             createTextArea(text);
             selectText();
             copyToClipboard();
         };
 
         return {
             copy: copy
         };
     })(window, document, navigator);
     });
     /* EO Certificate Badge */
</script>