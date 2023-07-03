window.addEventListener('alpine:init', () => {
    Alpine.data('chatComponent', () => ({
        discussions: [], // Les discussions récupérées depuis le backend
        searchQuery: '', // La valeur de recherche de l'utilisateur

        fetchDiscussions() {
            fetch(`/chat/${2}`)
                .then(response => response.json())
                .then(data => {

                    this.discussions = data.data;
                })
                .catch(error => {
                    console.error(error);
                });
        },
    }));
});
