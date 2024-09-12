<style>
  /* Media Queries */

  /* Laptop */
  /* @media (max-width: 1366px) {
    .login-cuy {
      scale: 0.8;
    }
  } */

  /* Tablet */
  @media (max-width: 768px) {
    .login-cuy {
      scale: 0.8;
    }
  }

  /* Mobile Phone */
  @media (max-width: 450px) {
    .img-mountain {
      display: none;
    }
  }
</style>

<div
  style="
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100vh;
    background-color: #f3f2f2;
  "
>
  <div
    class="login-cuy"
    style="
      height: 25rem;
      background-color: white;
      border-radius: 0.3rem;
      width: 37rem;
      display: flex;
      overflow: hidden;
    "
  >
    <div class="img-mountain"
      style="
        padding: 1rem;
        background-image: url('<?= base_url() ?>assets/img/mountain.jpg');
        width: 12rem;
        object-fit: cover;
        background-position: right;
        background-size: cover;
      "
    >
      <div style="display: flex; justify-content: center; align-items: center">
        <?php
        $logo_app = $setting->logo_kanan == null ? base_url() .
        'assets/img/favicon.png' : base_url() . $setting->logo_kanan; ?>
        <img src="<?= $logo_app ?>" width="30" height="30" />
        <h5
          class="info-box-text text-white text-wrap text-center"
          style="
            font-size: 1rem;
            margin-top: 0.3rem;
            margin-left: 0.3rem;
            font-weight: 600;
          "
        >
          <?= $setting->nama_aplikasi ?>
        </h5>
      </div>
    </div>
    <div style="padding: 1.5rem; margin: auto">
      <h1 style="font-size: 1.2rem; font-weight: 700">
        <span style="color: grey; font-weight: 500">Selamat Datang di </span
        >EduKhiria
      </h1>
      <h3 style="font-size: 0.8rem; margin-top: 1rem">
        Login untuk mengakses <br />
        Website CBT Khiria Test.
      </h3>
      <div id="infoMessage"><?php echo $message; ?></div>
      <div style="margin-top: 1rem">
        <?= form_open("auth/cek_login", array('id' =>
        'login')); ?>
        <div class="input-group mb-3 has-feedback">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <?= form_input($identity, '', 'required'); ?>
          <div class="help-block"></div>
        </div>
        <div class="input-group mb-3 has-feedback">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <?= form_input($password, '', 'required'); ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span
                id="toggle-password"
                class="fas fa-eye-slash"
                style="cursor: pointer"
              ></span>
            </div>
          </div>
          <div class="help-block"></div>
        </div>
        <div class="row" style="margin-top: 2rem">
          <div class="col-8">
            <div class="icheck-teal">
              <input
                type="checkbox"
                id="cbt-only"
                name="cbt-only"
                value="1"
                checked="checked"
              />
              <label for="cbt-only">Login CBT</label>
            </div>
          </div>
          <!-- /.col -->
          <style>
            .btn-success {
              background-color: #20c997;
              border: 0;
            }
          </style>
          <div class="col-4">
            <?= form_submit('submit', lang('login_submit_btn'), array('id' =>
            'submit', 'class' => 'btn btn-success btn-block')); ?>
          </div>
          <!-- /.col -->
        </div>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>

<script src="<?= base_url() ?>/assets/app/js/jquery.backstretch.js"></script>
<script type="text/javascript">
  let base_url = "<?=base_url();?>";
  // var img = ["wall1.jpg"];

  // $.backstretch([base_url + "assets/img/" + img[0]]);

  $(document).ready(function () {
    $("#myCarousel").carousel({
      interval: 1000 * 2,
      pause: "none",
    });

    $("form#login input").on("change", function () {
      $(this).parent().removeClass("has-error");
      $(this).next().next().text("");
    });

    $("form#login").on("submit", function (e) {
      e.preventDefault();
      e.stopImmediatePropagation();

      var infobox = $("#infoMessage");
      infobox
        .addClass("alert")
        .text("Checking...")
        .css({
          fontSize: "0.8rem",
          color: "white",
          backgroundColor: "#20a7c9"
        });

      var btnsubmit = $("#submit");
      btnsubmit.attr("disabled", "disabled").val("Wait...");

      const arrForm = $(this).serializeArray();
      const cbtOnly = arrForm.find(function (obj) {
        return obj.name === "cbt-only";
      });
      localStorage.setItem(
        "garudaCBT.login",
        cbtOnly !== undefined ? "1" : "0"
      );

      $.ajax({
        url: $(this).attr("action"),
        type: "POST",
        data: $(this).serialize(),
        success: function (data) {
          infobox.removeAttr("class").text("");
          btnsubmit.removeAttr("disabled").val("Login");
          console.log("login", data);
          if (data.status) {
            infobox
              .addClass("alert")

              .text("Login Sukses")
              .css({
                fontSize: "0.8rem",
                color: "white",
                backgroundColor: "#20c997"
              });

            const isLogin = localStorage.getItem("garudaCBT.login");
            const isCbtMode = isLogin ? isLogin === "1" : false;
            let go = base_url + data.url;
            if (isCbtMode && data.role === "siswa") {
              go = "siswa/cbt";
            }
            window.location.href = go;
          } else {
            if (data.invalid) {
              $.each(data.invalid, function (key, val) {
                $('[name="' + key + '"')
                  .parent()
                  .addClass("has-error");
                $('[name="' + key + '"')
                  .next()
                  .next()
                  .text(val);
                if (val == "") {
                  $('[name="' + key + '"')
                    .parent()
                    .removeClass("has-error");
                  $('[name="' + key + '"')
                    .next()
                    .next()
                    .text("");
                }
              });
            }
            if (data.failed) {
              infobox
                .addClass("alert")
                .text(data.failed)
                .css({
                  fontSize: "0.8rem",
                  color: "white",
                  backgroundColor: "#c92052"
                });
            }
          }
        },
      });
    });

    $("#toggle-password").on("click", function (e) {
      // toggle the type attribute
      const type =
        $("#password").attr("type") === "password" ? "text" : "password";
      $("#password").attr("type", type);
      // toggle the eye / eye slash icon
      $(this).toggleClass("fa-eye-slash fa-eye");
    });
  });
</script>
