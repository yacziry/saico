// JavaScript source code
var bt_count = 0;
$("#blog-test-cont").on("click", ".blog-test", function(){
	$(this).after("<p class=\"blog-test\">Pulsa para probar " + (++bt_count) + "</p>");
});
