import products from '/products.js';
import cart from './cart.js';

let listProduct = document.getElementById('listProduct');
let app = document.getElementById('app');
let temporaryContent = document.getElementById('temporaryContent');

const loadTemplate = () => {
    fetch('/template.html')
    .then(response => response.text())
    .then(html => {
        app.innerHTML = html;
        let contentTab = document.getElementById('contentTab');
        contentTab.innerHTML = temporaryContent.innerHTML;
        temporaryContent.innerHTML = null;
        cart();
        initApp();
    })
}
loadTemplate();
const initApp = () => {
    let productId = new URLSearchParams(window.location.search).get('id');
    let thisProduct = products.filter(value => value.id == productId)[0];
    if(!thisProduct){
        window.location.href = "/";
    }

    let detail = document.querySelector('.detail');
    detail.querySelector('.image img').src = thisProduct.image;
    detail.querySelector('.name').innerText = thisProduct.name;
    detail.querySelector('.price').innerText = '₹' + thisProduct.price;
    detail.querySelector('.description').innerText = '₹' + thisProduct.description;
    detail.querySelector('.addCart').dataset.id = thisProduct.id;

    

    let listProductHTML = document.querySelector('.listProduct');
    products.forEach(product => {
        let newProduct = document.createElement('div');
        newProduct.classList.add('item');
        newProduct.innerHTML = 
        `<a href="/detail.html?id=${product.id}">
            <img src="${product.image}">
        </a>
        <h2>${product.name}</h2>
        <div class="price">₹${product.price}</div>
        <button 
            class="addCart" 
            data-id='${product.id}'>
                Add To Cart
        </button>`;
        listProductHTML.appendChild(newProduct);
    });

}




// function updateTotal() {
//     let cartBoxes = document.querySelectorAll(".cart-box");
//     const totalElement = cart.querySelector(".total-price");
//     let total = 0;
    
//     cartBoxes.forEach((cartBox) => {
//       let priceElement = cartBox.querySelector(".cart-price");
//       let price = parseFloat(priceElement.innerHTML.replace("₹", ""));
//       let quantity = cartBox.querySelector(".cart-quantity").value;
//       total += price * quantity;
//     });
  
//     // keep 2 digits after the decimal point
//     total = total.toFixed(2);
//     // or you can use also
//     // total = Math.round(total * 100) / 100;
  
//     totalElement.innerHTML = "₹" + total;
//   }


//   function CartBoxComponent(title, price, imgSrc) {
//     return `
//       <div class="cart-box">
//           <img src=${imgSrc} alt="" class="cart-img">
//           <div class="detail-box">
//               <div class="cart-product-title">${title}</div>
//               <div class="cart-price">${price}</div>
//               <input type="number" value="1" class="cart-quantity">
//           </div>
//           <!-- REMOVE CART  -->
//           <i class='bx bxs-trash-alt cart-remove'></i>
//       </div>`;
//   }