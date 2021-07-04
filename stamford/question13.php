<?php

 $name = $_GET['q'];

$id= $_GET['id'];


?>


<div class="firstq">
                   <div class="caption">Desktop Application Development Base Question</div>
                   
                <p class="qq">Which Language you most use for Mobile App? </p>
               <form id="mainForm" name="mainForm" class="fst" >
             
                <input style="display: none;" id="stdid" type="" value="<?php echo $id ; ?>" name="">
                  <div class="inputGroup">
                    <input  id="radio1" name="rads" value="1" type="radio"/>
                    <label for="radio1">C#</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio2" name="rads" value="2" type="radio"/>
                    <label for="radio2">C</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio3" name="rads" value="3" type="radio"/>
                    <label for="radio3">Swift</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio4" name="rads" value="4" type="radio"/>
                    <label for="radio4">JavaScript</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio5" name="rads" value="5" type="radio"/>
                    <label for="radio5">Python</label>
                  </div>
                  
                  
                  
                  <input id="submit" onclick="myFun15()" type="button" class="btn btn-success" value="Submit">
                 
                </form>
                </div>