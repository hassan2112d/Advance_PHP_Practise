

<!-- Modal -->
<div class="modal fade" id="signModal" tabindex="-1" role="dialog" aria-labelledby="signModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signModalLabel">Sign Up Now for Codeix Accounts</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/php/forumcwh/partials/_handlesignup.php" method="post">
            <div class="form-group">
                
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Name :">
            </div>
            
            <div class="form-group">
                
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Email :">
            </div>
            <div class="form-group">
                
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password :">
            </div>
            <div class="form-group">
                
                <input type="password" class="form-control" id="exampleInputPassword2" name="cfpassword" placeholder="Confirm Password :">
            </div>
           
            <button type="submit" class="btn btn-outline-danger">Sign In</button>
        </form>
      </div>
      
    </div>
  </div>
</div>