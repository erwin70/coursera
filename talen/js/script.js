function showMessage(element, message, type) {
    element.textContent = message;
    element.classList.remove('hidden', 'message-success', 'message-error', 'message-info');
    element.classList.add(`message-${type}`);
}

function showMessage(element, message, type) {
    element.textContent = message;
    // Reset classes: basis is 'alert', 'mt-3' voor ruimte, en 'd-none' wordt verwijderd.
    element.className = 'alert mt-3'; 

    // Voeg de juiste alert-stijl toe
    if (type === 'success') {
        element.classList.add('alert-success');
    } else if (type === 'error') {
        element.classList.add('alert-danger');
    } else {
        element.classList.add('alert-info');
    }

    // Maak het element zichtbaar
    element.classList.remove('d-none');
}


// Voorbeeld van het uitschakelen
//someButton.classList.add('btn-disabled'); 

// Voorbeeld van het inschakelen
//someButton.classList.remove('btn-disabled');

// Voorbeeld van het uitschakelen
someButton.disabled = true;

// Voorbeeld van het inschakelen
someButton.disabled = false;