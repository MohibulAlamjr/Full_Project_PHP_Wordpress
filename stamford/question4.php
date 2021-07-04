<?php

 $name = $_GET['q'];

$id= $_GET['id'];


?>

<div class="firstq">
                   <div class="caption">Basic Question</div>
                   
                <p class="qq">Which sector have to be changed must? </p>
               <form id="mainForm" name="mainForm" class="fst" >
             
                <input style="display: none;" id="stdid" type="" value="<?php echo $id ; ?>" name="">
                  <div class="inputGroup">
                    <input  id="radio1" name="rads" value="1" type="radio"/>
                    <label for="radio1">Champas View</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio2" name="rads" value="2" type="radio"/>
                    <label for="radio2">Faculty</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio3" name="rads" value="3" type="radio"/>
                    <label for="radio3">Lab</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio4" name="rads" value="4" type="radio"/>
                    <label for="radio4">Library</label>
                  </div>
                  <input style="margin-top: 18%;" id="submit" onclick="myFun5()" type="button" class="btn btn-success" value="Submit">
                 
                </form>
                </div>