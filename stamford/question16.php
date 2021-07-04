<?php

 $name = $_GET['q'];

$id= $_GET['id'];


?>
<div class="firstq">
                   <div class="caption">Design Base Question</div>
                   
                <p class="qq">Which sector do you interested to work? </p>
               <form id="mainForm" name="mainForm" class="fst" >
             
                <input style="display: none;" id="stdid" type="" value="<?php echo $id ; ?>" name="">
                  <div class="inputGroup">
                    <input  id="radio1" name="rads" value="1" type="radio"/>
                    <label for="radio1">Web Design</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio2" name="rads" value="2" type="radio"/>
                    <label for="radio2">Graphic design</label>
                  </div>
                  
                  
                  
                  <input style="margin-top: 52%;" id="submit" onclick="myFun11()" type="button" class="btn btn-success" value="Submit">
                 
                </form>
                </div>