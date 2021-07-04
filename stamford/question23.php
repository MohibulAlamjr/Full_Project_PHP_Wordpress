<?php

 $name2 = $_GET['q'];

$id= $_GET['id'];




?>
<div class="firstq">
                   <div class="caption">Basic Question</div>
                   
                <p class="qq">Write your personal opinion about the bad or good side of Stamford University or anything else. this message will be directly seen by Chairman sir. </p>
               <form id="mainForm" name="mainForm" class="fst" >
             
                <input style="display: none;" id="stdid" type="" value="<?php echo $id ; ?>" name="">
                                        
                                        <textarea id="myTextarea">
                      </textarea> <br>
                  <input style="margin-top: 37%;" id="submit" onclick="myFun23()" type="button" class="btn btn-success" value="Submit">
                 
                </form>
                </div>