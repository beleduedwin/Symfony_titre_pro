$(document).ready(function() {

			/*
			* Plugin intialization
			*/
	    	$('#pagepiling').pagepiling({
	    		menu: '#menu',
	    		anchors: ['accueil', 'a_propos', 'realisations', 'blog', 'contact'],
			    sectionsColor: ['white', '#ee005a', '#2C3E50', '#39C', '#2C3E50'],
			    navigation: {
			    	'position': 'right',
			   		'tooltips': ['accueil', 'a propos', 'réalisations', 'blog', 'contact']
			   	},
			    afterRender: function(){
			    	$('#pp-nav').addClass('custom');
			    },
			    afterLoad: function(anchorLink, index){
			    	if(index>1){
			    		$('#pp-nav').removeClass('custom');
			    	}else{
			    		$('#pp-nav').addClass('custom');
			    	}
			    }
			});


			/*
		    * Internal use of the demo website
		    */
		    $('#showExamples').click(function(e){
				e.stopPropagation();
				e.preventDefault();
				$('#examplesList').toggle();
			});

			$('html').click(function(){
				$('#examplesList').hide();
			});
	    });