<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login Now </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/php/forumcwh/partials/_handleloginup.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address :</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password :</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                            placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-outline-primary">Login</button>
                </form>
            </div>

        </div>
    </div>
</div>