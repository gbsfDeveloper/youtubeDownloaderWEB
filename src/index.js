import * as DOM from './DOMelements.js';// la ruta se toma desde el index.html

function generateCard(title,description,imageURL,videoID) {
	let foundedCard = $(`
		<div class="card">
			<div class="card_infoContainer">
				<div class="card_imgContainer">
					<img class="card_image" src="${imageURL}" alt="">
				</div>
				<div class="card_text">
					<p class="card_title"><b>${title}</b></p>
					<!-- <p id="vid_${videoID}" class="card_subtitle">${description}</p> -->
					<div class="card_loadBarContainer">
						<div id="vid_${videoID}" class="card_loadBar">%0</div>
					</div>
				</div>
			</div>
			<div class="card_buttonContainer">
				<button id="${videoID}" class="card_downloadButton"><p>Descargar</p><p>Flechita</p></button>
			</div>
		</div>
	`);
	return foundedCard;
}

$(document).ready(function(){
	
    DOM.search_button.on("click",async function(){
		console.log("eeee1");
    });

    DOM.search_input.on("keyup", async function(event){
        if(event.keyCode === 13){
			console.log("eeee2");
        }
	});
	
});