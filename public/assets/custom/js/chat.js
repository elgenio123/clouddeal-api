window.addEventListener('alpine:init', () => {
    Alpine.data('chatComponent', () => ({
        discussions: [], // Les discussions récupérées depuis le backend
        selectedDiscussion: null,
        messages: [],
        discussionMessage: [],
        currentDiscussion: null,
        searchQuery: '',
        filteredDiscussions: [],

        fetchDiscussions() {
            fetch(`/chat/${2}`)
                .then(response => response.json())
                .then(data => {

                    this.discussions = data.data;
                    if (this.discussions.length > 0) {
                        //  this.messages = this.discussions[this.currentDiscussion].messages;
                        this.searchDiscussions();
                        this.fetchMessages(this.currentDiscussion);
                    }
                })
                .catch(error => {
                    console.error(error);
                });
        },
        fetchMessages(currentDiscussion) {
            fetch(`/chat/messages/` + currentDiscussion)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Erreur lors de la récupération des messages.');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log(data);
                    this.messages = data;

                    // this.selectedDiscussion= this.discussionMessage.find(discussion => discussion.id === currentDiscussion);
                    // this.messages = this.selectedDiscussion.messages;
                    console.log(this.messages);
                    console.log('End of fetch disccusions');
                })
                .catch(error => {
                    console.error(error);
                    console.log(error);
                });



        },
        selectDiscussion(discussionId) {
            this.currentDiscussion = discussionId;
            this.fetchMessages(discussionId);
        },
        searchDiscussions() {
            this.filteredDiscussions = this.discussions.filter(discussion => {
              return discussion.slug.toLowerCase().includes(this.searchQuery.toLowerCase());
            });
          },

          formatTimestamp(created_at) {
            const date = new Date(created_at);
            const options = { /*year: 'numeric', month: 'numeric', day: 'numeric', */hour: 'numeric', minute: 'numeric', second: 'numeric' };
            return date.toLocaleString('fr-FR', options);
          },
          sendMessage() {
            if (this.newMessage.trim() !== '') {
              const message = {
                content: this.newMessage,
                user: currentUser, // Utilisateur courant
                createdAt: new Date().toISOString() // Date d'envoi du message
              };

              this.messages.push(message);

              this.newMessage = '';
            }
          }











    }));
});
