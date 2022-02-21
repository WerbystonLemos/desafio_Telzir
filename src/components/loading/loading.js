function showLoading()
{
    let divTagContainer = document.createElement("div")
    let divTag          = document.createElement("div")
    let tagImg          = document.createElement("img")
    
    divTagContainer.setAttribute("id", "containerLoading")
    divTagContainer.style.display        = "flex"
    divTagContainer.style.justifyContent = "center"
    divTagContainer.style.alignItems     = "center"
    divTagContainer.style.position       = "absolute"
    divTagContainer.style.top            = "0"
    divTagContainer.style.zIndex         = "9999"
    divTagContainer.style.width          = "100vw"
    divTagContainer.style.height         = "100vh"
    divTagContainer.style.background     = "rgb(20,28,80"
    
    tagImg.setAttribute("src", "./src/img/logo_BC.png")
    tagImg.style.width = "15vw";
    
    divTag.setAttribute('id', 'containerImgLoading')
    divTag.style.width = "15vw";

    divTag.appendChild(tagImg)
    divTagContainer.appendChild(divTag)
    document.querySelector("body").appendChild(divTagContainer)
}

function hideLoading()
{
    document.querySelector("#containerLoading").remove()
}