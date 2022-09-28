$('#add_data').click(function(e){
	e.preventDefault();
	var count_len = document.getElementById("count_items").value;
	for ( instance in CKEDITOR.instances ){
    CKEDITOR.instances[instance].updateElement();
	}





	// test 1
	var j=1;
var Content = [];
var strData = [];
var allEditors = document.querySelectorAll('.ck_editor_txt');
for(var j=1;j<=allEditors.length;j++){
	var strData = CKEDITOR.instances['editor'+j].getData();
}
console.log(strData);
// var table_data = [];
// var sub = {

// }
// test 1 end

// var Content = [];
// var thisName = [];
// var editors = CKEDITOR.instances;
//     for (var x in editors) {
// 		var thisName = editors[x].name;
// 		// Content = CKEDITOR.instances[thisName].getData();
// 		// console.log(Content);
// 	  }
// 	  console.log(thisName[0]);


});
