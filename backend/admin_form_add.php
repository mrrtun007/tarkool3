<?php include('h.php');?>
<form  name="admin" action="admin_form_add_db.php" method="POST" id="admin" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="a_user" type="text" required class="form-control" id="a_user" placeholder="username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
            </div>
          </div>
          <p></p>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="a_pass" type="password" required class="form-control" id="a_pass" placeholder="password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
            </div>
          </div>
          <p></p>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="a_name" type="text" required class="form-control" id="a_name" placeholder="ชื่อ-สกุล" />
            </div>
          </div>
          <p></p>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="Userlevel" type="text" required class="form-control" id="Userlevel" placeholder=" A = admin,  M=member" />
            </div>
          </div>
          <p></p>
          <div class="form-group">
            <div class="col-sm-6" align="right">
            <p></p>
              <button type="submit" class="btn btn-success" id="btn"> <span class="glyphicon glyphicon-saved"></span> บันทึก  </button>      
            </div> 
          </div>
        </form>