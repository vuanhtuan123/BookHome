// tăng só trên ô giỏ hàng
let pickBtn = document.getElementsByClassName("product__main-info-cart-btn")[0];
let cartInfo = document.getElementsByClassName("header__notice")[0];
pickBtn.onclick = function () {
  let currentCount = Number(cartInfo.textContent);
  currentCount++;
  cartInfo.textContent = currentCount;
};

/* let minusBtn = document.getElementsByClassName('product__main-info-cart-quantity-minus')[0];
let plusBtn = document.getElementsByClassName('product__main-info-cart-quantity-plus')[0];
var valueBtn = document.getElementsByClassName('product__main-info-cart-quantity-total')[0].value

minusBtn.onclick() = function(){

    valueBtn.textContent=  valueBtn--;
}
plusBtn.onclick() = function(){
    valueBtn.textContent=  valueBtn++;
}*/

// Phần gửi kiểm tra form

// let submitBtn = document.getElementById("formgroupcomment");
// submitBtn.onsubmit = function (event) {
//   event.preventDefault();
//   // let nameIn = document.getElementById('form-name')
//   // let commentIn = document.getElementById('pwd')
//   let contentIn = document.getElementById("formcontent");

//   //kiểm tra xem có đủ 100 ký tự hay k

//   if ($("textarea#formcontent").val().length < 100) {
//     alert("Bạn phải nhập  trên 100 ký tự");
//     return;
//   } else {
//     // kiểm tra từ cấm
//     let bWord = ["xấu", " hư ", " lỗi", "đểu"];
//     for (i = 0; i < bWord.length; i++) {
//       if (
//         $("textarea#formcontent").val().toLowerCase().indexOf(bWord[i]) > -1
//       ) {
//         alert("Có tồn tại từ cấm");
//         return;
//       }
//     }
//   }

//   // lấy giờ
//   var currentdate = new Date();
//   var datetime =
//     currentdate.getFullYear() +
//     "-" +
//     currentdate.getMonth() +
//     "-" +
//     currentdate.getDate() +
//     " " +
//     currentdate.getHours() +
//     ":" +
//     currentdate.getMinutes() +
//     ":" +
//     currentdate.getSeconds();

//   // thêm nội dung vào trang web

//   let reviewer = document.getElementsByClassName("item-reviewer")[0];
//   var ul = document.createElement("ul");
//   {
//     /* <img src="images/img/1.png" alt="" class="comment-item-user-img">

// <li><b> ${nameIn.value} </b></li>
// </div> */
//   }
//   ul.innerHTML = `
// <ul class = item-reviewer>
// <div class="comment-item">

// <br>
// <li>${datetime}</li>
// <li>
//    <h4> ${contentIn.value}</h4>
// </li>
// </ul> `;
//   reviewer.prepend(ul);
// };

let submitBtn = document.getElementById("formgroupcomment");
const productId = document.querySelector('input[name="product_id"]');
const content = document.querySelector('textarea[name="comm_details"]');

submitBtn.onsubmit = function (event) {
  event.preventDefault();
  addComment(productId.value, content.value);
};

async function addComment(idProduct, commentContent) {
  debugger;
  const url = "addcomment.php";
  const data = {
    id: idProduct,
    comm_details: commentContent,
  };
  const reponse = await fetch(url, {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      Accept: "application/json",
    },
    body: JSON.stringify(data),
  });
  console.log(reponse);

  let contentIn = document.getElementById("formcontent");
  let currentdate = new Date();
  let datetime =
    currentdate.getFullYear() +
    "-" +
    (currentdate.getMonth() + 1) +
    "-" +
    currentdate.getDate();
  // +
  // " " +
  // currentdate.getHours() +
  // ":" +
  // currentdate.getMinutes() +
  // ":" +
  // currentdate.getSeconds();

  let reviewer = document.getElementsByClassName("item-reviewer")[0];
  let ul = document.createElement("ul");
  ul.innerHTML = `
              <ul class="item-reviewer">
                  <div class="comment-item">
                      <br>
                      <li>${datetime}</li>
                      <li>
                          <h4>${contentIn.value}</h4>
                      </li>
                  </div>
              </ul>
          `;
  reviewer.prepend(ul);
}
