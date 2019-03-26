// Accordion
const accordion = document.getElementsByClassName('accordion');
let i = 0;

for(i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener("click", function(){
        this.classList.toggle("open");
        const panel = this.nextElementSibling;
         if(panel.style.display === 'block') {
             panel.style.display = 'none';
         } else {
             panel.style.display = 'block';
         }
    });
}

//ハンバーガーメニュー
//メニューを開け閉めする関数
function navBtn(){
    const topNav = document.getElementById('topNav');
    if(topNav.className == "header-menu"){
        topNav.classList.add("responsive");
    } else {
        topNav.className = "header-menu";
    }
}

//リンクをクリックしたときにメニューを閉じる関数
function closeMenu(){
    if(topNav.style.display === 'block') return;
    this.classList.remove('responsive');
}
topNav.addEventListener('click', closeMenu);
