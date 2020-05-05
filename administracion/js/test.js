function comenzar(){
		zonadatos=document.getElementById("zonadatos");
		var archivos=document.getElementById("archivos");
		archivos.addEventListener("change", procesar, false);
}

function procesar(e){

		var archivos=e.target.files;
		
		zonadatos.innerHTML="";
		var mi_archivo=archivos[0];
			if(!mi_archivo.type.match(/image/)){
			alert("seleciona un archivo de tipo imagen, por favor.");
		}else{

		var lector=new FileReader();

		lector.readAsDataURL(mi_archivo);
		lector.addEventListener("load", mostrar_en_web, false);
		}
}
function mostrar_en_web (e){

	var resultado=e.target.result;

	zonadatos.innerHTML+="<img src='" + resultado + "'>";
}



window.addEventListener("load", comenzar, false);

//----------------------------->segunda imagen<---------------------------------

function comenzar1(){
		zonadatos1=document.getElementById("zonadatos1");
		var archivos1=document.getElementById("archivos1");
		archivos1.addEventListener("change", procesar1, false);
}
function procesar1(e){

		var archivos1=e.target.files;
		zonadatos1.innerHTML="";
		var mi_archivo1=archivos1[0];
		if(!mi_archivo1.type.match(/image/)){
			alert("seleciona un archivo de tipo imagen, por favor.");
		}else{
		var lector1=new FileReader();
		lector1.readAsDataURL(mi_archivo1);
		lector1.addEventListener("load", mostrar_en_web1, false);}}
function mostrar_en_web1 (e){
	var resultado1=e.target.result;
	zonadatos1.innerHTML+="<img src='" + resultado1 + "'>";}
window.addEventListener("load", comenzar1, false);

//-----------------------------tercera imagen--------------------------------------

function comenzar2(){
		zonadatos2=document.getElementById("zonadatos2");
		var archivos2=document.getElementById("archivos2");
		archivos2.addEventListener("change", procesar2, false);
}
function procesar2(e){

		var archivos2=e.target.files;
		zonadatos2.innerHTML="";
		var mi_archivo2=archivos2[0];
		if(!mi_archivo2.type.match(/image/)){
			alert("seleciona un archivo de tipo imagen, por favor.");
		}else{
		var lector2=new FileReader();
		lector2.readAsDataURL(mi_archivo2);
		lector2.addEventListener("load", mostrar_en_web2, false);}}
function mostrar_en_web2 (e){
	var resultado2=e.target.result;
	zonadatos2.innerHTML+="<img src='" + resultado2 + "'>";}


window.addEventListener("load", comenzar2, false);

//-----------------------------cuarta imagen--------------------------------------

function comenzar3(){
		zonadatos3=document.getElementById("zonadatos3");
		var archivos3=document.getElementById("archivos3");
		archivos3.addEventListener("change", procesar3, false);
}
function procesar3(e){

		var archivos3=e.target.files;
		zonadatos3.innerHTML="";
		var mi_archivo3=archivos3[0];
		if(!mi_archivo3.type.match(/image/)){
			alert("seleciona un archivo de tipo imagen, por favor.");
		}else{
		var lector3=new FileReader();
		lector3.readAsDataURL(mi_archivo3);
		lector3.addEventListener("load", mostrar_en_web3, false);}}
function mostrar_en_web3 (e){
	var resultado3=e.target.result;
	zonadatos3.innerHTML+="<img src='" + resultado3 + "'>";}


window.addEventListener("load", comenzar3, false);

//-----------------------------quinta imagen--------------------------------------

function comenzar4(){
		zonadatos4=document.getElementById("zonadatos4");
		var archivos4=document.getElementById("archivos4");
		archivos4.addEventListener("change", procesar4, false);
}
function procesar4(e){

		var archivos4=e.target.files;
		zonadatos4.innerHTML="";
		var mi_archivo4=archivos4[0];
		if(!mi_archivo4.type.match(/image/)){
			alert("seleciona un archivo de tipo imagen, por favor.");
		}else{
		var lector4=new FileReader();
		lector4.readAsDataURL(mi_archivo4);
		lector4.addEventListener("load", mostrar_en_web4, false);}}
function mostrar_en_web4 (e){
	var resultado4=e.target.result;
	zonadatos4.innerHTML+="<img src='" + resultado4 + "'>";}


window.addEventListener("load", comenzar4, false);

//-----------------------------sexta imagen--------------------------------------

function comenzar5(){
		zonadatos5=document.getElementById("zonadatos5");
		var archivos5=document.getElementById("archivos5");
		archivos5.addEventListener("change", procesar5, false);
}
function procesar5(e){

		var archivos5=e.target.files;
		zonadatos5.innerHTML="";
		var mi_archivo5=archivos5[0];
		if(!mi_archivo5.type.match(/image/)){
			alert("seleciona un archivo de tipo imagen, por favor.");
		}else{
		var lector5=new FileReader();
		lector5.readAsDataURL(mi_archivo5);
		lector5.addEventListener("load", mostrar_en_web5, false);}}
function mostrar_en_web5 (e){
	var resultado5=e.target.result;
	zonadatos5.innerHTML+="<img src='" + resultado5 + "'>";}


window.addEventListener("load", comenzar5, false);

//-----------------------------septima imagen--------------------------------------

function comenzar6(){
		zonadatos6=document.getElementById("zonadatos6");
		var archivos6=document.getElementById("archivos6");
		archivos6.addEventListener("change", procesar6, false);
}
function procesar6(e){

		var archivos6=e.target.files;
		zonadatos6.innerHTML="";
		var mi_archivo6=archivos6[0];
		if(!mi_archivo6.type.match(/image/)){
			alert("seleciona un archivo de tipo imagen, por favor.");
		}else{
		var lector6=new FileReader();
		lector6.readAsDataURL(mi_archivo6);
		lector6.addEventListener("load", mostrar_en_web6, false);}}
function mostrar_en_web6 (e){
	var resultado6=e.target.result;
	zonadatos6.innerHTML+="<img src='" + resultado6 + "'>";}


window.addEventListener("load", comenzar6, false);

//-----------------------------octava imagen--------------------------------------

function comenzar7(){
		zonadatos7=document.getElementById("zonadatos7");
		var archivos7=document.getElementById("archivos7");
		archivos7.addEventListener("change", procesar7, false);
}
function procesar7(e){

		var archivos7=e.target.files;
		zonadatos7.innerHTML="";
		var mi_archivo7=archivos7[0];
		if(!mi_archivo7.type.match(/image/)){
			alert("seleciona un archivo de tipo imagen, por favor.");
		}else{
		var lector7=new FileReader();
		lector7.readAsDataURL(mi_archivo7);
		lector7.addEventListener("load", mostrar_en_web7, false);}}
function mostrar_en_web7 (e){
	var resultado7=e.target.result;
	zonadatos7.innerHTML+="<img src='" + resultado7 + "'>";}


window.addEventListener("load", comenzar7, false);



