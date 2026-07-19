<!-- Shared enquiry detail modal -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#671b32;color:#fff;">
        <h5 class="modal-title" id="detailModalLabel"><i class="fas fa-envelope-open-text mr-2"></i>Enquiry Details</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close" style="text-shadow:none;opacity:.9;"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <dl class="row mb-0">
          <dt class="col-sm-3 text-muted">Name</dt>    <dd class="col-sm-9" id="dm-name">—</dd>
          <dt class="col-sm-3 text-muted">Email</dt>   <dd class="col-sm-9"><a id="dm-email" href="#">—</a></dd>
          <dt class="col-sm-3 text-muted">Phone</dt>   <dd class="col-sm-9"><a id="dm-phone" href="#">—</a></dd>
          <dt class="col-sm-3 text-muted">Date</dt>    <dd class="col-sm-9" id="dm-date">—</dd>
          <dt class="col-sm-3 text-muted">Message</dt> <dd class="col-sm-9" id="dm-message" style="white-space:pre-wrap;word-break:break-word;">—</dd>
        </dl>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(function () {
    $('#detailModal').on('show.bs.modal', function (event) {
      var b = $(event.relatedTarget);
      $('#dm-name').text(b.data('name') || '—');
      var em = b.data('email') || '';
      $('#dm-email').text(em || '—').attr('href', em ? 'mailto:' + em : '#');
      var ph = b.data('phone') || '';
      $('#dm-phone').text(ph || '—').attr('href', ph ? 'tel:' + ph : '#');
      $('#dm-date').text(b.data('date') || '—');
      $('#dm-message').text(b.data('message') || '—');
    });
  });
</script>
