
<html lang="en">    
    
    <body>
        <div align="center">
        
            <div style="width:700px;
             height:250px;
             padding:10px;
             border:1px solid;
              ">
            


                <form method="post" action="Offices.php">
                    
            <p>
             code:<input type="text" name="Code">
             
             &nbsp;
             city:<input type="text" name="City">
             <br>
            </p>
            <p>
             Addr1:<input type="text" name="Address1">
            
             &nbsp;
            Addr2:<input type="text" name="Address2">
            <br>
            </p>
            <p>
            Postal:<input type="text" name="Postal">
             
             &nbsp;
            State:<select name="dropdown">
            <option value="Maharashtra" selected>Maharashtra</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Gujurat">Gujurat</option>
            
            </select>
            <br>
            </p>
            <p>
            Country : <b>India</b>
            &nbsp;
             &nbsp;
            Territory:<input type="text" name="Territory">
            <br>
            </p>
            <p>
            Email Id:
             <textarea rows="1" cols="70" name="Email">
            Enter Email
             </textarea>
           
            <input type="submit" name="submit" value="Search" />
            
            <br>
            </p>
             
            <p>
                
            <input type="submit" name="submit" value="Submit" onclick="enlist()" />
            <input type="submit" name="submit" value="Cancel" />
            </p>
             
           
        </form>
            </div> 
        </div>
        
    </body>
    




