
        const cursor = document.querySelector(".cursor");
        var timeout;
        //follow curser on movment
        document.addEventListener("mousemove", (e) => {
            // let x = e.pageX;
            // let y = e.pageY;
            let x = e.clientX;
            let y = e.clientY;

            cursor.style.top = y + "px";
            cursor.style.left = x + "px";
            cursor.style.display = "block";

            //  cursor effects on mouse stopped

            function mouseStopped() {
                cursor.style.display = "none";
            }

            clearTimeout(timeout);
            timeout = setTimeout(mouseStopped, 1000);

        });

        document.body.addEventListener("mouseenter", () => {
            cursor.style.display = "block";
        });

        // Hide cursor when leaving the body element
        document.body.addEventListener("mouseleave", () => {
            cursor.style.display = "none";
        });

        // document.addEventListener("mouseout", () => {
        //     cursor.style.display = "none";

        // });
    