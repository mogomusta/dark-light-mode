// document.addEventListener('DOMContentLoaded', function() {
//     const modeToggleBtn = document.getElementById('mode-toggle');
//     const body = document.body;
//     const logo = document.getElementById('logo');
    

//     modeToggleBtn.addEventListener('click', function() {
//         body.classList.toggle('light-mode');
//         if (body.classList.contains('light-mode')) {
//             // If in light mode, set the light mode logo
//             logo.src = 'images/UC-light Logofooter.png';
//         } else {
//             // If not in light mode, set the default logo (dark mode logo)
//             logo.src = 'images/web site logo 1.png';
//         }
//     });
// });

// function imgSwitcher (){
    
//         body.classList.toggle('light-mode');
//         if (body.classList.contains('light-mode')) {
//             // If in light mode, set the light mode logo
//             logo.src = 'images/UC-light Logofooter.png';
//         } else {
//             // If not in light mode, set the default logo (dark mode logo)
//             logo.src = 'images/web site logo 1.png';
//         }
   
// }

// function toggleMode() {
//     const body = document.body;
//     body.classList.toggle('light-mode');

//     // Store the user's preference for future visits
//     const currentMode = body.classList.contains('light-mode') ? 'light' : 'dark';
//     setPreferredMode(currentMode);
// }

// // Function to set the user's preferred mode in local storage
// function setPreferredMode(mode) {
//     localStorage.setItem('preferredMode', mode);
// }

// // Function to get the user's preferred mode from local storage
// function getPreferredMode() {
//     return localStorage.getItem('preferredMode');
// }

// document.addEventListener('DOMContentLoaded', function() {
//     const modeToggleBtn = document.getElementById('mode-toggle');
//     modeToggleBtn.addEventListener('click', function() {
//         toggleMode();
//         imgSwitcher();
        
      
     
//     });

//     // Check if the user's preferred mode is set in local storage
//     const preferredMode = getPreferredMode();
//     if (preferredMode === 'light') {
//         toggleMode(); // If the preferred mode is light, apply light mode styles
//     }
 


// });



// Function to toggle between light and dark mode
function toggleMode() {
    const body = document.body;
    body.classList.toggle('light-mode');

    // Store the user's preference for future visits
    const currentMode = body.classList.contains('light-mode') ? 'light' : 'dark';
    setPreferredMode(currentMode);

    // Change the logo based on the selected mode
    const logo = document.getElementById('logo');
    if (body.classList.contains('light-mode')) {
        // If in light mode, set the light mode logo
        logo.src = 'images/UC-light Logofooter.png';
    } else {
        // If not in light mode, set the default logo (dark mode logo)
        logo.src = 'images/web site logo 1.png';
    }
}

// Function to set the user's preferred mode in local storage
function setPreferredMode(mode) {
    localStorage.setItem('preferredMode', mode);
}

// Function to get the user's preferred mode from local storage
function getPreferredMode() {
    return localStorage.getItem('preferredMode');
}

document.addEventListener('DOMContentLoaded', function() {
    const modeToggleBtn = document.getElementById('mode-toggle');
    modeToggleBtn.addEventListener('click', function() {
        toggleMode();
    });

    // Check if the user's preferred mode is set in local storage
    const preferredMode = getPreferredMode();
    if (preferredMode === 'light') {
        toggleMode(); // If the preferred mode is light, apply light mode styles and change the logo
    }
})