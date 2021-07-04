<?php

 $name2 = $_GET['q'];
 $id= $_GET['id'];






?>


<div class="firstq">
                   <div class="caption">Basic Question</div>
                   
                <p class="qq">Do you want to join any club ?</p>
               <form id="mainForm" name="mainForm" class="fst" >
                 <input style="display: none;" id="stdid" type="" value="<?php echo $id ; ?>" name="">

                  <div class="inputGroup">
                    <input  id="radio1" name="rads" value="1" type="radio"/>
                    <label for="radio1">IoT club</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio2" name="rads" value="2" type="radio"/>
                    <label for="radio2">Robotic club</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio3" name="rads" value="3" type="radio"/>
                    <label for="radio3">Programming club</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio4" name="rads" value="4" type="radio"/>
                    <label for="radio4">AI club</label>
                  </div>
                  
                <input id="submit1" onclick="myFun22()" type="button" class="btn btn-success" value="Submit">
                 
                </form>
                </div>