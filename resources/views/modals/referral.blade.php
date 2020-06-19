<!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="referralLinkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Your Referral Link </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">
          {{-- <input type="text" class="form-control" id="myInput"> --}}
          <input type="text" class="form-control myInput" id="id" value="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="myFunction()">Copy Referral link</button>
        </div>
      </div>
    </div>
  </div>

  <script>
      function myFunction() {
  /* Get the text field */
  var copyText = document.getElementsByClassName("myInput")[0];
  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  // alert("Copied the text: " + copyText.value);
  Swal.fire(
  'Copied the text:!',
  'You clicked the button!',
  'success'
)
}
  </script>