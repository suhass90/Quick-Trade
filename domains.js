	
	function loadDomains(sel){
	var domains;
	var list = new Array();
	$.load("domains.txt",function(data, stat){
		 domains=data.split('\n');
		 for(var i = 0; i<domains.length;i++){
			 list.push({name:domains[i],value:domain[i],checked:false})
		 }
		 sel.multiselect( 'loadOptions', list);
	});
	}
	
	
			