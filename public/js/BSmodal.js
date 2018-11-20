	function fillDGaps(nodes,content){
		for(var i = 0; i<nodes.length; i++){
		nodes[i].innerHTML = content;
		}
	}
	
	$('#appModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var id = button.data('id') // Extract info from data-* attributes
		  var modal = $(this);
		  modal.find('.modal-title').text(button.data('title'));
		  
		  var bookImage = document.querySelector('#book-cover');
		  bookImage.setAttribute('src', button.data('cover')); 
		  bookImage.setAttribute('alt', button.data('title'));
		  
		  fillDGaps(document.querySelectorAll('.book-title'),button.data('title'));
		  fillDGaps(document.querySelectorAll('.book-price'),'N'+button.data('price'));
		  	})