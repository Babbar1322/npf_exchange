const dropdownBtn = document.querySelector(".dropdown-btn");
const dropdownItems = document.querySelectorAll(".offcanvas-item");
const offcanvasExample = new bootstrap.Offcanvas(
  document.getElementById("offcanvasExample")
);

dropdownItems.forEach((item) => {
  item.addEventListener("click", function () {
    const selectedItemText = this.textContent;
    dropdownBtn.textContent = selectedItemText;
    offcanvasExample.hide(); // Close the offcanvas
  });
});


// // offcanvas button alert
function getMessage(message){
  return `<div class="alert alert-success alert-dismissible fade show" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><span>${message}</span></div>`;
}
$('.offacnvas_nav').click(function(){
  $('#alert-container').empty().append(getMessage($(this).find('.offcanvas-item').text()));
  $('#offcanvasExample').offcanvas('hide'); // Close the offcanvas
});


jQuery(document).ready(function($) {
  $(".clickable-row").click(function() {
      window.location = $(this).data("href");
  });
});