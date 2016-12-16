
<html>
    <head>
        
         
        
        
        
        
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" 
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >




    </head>
    <body>
       <?php echo form_open('Offices/create'); ?>
            <div class="container" style="border:solid 3px black; padding-top :50px;padding-bottom: 50px;
 margin-top:20px;">
           
                <div class="col-sm-12">
                <div class="top-buffer">
                    <div class="row" style="padding-bottom: 10px;">
                        <div class="col-sm-1 form-group">
                        <label>Code</label>
                        </div>
                        
                        <div class="col-sm-3 form group">
	                <input type="text"  name="Code"  class="form-control">
                        </div>
	                
	                <div class="col-sm-1 col-sm-offset-1 form-group">
	                <label>City</label>
                        </div>
                         
                        <div class="col-sm-3 form group" >
	                <input type="text" name="City" class="form-control">
	                </div>
                    </div>
                  
                    <div class="row" style="padding-bottom: 10px;">
                        <div class="col-sm-1 form-group">
                        <label>Address1</label>
                        </div>
                        
                        <div class="col-sm-3 form group">
	                <input type="text"  name="Address1"  class="form-control">
                        </div>
	                
	                <div class="col-sm-1 col-sm-offset-1 form-group">
	                <label>Address2</label>
                        </div>
                         
                        <div class="col-sm-3 form group">
	                <input type="text" name="Address2" class="form-control">
	                </div>
                    </div>
                  
                
                    <div class="row" style="padding-bottom: 10px;">
                        <div class="col-sm-1 form-group">
                        <label>Postal</label>
                        </div>
                        
                        <div class="col-sm-3 form group">
	                <input type="text"  name="Postal"  class="form-control">
                        </div>
	                
	                <div class="col-sm-1 col-sm-offset-1 form-group">
	                <label>State</label>
                        </div>
                         
                        
	                <div class="col-sm-3 col-sm-offset-1 form-group">
                            
                        <button class="btn btn-default dropdown-toggle" 
                                data-toggle="dropdown" name="dropdown">Maharashtra
                        <span class = "caret"></span>
                        </button>
                        <ul class = "dropdown-menu" role = "menu">
                         <li><a href="#">Karnataka</a></li>
                         <li><a href="#">CS</a></li>
                         <li><a href="#">CSS</a></li>
                         </ul>
                        </div>
                        </div>
                   
                        
                        <div class="row">
                        <div class="col-sm-1 form-group">
                        <label>Country :</label>
                        </div>
                        
                        <div class="col-sm-3 form group">
                        <label><b>India</b></label>
                        </div>
	                
	                <div class="col-sm-1 col-sm-offset-1 form-group">
	                <label>Territory</label>
                        </div>
                         
                        <div class="col-sm-3 form group">
	                <input type="text" name="Territory" class="form-control">
	                </div>
                     </div>
                    <div class="row">
                       <div class="col-sm-1 col-sm-offset-1 form group" style="padding-top:5px;">
	                <button type="submit" name="submit" class="btn btn-primary">Submit
                        </button>
                       </div>
                        <div class="col-sm-1 form group" style="padding-top:5px;">
	                <button type="submit" name="submit" class="btn btn-primary">Cancel
                        </button>
                       </div>
                    </div>
                         
                       
                     </div>
                </div>
                </div>
            
            <?php echo form_close(); ?>
         <?php echo form_open('offices/search'); ?>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-2 form group" style="padding-top:10px;">
                     <input name="keyword" type="text" class="form-control"  />
                    </div>
                    <div class="col-sm-2  form group" style="padding-top:10px;padding-bottom: 10px;">
                        <button type="submit"  value="submit" class="btn btn-success">Search</button>
            </div>
            </div>
            </div>
            <?php echo form_close() ; ?>
     <div class="container">
         <table class="table">
            <tbody>  
                <tr>  
                    
                    <td>Code</td>  
                    <td>City</td> 
                    <td>Address1</td>
                    <td>Address2</td>
                    <td>Postal</td>
                    <td>Territory</td>
                </tr>  
         <?php  
         foreach ($h->result() as $row)  
         {  
            ?>  <tr>  
                    
                    <td><?php echo $row->Code;?></td>  
                    <td><?php echo $row->City;?></td>
                    <td><?php echo $row->Addr1;?></td>  
                    <td><?php echo $row->Addr2;?></td>  
                    <td><?php echo $row->Postal;?></td>
                    <td><?php echo $row->Territory;?></td>
            
                </tr>  
         <?php }  
         ?>  
            </tbody>  
         </table>
    </div>

        
        
                      
                      
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
        <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>   
    
</body>
</html>



