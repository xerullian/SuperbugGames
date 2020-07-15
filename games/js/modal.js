

// Get the modal
var modal = document.getElementById("myModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function ()
{
    modal.style.display = "none";
}

// get all images with class name
var images = document.getElementsByClassName("modal-src");
var i;

for (i = 0; i < images.length; i++)
{
    if(images[i].tagName === "IMG")
    {
        images[i].addEventListener("click", function (event)
        {
            let img = event.target.src;
            let altText = event.target.alt;
            let modalImg = document.getElementById("modal-img");
            let captionText = document.getElementById("caption");

            modal.style.display = "block";
            modalImg.src = img;
            captionText.innerHTML = altText;
        });
    }
}