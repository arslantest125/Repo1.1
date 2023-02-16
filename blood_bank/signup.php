<!-- Modal -->

<div class="modal fade" id="signup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="signup" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup"><img src="images/icon1.png" alt="icon1" style="margin-left:170px"
                        width="100" height="90"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="/Mian Blood Bank/handleSignup.php" method="post">
                <div class="modal-body">


                    <div class="mb-3">
                        <label for="text" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="firstname"
                            aria-describedby="emailHelp" size="3" required>

                    </div>

                    <div class="mb-3">
                        <label for="text" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname"
                            aria-describedby="emailHelp" size="3" required>

                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="username" name="username"
                            aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Confrim Password</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Signup</button>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                </div>
            </form>
        </div>
    </div>
</div>

