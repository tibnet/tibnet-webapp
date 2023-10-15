<form class="login" method="POST">
    <div class="login-box">
        <h1>TibNet</h1>
        <small>+<?php echo $phone?> raqamiga tasdiqlash kodi jo'natildi</small>
        <div class="input phone">
            <div class="icon">
                <i data-lucide="phone"></i>
            </div>
            <div class="input-data">
                <input type="text" placeholder="Tasdiqlash kodi" class="phone" id="phone" maxlength="12" name="verify">
            </div>
        </div>
        
       
        <button name="verificationId" value="<?php echo $verificationId;?>" class="btn">Ro'yxatdan o'tish</button>
    </div>

</form>