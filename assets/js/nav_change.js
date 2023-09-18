(function () {
  let works_btn = document.getElementById('works_btn');
  let profile_btn = document.getElementById('profile_btn');
  let works_btn_sp = document.getElementById('works_btn_sp');
  let profile_btn_sp = document.getElementById('profile_btn_sp');
  let works_content = document.getElementById('works_cont');
  let profile_content = document.getElementById('profile_cont');

  reset_styles = function () {
    works_btn.classList.remove("active");
    profile_btn.classList.remove("active");
    works_btn_sp.classList.remove("active");
    profile_btn_sp.classList.remove("active");
    works_content.classList.remove("active");
    profile_content.classList.remove("active");
  };

  works_btn.addEventListener("click", function () {
    reset_styles();
    if (this.classList.toggle("active")) {
      works_content.classList.toggle("active");
    }
  })

  profile_btn.addEventListener("click", function () {
    reset_styles();
    if (this.classList.toggle("active")) {
      profile_content.classList.toggle("active");
    }
  });

  works_btn_sp.addEventListener("click", function () {
    reset_styles();
    if (this.classList.toggle("active")) {
      works_content.classList.toggle("active");
    }
    // もしprofile_contentがactiveなら、profile_contentのactiveを外す
    if (profile_btn_sp.classList.contains("active")) {
      profile_content.classList.remove("active");
      profile_btn_sp.classList.remove("active");
    }
  })

  profile_btn_sp.addEventListener("click", function () {
    reset_styles();
    if (this.classList.toggle("active")) {
      profile_content.classList.toggle("active");
    }
    // もしworks_contentがactiveなら、works_contentのactiveを外す
    if (works_btn_sp.classList.contains("active")) {
      works_content.classList.remove("active");
      works_btn_sp.classList.remove("active");
    }
  });

  // ページの読み込み時にボタンにactiveクラスを
  window.onload = function () {
    works_content.classList.add("active");
    works_btn.classList.add("active");

    if (window.innerWidth <= 768) {
      works_content.classList.add("active");
      works_btn_sp.classList.add("active");
    }
  };


}());