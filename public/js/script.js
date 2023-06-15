const passwordInput = document.querySelector("#password");
const repeatpasswordInput = document.querySelector("#repeat_password");




function getImagePreview(event)
{
  document.getElementById("uploadSub").style.display = "block";
  var image=URL.createObjectURL(event.target.files[0]);
  var imagediv= document.getElementById('preview');
  var newimg=document.createElement('img');
  imagediv.innerHTML='';
  newimg.src=image;
  newimg.width="100";
  imagediv.appendChild(newimg);
};
function getImage(event)
{
  document.getElementById("uploadImageProect").style.display = "block";
  var image=URL.createObjectURL(event.target.files[0]);
  var imagediv= document.getElementById('display-image');
  var newimg=document.createElement('img');
  imagediv.innerHTML='';
  newimg.src=image;
  newimg.width="60";
  imagediv.appendChild(newimg);
};


$(document).ready(function(){

  const firstname = document.getElementById("firstname");
  const lastname = document.getElementById("lastname");
  const email = document.getElementById("email");
  const password = document.getElementById("password");
  const repeatPassword = document.getElementById("repeat_password");
  const errorElement = document.getElementById("firstname-error");
  const errorLastname = document.getElementById("lastname-error");

  const form = document.getElementById("signup");

  if(form){
    form.addEventListener("submit", (e) => {
      // e.preventDefault();
      validateFirstname();
      validateLastname()
    });

  }




  function validateFirstname(){
    let msg = [];
    if (firstname.value === "" || firstname.value === null) {
      msg.push("Firstname is required and can`t be ");
    }
    if (msg.length > 0) {
      errorElement.innerText = 'Firstname is required and can`t be js';
    }

  };
  function validateLastname(){
    let msg = [];
    if (lastname.value === "" || lastname.value === null) {
      msg.push("Firstname is required and can`t be ");
    }
    if (msg.length > 0) {
      errorLastname.innerText = 'Lastname is required and can`t be js';
    }

  };
$('#email').blur(function(){
  var email = $(this).val();
  if(email == ""){
    $("#email-error").fadeOut();

    }else{
      $.ajax({
        url:"../actions/checkEmail.php",
        method: "GET",
        data:{
          email:email
        },
        success: function(data){
          let response = JSON.parse(data);
          $("#email-error").fadeIn().html(response.message);
        }
      });
    }

});

$(document).on('keyup','#search',function(){
  var search = $(this).val();
  $.ajax({
    url:"../actions/search.php",
    method: "GET",
    data:{
      search:search
    },
    success: function(data){
      $('.projects-container').html(data);
    }
  });

});


});


