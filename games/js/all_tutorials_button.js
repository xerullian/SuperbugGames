var allTutorialButton = document.getElementsById("all_tutorials_button");

allTutorialButton.addEventListener("click", function () {

    this.classList.toggle("active");
    this.allTutButton = allTutorialButton;

    let text = this.innerHTML;
    let expandText = document.getElementById(this.dataset.childUp);
    let closeText = document.getElementById(this.dataset.childDown);

    if (content.style.display === "block") {

        //allTutButton.innerHTML = allTutButton.dataset.textExpand;
    }
    else {

    }
});