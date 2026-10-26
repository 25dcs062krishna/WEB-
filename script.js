const  notification = document.getElementById("notiication");

const closeNotofication = document.getElementById("closenotification");

closeNotification.addEventlistner("click",function() {
    notification.style.display = "none";
}); 

const modal = document.getElementByid("modal");

const openModal = document.getElementById("openmodal");

const closemodal = document.getElementById("closemodal");

const modalOk = document.getElementById("modalOk");

openmodal.addeventListener("click",function() {
    modal.classlist.remove("show");
});

