<div class="modal fade custom-modal" id="qteModal" tabindex="-1" role="dialog" aria-labelledby="qteModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="contact-form-header">
                <span>Get a free quote</span>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick="setClose()">
                    <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
                </button>
            </div>
            <form id="quotemodal" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="resultquotemodal" onsubmit="return false;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-person-badge"></i>
                                <input type="text" class="form-control" name="name" placeholder="Your Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-phone-vibrate"></i>
                                <input type="tel" class="form-control" name="phone" placeholder="Mobile Number">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-envelope-at"></i>
                                <input type="text" class="form-control" name="email" placeholder="Your Email">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                                <input type="text" class="form-control" name="mfrom" placeholder="From City">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-map-fill"></i>
                                <input type="text" class="form-control" name="mto" placeholder="To City">
                            </div>
                        </div>
                    </div>
                </div>
           <div class="form-group">
    <div class="form-icon">
        <i class="bi bi-chat-left-text"></i>
        <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Describe your relocation needs..."></textarea>
    </div>
</div>
                
                <div class="d-flex justify-content-center mt-2" style="gap: 10px;">
                    <button id="submitbquotemodal" type="submit" class="theme-btn">Get My Free Quote <i class="bi bi-send-fill"></i></button>
                    <button onclick="document.getElementById('resultquotemodal').innerHTML = '';" type="reset" class="theme-btn">Clear Form</button>
                </div>
 
                <div id="resultquotemodal"></div>
            </form>
        </div>
    </div>
</div>
<style>
.custom-modal .modal-dialog {
    max-width: 500px;
}

.custom-modal .modal-content {
    border: 0;
    border-radius: 16px;
    overflow: hidden;
    background: #ffffff;
    box-shadow: 0 25px 70px rgba(0, 0, 0, 0.25);
}

.contact-form-header {
    background: linear-gradient(135deg, #06283d, var(--primary-cyan));
    color: #fff;
    padding: 15px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.contact-form-header span {
    font-size: 20px;
    font-weight: 700;
    letter-spacing: .3px;
}

.contact-form-header .close {
    width: 30px;
    height: 30px;
    border: 0;
    border-radius: 50%;
    background: rgba(255,255,255,.18);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: .3s;
}

.contact-form-header .close:hover {
    background: #fff;
    color: var(--primary-cyan);
}

#quotemodal {
    padding: 20px;
}

#quotemodal .form-group {
    margin-bottom: 12px;
}

#quotemodal .form-icon {
    position: relative;
}

#quotemodal .form-icon i {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--primary-cyan);
    font-size: 16px;
    z-index: 2;
}

#quotemodal textarea + i,
#quotemodal .form-icon:has(textarea) i {
    top: 14px;
    transform: none;
}

#quotemodal .form-control {
    height: 42px;
    border-radius: 10px;
    border: 1px solid #e1e7ef;
    background: #f8fbff;
    padding-left: 40px;
    font-size: 14px;
    color: #222;
    box-shadow: none;
    transition: .25s ease;
}

#quotemodal textarea.form-control {
    min-height: 90px;
    padding-top: 12px;
    resize: none;
}

#quotemodal .form-control:focus {
    background: #fff;
    border-color: var(--primary-cyan);
    box-shadow: 0 0 0 4px rgba(19, 99, 223, .12);
}

#quotemodal .theme-btn {
    border: 0;
    border-radius: 50px;
    padding: 10px 24px;
    font-size: 14px;
    font-weight: 600;
    background: linear-gradient(135deg, var(--primary-cyan), #47b5ff);
    color: #fff;
    transition: .3s ease;
    box-shadow: 0 10px 25px rgba(19, 99, 223, .25);
}

#quotemodal .theme-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 30px rgba(19, 99, 223, .35);
}

#quotemodal button[type="reset"] {
    background: #eef4fb;
    color: var(--primary-cyan);
    box-shadow: none;
}

#quotemodal button[type="reset"]:hover {
    background: #dcecff;
}

#resultquotemodal {
    margin-top: 10px;
    text-align: center;
    font-weight: 600;
}

@media (max-width: 576px) {
    #quotemodal {
        padding: 15px;
    }

    .contact-form-header {
        padding: 12px 15px;
    }

    .contact-form-header span {
        font-size: 18px;
    }
}
</style>