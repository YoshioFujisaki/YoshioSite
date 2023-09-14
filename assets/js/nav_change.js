(function (){
  console.log('connected');
  let works_btn = document.getElementById('works_btn');
  let profile_btn = document.getElementById('profile_btn');
  let works_content = document.getElementById('works_cont');
  let profile_content = document.getElementById('profile_cont');
  
  reset_styles = function() {
    works_btn.classList.remove("active");
    profile_btn.classList.remove("active");
    works_content.classList.remove("active");
    profile_content.classList.remove("active");
  };
  
  works_btn.addEventListener("click", function() {
    reset_styles();
    if (this.classList.toggle("active")) {
      works_content.classList.toggle("active");
    }
  })
  
  profile_btn.addEventListener("click", function() {
    reset_styles();
    if (this.classList.toggle("active")) {
      profile_content.classList.toggle("active");
    }
  });
  
  // ページの読み込み時にボタンにactiveクラスを
  window.onload = function(){
    works_content.classList.add("active");
    works_btn.classList.add("active");
    }
  
}());