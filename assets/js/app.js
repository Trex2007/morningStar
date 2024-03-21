let tab = ['--menuOnOFF', '--menuIcone', '--menubuttonAcc', '--menubuttonEpp', '--menubuttonChr', '--menubuttonSeCo', '--iconeOpacity', '--waitLonger', '--waitLonger2', '--waitLonger3', '--waitLonger4', '--waitLonger5', '--waitLonger6', '--waitLonger7']
let data = ['300px', '220px', '85px', '88px', '73px', '50px', '100%', '1.1s', '1.2s', '1.3s', '1.4s', '1.5s', '1.6s', '1.7s']
let data2 = ['0px', '-80px', '-215px', '-212px', '-223px', '-250px', '0%', '1s', '1s', '1s', '1s', '1s', '1s', '1s',]

let tab2 = ['--background', '--ecriture', '--menubars', '--menuBackground', '--menuEcriture']
let data3 = ['#f1f1f1', '#262626', '#111111', '#aaaaaa', '#111111']
let data4 = ['#262626', '#f1f1f1', 'rgb(241, 221, 119)', '#111111', '#f1f1f1']


const switchThemeBtn = document.querySelector('.slider')
let toggleTheme = 0;

switchThemeBtn.addEventListener('click', () => {
    if(toggleTheme === 0){
        for (let index = 0; index < tab2.length; index++) {
            document.documentElement.style.setProperty(tab2[index], data3[index]) 
        }
        toggleTheme++;
    } else{
        for (let index = 0; index < tab2.length; index++) {
            document.documentElement.style.setProperty(tab2[index], data4[index]) 
        }
        toggleTheme--;
    }
})

const MenuOpen = document.querySelector('.toggle')
let MenuToggle = 0;

MenuOpen.addEventListener('click', () => {
    if(MenuToggle === 0){
        for (let index = 0; index < tab.length; index++) {
            document.documentElement.style.setProperty(tab[index], data[index]) 
        }
        MenuToggle++;
    } else{
        for (let index = 0; index < tab.length; index++) {
            document.documentElement.style.setProperty(tab[index], data2[index]) 
        }
        MenuToggle--;
    }
});