var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++)
{
    coll[i].addEventListener("click", function () {

        this.classList.toggle("active");

        let content = this.nextElementSibling
        let chevronUp = document.getElementById(this.dataset.childUp);
        let chevronDown = document.getElementById(this.dataset.childDown);

        if (content.style.display === "block")
        {
            content.style.display = "none";
            chevronUp.style.display = "none";
            chevronDown.style.display = "block";
        }
        else
        {
            content.style.display = "block";
            chevronUp.style.display = "block";
            chevronDown.style.display = "none";
        }
    });
}