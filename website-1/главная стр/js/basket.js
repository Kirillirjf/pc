const cartButton = document.querySelector("#cart-button-1");
const modal = document.querySelector(".modal-1");
const close = document.querySelector(".close-1");

cartButton.addEventListener("click", function(event){
	modal.classList.add("is-open");
});

close.addEventListener("click", function(event){
	modal.classList.remove("is-open");
});
