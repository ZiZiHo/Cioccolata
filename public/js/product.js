var elementInputNumber = document.querySelectorAll('.qty-input');  //每個商品的數量
var elementPlusButton = document.querySelectorAll('.plus-btn');    //每個商品的加號
var elementMinusButton = document.querySelectorAll('.minus-btn');  //每個商品的減號
var elementPrice = document.querySelectorAll('.js-price');         //每個商品的單價
var token = document.querySelector('[name="csrf-token"]').getAttribute('content')

var iProductPrice = []; //每個商品的單價 轉成int 運算用
var iLength = 0         //商品樣數



//初值設定
elementPrice.forEach(element => {
    iProductPrice.push(element.dataset.price);
});

iLength = iProductPrice.length;  //商品樣數

//加減號處理 事件添加
for (let i = 0; i < iLength; i++) {
    elementPlusButton[i].onclick = function () {
        mathUpdateProduct(i);
    }

    elementMinusButton[i].onclick = function () {
        if (elementInputNumber[i].value > 1) {
            mathUpdateProduct(i, -1);

        }
        else {
            alert('不得小於1');
        }
    }
}

// 監聽input value改變
for (let i = 0; i < iLength; i++) {
    elementInputNumber[i].listeneraArguments = i;
    elementInputNumber[i].addEventListener('input', mathUpdateValue);

}

//處理購物車加入
var addBtns = document.querySelectorAll('.add-btn');

for (let i = 0; i < iLength; i++) {

    addBtns[i].listeneraArguments = i;
    addBtns[i].addEventListener('click', updateShoppingCart);

}



// 函式區
// 目的 : 處理各產品因為加減號影響的價格以及總價
// 輸入 : 第幾個產品 以及 opcode 決定+-
function mathUpdateProduct(index, opcode = 1) {
    var temp = parseInt(elementInputNumber[index].value) + opcode;
    elementInputNumber[index].value = temp;

}

// 目的 : 監聽輸入數值改變 處理直接輸入input欄位影響的價格
// 輸入 : 受監聽的輸入攔位
function mathUpdateValue() {
    var iNumbers = parseInt(this.value)
    var index = this.listeneraArguments;
    if (iNumbers < 0) {
        this.value = 0;
    }
}

//目的 設定每個加入購物車按鍵的功能 將產品的數量和id加入購物車中
//輸入 產品的數量和id
function updateShoppingCart(e){
    var formData = new FormData();
    var index = this.listeneraArguments;

    formData.append('_token', token);
    formData.append('productId', addBtns[index].dataset.id);
    formData.append('qty', elementInputNumber[index].value);

    fetch('/product/add', {
        'method': 'post',
        'body': formData
    }).then(function (response) {
        return response.text();
    }).then(function (result) {
        alert('新增成功');
    })
}
