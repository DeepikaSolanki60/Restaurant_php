let openShopping = document.querySelector('.shopping')
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('.body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', () => {
    body.classList.add('active');
})
closeShopping, addEventListener('click', () => {
    body.classList.remove('active');
})

let products = [
    {
    id: 1,
    Name: 'product Name 1',
    image:'uploads/Roti.jpeg',
    price:1600000
 },
 {
    id: 1,
    Name: 'product Name 1',
    image:'',
    price:1600000
 },
 {
    id: 1,
    Name: 'product Name 1',
    image:'',
    price:1600000
 },
 {
    id: 1,
    Name: 'product Name 1',
    image:'',
    price:1600000
 },
]