<form class="login" method="POST">
    
    <input type="hidden" value="pacient" name="type">
    <div class="login-box">
        <h1>TibNet</h1>
        <?php
        if(isset($mess)){
            echo "<div class='alert {$mess['type']}' ><p>{$mess['message']}</p></div>";
        }
    ?>
        <div class="input phone">
            <div class="icon">
                <i data-lucide="phone"></i>
            </div>
            <div class="input-data">
                <input type="text" placeholder="998YYYXXZZ" class="phone" id="phone" inputmode="numeric" maxlength="12" name="phone">
            </div>
        </div>
        <div id="pass" style="display: none;">
            <small id="passhelp">Parol kamida 8 ta simvoldan iborat bo'lishi kerak</small>
            <div class="input">

                <div class="input-data">
                    <input type="password" id="password" placeholder="Parol" autocomplete="off" class="phone" maxlength="12" name="password">

                </div>

                <div class="icon" id="show">
                    <i data-lucide="eye"></i>
                </div>
            </div>

        </div>
        <div id="reg" style="display: none;">

            <div class="input">
                <div class="icon">
                    <i data-lucide="user"></i>
                </div>
                <div class="input-data">
                    <input type="text" placeholder="Ism" autocomplete="off" class="phone" name="first_name" >

                </div>

            </div>
            <div class="input">
                <div class="icon">
                    <i data-lucide="user"></i>
                </div>
                <div class="input-data">
                    <input type="text" placeholder="Familiya" autocomplete="off" class="phone" name="last_name">

                </div>

            </div>


        </div>
        <button style="display: none;" id="sign_in" name="sign" value="in" class="btn">Kirish</button>
        <button style="display: none;" id="sign_up" name="sign" value="up" class="btn">Ro'yxatdan o'tish</button>
    </div>

</form>