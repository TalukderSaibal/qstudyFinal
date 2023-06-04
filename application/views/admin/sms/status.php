
<style>
  .panel-heading{
    background-color: #2F91BA !important;
  }

  .panel-title a {
    text-decoration: none;
    color: #fff !important;
  }
</style>

<div class="" style="margin-left: 15px;">
  <div class="row">
    <div class="col-md-4">
      <?php echo $leftnav ?>
    </div>


    <div class="col-md-8 user_list">
      <div class="panel-group " id="task_accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title text-center">
              <a role="button" data-toggle="collapse" data-parent="#task_accordion" href="#collapseOnetask" aria-expanded="true" aria-controls="collapseOne"> 
                <strong><span style="font-size : 18px; color:white;">  Active SMS Templete </span></strong>
              </a>
            </h4>
          </div>

          <form autocomplete="off" action="" method="POST">
            <div class="row panel-body">
              <div class="row">
                <div class="col-sm-12 text-right">
                  <button class="btn btn_next" type="button" onClick="location.reload()" id="cancelBtn"><i class="fa fa-times" style="padding-right: 5px;"></i>Cancel</button>
                  <button type="submit" class="btn btn_next" id="saveBtn"><i class="fa fa-check" style="padding-right: 5px;"></i>Save</button>
                </div>
              </div>

            </div>

            <?php if (!empty( $this->session->flashdata('Failed') )) { ?>
	            <div class="alert alert-danger"><?php echo $this->session->flashdata('Failed'); ?></div>
	          <?php  } ?>

	          <?php if (!empty( $this->session->flashdata('message') )) { ?>
	            <div class="alert alert-success"><?php echo $this->session->flashdata('message'); ?> </div>
	          <?php  } ?>

            
            <div class="row panel-body">
              <div class="row" style="padding:0px 5px 0px 5px;">
                <div class="col-sm-3">Status :</div>
                <label class="radio-inline">
                  <input type="radio" name="setting_value"  value="1" <?= $templets[0]['setting_value'] == 1 ? "checked" : ""; ?> required> Active
                </label>
                <label class="radio-inline">
                  <input type="radio" name="setting_value" value="0" <?= $templets[0]['setting_value'] == 0 ? "checked" : ""; ?> required> Deactive
                </label>
              </div>
            </div>


          </form>
        </div>

      </div>

    </div>

  </div>

</div>