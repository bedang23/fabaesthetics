{{-- Anti-spam: honeypot + timing token. Works without JS. --}}
<div class="hp-wrap" aria-hidden="true" style="position:absolute !important;left:-9999px !important;top:-9999px !important;width:1px;height:1px;overflow:hidden;">
    <label for="hp_field">Leave this field empty</label>
    <input type="text" name="hp_field" id="hp_field" tabindex="-1" autocomplete="off" value="">
</div>
<input type="hidden" name="_ft" value="{{ encrypt(time()) }}">
