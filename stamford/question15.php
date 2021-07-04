<?php

 $name = $_GET['q'];

$id= $_GET['id'];


?>
<div class="firstq">
                   <div class="caption">Data Science Base Question</div>
                   
                <p class="qq">Which sector do you interested to work? </p>
               <form id="mainForm" name="mainForm" class="fst" >
             
                <input style="display: none;" id="stdid" type="" value="<?php echo $id ; ?>" name="">
                  <div class="inputGroup">
                    <input  id="radio1" name="rads" value="1" type="radio"/>
                    <label for="radio1">Programming</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio2" name="rads" value="2" type="radio"/>
                    <label for="radio2">Data Mining.</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio3" name="rads" value="3" type="radio"/>
                    <label for="radio3">Data Visualization</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio4" name="rads" value="4" type="radio"/>
                    <label for="radio4">Statistics</label>
                  </div>
                  
                  
                  
                  <input id="submit" onclick="myFun17()" type="button" class="btn btn-success" value="Submit">
                 
                </form>
                </div>