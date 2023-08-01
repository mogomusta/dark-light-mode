$(document).ready(function ()//When the dom is ready or just add it if you already have a .ready function
{
    $(".PreLoader").css("display", "none");
});

$('.Projets').owlCarousel({
    loop: false,
    margin: 10,
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 3
        }
    }
});

$('.Testmonials').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

$('.OurTeam').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 3
        }
    }
});


// jQuery.fn.countMe = function (t, e) {
//     if (void 0 !== t || void 0 !== e) {
//         var n = 0, r = this.html();
//         return setTimeout(() => {
//             var t = setInterval(() => { n++, this.text(n), n == r && clearInterval(t) }, e)
//         }, t), this
//     }
//     alert("Worning!\ndelay and speed can't be empty!")
// };

// window.onload = () => {
//     // $(selector).countMe(delay,speed)
//     $("#num1").countMe(3, 30);
//     $("#num2").countMe(15, 5);
//     $("#num3").countMe(15, 30);
//     $("#num4").countMe(15, 30);
// }

jQuery.fn.countMe = function (targetNumber, speed) {
    if (void 0 !== targetNumber && void 0 !== speed) {
        var currentNumber = 0;
        var intervalId = setInterval(() => {
            currentNumber++;
            this.text(currentNumber);
            if (currentNumber == targetNumber) {
                clearInterval(intervalId);
            }
        }, speed);
    } else {
        alert("Warning!\ndelay and speed can't be empty!");
    }
    return this;
};

window.onload = () => {
    $("#num1").countMe(7, 30);
    $("#num2").countMe(50, 5);
    $("#num3").countMe(10, 30);
    $("#num4").countMe(20, 30);
};



// --- stay in touch --- 
document.getElementById("submitButton").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent form submission

    var button = this;
    button.style.transform = "translateX(315px)"; // Move the button to the left

    setTimeout(function() {
        var email = document.getElementById("emailInput").value;
        console.log("Email:", email); // You can replace this line with your desired action

        // Reset the button position after a delay (e.g., 3 seconds)
        setTimeout(function() {
            button.style.transform = "none";
        }, 3000);
    }, 0); // Use a minimal delay to allow the button animation to start immediately
});



function myFunction() {
    let element = document.body;
    element.classList.toggle("light");
}


