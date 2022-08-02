
function plus(){
    // document.getElementById("plusbutton").onclick((e) => {
    //     e.preventDefault();
    // })
var counter = parseInt(document.getElementById("quantity").value);

counter+=1;
document.getElementById("quantity").value=counter;


}
function minus(){
    // document.getElementById("minusbutton").onclick((e) => {
    //     e.preventDefault();
    // })

    var counter = parseInt(document.getElementById("quantity").value);
    if(counter>0){
        counter-=1;
        document.getElementById("quantity").value=counter;
    }
    
}
function previewImage(obj){
    //console.log(obj.src);
    document.getElementById("detailPreviewImg").src=obj.src;
    obj.className= obj.className+" selected";
}

function unpreviewImage(obj){
    obj.className = "col-md-3 p-3 detailimg";
}
