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