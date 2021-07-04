<?php

 $name = $_GET['q'];

$id= $_GET['id'];


?>


<div class="firstq">
                   <div class="caption">Mobile Application Development Base Question</div>
                   
                <p class="qq">Which Language you most use for Mobile App? </p>
               <form id="mainForm" name="mainForm" class="fst" >
             
                <input style="display: none;" id="stdid" type="" value="<?php echo $id ; ?>" name="">
                  <div class="inputGroup">
                    <input  id="radio1" name="rads" value="1" type="radio"/>
                    <label for="radio1">Java</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio2" name="rads" value="2" type="radio"/>
                    <label for="radio2">Python</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio3" name="rads" value="3" type="radio"/>
                    <label for="radio3">Swift</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio4" name="rads" value="4" type="radio"/>
                    <label for="radio4">Kotlin</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio5" name="rads" value="5" type="radio"/>
                    <label for="radio5">C#</label>
                  </div>
                  
                  
                  
                  <input id="submit" onclick="myFun13()" type="button" class="btn btn-success" value="Submit">
                 
                </form>
                </div>