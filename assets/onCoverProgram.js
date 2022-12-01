const seasonDisplayer = document.getElementById("seasonDisplayer")

function onSeasonSelectionClick()
{
    const seasonContainer = document.getElementById("seasonContainer")
    seasonContainer.classList.toggle("hidden")
    seasonDisplayer.classList.toggle("focused")
}

seasonDisplayer.addEventListener("click", onSeasonSelectionClick)