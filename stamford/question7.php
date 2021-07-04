<?php

 $name = $_GET['q'];

$id= $_GET['id'];


?>

<div class="firstq">
                   <div class="caption">Basic Question</div>
                   
                <p class="qq">Who is your most favourite teacher ? </p>
               <form id="mainForm" name="mainForm" class="fst" >
             <input style="display: none;" id="stdid" type="" value="<?php echo $id ; ?>" name="">
                                      <div class="form-group">
                        <label for="sel1">Select list:</label>
                        <select class="form-control" id="sel">
                          <option value="1">1</option>
                          <option value="2">2</option>>2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select>
                      </div>
                                        
                  <input style="margin-top: 60%;" id="submit" onclick="myFun8()" type="button" class="btn btn-success" value="Submit">
                 
                </form>
                </div>