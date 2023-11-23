<div class=" form-container-main">
    <div class="form-inside">
        <div class="form-container">
            <h3>Görüş üçün qeydiyyat</h3>
            <form method="POST" action="{{ route('veri.kaydet') }}">
                @csrf
                <div class="form-group">
                    <label for="name"></label>
                    <input type="text" id="name" name="name" placeholder=" Adınızı daxil edin " >
                </div>
                <div class="form-group">
                    <label for="phone"> Əlaqə nömrəsi   </label>
                    <input type="text" id="phone" name="phone" placeholder="+7 XXX XXX XX XX " >
                </div>

                <div class="form-group">
                    <button type="submit">Göndər</button>
                </div>
                <p class="terms-cond">Düyməni klikləməklə,<a href="">məxfilik siyasətini</a> qəbul edir və şəxsi
                    məlumatların istifadəsinə razılıq verirsiniz</p>

            </form>

        </div>
        <div class="shape-container">
            <img src="{{asset('assets/images/form-img.PNG')}} " alt="">
        </div>
    </div>
</div>
