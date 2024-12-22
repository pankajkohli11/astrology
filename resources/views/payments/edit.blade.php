<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="paymentEditForm" method="POST" >
                @csrf
                <input type="hidden" id="data_id" name="id" required>
                
                <div class="form-group">
                   <label class="col-form-label">Status</label>
                   <select class="form-select payment_status" name="status" id="payment_status">
                      <option value="paid">Paid</option>
                      <option value="pending">Pending</option>
                   </select>
                </div>
                <div class="mt-3 modal-footer">
                   <button class="btn btn-primary submit-btn update" >Update</button>
                </div>
             </form>
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
      </div>
    </div>
  </div>