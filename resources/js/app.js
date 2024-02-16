import "./bootstrap";

let slideIndex = 0;

function showSlides() {
    let i;
    const slides = document.getElementsByClassName("mySlides");

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slideIndex++;

    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 2000); // Change slide every 2 seconds
}

// Start the slideshow when the page loads
window.onload = showSlides;

// app.js
window.initiateRazorpayPayment = function ({ orderID, prefill, apiKey }) {
    var options = {
        key: apiKey,
        amount: "500 * 100",
        currency: "INR",
        name: "Indian FIR system",
        description: "Test Transaction",
        order_id: orderID,
        handler: function (response) {
            Livewire.dispatch("paymentSuccessful", { data: response });
        },
        prefill: {
            name: prefill.name,
            email: prefill.email,
            contact: prefill.mobile_number,
        },
        theme: {
            color: "#3399cc",
        },
    };
    var paymentWindow = new Razorpay(options);
    paymentWindow.open();
};

// Listen for the custom event to initiate payment
document.addEventListener("initiatePayment", function (e) {
    var eventData = e.detail[0];
    var orderID = eventData.orderID;
    var prefill = eventData.prefill;
    var apiKey = eventData.apiKey;

    initiateRazorpayPayment({ orderID, prefill, apiKey });
});

document.addEventListener("showPopup", () => {
    const popup = document.getElementById("popupMessage");
    popup.style.display = "flex";

    setTimeout(() => {
        popup.style.display = "none";
    }, 3000);
});
