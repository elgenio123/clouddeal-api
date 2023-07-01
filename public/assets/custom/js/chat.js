window.addEventListener('alpine:init', () => {
    Alpine.data('chatComponent', () => ({
        discussions: [], // Les discussions récupérées depuis le backend
        messages: [],
        selectedDiscussion:"" ,

        fetchDiscussions() {
            fetch(`/chat/${2}`)
                .then(response => response.json())
                .then(data => {

                    this.discussions = data.data;

                    console.log(this.discussions);
                })
                .catch(error => {
                    console.error(error);
                });
        },
        fetchMessages(){

            fetch('/chat/${2}')
                .then(response=>response.json())
                .then(data => {
                    // this.selectedDiscussion = this.discussions.find(discussion => discussion.id === 1);
                    this.messages = data.data;
                    console.log(this.messages);
                })
                .catch(error =>{
                    console.error(error);
                })
        },

    }));
});

window.addEventListener('alpine:init', () => {
    Alpine.data('chatMessage', ()=>({
        messages: [],
        isEmpty: 'false',

        // fetchMessages() {
        //     const messagesData = [
        //         {
        //             id: 1,
        //             content: 'Bonjour',
        //             sender: 'user',
        //         },
        //         {
        //             id: 2,
        //             content: 'Bonjour comment tu te porte?',
        //             sender: 'other'
        //         },
        //         {
        //             id: 3,
        //             content: 'Bien merci et toi?',
        //             sender: 'user'
        //         },
        //         {
        //             id: 4,
        //             content: 'Bien. Bon ce produit me plait il coûte combien?',
        //             sender: 'other'
        //         },
        //         {
        //             id: 5,
        //             content: '150000',
        //             sender: 'user'
        //         },
        //         {
        //             id: 6,
        //             content: 'Ce prix est le pris de départ mais présentement nous sommes en promotion et il coûte 120000',
        //             sender: 'user'
        //         },
        //         {
        //             id: 7,
        //             content: 'En bon mais je donne 100000',
        //             sender: 'other'
        //         },
        //         {
        //             id: 8,
        //             content: 'Ce prix ne suffit pas',
        //             sender: 'user'
        //         },
        //         {
        //             id: 9,
        //             content: 'Bon je peux augmenter 10000 deçu',
        //             sender: 'other'
        //         },
        //         {
        //             id: 10,
        //             content: 'Et je ne pourais plus aller plus loin',
        //             sender: 'other'
        //         },
        //         {
        //             id: 11,
        //             content: 'Si tu est partant fais moi signe',
        //             sender: 'other'
        //         },
        //         {
        //             id: 12,
        //             content: 'Ton prix est bon on peut lancer le payement',
        //             sender: 'user'
        //         },
        //         // ...
        //     ];

        //     this.messages = messagesData;
        //     console.log(this.messages);
        //     if (this.messages.length == 0) {
        //         this.isEmpty = true;
        //     }
        // },


    }));
});
