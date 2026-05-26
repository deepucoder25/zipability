<div class="modal fade" id="callMeBackModal" tabindex="-1" aria-labelledby="callMeBackModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="border-radius: 8px; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
      
      <!-- Modal Header with Close Button -->
      <div class="modal-header border-0 pb-0" style="position: relative;">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="position: absolute; right: 15px; top: 15px; z-index: 2; width: 10px; height: 10px; font-weight: bold;"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body px-4 pb-4 pt-1 text-center">
        <!-- Title matching user image -->
        <h2 class="mb-4" style="color: #0a4ebd; font-family: 'Times New Roman', serif; font-size: 42px; font-weight: normal;">Call Me Back</h2>
        
        <form id="callMeBackForm" class="ajax-form" data-url="<?= site_url('contacts/call_back') ?>" data-result="resultcallbackmodal" onsubmit="return false;">
          
          <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Enter Your Name"  style="border-radius: 4px; padding: 12px 15px; border: 1px solid #ced4da; font-size: 16px;">
          </div>
          
          <div class="mb-4">
            <input type="tel" name="phone" class="form-control" placeholder="Enter 10 Digit Mobile No." pattern="[0-9]{10}" title="Please enter a valid 10-digit mobile number"  style="border-radius: 4px; padding: 12px 15px; border: 1px solid #ced4da; font-size: 16px;">
          </div>
          
          <button type="submit" class="btn w-100" style="background-color: #0a4ebd; color: white; border-radius: 4px; padding: 12px; font-size: 18px; font-weight: 500; border: none; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#083c93'" onmouseout="this.style.backgroundColor='#0a4ebd'">
            Submit
          </button>
          
          <div id="resultcallbackmodal" class="mt-3 text-center" style="font-weight: 600;"></div>
          
        </form>
      </div>
      
    </div>
  </div>
</div>
