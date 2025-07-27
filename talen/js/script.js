function populateCategorySelect() {
    const categories = new Set(allWords.map(word => word.category));
    
    // OUDE REGEL: const sortedCategories = Array.from(categories).sort();
    // NIEUWE REGEL (voor Optie 1):
    const sortedCategories = Array.from(categories).sort((a, b) => {
        const numA = parseInt(a.match(/Les (\d+)/)?.[1] || 0);
        const numB = parseInt(b.match(/Les (\d+)/)?.[1] || 0);

        if (numA !== 0 && numB !== 0) {
            return numA - numB;
        } 
        return a.localeCompare(b);
    });

    categorySelect.innerHTML = '<option value="Alle">Alle categorieën</option>';
    sortedCategories.forEach(category => {
        const option = document.createElement('option');
        option.value = category;
        option.textContent = category;
        categorySelect.appendChild(option);
    });
    categorySelect.value = currentCategory; // Stel de laatst gekozen categorie in
}
=======
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

