$( document ).ready(function() {

var NasaRMC = ["b", "c", "d", "e", "g", "h", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "aa", "ab"];
var AnvilUnveiling = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24"];
//print out thumbnails
showImage(NasaRMC);
/*
--------------------------------------------------------------------------------
function to change what is being view by top tabs
--------------------------------------------------------------------------------
*/
function topTabs() {
    var a = document.getElementById("2014-2015");
    var b = document.getElementById("2015-2016");
    var c = document.getElementById("imageContainer1");
    var d = document.getElementById("imageContainer2");
    a.onclick = function() {
        a.style.paddingBottom = "6px";
        a.style.cursor= "auto";
        b.style.paddingBottom = "4px";
        b.style.cursor= "pointer"; 
        b.style.cursor= "hand";
        c.style.zIndex = "220";
        d.style.zIndex = "200";
        showImage(NasaRMC);
        a.style.opacity = "1";
        b.style.opacity = ".50";
        $( "#imageContainer1" ).empty();
        $( "#imageContainer2" ).empty();
        showImage(NasaRMC);
    };

    b.onclick = function() {
        a.style.paddingBottom = "4px";
        a.style.cursor= "pointer"; 
        a.style.cursor= "hand";
        b.style.cursor= "auto"; 
        b.style.paddingBottom = "6px";
        d.style.zIndex = "50";
        c.style.zIndex = "200";
        a.style.opacity = ".50";
        b.style.opacity = "1";
        
        $( "#imageContainer1" ).empty();
        $( "#imageContainer2" ).empty();
        showImage(AnvilUnveiling);
    };
}
topTabs();


function showImage(imgName) {
    //declare variables and give set the location of the image files
    var imgNumber = 0;
    var imgLoc = "images/2014-15img/thumbnails/" + imgName[imgNumber] + ".jpg";

    /*
    --------------------------------------------------------------------------------
    loop to display all images in the array
    --------------------------------------------------------------------------------
    */

    while (imgNumber < imgName.length) { //create each thumbnail in the imgName array

        var overlay = document.createElement("div"); //create div to wrap thumbnail
        overlay.id = "overlay" + imgName[imgNumber];
        var as = document.getElementById("imageContainer1");
        as.appendChild(overlay);

        //set overlay attributes & style
        overlay.style.zIndex = "1000";
        overlay.style.display = "inline-block";
        overlay.style.position = "relative";
        overlay.style.opacity = ".85";
        overlay.style.padding = "2px";

        //create img element
        var img = document.createElement("img");
        //set img attributes &style
        img.src = imgLoc;
        img.id = imgName[imgNumber];
        document.getElementById(overlay.id).appendChild(img);
        img.style.position = "relative";
        img.style.zIndex = "-1000";

        mouseOver(overlay.id, imgName[imgNumber], img, imgName, imgNumber); // pop up when mouse over thumbnail

        imgNumber++;
        imgLoc = "images/2014-15img/thumbnails/" + imgName[imgNumber] + ".jpg";
    }

    /*
--------------------------------------------------------------------------------
on mouse over create a pop up over
--------------------------------------------------------------------------------
*/

    function mouseOver(overlayDiv, name, img, imgName, imgNumber) { // when mouse hovers thumbnail
        //create popUp element
        var popUp = document.createElement("img");
        popUp.src = img.src;
        popUp.id = img.id + "popUp";
        document.getElementById(overlayDiv).appendChild(popUp);
        var a = document.getElementById(popUp.id);
        a.style.position = "absolute";
        a.style.left = "0px";
        a.style.left = "0px";
        a.style.zIndex = "500";
        a.style.padding = "2px";


        /*
--------------------------------------------------------------------------------
make the image pop up a little bit
--------------------------------------------------------------------------------
*/

        document.getElementById(overlayDiv).onmouseover = function() {
            //change z-index so div is in front on mouse        
            document.getElementById(overlayDiv).style.zIndex = "2001";
            //set opacity to 1
            document.getElementById(overlayDiv).style.opacity = "1";
            //set atributes and style to popUp element
            var d = document.getElementById(popUp.id);
            d.style.position = "absolute";
            d.style.zIndex = "500";
            d.style.padding = "2px";
            //     document.getElementById(overlayDiv).style.zIndex = "2001";
            //animate the popUp thumbnail popping up
            $("#" + popUp.id).animate({
                top: '-=5px',
                left: '-=5px',
                height: '+=10px',
                width: '+=10px'
            }, 100);
        };

        /*
--------------------------------------------------------------------------------
function to shrink the image back down on mouse out
--------------------------------------------------------------------------------
*/

        document.getElementById(overlayDiv).onmouseout = function() {
            //animate the popUp thumbnail shrinking down
            var d = document.getElementById(popUp.id);
            d.style.zIndex = "1";
            document.getElementById(overlayDiv).style.zIndex = "1000";
            document.getElementById(overlayDiv).style.opacity = ".85";
            $("#" + popUp.id).animate({
                top: '+=5px',
                left: '+=5px',
                height: '-=10px',
                width: '-=10px'
            }, 100);
        };
        /*
     --------------------------------------------------------------------------------
     when the image is clicked. function to make the big images show
     --------------------------------------------------------------------------------
     */
        document.getElementById(overlayDiv).onclick = function() {

            /*
            --------------------------------------------------------------------------------
            code to display fading background 
            --------------------------------------------------------------------------------
            */
            function createBackground(oldImage) {
                var background = document.createElement("div");
                background.id = "background";
                document.body.appendChild(background);
                var backgroundstyles = document.getElementById("background");
                backgroundstyles.style.position = "fixed";
                backgroundstyles.style.left = "0px";
                backgroundstyles.style.top = "0px";
                backgroundstyles.style.zIndex = "10000";
                backgroundstyles.style.backgroundColor = "black";
                backgroundstyles.style.opacity = "0";
                backgroundstyles.style.width = "100%";
                backgroundstyles.style.height = "100%";
                //black background fades in
                $("#background").animate({
                    opacity: ".80"
                }, 500);
                //event listener for click
                document.getElementById("background").onclick = function() {
                    fadeOut(oldImage);
                    removeBackground();
                };

            }
            createBackground();


            /*
        --------------------------------------------------------------------------------
        code to make image get bigger for viewing and change src to clear image
        --------------------------------------------------------------------------------
        */

            var x = document.getElementById(popUp.id);
            // Copy the <popup> element and its child nodes
            var cln = x.cloneNode(true);

            // Append the cloned <li> element to <ul> with id="myList1"
            document.body.appendChild(cln);
            cln.style.position = "fixed";
            cln.id = popUp.id + "new";
            cln.style.zIndex = "10005";

            var pos = x.getBoundingClientRect();
            cln.style.left = pos.left + "px";
            cln.style.top = pos.top + "px";

            //get dimensions of element to keep aspect ratio locked
            var width = cln.clientWidth;
            var height = cln.clientHeight;

            // get viewport
            var viewportWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
            var viewportHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
            // for screens that are portrait
            if (viewportHeight > viewportWidth) {
                var newWidth = (viewportWidth / width) * 0.75 * width;
                var newHeight = (newWidth / width) * height;
                //compensate for top left corner
                var leftComp = newWidth / -2;
                var topComp = newHeight / -2;
            }
            // for screens that are landscape
            else {
                var newHeight = (viewportHeight / height) * 0.75 * height;
                var newWidth = (newHeight / height) * width;
                //compensate for top left corner
                var leftComp = newWidth / -2;
                var topComp = newHeight / -2;
            }

            //animate the popUp thumbnail popping up
            $("#" + popUp.id + "new").animate({
                top: "50%",
                left: "50%",
                marginLeft: leftComp,
                marginTop: topComp,
                height: newHeight,
                width: newWidth
            }, 500);
            var clearImage = document.getElementById("#" + imgName[imgNumber] + "new");
            cln.src = "images/2014-15img/" + name + ".jpg";
            createLeftArrow(imgName[imgNumber] + "popUpnew");
            createRightArrow(imgName[imgNumber] + "popUpnew");
            createBackground(imgName[imgNumber] + "popUpnew");

            /*
            --------------------------------------------------------------------------------
            function to make arrow appear on right side
            --------------------------------------------------------------------------------
            */
            function createRightArrow(oldImage) {
                var rightArrowLeft = (viewportWidth / 2) + (newWidth / 2);
                var rightArrowTop = (viewportHeight / 2) - 50 + "px";
                var e = document.createElement("img");
                e.id = "rightArrow";
                e.src = "images/rightArrow.png";
                document.body.appendChild(e);
                var rightArrow = document.getElementById("rightArrow");
                rightArrow.style.position = "fixed";
                rightArrow.style.zIndex = "10010";
                rightArrow.style.width = "50px";
                rightArrow.style.height = "100px";
                rightArrow.style.left = (rightArrowLeft / viewportWidth * 100) + "%";
                rightArrow.style.top = rightArrowTop;
                rightArrow.style.opacity = "0";
                // fade in effect for right arrow
                $("#rightArrow").animate({
                    opacity: "1"
                }, 250);

                rightArrow.onclick = function() {
                    fadeOut(oldImage);
                    setTimeout(function() {
                        nextImage();
                    }, 251);
                };
            }
            /*
            --------------------------------------------------------------------------------
            function to make arrow appear on the left side
            --------------------------------------------------------------------------------
            */
            function createLeftArrow(oldImage) {
                var leftArrowRight = (viewportWidth / 2) + (newWidth / 2);
                var leftArrowTop = (viewportHeight / 2) - 50 + "px";
                var f = document.createElement("img");
                f.id = "leftArrow";
                f.src = "images/leftArrow.png";
                document.body.appendChild(f);
                var leftArrow = document.getElementById("leftArrow");
                leftArrow.style.position = "fixed";
                leftArrow.style.zIndex = "10011";
                leftArrow.style.width = "50px";
                leftArrow.style.height = "100px";
                leftArrow.style.right = (leftArrowRight / viewportWidth * 100) + "%";
                leftArrow.style.top = leftArrowTop;
                leftArrow.style.opacity = "0";
                // fade in effect for right arrow
                $("#leftArrow").animate({
                    opacity: "1"
                }, 250);
                leftArrow.onclick = function() {
                    fadeOut(oldImage);
                    setTimeout(function() {
                        previousImage();
                    }, 251);
                };
            }

            /*
            --------------------------------------------------------------------------------
            function to fade out all elements for a new image to be displayed
            --------------------------------------------------------------------------------
            */

            function fadeOut(oldImage) {
                var fadeSpeed = 10;
                $("#rightArrow").animate({
                    opacity: "0"
                }, fadeSpeed);
                $("#leftArrow").animate({
                    opacity: "0"
                }, fadeSpeed);
                $("#" + popUp.id + "new").animate({
                    opacity: "0"
                }, fadeSpeed);
                setTimeout(function() {
                    removeElements(oldImage);
                }, fadeSpeed);
            }
            /*
            --------------------------------------------------------------------------------
            function to remove all elements for a new image to be displayed
            --------------------------------------------------------------------------------
            */
            function removeElements(oldImage) {
                var element = document.getElementById('rightArrow');
                element.parentNode.removeChild(element);
                element = document.getElementById('leftArrow');
                element.parentNode.removeChild(element);
                element = document.getElementById(oldImage);
                element.parentNode.removeChild(element);
            }
            /*
            --------------------------------------------------------------------------------
            function to remove all background Elements to image selection
            --------------------------------------------------------------------------------
            */
            function removeBackground() {
                var element = document.getElementById("background");
                element.parentNode.removeChild(element);
            }

            /*
            --------------------------------------------------------------------------------
            function to display next image
            --------------------------------------------------------------------------------
            */
            function nextImage() {
                if (imgNumber === (imgName.length - 1)) {
                    imgNumber = 0;
                } else {
                    imgNumber = imgNumber + 1;
                }
                var j = document.createElement("img");
                j.src = "images/2014-15img/" + imgName[imgNumber] + ".jpg";
                j.id = imgName[imgNumber] + "new";
                document.body.appendChild(j);

                var a = document.getElementById(j.id);
                var hg = document.getElementById(imgName[imgNumber] + "popUp");
                //get dimensions of element to keep aspect ratio locked
                var width = hg.clientWidth;
                var height = hg.clientHeight;

                // get viewport
                var viewportWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
                var viewportHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
                // for screens that are portrait
                if (viewportHeight > viewportWidth) {
                    newWidth = (viewportWidth / width) * 0.75 * width;
                    newHeight = (newWidth / width) * height;
                    //compensate for top left corner
                    leftComp = newWidth / -2;
                    topComp = newHeight / -2;
                }
                // for screens that are landscape
                else {
                    newHeight = (viewportHeight / height) * 0.75 * height;
                    newWidth = (newHeight / height) * width;
                    //compensate for top left corner
                    leftComp = newWidth / -2;
                    topComp = newHeight / -2;
                }

                a.style.position = "fixed";
                a.style.zIndex = "10010";
                a.style.width = newWidth + "px";
                a.style.height = newHeight + "px";
                a.style.top = "50%";
                a.style.left = "50%";
                a.style.marginLeft = leftComp + "px";
                a.style.marginTop = topComp + "px";
                a.style.opacity = "0";

                //animate the popUp thumbnail popping up
                $("#" + j.id).animate({
                    opacity: "1"
                }, 250);

                createLeftArrow(j.id);
                createRightArrow(j.id);
                document.getElementById("background").onclick = function() {
                    fadeOut(j.id);
                    removeBackground();
                };
            }
            /*
            --------------------------------------------------------------------------------
            function to display previous image
            --------------------------------------------------------------------------------
            */
            function previousImage() {
                if (imgName[imgNumber] === imgName[0]) {
                    imgNumber = imgName.length - 1;
                } else {
                    imgNumber = imgNumber - 1;
                }
                var j = document.createElement("img");
                j.src = "images/2014-15img/" + imgName[imgNumber] + ".jpg";
                j.id = imgName[imgNumber] + "new";
                document.body.appendChild(j);

                var a = document.getElementById(j.id);
                var hg = document.getElementById(imgName[imgNumber] + "popUp");
                //get dimensions of element to keep aspect ratio locked
                var width = hg.clientWidth;
                var height = hg.clientHeight;

                // get viewport
                var viewportWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
                var viewportHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
                // for screens that are portrait
                if (viewportHeight > viewportWidth) {
                    newWidth = (viewportWidth / width) * 0.75 * width;
                    newHeight = (newWidth / width) * height;
                    //compensate for top left corner
                    leftComp = newWidth / -2;
                    topComp = newHeight / -2;
                }
                // for screens that are landscape
                else {
                    newHeight = (viewportHeight / height) * 0.75 * height;
                    newWidth = (newHeight / height) * width;
                    //compensate for top left corner
                    leftComp = newWidth / -2;
                    topComp = newHeight / -2;
                }

                a.style.position = "fixed";
                a.style.zIndex = "10010";
                a.style.width = newWidth + "px";
                a.style.height = newHeight + "px";
                a.style.top = "50%";
                a.style.left = "50%";
                a.style.marginLeft = leftComp + "px";
                a.style.marginTop = topComp + "px";
                a.style.opacity = "0";

                //animate the popUp thumbnail popping up
                $("#" + j.id).animate({
                    opacity: "1"
                }, 250);

                createLeftArrow(j.id);
                createRightArrow(j.id);
                document.getElementById("background").onclick = function() {
                    fadeOut(j.id);
                    removeBackground();
                };
            }

        }; // first on click

        /*
     --------------------------------------------------------------------------------
     function to getnerate a form on the popUp
     --------------------------------------------------------------------------------
     */

    }
}
});//on document ready