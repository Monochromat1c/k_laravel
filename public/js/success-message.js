var errorMessage = document.getElementById("success-message");

if (errorMessage) {
    setTimeout(function () {
        errorMessage.remove();
    }, 1500);
}
