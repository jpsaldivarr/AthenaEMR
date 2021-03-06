
<div class="row">
  <div class="col-xs-12">
      <div class="card">
        <div class="card-header">
          Medicine Data
        </div>
        <div class="card-body no-padding">
          <?php
                $template = array('table_open' => '<table class="datatable table table-striped primary" cellspacing="0" width="100%">');
                $this->table->set_template($template);

                $cell_add = array('data' => '<a href="'.site_url().'/medicine/adddata">Add New Data</a>', 'class' => 'highlight', 'colspan' => 2);

                $this->table->set_heading('Medicine ID','Type Medicine ID','Medicine Name',
                'Price','Created At','Updated At','Action');
                foreach($query as $row){
                  if($_SESSION['status'] == "ADMIN"){
                    $edit = "<a href='".site_url()."/medicine/viewdata/".$row->medicine_id."' title='".$row->name."'>View</a>
                    <br>
                    <a href='".site_url()."/medicine/editdata/".$row->medicine_id."' title='".$row->name."'>Edit</a>
                    <br>
                    <a href='".site_url()."/medicine/deletedata/".$row->medicine_id."' title='".$row->name."' onclick='return confirmDelete();'>Delete</a>"; 
                  } else {
                    $edit = "<a href='".site_url()."/medicine/viewdata/".$row->medicine_id."' title='".$row->name."'>View</a>"; 
                  }
                    
                    $this->table->add_row($row->medicine_id, $row->type_id,$row->name,$row->price, $row->created_at, $row->updated_at,$edit);
                }
                echo $this->table->generate();
        ?>
        </div>
      </div>
    </div>
  </div>
