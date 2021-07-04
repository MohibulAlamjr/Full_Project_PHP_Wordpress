<?php

 $name2 = $_GET['q'];
 $id= $_GET['id'];






?>


<div class="firstq">
                   <div class="caption">Basic Question</div>
                   
                <p class="qq">Do you know about ACM Class?</p>
               <form id="mainForm" name="mainForm" class="fst" >
                 <input style="display: none;" id="stdid" type="" value="<?php echo $id ; ?>" name="">

                  <div class="inputGroup">
                    <input  id="radio1" name="rads" value="1" type="radio"/>
                    <label for="radio1">Yes</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio2" name="rads" value="2" type="radio"/>
                    <label for="radio2">No</label>
                  </div>
                  
                <input style="margin-top: 52%;" id="submit1" onclick="myFun21()" type="button" class="btn btn-success" value="Submit">
                 
                </form>
                </div>