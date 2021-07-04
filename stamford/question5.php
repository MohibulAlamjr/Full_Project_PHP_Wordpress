<?php

 $name = $_GET['q'];

$id= $_GET['id'];


?>

<div class="firstq">
                   <div class="caption">Basic Question</div>
                   
                <p class="qq">What is the most heradest Subject ? </p>
               <form id="mainForm" name="mainForm" class="fst" >
             
                <input style="display: none;" id="stdid" type="" value="<?php echo $id ; ?>" name="">
                  <div class="inputGroup">
                    <input  id="radio1" name="rads" value="1" type="radio"/>
                    <label for="radio1">Math</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio2" name="rads" value="2" type="radio"/>
                    <label for="radio2">Programming related</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio3" name="rads" value="3" type="radio"/>
                    <label for="radio3">Other</label>
                  </div>
                  
                  <input style="margin-top: 35%;" id="submit" onclick="myFun6()" type="button" class="btn btn-success" value="Submit">
                 
                </form>
                </div>