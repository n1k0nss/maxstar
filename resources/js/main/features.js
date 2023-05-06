const tabsBtn = document.querySelectorAll('.tabs__btn');
const tabsItems = document.querySelectorAll('.tabs__item');

tabsBtn.forEach(onTabClick);

function onTabClick(e){
    e.addEventListener("click", function(){
        let currentBtn = e;
        let tabId = currentBtn.getAttribute("data-tab");
        let currentTab = document.querySelector(tabId);

        if(!currentBtn.classList.contains('active')){
            tabsBtn.forEach(function(item){
                item.classList.remove('active');
            });

            tabsItems.forEach(function(item){
                item.classList.remove('active');
            });

            currentBtn.classList.add('active');
            currentTab.classList.add('active');


        }
    })
};

const aboutBtn = document.querySelector('.about__button');
const aboutBlock = document.querySelector('.about__container');
const aboutHeight = document.querySelector('.about__container').scrollHeight;

aboutBtn.addEventListener("click", extendAboutBlock);

function extendAboutBlock() {
    aboutBtn.classList.toggle('active');
    aboutBlock.classList.toggle('open');

    if(aboutBlock.classList.contains('open')){
        aboutBlock.style.maxHeight = aboutHeight+"px";
    } else {
        aboutBlock.style.maxHeight = "600px";
    }
}




document.querySelector('.tabs__btn').click();
