/* -------------------- separating the href from the rest ---------------------- */
let index = location.href
//console.log(index)

let resultsArray = index.split('/')
//console.log(resultsArray)

let numberOfParts = resultsArray.length
/* console.log(numberOfParts) */

let pieceIwant = resultsArray[numberOfParts - 1]
//console.log(pieceIwant)

/* -------------------- separating the form info from ?---------------------- */
let secondSplit = pieceIwant.split('?')
//console.log(secondSplit)

let lastPiece = secondSplit[0]
console.log(lastPiece)
/* 
let three = one[two - 1]
console.log(three) */


/* -------------------- separating the form info from #---------------------- */
let thirdSplit = lastPiece.split('#')
console.log(thirdSplit)

let finalPiece = thirdSplit[0]
console.log(finalPiece)

/* -------------------- making the list items active when selected ---------------------- */
let pages = document.querySelectorAll("ul#primaryNav li a")
//console.log(pages)

let pageTab = finalPiece
let agentTab = "#"
let child = "agentWendy.php"
let secondChild = "agentDan.php"

let i
for (i = 0; i < pages.length; i++) {
  let myPage = pages[i].getAttribute("href")
  //console.log(child)

  // active is red and parent is blue
    if (pageTab === myPage) {
    pages[i].className = "active"
    if (pageTab === child) {
      pages[2].className = "parent"
    }
    if (pageTab === secondChild) {
      pages[2].className = "parent"
    }
  } else {
    pages[i].className = ""
  } 
}


/* ------------------------------------------- button toggle for second list ---------------------------------------------------- */
const agent = document.querySelector('.arrow')
const secondList = document.querySelector('.secondList')

const openSecond = function () {
  secondList.classList.toggle('hidden')
}

agent.addEventListener('click', openSecond)


/* ------------------------------------------- button toggle for hamburger menu in mobile and tablet ---------------------------------------------------- */
const list = document.querySelector('.list')
const x = document.querySelector('.x')
const hamburger = document.querySelector('.hamburger')
const hamButton = document.querySelector('#hamburgerMenu')

const openList = function () {
    // remove the 'hidden' class from the HTML divider and you will see the list
    list.classList.toggle('hidden')
    x.classList.toggle('hidden')
    hamburger.classList.toggle('hidden')
}

hamButton.addEventListener('click', openList)

/* -------------------------------------------- image slider ---------------------------------------------------------------------------------------------- */
new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    speed: 2000,
    loop: true,

    autoplay: {
      delay: 5000,
    },
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

  });

