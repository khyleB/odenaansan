let blob = document.querySelectorAll('.text-blob-container');

window.addEventListener('DOMContentLoaded', ( ) => {
	
	setTimeout(( ) => {

		blob.forEach((span, idx) => {
			setTimeout(( ) => {
				span.classList.add('active');
			}, (idx + 1) * 300)
		});

    });
})