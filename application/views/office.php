
<html lang="en">    
    
    <body>
        <div align="center">
        
            <div style="width:900px;
             height:250px;
             padding:10px;
             border:2px solid;
              ">
            


               <?php echo form_open('Offices/create'); ?>
                    
                
            <p style="text-align:left;">
             code:<input type="text" name="Code">
            
            <span style="float:right;">
             city:<input type="text" name="City">
             </span>
            </p>
             
            
             <p style="text-align:left;">
             Addr1:<input type="text" name="Address1">
             <span style="float:right;">
            Addr2:<input type="text" name="Address2">
            <span style="float:right;">
            </p>
            
             <p style="text-align:left;">
            Postal:<input type="text" name="Postal">
             <span style="float:right;">
            State:<select name="dropdown">
            <option value="Maharashtra" selected>Maharashtra</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Gujurat">Gujurat</option>
            
            </select>
             </span>
            </p>
            
            <p style="text-align:left;">
            Country : <b>India</b>
            <span style="float:right;">
            Territory:<input type="text" name="Territory">
            </span>
            </p>
            
            <br>
            
            <p style="text-align: left">
            <input type="submit" name="submit" value="Submit"  />
            <input type="submit" name="cancel" value="Cancel" />
            </p>
             
           
        <?php echo form_close(); ?>
            
            </div> 
            <p>
            Email Id:
             <textarea rows="1" cols="90" name="Email">
            Enter email
             </textarea>
           
            <input type="submit" name="submit" value="Search" />
            
            <br>
            </p>
        </div>
        
    </body>
    




