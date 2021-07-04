<?php

 $name = $_GET['q'];

$id= $_GET['id'];


?>
<div class="firstq">
                   <div class="caption">Artificial Intelligence Base Question</div>
                   
                <p class="qq">Which sector do you interested to work? </p>
               <form id="mainForm" name="mainForm" class="fst" >
             
                <input style="display: none;" id="stdid" type="" value="<?php echo $id ; ?>" name="">
                  <div class="inputGroup">
                    <input  id="radio1" name="rads" value="1" type="radio"/>
                    <label for="radio1">Internet of Things</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio2" name="rads" value="2" type="radio"/>
                    <label for="radio2">Machine Learning</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio3" name="rads" value="3" type="radio"/>
                    <label for="radio3">Robotics</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio4" name="rads" value="4" type="radio"/>
                    <label for="radio4">Natural Language Processing</label>
                  </div>
                  
                  
                  
                  <input id="submit" onclick="myFun16()" type="button" class="btn btn-success" value="Submit">
                 
                </form>
                </div>