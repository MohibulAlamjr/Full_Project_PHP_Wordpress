
<?php

 $name2 = $_GET['q'];
 $id= $_GET['id'];






?>


<div class="firstq">
                   <div class="caption">Basic Question</div>
                   
                <p class="qq">What is the main problem with Stamford university?</p>
               <form id="mainForm" name="mainForm" class="fst" >
                 <input style="display: none;" id="stdid" type="" value="<?php echo $id ; ?>" name="">

                  <div class="inputGroup">
                    <input  id="radio1" name="rads" value="1" type="radio"/>
                    <label for="radio1">Teacher</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio2" name="rads" value="2" type="radio"/>
                    <label for="radio2">Champas</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio3" name="rads" value="3" type="radio"/>
                    <label for="radio3">Libarary</label>

                  </div>

                   <div class="inputGroup">
                    <input  id="radio4" name="rads" value="4" type="radio"/>
                    <label for="radio4">Class Room</label>
                    
                  </div>
                  <input style="margin-top: 9%;" id="submit1" onclick="myFun3()" type="button" class="btn btn-success" value="Submit">
                 
                </form>
                </div>