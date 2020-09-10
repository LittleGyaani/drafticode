<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Schedule An Appointment</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
    </button>
   </div>
   <div class="modal-body">
    <form role="form" method="POST" action="">
            <input type="hidden" name="_token" value="">
            <div class="form-group">
                <label class="control-label">E-Mail Address</label>
                <div>
                    <input type="email" class="form-control input-lg" name="email" value="">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Password</label>
                <div>
                    <input type="password" class="form-control input-lg" name="password">
                </div>
            </div>
            <div class="form-group">
                <div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div>
                    <a class="btn btn-link" href="">Forgot Your Password?</a>
                    <button type="submit" class="btn btn-info btn-block">Login</button>
                </div>
            </div>
        </form>
    <div class="row">
       <div class="col-sm-12 col-md-12 col-lg-12">
        <button type="submit" class="btn btn__secondary btn__block">Request A Quote</button>
       </div>
       <!-- /.col-lg-12 -->
      </div>
      <!-- /.row -->
     </form>
    </div>
   </div>
   <!-- <div class="modal-footer"> -->
   <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
   <!-- <button type="button" class="btn btn-primary">Submit</button> -->
   <!-- </div> -->
  </div>
 </div>
</div>
