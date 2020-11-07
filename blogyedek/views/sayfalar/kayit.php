<?php require "views/header.php";?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 center no-padding">
                <form class="form-transparent-grey" action="<?php echo URL; ?>/kayit/kontrol" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Yeni Kayıt oluştur</h3>
                            <p>Aşağıdaki forma bilgilerinizi girerek bir hesap oluşturun.Eğer üye iseniz,
                                lütfen sayfanın üst kısmından giriş yapın.</p>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="sr-only">Adınız</label>
                            <input type="text" name="ad" placeholder="First Name" class="form-control">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="sr-only">Soyadınız</label>
                            <input type="text" name="soyad" placeholder="Last Name" class="form-control">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="sr-only">Yaşınız</label>
                            <input type="text" name="yas" placeholder="Username" class="form-control">
                        </div>

                        <div class="col-lg-12 form-group">
                            <button class="btn" type="submit" name="buton" value="">Kayıt ol</button>
                            <button type="sifirla" class="btn btn-danger m-l-10">Sıfırla</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



<?php require "views/footer.php";?>
