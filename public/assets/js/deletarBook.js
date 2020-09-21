(function(winn, doc) {
    'use strict';

    function confirmDeleteBook(event) {
        event.preventDefault();
        //console.log(event.target.parentNode.href);
        if (confirm('Deseja deletar ?')) {
            handleDeleteBook();
        } else {
            return false;
        }
    }
    
    if (doc.querySelector('.deleteBook')) {
        let btnDelete = doc.querySelectorAll('.deleteBook');
        for (let i = 0; i < btnDelete.length; i++) {
            btnDelete[i].addEventListener('click', confirmDeleteBook, false);
        }
    }

    function handleDeleteBook() {
        let token = doc.getElementsByName("_token")[0].value;
        let ajax = new XMLHttpRequest();
        ajax.open('DELETE', event.target.parentNode.href);
        ajax.setRequestHeader('X-CSRF-TOKEN', token);
        ajax.addEventListener('readystatechange', isReady, false);
        winn.location.href = 'books';
        ajax.send();
    }

    function isReady() {
        return this.readyState === 4 && this.status === 200;
    }

}) (window, document);